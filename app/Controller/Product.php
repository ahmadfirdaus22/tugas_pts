<?php

namespace OOP\app\Controller;
use OOP\app\Model\Products;
use OOP\app\Core\Router;

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
        var_dump($this->produc->show());     
    }

    public function input(){
        $data=[
            'name' => 'White Pepper',
            'hs_code' => '09041190',
            'value' => '4'
        ];

        $this->produc->insert($data);
    }

    public function update(){
        $id = 2;
        $data=[
            'name' => 'tes',
            'hs_code' => 'tes',
            'value' => 'tes',
            'updated_at' => date("Y-m-d H:i:s ")
        ];

        $this->produc->update($data,$id);
    }

    public function delete(){
        $id = 2;
        $this->produc->delete($id);
    }


}
