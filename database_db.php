<?php
include('templates/header.php');
?>


<?php
$products_stmt = $db->prepare('SELECT * FROM products');
$products_stmt->execute();
$products = $products_stmt->fetchAll();


class item
{
    public string $name;
    public string $description;
    public float $price;
    public string $imageUrl;
    public float $weight;
    public int $stock;
    public int $available;

    function __construct($name, $description, $price, $imageUrl, $weight, $stock, $available)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->weight = $weight;
        $this->stock = $stock;
        $this->available = $available;

    }
}

function displayItem($item) {

}
?>

<?php

?>












<?php
include('templates/footer.php');
?>