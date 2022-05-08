<?php

// var_dump($_POST);
$bdd = new PDO('mysql:host=localhost;dbname=immo', "root", "");
if (!empty($_POST['appartID'])) {


    $idGame = $_POST['appartID']; // vérifier type
    // avoir la bdd ($bdd) forcement... require...
    $req = "DELETE FROM jeux_video WHERE ID= :id";
    $stmt = $bdd->prepare($req); // ou ecrire dans prepare 
    $stmt->bindValue(":id", $idGame, PDO::PARAM_INT);
    $result = $stmt->execute(); // si good redirection !
    $stmt->closeCursor();
    
    
    if ($result) {
        header("Location: test.php");
    }
}