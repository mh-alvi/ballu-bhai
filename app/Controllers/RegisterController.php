<?php

namespace App\Controllers;

use App\Models\User;

class RegisterController
{
    public function index()
    {
        view('Auth.register');
    }
    public function register()
    {
        $user = new User;
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];

        if ($user->register()) {
            $_SESSION['success'] = "Registration Successful!!";
            redirect('login');
            exit();
        } else {
            $_SESSION['error'] = "Registration Failed!!";
        }
    }
}
