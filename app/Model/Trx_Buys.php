<?php

namespace OOP\app\Model;

use OOP\app\Config\Database;

class Trx_Buys extends Database
{
    public function show()
    {
        $statement = self::$conn->prepare("SELECT trx_buy.*, supplier.*, buyer.*, exporter.* FROM trx_buy JOIN supplier ON supplier.id = trx_buy.supplier_id JOIN buyer ON buyer.id = trx_buy.buyer_id JOIN exporter ON exporter.id = trx_buy.exporter_id");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function showone($id)//for update view
    {
        $statement = self::$conn->prepare("SELECT * FROM trx_buy where id = $id");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($data)
    {
        $statement = self::$conn->prepare("INSERT INTO trx_buy(date, exporter_id, supplier_id, buyer_id, quantity, total_payment, port_loading, port_discharge, bank_origin, bank_destination) values(:date, :exporter_id, :supplier_id, :buyer_id, :quantity, :total_payment, :port_loading, :port_discharge, :bank_origin, :bank_destination) ");
        return $statement->execute($data);
    }

    public function update($data, $id)
    {
        $statement = self::$conn->prepare("UPDATE trx_buy SET exporter_id=:exporter_id, supplier_id = :supplier_id, buyer_id = :buyer_id, quantity= :quantity, total_payment = :total_payment, port_loading = :port_loading, port_discharge = :port_discharge, bank_origin = :bank_origin, bank_destination = :bank_destination, updated_at= :updated_at where trx_buy.id = $id");

        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE from trx_buy where id = $id");

        return $statement->execute();
    }
}
