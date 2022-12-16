<?php

namespace OOP\app\Controller;
use OOP\app\Core\Router;
use OOP\app\Core\View;
use OOP\app\Model\Buyers;
use OOP\app\Model\Exporters;
use OOP\app\Model\Products;
use OOP\app\Model\Saldos;
use OOP\app\Model\Suppliers;
use OOP\app\Model\Trx_Buys;
use OOP\app\Model\Trx_Receives;

// include '../View/header.php';


class Trx_Receive
{
    public $trx_r;
    public $sup;
    public $buy;
    public $export;
    public $pro;
    public $trx_b;    
    public $sal;

    public function __construct()
    {
        $this->trx_r = new Trx_Receives();
        $this->buy = new Buyers();
        $this->sup = new Suppliers();
        $this->export = new Exporters();
        $this->pro = new Products();
        $this->trx_b = new Trx_Buys();
        $this->sal = new Saldos();
    }

    public function index()
    {
        $data = $this->trx_r->show();
        $data2= $this->buy->show();
        $data3= $this->sup->show();
        $data4= $this->export->show();
        $data5= $this->pro->show();

        View::render5('Trx_Receive', $data, $data2, $data3, $data4, $data5);     
    }

    public function add()
    {
        $data = $this->trx_b->show();
        $data2 = $this->trx_r->show();
        $data3 = $this->trx_r->all();
        View::render10("Trx_Receive", $data , $data2, $data3);
    }

    public function input(){
        $data=[
            'dates' => date("Y-m-d"),
            'trx_buy_id' => $_POST['trx_buy_id']
        ];
        $this->trx_r->insert($data);
        $ids = $this->trx_r->idbmax();
        $data3 = $this->sal->show3();
        $idp = $this->trx_r->idmax();
        $data2 = [
            'trx_receive_id' => $idp,
            'trx_status' => 'Received',
            'updated_at' => date("Y-m-d H:i:s ")
        ];
        foreach($data3 as $row){
            if($row->trx_buy_id == $ids){
                $id = $row->id;

                $this->sal->update($data2 , $id);
            }
        };

        Router::redirect("transaction_receive");
    }

    public function update(){
        $id = 2;
        $data=[
            'trx_buy_id' => '1',
            'updated_at' => date("Y-m-d H:i:s ")
        ];

        $this->trx_r->update($data,$id);
    }

    public function delete(){
        $id = $_POST['id'];
        $this->trx_r->delete($id);
        Router::redirect("transaction_receive");

    }


}
