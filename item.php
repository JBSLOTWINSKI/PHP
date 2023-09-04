<?php
$nom = 'Loki';
$prix = '4000€';
$photo = 'assets/img/canap1.jpg';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SLOTWINSKI Jean-Baptiste</title>
    <meta name="description" content="">

    <link rel="stylesheet" href="styles.css">

</head>



<body>
<header>
    <?php include("header.php"); ?>
</header>

<main>
    <div class="full-produit">
        <img src="<?php echo $photo ?>" class="w-50 p-3 img-fluid object-fit-cover float-start" alt="photo_canapé_4">
        <div class="text-produit">
            <h2 class="fs-1 fw-bold mb-4"><?php echo $nom ?></h2>
            <p>Bluffez vos amis avec ce produit de qualité.</p>
            <div class="quantity-product">
                <label for="quantity">Choisissez votre quantité </label>
                <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
            </div>
            <p class="fs-1"><?php echo $prix ?></p>
            <button class="btn btn-outline-dark" type="submit">Ajouter au panier</button>
        </div>
    </div>
</main>

<footer>
    <?php include("footer.php"); ?>
</footer>
</body>

</html>