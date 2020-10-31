<?php

class Dashboard extends Controller
{

    public function sessionCheck()
    {
        if (!isset($_SESSION['auth'])) {
            header('Location: ' . BASEURL . '/auth');
            exit();
        }
    }

    public function index()
    {
        $this->sessionCheck();
        $data = $this->model('User_model')->getUserById($_SESSION['auth']['nomor_induk']);
        $this->view('dashboard/home', $data);
    }

    public function update()
    {
        $this->sessionCheck();
        $data = $this->model('User_model')->getUserById($_SESSION['auth']['nomor_induk']);
        $this->view('dashboard/update', $data);
    }
}
