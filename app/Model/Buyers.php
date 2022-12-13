<?php

namespace OOP\app\Model;

use OOP\app\Config\Database;

class Buyers extends Database
{
    public function show()
    {
        $statement = self::$conn->prepare("SELECT * FROM buyer");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function showone($id)//for update view
    {
        $statement = self::$conn->prepare("SELECT * FROM buyer where id = $id");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare("INSERT INTO buyer(company_name, email, country, address) values(:company_name, :email, :country, :address) ");

        return $statement->execute($data);
    }

    public function update($data, $id)
    {
        $statement = self::$conn->prepare("UPDATE buyer SET company_name=:company_name, email=:email, country=:country, address=:address, updated_at= :updated_at where id = $id");

        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE from buyer where id = $id");

        return $statement->execute();
    }
}
