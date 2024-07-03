<?php
class Product
{
    public $name;
    public $price;
    public $category;
    public $description;
    public $rating;

    public function __construct($name, $description, $category = "indoor furniture", $rating = 3)
    {
        $this->name = strtolower($name);
        $this->description = $description;
        $this->category = strtoupper($category);
        $this->rating = $rating;
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

    public function getProduct()
    {
        return [
            'name' => $this->name,
            'price' => $this->formatPrice(),
            'category' => $this->category,
            'description' => $this->description,
            'sales_price' => $this->showSalesPrice()
        ];
    }
}

$chair1 = new Product(name: "hbox victim", description: "highly throwable.", category: "outdoor furniture");
$chair1->price = 40;

$chair2 = new Product(name: "Cuck chair", description: "perfect for private viewings");
$chair2->price = 60;

$chair3 = new Product(name: "school desk chair", description: "rather uncomfortable and good for giving students back pain");
$chair3->price = 50;
$chair3->rating = 2;

echo "Naam: " . $chair1->name . "<br>";
echo "Categorie: " . $chair1->category . "<br>";
echo "Beschrijving: " . $chair1->description . "<br>";
echo "Prijs zonder BTW: " . $chair1->formatPrice() . "<br>";
echo "Prijs inclusief BTW: " . $chair1->showSalesPrice() . "<br>";
echo "Rating: " . $chair1->rating . "<br>";


echo "Naam: " . $chair2->name . "<br>";
echo "Categorie: " . $chair2->category . "<br>";
echo "Beschrijving: " . $chair2->description . "<br>";
echo "Prijs zonder BTW: " . $chair2->formatPrice() . "<br>";
echo "Prijs inclusief BTW: " . $chair2->showSalesPrice() . "<br>";
echo "Rating: " . $chair2->rating . "<br>";

echo "Naam: " . $chair3->name . "<br>";
echo "Categorie: " . $chair3->category . "<br>";
echo "Beschrijving: " . $chair3->description . "<br>";
echo "Prijs zonder BTW: " . $chair3->formatPrice() . "<br>";
echo "Prijs inclusief BTW: " . $chair3->showSalesPrice() . "<br>";
echo "Rating: " . $chair3->rating . "<br>";


var_dump($chair1);
var_dump($chair2);
var_dump($chair3);
?>