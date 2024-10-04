<?php

namespace App\Middleware;

class Auth
{
    public function handle()
    {

        if (!isset($_SESSION['id'])) {
            redirect("login");
            exit();
        }
    }
}
