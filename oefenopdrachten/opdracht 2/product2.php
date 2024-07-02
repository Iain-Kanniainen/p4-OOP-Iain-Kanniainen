<?php

class Product
{

    public $name = "oh my god a chair";
}

$chair1 = new Product();
$chair1->name = "hbox victim";

$chair2 = new Product();

$chair3 = new Product();
$chair3->name = "cuck chair";

var_dump($chair1);

var_dump($chair2);

var_dump($chair3);


echo $chair1->name . "<br>";
echo $chair2->name . "<br>";
echo $chair3->name . "<br>";

$chair1->name = "stage light breaker";
echo $chair1->name;