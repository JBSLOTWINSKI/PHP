
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
    <?php
        $products = [
                [
                        'nom' => 'Loki',
                        'prix' => '4000',
                        'weight' => '1500',
                        'discount' => '0',
                        'picture_url' => 'https://medias.maisonsdumonde.com/images/ar_1:1,c_pad,f_auto,q_auto,w_354/v1/mkp/M21062135_1/canape-3-places-en-velours-vert-anglais-fixe-droit.jpg'
                ],
                [
                        'nom' => 'Kilo',
                        'prix' => '3500',
                        'weight' => '1500',
                        'discount' => '0',
                        'picture_url' => 'https://medias.maisonsdumonde.com/images/ar_1:1,c_pad,f_auto,q_auto,w_354/v1/mkp/M21062135_1/canape-3-places-en-velours-vert-anglais-fixe-droit.jpg'
                ],
                [
                        'nom' => 'Liko',
                        'prix' => [4600, 4750, 5220, 4950],
                        'weight' => '1500',
                        'discount' => '0',
                        'picture_url' => 'https://medias.maisonsdumonde.com/images/ar_1:1,c_pad,f_auto,q_auto,w_354/v1/mkp/M21062135_1/canape-3-places-en-velours-vert-anglais-fixe-droit.jpg'
                ],
                [
                        'nom' => 'Kloi',
                        'prix' => '4279',
                        'weight' => '1500',
                        'discount' => '0',
                        'picture_url' => 'https://medias.maisonsdumonde.com/images/ar_1:1,c_pad,f_auto,q_auto,w_354/v1/mkp/M21062135_1/canape-3-places-en-velours-vert-anglais-fixe-droit.jpg'
                ],
        ]
        ?>

    <div>
        <h3><?php echo $products[2]['nom']?></h3>
        <p><?php echo $products[2]['prix'][3]?></p>
        <img src="<?php echo $products[3]['picture_url']?>">
    </div>


</main>

<footer>
    <?php include("footer.php"); ?>
</footer>
</body>

</html>