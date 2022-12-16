<?php

namespace OOP\app\Controller;
use OOP\app\Core\Router;
use OOP\app\Core\View;
use OOP\app\Model\Buyers;
use OOP\app\Model\Exporters;
use OOP\app\Model\Products;
use OOP\app\Model\Saldos;
use OOP\app\Model\Suppliers;

// include '../View/header.php';


class Saldo
{
    public $sal;
    public $sup;
    public $buy;
    public $export;
    public $pro;

    public function __construct()
    {
        $this->sal = new Saldos();
        $this->buy = new Buyers();
        $this->sup = new Suppliers();
        $this->export = new Exporters();
        $this->pro = new Products();
    }

    public function index()
    {
        $data = $this->sal->show();
        $data2= $this->buy->show();
        $data3= $this->sup->show();
        $data4= $this->export->show();
        $data5= $this->pro->show();
        
        View::render5("Status", $data, $data2, $data3, $data4, $data5);   
    }

    public function input(){
        $data2=[
           'trx_buy_id' => '1',
           'trx_receive_id' => '1',
           'trx_status' => 'On Way',
        ];

        $this->sal->insert($data2);
    }

    public function update(){
        $id = 2;
        $data=[
           'trx_buy_id' => '1',
           'trx_receive_id' => '1',
           'trx_status' => 'Received',
           'updated_at' => date("Y-m-d H:i:s ")
        ];

        $this->sal->update($data , $id);
    }

    public function delete(){
        $id = 2;
        $this->sal->delete($id);
    }


}
