<?php

namespace OOP\app\Controller;
use OOP\app\Model\Trx_Buys;
use OOP\app\Core\Router;
use OOP\app\Model\Exporters;
use OOP\app\Model\Suppliers;
use OOP\app\Model\Buyers;
use OOP\app\Model\Saldos;

// include '../View/header.php';


class Trx_Buy
{
    public $trx_b;

    public function __construct()
    {
        $this->trx_b = new Trx_Buys();
        $this->sup = new Suppliers();
        $this->buy = new Buyers();
        $this->export = new Exporters();
        $this->sal = new Saldos();
    }

    public function index()
    {
        var_dump($this->trx_b->show());     
    }

    public function input(){
        $data=[
            'date' => date("Y-m-d"),
            'exporter_id' => '1',
            'supplier_id' => '1',
            'buyer_id' => '1',
            'quantity' => '1200',
            'total_payment' => '5000',
            'port_loading' => 'Port of Tanjung Priok',
            'port_discharge' => 'Port of Busan',
            'bank_origin' => 'Bank Of Korea',
            'bank_destination' => 'Bank Central Asia' 
        ];

        $this->trx_b->insert($data);
    }

    public function update(){
        $id = 3;
        $data=[
            'exporter_id' => '1',
            'supplier_id' => '3',
            'buyer_id' => '4',
            'quantity' => '12',
            'total_payment' => '5',
            'port_loading' => 'tes',
            'port_discharge' => 'tes',
            'bank_origin' => 'tes',
            'bank_destination' => 'tes',
            'updated_at' => date("Y-m-d H:i:s ")
        ];

        $this->trx_b->update($data,$id);
    }

    public function delete(){
        $id = 2;
        $this->trx_b->delete($id);
    }


}
