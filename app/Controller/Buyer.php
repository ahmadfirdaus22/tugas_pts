<?php

namespace OOP\app\Controller;
use OOP\app\Model\Buyers;
use OOP\app\Core\Router;

// include '../View/header.php';


class Buyer
{
    public $buy;

    public function __construct()
    {
        $this->buy = new Buyers();
    }

    public function index()
    {
        var_dump($this->buy->show());     
    }

    public function input(){
        $data=[
            'company_name' => 'JEONG EUN TRADING CO LTD',
            'email' => 'jeong@gmail.com',
            'address' => '301 Mopico Bld 693-3 Nambumin-dong Seo-gu
            Busan - Korea, South - 602020',
            'country' => 'South Korea'
        ];

        $this->buy->insert($data);
    }

    public function update(){
        $id = 5;
        $data=[
            'company_name' => 'TES',
            'email' => 'TES',
            'address' => 'TES',
            'country' => 'TES',
            'updated_at' => date("Y-m-d H:i:s ")
        ];

        $this->buy->update($data,$id);
    }

    public function delete(){
        $id = 5;
        $this->buy->delete($id);
    }


}
