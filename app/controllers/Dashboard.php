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
        $data = [$this->model('User_model')->getUserById($_SESSION['auth']['nomor_induk']), $this->model('User_model')->getPengumuman(), $this->model('User_model')->getJadwal($_SESSION['auth']['kelas']), $this->model('User_model')->getToday($_SESSION['auth']['kelas']), $this->model('User_model')->getWali($_SESSION['auth']['kelas'])];
        $this->view('dashboard/home', $data);
    }

    public function update()
    {
        $this->sessionCheck();
        $data = $this->model('User_model')->getUserById($_SESSION['auth']['nomor_induk']);
        $this->view('dashboard/update', $data);
    }

    public function edit()
    {
        if (isset($_POST['submit'])) {
            $this->model('User_model')->updateUser($_POST, $_SESSION['auth']['nomor_induk']);
        } else {
            header('Location: ' . BASEURL . '/dashboard');
            exit();
        }
    }

    public function ebook()
    {
        $this->sessionCheck();
        $data = $this->model('User_model')->getBook();
        $this->view('dashboard/e-book', $data);
    }

    public function detail_ebook()
    {
        $this->sessionCheck();
        $data = $this->model('User_model')->getDetailBook($_GET['id']);
        $this->view('dashboard/detail_ebook', $data);
    }

    public function search_ebook()
    {
        $this->model('User_model')->searchBook($_GET['judul']);
    }
}
