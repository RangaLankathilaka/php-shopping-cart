<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 7/20/18
 * Time: 3:58 PM
 */

require_once __DIR__ . '/../RegisterBO.php';
require_once __DIR__ . '/../../repository/impl/RegisterRepositoryImpl.php';

require_once __DIR__ . '/../../db/DBConnection.php';

class RegisterBOImpl implements RegisterBO
{

    private $registerRepositoryImpl;


    public function __construct()
    {
        $this->registerRepositoryImpl = new RegisterRepositoryImpl();


    }


    public function getAllCusrtomer()
    {
        $connection = (new DBConnection())->getConnection();
        $this->registerRepositoryImpl->setConnection($connection);

        $customer = $this->registerRepositoryImpl->findAllCustomer();

        mysqli_close($connection);

        return $customer;

    }

//    public function signhistory()
//    {
//
//
//session_set_cookie_params(10*60);
//session_start();
//
//if (!isset($_SESSION["signup"])){
//    session_unset();
//    session_destroy();
//    header("Location: login.html");
//}
//
//    }

    public function login($user, $pass)
    {
        $connection = (new DBConnection())->getConnection();
        $this->registerRepositoryImpl->setConnection($connection);

        $customer = $this->registerRepositoryImpl->findCustomer($user);


        if ($user == $customer["email"]) {


            if ($pass == $customer["password"]) {


                session_set_cookie_params(10 * 60);
                session_start();
//                $_SESSION["mycart"] = true;
                $_SESSION["mycart"] = array();
                $_SESSION["user"] =$user;
                return "true";


//            header("Location: index.php");

            }
        }
        mysqli_close($connection);
        //return "true";

    }
}