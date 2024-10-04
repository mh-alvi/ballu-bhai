<?php

namespace App\Controllers;

class DashboardController
{
    public function index(){
        echo "Dashboard";
    }
    public function logout()
    {
        $_SESSION = [];

        session_destroy();

        // header('Location: login.php');
        exit();
    }
}
