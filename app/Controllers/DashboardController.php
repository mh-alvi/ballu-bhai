<?php

namespace App\Controllers;

class DashboardController
{
    public function index(){
        $posts = [
            ['id'=>1, 'title'=>'Post title', 'content' => 'Post content'],
            ['id'=>2, 'title'=>'Post title', 'content' => 'Post content'],
            ['id'=>3, 'title'=>'Post title', 'content' => 'Post content'],
        ];
        view('dashboard',[
        'posts'=>$posts,
        'id'=>$_SESSION['id'],
        'name'=>$_SESSION['name'],
        'email'=>$_SESSION['email'],
    ]);
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
