<?php

namespace OOP\app\Controller;

use OOP\app\Model\Trx_Buys;
use OOP\app\Core\Router;
use OOP\app\Core\View;
use OOP\app\Model\Exporters;
use OOP\app\Model\Suppliers;
use OOP\app\Model\Buyers;
use OOP\app\Model\Products;
use OOP\app\Model\Saldos;

// include '../View/header.php';


class Trx_Buy
{
    public $trx_b;
    public $sup;
    public $buy;
    public $export;
    public $pro;
    public $sal;

    public function __construct()
    {
        $this->trx_b = new Trx_Buys();
        $this->buy = new Buyers();
        $this->sup = new Suppliers();
        $this->export = new Exporters();
        $this->pro = new Products();
        $this->sal = new Saldos();
    }

    public function index()
    {
        $data = $this->trx_b->show();
        $data2 = $this->pro->show();
        View::render4("Trx_Buy", $data, $data2);
    }

    public function detail()
    {
        $id = $_POST['id'];
        $data = $this->trx_b->showone($id);
        $data2 = $this->buy->show();
        $data3 = $this->sup->show();
        $data4 = $this->export->show();
        $data5 = $this->pro->show();
        View::render5("DetailBuy", $data, $data2, $data3, $data4, $data5);
    }

    public function add()
    {
        $data = $this->export->show();
        $data2= $this->buy->show();
        $data3= $this->sup->show();
        View::render10("Trx_Buy", $data, $data2, $data3);
    }

    public function input()
    {
        $data = [
            'date' => date("Y-m-d"),
            'exporter_id' => $_POST['exporter_id'],
            'supplier_id' => $_POST['supplier_id'],
            'buyer_id' => $_POST['buyer_id'],
            'quantity' => $_POST['quantity'],
            'total_payment' => $_POST['total_payment'],
            'port_loading' => $_POST['port_loading'],
            'port_discharge' => $_POST['port_discharge'],
            'bank_origin' => $_POST['bank_origin'],
            'bank_destination' => $_POST['bank_destination']
        ];

        $this->trx_b->insert($data);
        $ids = $this->trx_b->idmax();
        $data2 = [
            'trx_buy_id' => $ids, 
            'trx_status' => 'On Way',
        ];
        $this->sal->insert($data2);
        Router::redirect("transaction_buy");
    }

    public function new()
    {
        $id = $_POST['id'];
        $data = $this->trx_b->showone($id);
        $data2 = $this->export->show();
        $data3= $this->buy->show();
        $data4= $this->sup->show();
        View::render11("Trx_Buy", $data, $data2, $data3, $data4);
    }

    public function update()
    {
        $id = 3;
        $data = [
            'exporter_id' => $_POST['exporter_id'],
            'supplier_id' => $_POST['supplier_id'],
            'buyer_id' => $_POST['buyer_id'],
            'quantity' => $_POST['quantity'],
            'total_payment' => $_POST['total_payment'],
            'port_loading' => $_POST['port_loading'],
            'port_discharge' => $_POST['port_discharge'],
            'bank_origin' => $_POST['bank_origin'],
            'bank_destination' => $_POST['bank_destination'],
            'updated_at' => date("Y-m-d H:i:s ")
        ];

        $this->trx_b->update($data, $id);
        Router::redirect("transaction_buy");
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->trx_b->delete($id);
        Router::redirect("transaction_buy");
    }
}
