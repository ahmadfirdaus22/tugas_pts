<?php

namespace OOP\app\Controller;
use OOP\app\Core\Router;
use OOP\app\Model\Trx_Receives;

// include '../View/header.php';


class Trx_Receive
{
    public $trx_r;

    public function __construct()
    {
        $this->trx_r = new Trx_Receives();
    }

    public function index()
    {
        var_dump($this->trx_r->show());     
    }

    public function input(){
        $data=[
            'date' => date("Y-m-d"),
            'trx_buy_id' => '1'
        ];

        $this->trx_r->insert($data);
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
        $id = 2;
        $this->trx_r->delete($id);
    }


}
