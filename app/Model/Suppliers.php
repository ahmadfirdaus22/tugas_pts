<?php

namespace OOP\app\Model;

use OOP\app\Config\Database;

class Suppliers extends Database
{
    public function show()
    {
        $statement = self::$conn->prepare("SELECT supplier.*, product.name as product_name FROM supplier JOIN product on product.id = supplier.product_id");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function showone($id)//for update view
    {
        $statement = self::$conn->prepare("SELECT * FROM supplier where id = $id");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare("INSERT INTO supplier(product_id, company_name, email, country, address, max_quantity) values(:product_id, :company_name, :email, :country, :address, :max_quantity) ");

        return $statement->execute($data);
    }

    public function update($data, $id)
    {
        $statement = self::$conn->prepare("UPDATE supplier SET product_id=:product_id, company_name=:company_name, email=:email, country=:country, address=:address, max_quantity= :max_quantity ,updated_at= :updated_at where id = $id");

        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE from supplier where id = $id");

        return $statement->execute();
    }
}
