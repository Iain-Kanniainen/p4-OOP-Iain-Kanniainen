<?php

class Product
{

    public $name;

    public $price;
    
    public function showSalePrice()
    {
        $salesPrice = $this->price * 1.09;
        return number_format($salesPrice, 2);
    }
}

$chair1 = new Product();
$chair1->name = "cuck chair";
$chair1->price = "60";

$chair2 = new Product();
$chair2->name = "hbox victim";
$chair2->price = "20";


echo $chair1->showSalePrice() . "br";
echo $chair1->name . "br";
echo $chair1->price;

var_dump($chair1);