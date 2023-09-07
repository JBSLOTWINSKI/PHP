<?php

//function formatPrice($price) {
//    $format = numfmt_create('fr_FR', NumberFormatter::CURRENCY);
//    echo numfmt_format_currency($format, $price, "EUR");
//}
function formatPrice(float $price): string {
    return number_format($price, 2, ',', ' ');
}


function priceExcludingTVA($price){
    return (100*$price) / (100+20);
}

function discountedPrice($price, $discount) {
    return $price - ($price * $discount /100);
}

