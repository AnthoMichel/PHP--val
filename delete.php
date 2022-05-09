<?php

 var_dump($_POST);
$bdd = new PDO('mysql:host=localhost;dbname=immo', "root", "");
if (!empty($_POST['appartID'])) {


    $idAppart = $_POST['appartID']; // vérifier type
    // avoir la bdd ($bdd) forcement... require...
    $req = "DELETE FROM logement WHERE id_logement= :id";
    $stmt = $bdd->prepare($req); // ou ecrire dans prepare 
    $stmt->bindValue(":id", $idAppart, PDO::PARAM_INT);
    $result = $stmt->execute(); // si good redirection !
    $stmt->closeCursor();
    
    
    if ($result) {
        header("Location: tableau.php");
    }
}