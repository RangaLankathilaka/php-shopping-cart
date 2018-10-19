<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 7/20/18
 * Time: 3:42 PM
 */

require_once __DIR__ . '/../RegisterRepository.php';

class RegisterRepositoryImpl implements RegisterRepository
{
    private $connection;


    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }




    public function saveCustomer($cname, $email, $password)
    {
        $result = $this->connection->query("INSERT INTO register VALUES ('{$email}','{$cname}','{$password}')");
        return ($result && ($this->connection->affected_rows > 0));

    }

    public function updateCustomer($cname, $email, $password)
    {
        $result = $this->connection->query("UPDATE register SET cname='{$cname}', password='{$password}',  WHERE email='{$email}'");
        return ($result && ($this->connection->affected_rows > 0));

    }

    public function deleteCustmer($email)
    {
        $result = $this->connection->query("DELETE FROM register WHERE email='{$email}'");
        return ($result && ($this->connection->affected_rows > 0));
    }

    public function findCustomer($email)
    {
        $resultset = $this->connection->query("SELECT * FROM register WHERE email='{$email}'");
        return $resultset->fetch_assoc();
    }

    public function findAllCustomer()
    {
        $resultset = $this->connection->query("SELECT * FROM register");
        return $resultset->fetch_all(MYSQLI_ASSOC);
    }
}