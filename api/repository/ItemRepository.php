<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 7/20/18
 * Time: 3:41 PM
 */

interface ItemRepository
{

    public function setConnection(mysqli $connection);

    public function saveItem($iid,$iname,$bprice,$sprice,$stock,$picture);

    public function updateItem($iid,$iname,$bprice,$sprice,$stock,$picture);

    public function deleteItem($iid);

    public function findItem($iid);

    public function findAllItem();

}