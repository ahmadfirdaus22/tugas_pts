<?php
namespace OOP\app\Middleware;

use OOP\app\Core\Router;

class Guest
{
    function before(): void
    {
        if(@$_SESSION['auth'] != null){
            Router::redirect('');
        }
    }
}