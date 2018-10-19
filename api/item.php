<?php

require_once 'business/impl/ItemBOImpl.php';


header("Content-Type: application/json");

$method = $_SERVER["REQUEST_METHOD"];

$itemBOImpl=new ItemBOImpl();


//echo $method;
//echo "I am here";
//$pname=$_POST["action"];
//echo $pname;


switch ($method){

    case "GET":
        $action=$_GET["action"];

        switch ($action){
            case "all":
                echo json_encode($itemBOImpl->getAllItem()) ;
                break;

            case "showSession":
                session_start();
                echo json_encode($_SESSION["mycart"]);
                break;
                //mycartdetail

//            case "mycartdetail":
//                session_start();
//                echo json_encode($itemBOImpl->myCartDetail());
//                break;


            case "sessionTrue":

                session_set_cookie_params(10*60);
                session_start();
                if(!isset($_SESSION["mycart"])){
                    session_unset();
                    session_destroy();
                    echo json_encode("navigatetologin") ;

                }
                break;


//            case "count":
//                echo json_encode($customerBOImpl->getAllCustomers());
//                break;
        }
        break;
    case "POST":
        $action =$_POST["action"];
        $picture=$_POST["iimg"];
        $iname=$_POST["iname"];
        $qty=$_POST["qty"];
        $pricde=$_POST["sprice"];




        switch($action){

            case "mycart":


                echo json_encode($itemBOImpl->addtoCart($picture,$iname,$qty,$pricde)) ;
                break;

        }
        break;
}