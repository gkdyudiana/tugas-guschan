<?php

class Auth extends Controller
{
    public function sessionCheck()
    {
        if (isset($_SESSION['auth'])) {
            header('Location: ' . BASEURL . '/dashboard');
        }
    }

    public function index()
    {
        $this->sessionCheck();
        $this->view('auth/login', $data = []);
    }

    public function middleware()
    {
        $this->sessionCheck();
        if (isset($_POST['submit'])) {

            $data = [
                'email' => htmlentities($_POST['email']),
                'pass' => htmlentities($_POST['password'])
            ];

            if (preg_match('/[\'^£$%&*()}";:!`{#~?><>,|=_+¬-]/', $data['email'])) {
                $_SESSION['error'] = "Email / Password tidak valid!";
                header('Location: ' . BASEURL . '/auth');
                exit();
            } else {
                $query = $this->dbh->prepare("SELECT * FROM user WHERE email=:em");
                $query->execute([
                    'em' => $data['email']
                ]);
                if ($query->rowCount() > 0) {
                    $user_data = $query->fetch(PDO::FETCH_ASSOC);
                    if (password_verify($data['pass'], $user_data['password'])) {
                        $_SESSION['auth'] = [
                            'token' => $this->generateToken(),
                            'email' => $user_data['email'],
                            'name' => $user_data['name']
                        ];
                        header('Location: ' . BASEURL . '/dashboard');
                        exit();
                    } else {
                        $_SESSION['error'] = "Email / Password Salah!";
                        header('Location: ' . BASEURL . '/auth');
                        exit();
                    }
                } else {
                    $_SESSION['error'] = "Email / Password Salah!";
                    header('Location: ' . BASEURL . '/auth');
                    exit();
                }
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['auth']);
        session_destroy();
        $this->dbh = null;
        header('Location: ' . BASEURL . '/auth');
        exit();
    }
}
