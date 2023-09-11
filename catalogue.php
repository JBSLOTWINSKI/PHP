<?php
include('templates/header.php');
include('functions/my-functions.php');
include('functions/my_products.php');


?>

    <h1>Ma boutique</h1>
    <ul class="products">
        <?php foreach(getProducts() as $product): ?>
            <li class="product">
                <h2 class="product-title"><?php echo $product['name']; ?></h2>
                <img class="img_product" src="<?php echo $product['picture_url'] ?>" alt="emoji amex">
                <p class="price_ttc">
                    Prix TTC :
                    <?php echo formatPrice($product['price']) ?>
                </p>
                <p class="price_ht">
                    Prix HT :
                    <?php echo formatPrice(priceExcludingTVA($product['price'])); ?>
                </p>
                <p class="discount">
                    Discount :
                    <?php echo $product['discount'] ; if ($product['discount'] == null) echo "0"   ?> %
                </p>
                <p class="price_discount_ttc">
                    Prix TTC après Discount :
                    <?php echo formatPrice(discountedPrice($product['price'], $product['discount'])) ?>
                     €
                </p>
                <p class="price_discount_ht">
                    Prix HT après Discount :
                    <?php echo formatPrice(priceExcludingTVA(discountedPrice($product['price'], $product['discount']))) ?>
                     €
                </p>
                <form action="cart.php" method="POST">
                    <div class="select">
                        <label for="quantity">Choisissez votre quantité :</label>
                        <select type='hidden' name="quantity" id="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $product['id']?>">
                    <button class="cta">Commander</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>


<?php include('templates/footer.php'); ?>