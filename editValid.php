<?php
//require_once "partials/page.test.php";?>


<?php
require_once "partials/database.php";
// encore cette dbh ici !
$idAppart = $_POST['appartID'];
$titre = $_POST['titre']; 
// faire des vérifs avant !
$statement = $dbh->prepare("UPDATE logement SET titre = :titre, adresse = :adresse, ville = :ville
WHERE id_logement = :appartID");
$statement->bindValue(":appartID",$idAppart, PDO::PARAM_INT);
$statement->bindValue(":titre",$titre, PDO::PARAM_STR);
$statement->bindValue(":adresse",$adresse, PDO::PARAM_STR);
$statement->bindValue(":cp",$cp, PDO::PARAM_STR);
$statement->bindValue(":titre",$titre, PDO::PARAM_STR);
$statement->bindValue(":adresse",$adresse, PDO::PARAM_STR);
$statement->bindValue(":ville",$ville, PDO::PARAM_STR);
$statement->bindValue(":titre",$titre, PDO::PARAM_STR);
$statement->bindValue(":adresse",$adresse, PDO::PARAM_STR);
$statement->bindValue(":ville",$ville, PDO::PARAM_STR);
$result = $statement->execute(); 
$statement->closeCursor();
// ah comme ça ! évidemment !
if ($result) {
    header("Location: tableau.php");
}