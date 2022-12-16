<?php

namespace OOP\app\Controller;
use OOP\app\Model\Products;
use OOP\app\Core\Router;
use OOP\app\Core\View;

// include '../View/header.php';


class Product
{
    public $produc;

    public function __construct()
    {
        $this->produc = new Products();
    }

    public function index()
    {
        $data = $this->produc->show();
        View::render("Product", $data);     
    }

    public function add()
    {
        View::render6("Product");
    }

    public function input(){
        $data=[
            'name' => $_POST['name'],
            'hs_code' => $_POST['hs_code'],
        ];

        $this->produc->insert($data);
        Router::redirect('product');
    }

    public function new()
    {
        $id = $_POST['id'];
        $data = $this->produc->showone($id);
        View::render7("Product", $data);
    }

    public function update(){
        $id = $_POST['id'];
        $data=[
            'name' => $_POST['name'],
            'hs_code' => $_POST['hs_code'],
            'updated_at' => date("Y-m-d H:i:s ")
        ];

        $this->produc->update($data,$id);
        Router::redirect('product');
    }

    public function delete(){
        $id = $_POST['id'];
        $this->produc->delete($id);
        Router::redirect('product');
    }


}
