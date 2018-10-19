<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 7/20/18
 * Time: 3:41 PM
 */

interface RegisterRepository
{

    public function setConnection(mysqli $connection);

    public function saveCustomer($cname,$email,$password);

    public function updateCustomer($cname,$email,$password);

    public function deleteCustmer($email);

    public function findCustomer($email);

    public function findAllCustomer();

}