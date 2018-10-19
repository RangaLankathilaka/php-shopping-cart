<?php

class ItemUtil{

    public $picture;
    public $name;
    public $qty;
    public $pricde;

    public function __construct($picture,$name,$qty,$pricde)
    {
        $this->picture=$picture;
        $this->name=$name;
        $this->qty=$qty;
        $this->pricde=$pricde;
    }


    public function getPicture(){
       return $this->picture;

}
    public function getname(){
        return $this->name;

    }
    public function getQty(){
        return $this->qty;

    }
    public function getPrice(){
        return $this->pricde;

    }

    public function setPicture($picture){
        $this->picture=$picture;


    }
    public function setName($name){
        $this->name=$name;


    }

    public function setQty($qty){
        $this->qty=$qty;


    }

    public function setPrice($pricde){
        $this->pricde=$pricde;


    }




}

