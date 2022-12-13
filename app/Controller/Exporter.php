<?php

namespace OOP\app\Controller;
use OOP\app\Model\Exporters;
use OOP\app\Core\Router;

// include '../View/header.php';


class Exporter
{
    public $export;

    public function __construct()
    {
        $this->export = new Exporters();
    }

    public function index()
    {
        var_dump($this->export->show());     
    }

    public function input(){
        $data=[
            'name' => 'daus',
            'phone' => '123144',
            'email' => 'adasd@gmail.com',
            'address' => 'dimana saja',
            'password' => password_hash('cek123',PASSWORD_DEFAULT),
        ];

        $this->export->insert($data);
    }

    public function update(){
        $id = 2;
        $data=[
            'name' => 'tes',
            'phone' => 'tes',
            'email' => 'tes',
            'address' => 'tes',
            'updated_at' => date("Y-m-d H:i:s ")
        ];

        $this->export->update($data,$id);
    }

    public function delete(){
        $id = 2;
        $this->export->delete($id);
    }


}
