<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 7/20/18
 * Time: 3:42 PM
 */

require_once __DIR__ . '/../ItemRepository.php';

class ItemRepositoryImpl implements ItemRepository
{

    private $connection;


    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }


    public function saveItem($iid, $iname, $bprice, $sprice, $stock, $picture)
    {
        $result = $this->connection->query("INSERT INTO item VALUES ('{$iid}','{$iname}','{$bprice}','{$sprice}'),'{$stock}','{$picture}')");
        return ($result && ($this->connection->affected_rows > 0));

    }

    public function updateItem($iid, $iname, $bprice, $sprice, $stock, $picture)
    {
        $result = $this->connection->query("UPDATE item SET iname='{$iname}', bprice='{$bprice}', sprice='{$sprice}', stock='{$stock}', picture='{$picture}' WHERE iid='{$iid}'");
        return ($result && ($this->connection->affected_rows > 0));
    }

    public function deleteItem($iid)
    {
        $result = $this->connection->query("DELETE FROM item WHERE iid='{$iid}'");
         return ($result && ($this->connection->affected_rows > 0));
    }

    public function findItem($iid)
    {
        $resultset = $this->connection->query("SELECT * FROM item WHERE iid='{$iid}'");
        return $resultset->fetch_assoc();
    }

    public function findAllItem()
    {
        $resultset = $this->connection->query("SELECT * FROM item");
        return $resultset->fetch_all(MYSQLI_ASSOC);
    }
}