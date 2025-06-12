<?php

namespace App\Controller;

class LogoutController
{
    public static function handle()
    {
        session_start();
        session_unset();
        session_destroy();

        header("Location: /webprogramming/login"); // تغییر مسیر بعد از خروج
        exit;
    }
}
