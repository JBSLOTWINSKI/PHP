<?php
include('templates/header.php');
include('functions/my-functions.php');
?>

<h1>Formulaire HTML</h1>

<form action="http://localhost/testphp/oskour.php" method="post">
    <div class="c100">
        <label for="firstname">Prénom : </label>
        <input type="text" id="firstname" name="firstname" required>
    </div>
    <div class="c100">
        <label for="lastname">Nom de famille : </label>
        <input type="text" id="lastname" name="lastname" required>
    </div>
    <div class="c100">
        <label for="address">Adresse : </label>
        <input type="text" id="address" name="address" required>
    </div>
    <div class="c100">
        <label for="cp">Code Postale : </label>
        <input type="text" id="cp" name="cp" required>
    </div>
    <div class="c100">
        <label for="city">Ville : </label>
        <input type="text" id="city" name="city" required>
    </div>

    <div class="c100" id="submit">
        <input type="submit" value="Envoyer">
    </div>
</form>


<?php include('templates/footer.php'); ?>