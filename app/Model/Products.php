<?php

namespace OOP\app\Model;

use OOP\app\Config\Database;

class Products extends Database
{
    public function show()
    {
        $statement = self::$conn->prepare("SELECT * FROM product");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function showone($id)//for update view
    {
        $statement = self::$conn->prepare("SELECT * FROM product where id = $id");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare("INSERT INTO product(name, hs_code) values(:name, :hs_code) ");

        return $statement->execute($data);
    }

    public function update($data, $id)
    {
        $statement = self::$conn->prepare("UPDATE product SET name=:name, hs_code=:hs_code,  updated_at = :updated_at where id = $id");

        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE from product where id = $id");

        return $statement->execute();
    }
}
