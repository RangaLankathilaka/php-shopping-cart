<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 7/20/18
 * Time: 3:58 PM
 */

require_once __DIR__ . '/../ItemBO.php';
require_once __DIR__ . '/../ItemUtil.php';
require_once __DIR__ . '/../../repository/impl/ItemRepositoryImpl.php';

require_once __DIR__ . '/../../db/DBConnection.php';

class ItemBOImpl implements ItemBO
{

    private $itemRepositoryImpl;



    public function __construct()
    {
        $this->itemRepositoryImpl = new ItemRepositoryImpl();


    }



//    public function getAllCustomers()
//    {
//
//        $connection = (new DBConnection())->getConnection();
//        $this->customerRepository->setConnection($connection);
//
//        $customers = $this->customerRepository->findAllCustomers();
//
//        mysqli_close($connection);
//
//        return $customers;
//    }


    public function getAllItem()
    {
                $connection = (new DBConnection())->getConnection();
        $this->itemRepositoryImpl->setConnection($connection);

        $item = $this->itemRepositoryImpl->findAllItem();

        mysqli_close($connection);

        return $item;

    }

    public function addtoCart($picture,$iname,$qty,$pricde)
    {
        //$xx=array();
        session_start();

if(isset($_SESSION["mycart"])) {
    $count = count($_SESSION["mycart"]);

    for ($i = 0; $i < $count; $i++) {
        //return $_SESSION["mycart"][$i]->name;

        if (($_SESSION["mycart"][$i]->name) == $iname) {


            $x = new ItemUtil($picture, $iname, $qty, $pricde);
            $x->setQty($qty + ($_SESSION["mycart"][$i]->qty));
            $_SESSION["mycart"][$i] = $x;
            return $_SESSION["mycart"];


        }


    }
}

        $x = new ItemUtil($picture, $iname, $qty, $pricde);
//        array_push($xx,$x->getPicture());
//        array_push($xx,$x->getname());
//        array_push($xx,$x->getQty());
//        array_push($xx,$x->getPrice());

        $_SESSION["mycart"][] = $x;

//        $_SESSION["mycart"]=$xx;


        //array_push($xy,$xx);


        return $_SESSION["mycart"];



    }




//
//    public function myCartDetail()
//    {
//        //$xx=array();
//
//
//
//
//
//
//
//
//
//
//        return  $_SESSION["mycart"];
//
//
//
//
//    }



}