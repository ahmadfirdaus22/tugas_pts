<?php

namespace OOP\app\Controller;
use OOP\app\Model\Buyers;
use OOP\app\Core\Router;
use OOP\app\Core\View;

// include '../View/header.php';


class Buyer
{
    public $buy;

    public function __construct()
    {
        $this->buy = new Buyers();
    }

    public function index()
    {
        $data = $this->buy->show();
        View::render("Buyer", $data);
    }

    public function add()
    {
        View::render6("Buyer");
    }

    public function input(){
        $data=[
            'company_name' => $_POST['company_name'],
            'email' => $_POST['email'],
            'address' => $_POST['address'],
            'country' => $_POST['country']
        ];

        $this->buy->insert($data);
        Router::redirect('buyer');
    }

    public function new()
    {
        $id = $_POST['id'];
        $data = $this->buy->showone($id);
        View::render7("Buyer", $data);
    }

    public function update(){
        $id = $_POST['id'];
        $data=[
            'company_name' => $_POST['company_name'],
            'email' => $_POST['email'],
            'address' => $_POST['address'],
            'country' => $_POST['country'],
            'updated_at' => date("Y-m-d H:i:s ")
        ];

        $this->buy->update($data,$id);
        Router::redirect('buyer');
    }

    public function delete(){
        $id = $_POST['id'];
        $this->buy->delete($id);
        Router::redirect('buyer');
    }


}
