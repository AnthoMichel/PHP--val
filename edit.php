<?php require_once "partials/header.php" ?>
<?php

// var_dump($_POST);

require_once "partials/database.php";


// var_dump($apparts);
// var_dump($apparts[0]['titre']);



?>

<form action="editValid.php" method="post">
    <input type="text" class="form-control my-2" name="titre" placeholder="titre">
    <input type="text" class="form-control my-2" name="adresse" placeholder="Adresse">
    <input type="text" class="form-control my-2" name="ville" placeholder="Ville">
    <input type="text" class="form-control my-2" name="cp" placeholder="CP">
    <input type="text" class="form-control my-2" name="surface" placeholder="Surface en m²">
    <input type="number" class="form-control my-2" name="prix" placeholder="prix">
    <input type="file" action="./assets/img/upload.php" accept="jpg," class="form-control my-2" name="photo" placeholder="Photo">
    <input type="text" class="form-control my-2" name="type" placeholder="type">
    <textarea type="text" class="form-control my-2" name="description" placeholder="Description du bien-"></textarea>
    <br>
    <button type="submit">Edit</button>
</form>
<?php require_once "partials/footer.php" ?>