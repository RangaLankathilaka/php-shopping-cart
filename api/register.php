<?php

require_once 'business/impl/RegisterBOImpl.php';

header("Content-Type: application/json");

$method = $_SERVER["REQUEST_METHOD"];

$registerBOImpl=new RegisterBOImpl();
//echo $method;
//echo "I am here";
//$pname=$_POST["action"];
//echo $pname;


switch ($method){

    case "GET":
        $action=$_GET["action"];

        switch ($action){
            case "all":
                echo json_encode($registerBOImpl->getAllCusrtomer()) ;
                break;



            case "signup":
                echo json_encode($registerBOImpl->signhistory()) ;
                break;


            case "showSessionSign":
                session_start();
                echo json_encode($_SESSION["user"]);
                break;




//            case "count":
//                echo json_encode($customerBOImpl->getAllCustomers());
//                break;
        }
        break;
    case "POST":
        $action =$_POST["action"];
        $user=$_POST["user"];
        $pass=$_POST["pass"];




        switch($action){
            case "login":
                echo json_encode($registerBOImpl->login($user,$pass));
                break;

}
}