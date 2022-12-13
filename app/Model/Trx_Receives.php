<?php

namespace OOP\app\Model;

use OOP\app\Config\Database;

class Trx_Receives extends Database
{
    public function show()
    {
        $statement = self::$conn->prepare("SELECT trx_receive.*, trx_buy.* FROM trx_receive JOIN trx_buy ON trx_buy.id = trx_receive.trx_buy_id");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function showone($id)//for update view
    {
        $statement = self::$conn->prepare("SELECT * FROM trx_receive where id = $id");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare("INSERT INTO trx_receive(date, trx_buy_id) values(:date, :trx_buy_id) ");

        return $statement->execute($data);
    }

    public function update($data, $id)
    {
        $statement = self::$conn->prepare("UPDATE trx_receive SET trx_buy_id=:trx_buy_id, updated_at= :updated_at where id = $id");

        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE from trx_receive where id = $id");

        return $statement->execute();
    }
}
