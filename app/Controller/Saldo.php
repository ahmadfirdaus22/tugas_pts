<?php

namespace OOP\app\Controller;
use OOP\app\Core\Router;
use OOP\app\Model\Saldos;

// include '../View/header.php';


class Saldo
{
    public $sal;

    public function __construct()
    {
        $this->sal = new Saldos();
    }

    public function index()
    {
        var_dump($this->sal->show());     
    }

    public function input(){
        $data=[
           'trx_buy_id' => '1',
           'trx_receive_id' => '1',
           'trx_status' => 'On Way',
        ];

        $this->sal->insert($data);
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
