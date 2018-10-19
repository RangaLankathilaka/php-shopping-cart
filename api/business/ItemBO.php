<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 7/20/18
 * Time: 3:58 PM
 */

interface ItemBO
{


    public function getAllItem();


    public function addtoCart($picture,$iname,$qty,$pricde);


}