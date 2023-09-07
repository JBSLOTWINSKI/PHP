<?php

function formatPrice(float $price): string {
    return number_format($price, 2, ',', ' ');
}


function priceExcludingTVA($price){
    return (100*$price) / (100+20);
}

function discountedPrice($price, $discount) {
    return $price - ($price * $discount /100);
}

