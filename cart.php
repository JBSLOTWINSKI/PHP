<?php
include('templates/header.php');
include('functions/my-functions.php');
include('functions/my_products.php');
?>

<!--Variables-->
<?php
$id = $_POST ['id'];
$quantity = $_POST ['quantity'];
$produit_panier = getProduct($id);
$name = $produit_panier['name'];
$prix_discount = discountedPrice($produit_panier['price'], $produit_panier['discount']);
$prix = $prix_discount * $quantity;
$PHT = priceExcludingTVA($prix);
$TVA = $prix - $PHT;
$prix_ttc = $PHT + $TVA;
$weight = $produit_panier['weight'] * $quantity;
$discount = $produit_panier['discount'];



?>
<!--Variables-->


<table class="panier">
    <tr class="en-tete">
        <td>Produit</td>
        <td>Prix unitaire</td>
        <td>Quantité</td>
        <td>Total</td>
    </tr>
    <tr>
        <td><?php echo $name ?></td>
        <td><?php echo formatPrice($prix_discount) ?> €</td>
        <td><?php echo $quantity ?></td>
        <td><?php echo formatPrice($prix) ?> €</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td class="en-tete-opt ">Total HT</td>
        <td class="tva"><?php echo formatPrice($PHT) ?> €</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td class="en-tete-opt ">TVA</td>
        <td class="tva"><?php echo formatPrice($TVA) ?> €</td>
    </tr>
    <tr>
        <td class="en-tete">Choix du transporteur</td>
        <td></td>
        <td class="en-tete">Total TTC</td>
        <td><?php echo formatPrice($prix_ttc) ?> €</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>


</table>




<?php ?>






<?php include('templates/footer.php'); ?>
