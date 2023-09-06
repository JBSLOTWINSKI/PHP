<?php


// Traitement de vos données ici

function formatPrice($prix) {
    $format = numfmt_create('fr_FR', NumberFormatter::CURRENCY);
    echo numfmt_format_currency($format, $prix, "EUR");
}

function priceExcludindTVA($prix){
    return (100*$prix) / (100+20);
}

function discountedPrice($prix, $discount) {
    return $prix - ($prix * $discount /100);
}






//include('header.php');
//?>
<!--    <h1>Ma boutique</h1>-->
<!--    <ul>-->
<!--        --><?php //foreach($products as $product): ?>
<!--            <li>-->
<!--                <h2>--><?php //echo $product['name']; ?><!--</h2>-->
<!--            </li>-->
<!--        --><?php //endforeach; ?>
<!--    </ul>-->
<?php //include('footer.php'); ?>