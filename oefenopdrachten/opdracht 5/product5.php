<?php
class Product
{
    public $name;
    public $price;
    public $category;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = strtolower($name);
        $this->description = $description;
    }

    public function setCategory($category)
    {
        $this->category = strtoupper($category);
    }

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }

    public function showSalesPrice()
    {
        $salesPrice = $this->price * 1.09;
        return number_format($salesPrice, 2);
    }
}

$chair1 = new Product("hbox victim", "highly throwable.");
$chair1->price = 40;
$chair1->setCategory("outdoor furniture");

$chair2 = new Product("cuck chair", "perfect for private viewings");
$chair2->price = 60;
$chair2->setCategory("bedroom furniture");

echo "Naam: " . $chair2->name . "<br>";
echo "Categorie: " . $chair2->category . "<br>";
echo "Beschrijving: " . $chair2->description . "<br>";
echo "Prijs zonder BTW: " . $chair2->formatPrice() . "<br>";
echo "Prijs inclusief BTW: " . $chair2->showSalesPrice() . "<br>";

var_dump($chair2);
?>