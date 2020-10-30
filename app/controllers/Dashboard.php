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
        $this->view('dashboard/home');
    }
}
