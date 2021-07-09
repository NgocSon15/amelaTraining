<?php
namespace Model;

class CustomerDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($customer){
        $sql = "INSERT INTO `customers`(`customer_name`, `email`, `address`) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->email);
        $statement->bindParam(3, $customer->address);
        return $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM customers";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $customers = [];
        foreach ($result as $row) {
            $customer = new Customer($row['customer_name'], $row['email'], $row['address']);
            $customer->id = $row['customer_id'];
            $customers[] = $customer;
        }
        return $customers;
    }

    public function get($id){
        $sql = "SELECT * FROM customers WHERE customer_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $customer = new Customer($row['customer_name'], $row['email'], $row['address']);
        $customer->id = $row['customer_id'];
        return $customer;
    }

    public function delete($id){
        $sql = "DELETE FROM customers WHERE customer_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id, $customer){
        $sql = "UPDATE customers SET customer_name = ?, email = ?, address = ? WHERE customer_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->email);
        $statement->bindParam(3, $customer->address);
        $statement->bindParam(4, $id);
        return $statement->execute();
    }
}