<?php

namespace OOP\app\Model;

use OOP\app\Config\Database;

class Saldos extends Database
{
    public function show()
    {
        $statement = self::$conn->prepare("SELECT trx_buy.*, trx_buy.date as buy_date, saldo.updated_at as rec_date ,saldo.* FROM saldo join trx_buy on trx_buy.id = saldo.trx_buy_id");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function show2()
    {
        $statement = self::$conn->prepare("SELECT trx_buy.*, trx_buy.date as buy_date, trx_receive.dates as rec_date ,saldo.* FROM saldo join trx_buy on trx_buy.id = saldo.trx_buy_id join trx_receive on trx_receive.id = saldo.trx_receive_id");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function show3()
    {
        $statement = self::$conn->prepare("SELECT * from saldo");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function showone($id)//for update view
    {
        $statement = self::$conn->prepare("SELECT * FROM saldo where id = $id");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data2)
    {
        $statement = self::$conn->prepare("INSERT INTO saldo(trx_buy_id, trx_status) values(:trx_buy_id, :trx_status) ");

        return $statement->execute($data2);
    }

    public function update($data, $id)
    {
        $statement = self::$conn->prepare("UPDATE saldo SET trx_receive_id =  :trx_receive_id, trx_status = :trx_status , updated_at = :updated_at where id = $id");

        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE from saldo where id = $id");

        return $statement->execute();
    }
}
