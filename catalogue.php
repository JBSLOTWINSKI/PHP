<?php
include('my-functions.php');

$products = [
    [
        'name' => 'Loki',
        'price' => '4000',
        'weight' => '190',
        'discount' => '17',
        'picture_url' => 'https://medias.maisonsdumonde.com/images/ar_1:1,c_pad,f_auto,q_auto,w_354/v1/mkp/M21062135_1/canape-3-places-en-velours-vert-anglais-fixe-droit.jpg'
    ],
    [
        'name' => 'Kilo',
        'price' => '3500',
        'weight' => '150',
        'discount' => '5',
        'picture_url' => 'https://medias.maisonsdumonde.com/images/ar_1:1,c_pad,f_auto,q_auto,w_354/v1/mkp/M21062135_1/canape-3-places-en-velours-vert-anglais-fixe-droit.jpg'
    ],
    [
        'name' => 'Liko',
        'price' => '4600',
        'weight' => '250',
        'discount' => '38',
        'picture_url' => 'https://medias.maisonsdumonde.com/images/ar_1:1,c_pad,f_auto,q_auto,w_354/v1/mkp/M21062135_1/canape-3-places-en-velours-vert-anglais-fixe-droit.jpg'
    ],
];


include('header.php');
?>



    <h1>Ma boutique</h1>
    <ul class="products">
        <?php foreach($products as $product): ?>
            <li class="product">
                <h2 class="product-title"><?php echo $product['name']; ?></h2>
                <img class="img_product" src="<?php echo $product['picture_url'] ?>" alt="emoji amex">
                <p class="price_ttc">
                    Prix TTC :
                    <?php formatPrice($product['price']) ?>
                </p>
                <p class="price_ht">
                    Prix HT :
                    <?php formatPrice(priceExcludingTVA($product['price'])); ?>
                </p>
                <p class="discount">
                    Discount :
                    <?php echo $product['discount'] ; if ($product['discount'] == null) echo "0"   ?> %
                </p>
                <p class="price_discount_ttc">
                    Prix TTC après Discount :
                    <?php formatPrice(discountedPrice($product['price'], $product['discount'])) ?>
                </p>
                <p class="price_discount_ht">
                    Prix HT après Discount :
                    <?php formatPrice(priceExcludingTVA(discountedPrice($product['price'], $product['discount']))) ?>
                </p>
            </li>
        <?php endforeach; ?>
    </ul>


<?php include('footer.php'); ?>