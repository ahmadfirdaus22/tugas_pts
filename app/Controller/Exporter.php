<?php

namespace OOP\app\Controller;
use OOP\app\Model\Exporters;
use OOP\app\Core\Router;
use OOP\app\Core\View;

// include '../View/header.php';


class Exporter
{
    public $export;

    public function __construct()
    {
        $this->export = new Exporters();
    }

    public function home()
    {
        View::render2("Home");
    }

    public function login()
    {
        View::render3("LoginPage");
    }

    public function signin()
    {
        $exporter = $this->export->findemail($_POST['email']);
        if($exporter && password_verify($_POST['password'], $exporter['password'])){
            $_SESSION['auth'] =$exporter;

            Router::redirect('');
            return;
        }
        Router::redirect('login');
    }

    public function logout()
    {
        session_destroy();
        Router::redirect('login');
    }

    public function signup()
    {
        View::render3("Sign-up");
    }

    public function index()
    {
        $data = $this->export->show();
        View::render2("Exporter");
    }

    public function input(){
        $data=[
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
        ];
        $this->export->insert($data);
        Router::redirect("login");
    }

    public function update(){
        $id = $_POST['id'];
        $data=[
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'address' => $_POST['address'],
            'updated_at' => date("Y-m-d H:i:s ")
        ];

        $this->export->update($data,$id);
    }

    public function delete(){
        $id = 2;
        $this->export->delete($id);
    }


}
