<?php

namespace App\Controllers;

use App\Models\User;

class RegisterController
{
    public function index()
    {
        require_once('Pages/register.php');
    }
    public function register()
    {
        $user = new User;
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];

        if ($user->register()) {
            $_SESSION['success'] = "Registration Successful!!";
            redirect('register');
            exit();
        } else {
            $_SESSION['error'] = "Registration Failed!!";
        }
    }
}
