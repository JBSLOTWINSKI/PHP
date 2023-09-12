<?php
include('templates/header.php');
include('functions/my-functions.php');
include('functions/my_products.php');
?>


<!--Variables Produit -->

<?php
$id = $_POST ['id'];
$quantity = $_POST ['quantity'];
$produit_panier = getProduct($id);
$name = $produit_panier['name'];
$prix_discount = discountedPrice($produit_panier['price'], $produit_panier['discount']);
$prix = $prix_discount * $quantity;
$PHT = priceExcludingTVA($prix);
$TVA = $prix - $PHT;

$weight = $produit_panier['weight'] * $quantity;
$discount = $produit_panier['discount'];
?>
<!-- Variables transporteur -->

<?php
$idtrans = isset($_POST['idtr']) ? $_POST['idtr'] : '1';
$select_transp = getTransporteur($idtrans);
$name_trans = $select_transp['name'];
$prix_livraison = fraisdelivraison($weight, $select_transp);

$prix_ttc = $PHT + $TVA + $prix_livraison;
?>

<!-- / Variables -->


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
        <td colspan="2"></td>
        <td class="en-tete-opt ">Total HT</td>
        <td class="tva"><?php echo formatPrice($PHT) ?> €</td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td class="en-tete-opt ">TVA</td>
        <td class="tva"><?php echo formatPrice($TVA) ?> €</td>
    </tr>
    <tr>
        <td  COLSPAN="2" class="en-tete">Choix du transporteur</td>

    </tr>

    <!--Transporteur-->

    <tr>
        <form action="cart.php" method="POST">
            <td colspan="2">
                <div class="select">
                    <label for="transport"></label>
                    <select type='hidden' name="idtr" id="idtr">
                        <option value="0" disabled selected hidden>Séléctionnez votre transporteur</option>
                        <option value="1">Fanny Corp'</option>
                        <option value="2">Guénaël Corp'</option>
                        <option value="3">ChouchouBeignet'</option>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $_POST ['id'] ?>">
                <input type="hidden" name="quantity" value="<?php echo $_POST ['quantity'] ?>">
            </td>
            <td colspan="2">
                <button class="cta">Commander</button>
            </td>


        </form>

    </tr>
    <tr>
        <td colspan="2"></td>
        <td>Transport</td>
        <td><?php echo $prix_livraison ?></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td class="en-tete">Total TTC</td>
        <td><?php echo formatPrice($prix_ttc) ?> €</td>
    </tr>


    <!--Transporteur-->

</table>


<?php ?>






<?php include('templates/footer.php'); ?>
