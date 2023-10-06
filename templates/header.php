<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SLOTWINSKI Jean-Baptiste</title>
    <meta name="description" content="">

    <link rel="stylesheet" href="assets/css/styles.css">

</head>



<body>
    <header class="header">
        <div>
            <div class="header-top"></div>
            <div class="header-container">
                <div class="header-logo">
                    <img src="assets/img/chauteuil-low.PNG" alt="Logo Marque Chauteuil">
                </div>
                <nav class="header-nav">
                    <a class="liens" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" title="Page d'accueil">Home</a>
                    <a class="liens" href="/cart.php" title="Panier">Panier</a>
                    <a class="liens" href="/catalogue_db.php" title="Catalogue">Notre Catalogue</a>
                    <a class="liens" href="/Form.php" title="Contact">Contact</a>
                </nav>
            </div>
        </div>
        <hr class="hchier">
    </header>

    <main class="main">
<?php
try {
    $db = new PDO(
        'mysql:host=localhost;
    dbname=test_ikouladb;
    charset=utf8',
        'beasti_cn',
        ';^bE9eEpuyk5aZ5V9M8A6.}-C_3'
    );
} catch (Exception $e) {
    die('Error : ' . $e->getMessage());
}
?>



