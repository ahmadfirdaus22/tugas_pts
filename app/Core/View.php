<?php

namespace OOP\app\Core;

class View
{
    public static function render(string $view, $data)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/template/navbar.php';
        require __DIR__.'/../View/Body/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }
    public static function render2(string $view)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/template/navbar.php';
        require __DIR__.'/../View/Body/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }

    public static function render3(string $view)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }

    public static function render4(string $view, $data, $data2)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/template/navbar.php';
        require __DIR__.'/../View/Body/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }
    public static function render5(string $view, $data, $data2, $data3, $data4, $data5)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/template/navbar.php';
        require __DIR__.'/../View/Body/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }

    public static function render6(string $view)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/Add/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }
    
    public static function render7(string $view, $data)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/Update/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }

    public static function render8(string $view, $data)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/Add/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }

    public static function render9(string $view, $data, $data2)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/Update/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }

    
    public static function render10(string $view, $data, $data2, $data3)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/Add/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }

    public static function render11(string $view, $data, $data2, $data3, $data4)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/Update/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }

    public static function render12(string $view, $data, $data2)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/Add/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }
}