<?php
include('templates/header.php');
include('functions/my-functions.php');
?>

<?php

$first_name = $_POST["firstname"];
$last_name = $_POST["lastname"];
$address = $_POST["address"];
$cp = $_POST["cp"];
$city = $_POST["city"];


$sql = 'INSERT INTO customers (`first_name`,`last_name`, `address`, `cp`, `city`) VALUES (:first_name, :last_name, :address, :cp, :city)';
$sth = $db->prepare($sql);
$sth->execute(['first_name'=>$first_name,'last_name'=>$last_name, 'address'=> $address, 'cp'=>$cp, 'city'=>$city]);


echo 'Merci maintenant dégage.';







echo 'Prénom : ' . $_POST["firstname"] . '<br>';
echo 'Nom de famille : ' . $_POST["lastname"] . '<br>';
echo 'Adresse : ' . $_POST["address"] . '<br>';
echo 'Code Postal : ' . $_POST["cp"] . '<br>';
echo 'Ville : ' . $_POST["city"] . '<br>';





?>




<?php include('templates/footer.php'); ?>


















<?php include('templates/footer.php'); ?>