<?php

function getProducts() {
    return [
        [
            'id' => '1',
            'name' => 'Loki',
            'price' => '4000',
            'weight' => '190',
            'discount' => '17',
            'picture_url' => 'https://medias.maisonsdumonde.com/images/ar_1:1,c_pad,f_auto,q_auto,w_354/v1/mkp/M21062135_1/canape-3-places-en-velours-vert-anglais-fixe-droit.jpg'
        ],
        [
            'id' => '2',
            'name' => 'Kilo',
            'price' => '3500',
            'weight' => '150',
            'discount' => '5',
            'picture_url' => 'https://medias.maisonsdumonde.com/images/ar_1:1,c_pad,f_auto,q_auto,w_354/v1/mkp/M21062135_1/canape-3-places-en-velours-vert-anglais-fixe-droit.jpg'
        ],
        [
            'id' => '3',
            'name' => 'Liko',
            'price' => '4600',
            'weight' => '250',
            'discount' => '38',
            'picture_url' => 'https://medias.maisonsdumonde.com/images/ar_1:1,c_pad,f_auto,q_auto,w_354/v1/mkp/M21062135_1/canape-3-places-en-velours-vert-anglais-fixe-droit.jpg'
        ],
    ];
}


function getTransporteurs() {
    return [
        [
            'id' => '1',
            'name' => 'Fanny Corp',
            'low' => '10',
            'medium' => '50',
            'heavy' => '500',
        ],
        [
            'id' => '2',
            'name' => 'Guénaël Corp',
            'low' => '5',
            'medium' => '25',
            'heavy' => '50',
        ],
        [
            'id' => '3',
            'name' => 'ChouchouBeignet Corp',
            'low' => '2',
            'medium' => '100',
            'heavy' => '100',
        ],
    ];
}

function getProduct($id)
{
    $products = getProducts();
    foreach ($products as $product) {
        if ($product['id'] === $id) {
            return $product;
        }
    }
}

function getTransporteur($idtrans)
{
    $transp = getTransporteurs();
    foreach ($transp as $trans) {
        if ($trans['id'] === $idtrans) {
            return $trans;
        }
    }
}

function fraisdelivraison($weight, $select_transp)
{
    if ($weight <= 150) {
        return $select_transp['low'];
    } elseif ($weight <= 300) {
        return $select_transp['medium'];
    } elseif ($weight > 300) {
        return $select_transp['heavy'];
    }
}

