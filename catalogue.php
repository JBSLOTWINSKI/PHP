    <?php
        $products = [
            [
                'nom' => 'Loki',
                'prix' => '4000',
                'weight' => '190',
                'discount' => '0',
                'picture_url' => 'https://medias.maisonsdumonde.com/images/ar_1:1,c_pad,f_auto,q_auto,w_354/v1/mkp/M21062135_1/canape-3-places-en-velours-vert-anglais-fixe-droit.jpg'
            ],
            [
                'nom' => 'Kilo',
                'prix' => '3500',
                'weight' => '150',
                'discount' => '0',
                'picture_url' => 'https://medias.maisonsdumonde.com/images/ar_1:1,c_pad,f_auto,q_auto,w_354/v1/mkp/M21062135_1/canape-3-places-en-velours-vert-anglais-fixe-droit.jpg'
            ],
            [
                'nom' => 'Liko',
                'prix' => '4600',
                'weight' => '250',
                'discount' => '0',
                'picture_url' => 'https://medias.maisonsdumonde.com/images/ar_1:1,c_pad,f_auto,q_auto,w_354/v1/mkp/M21062135_1/canape-3-places-en-velours-vert-anglais-fixe-droit.jpg'
            ],
        ]
    ?>


    <?php include("header.php"); ?>


    <div>
        <p><?php foreach ($products as $produit) {
            echo $produit['nom'];
            } ?>
        </p>
    </div>

    <div>
        <p><?php
            for($i=0;$i<=3;$i++){
                echo $products[$i]['nom'];
            }
            ?>
        </p>
    </div>

    <div>
        <p><?php
            $i = 0;
            while ($i <= 3):
                echo $products[$i]['nom'];
                $i++;
            endwhile;
            ?>
        </p>
    </div>


    <?php include("footer.php"); ?>