<?php

namespace App\Controllers;

use App\Models\User;

class LoginController
{
    public function index()
    {
        view('Auth.login');
    }
    public function login()
    {
        $user = new User;
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];

        if ($user->login()) {
            $_SESSION['success'] = "Login successful";
            $_SESSION['id'] = $user->id;
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;
            redirect('dashboard');
            exit();
        } else {
            $_SESSION['error'] = "Login Failed!!";
        }
    }
}
