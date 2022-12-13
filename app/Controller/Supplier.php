<?php

namespace OOP\app\Controller;
use OOP\app\Model\Suppliers;
use OOP\app\Core\Router;
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
        var_dump($this->sup->show());     
    }

    public function input(){
        $data=[
            'product_id' => '1',
            'company_name' => 'CV Rempah Jaya',
            'email' => 'rempahjaya@gmail.com',
            'country' => 'Indonesia',
            'address' => 'jalan Kemenangan, sukabumi, Indonesia',
            'max_quantity'=> '5000'
        ];

        $this->sup->insert($data);
    }

    public function update(){
        $id = 2;
        $data=[
            'product_id' => '2',
            'company_name' => 'tes',
            'email' => 'tes',
            'country' => 'tes',
            'address' => 'tes',
            'max_quantity'=> '5',
            'updated_at' => date("Y-m-d H:i:s ")
        ];

        $this->sup->update($data,$id);
    }

    public function delete(){
        $id = 2;
        $this->sup->delete($id);
    }


}
