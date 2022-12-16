<?php

namespace OOP\app\Controller;
use OOP\app\Model\Suppliers;
use OOP\app\Core\Router;
use OOP\app\Core\View;
use OOP\app\Model\Products;

// include '../View/header.php';


class Supplier
{
    public $sup;
    public $pro;

    public function __construct()
    {
        $this->sup = new Suppliers();
        $this->pro = new Products();
    }

    public function index()
    {
        $data = $this->sup->show();
        View::render("Supplier", $data);     
    }

    public function add()
    {
        $data = $this->pro->show();
        View::render8("Supplier", $data);
    }

    public function input(){
        $data=[
            'product_id' => $_POST['product_id'],
            'company_name' => $_POST['company_name'],
            'email' => $_POST['email'],
            'country' => $_POST['country'],
            'address' =>$_POST['address'],
            'max_quantity'=> $_POST['max_quantity']
        ];

        $this->sup->insert($data);
        Router::redirect("supplier");
    }

    public function new()
    {
        $id = $_POST['id'];
        $data2 = $this->pro->show();
        $data = $this->sup->showone($id);
        View::render9("Supplier", $data, $data2);
    }

    public function update(){
        $id = $_POST['id'];
        $data=[
            'product_id' => $_POST['product_id'],
            'company_name' => $_POST['company_name'],
            'email' => $_POST['email'],
            'country' => $_POST['country'],
            'address' =>$_POST['address'],
            'max_quantity'=> $_POST['max_quantity'],
            'updated_at' => date("Y-m-d H:i:s ")
        ];

        $this->sup->update($data,$id);
        Router::redirect("supplier");
    }

    public function delete(){
        $id = $_POST['id'];
        $this->sup->delete($id);
        Router::redirect("supplier");
    }


}
