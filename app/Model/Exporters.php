<?php

namespace OOP\app\Model;
use OOP\app\Config\Database;

class Exporters extends Database
{
    public function show(){
        $statement = self::$conn->prepare("SELECT * FROM exporter");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function showone($id)//for update view
    {
        $statement = self::$conn->prepare("SELECT * FROM exporter where id = $id");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data){
        $statement = self::$conn->prepare("INSERT INTO exporter(name, phone, email, address, password) values(:name, :phone ,:email, :address, :password) ");

        return $statement->execute($data);
    }

    public function update($data, $id){
        $statement = self::$conn->prepare("UPDATE exporter SET name=:name, phone=:phone, email=:email, address=:address, updated_at= :updated_at where id = $id");

        return $statement->execute($data);
    }
    
    public function delete($id){
        $statement = self::$conn->prepare("DELETE from exporter where id = $id");

        return $statement->execute();
    }

}