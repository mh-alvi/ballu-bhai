<?php

namespace App\Controllers;

class DashboardController
{
    public function index(){
        require_once('Pages/dashboard.php');
    }
    public function logout()
    {
        $_SESSION = [];

        session_destroy();
        redirect('login');
        // header('Location: login.php');
        exit();
    }
}
