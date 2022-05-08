
<?php

var_dump($_POST);

$bdd = new PDO('mysql:host=localhost;dbname=immo', "root", "");
// encore cette bdd ici !
$nom = $_POST['nom']; 
$possesseur = $_POST['possesseur']; 
$console = $_POST['console']; 
$prix = $_POST['prix']; 
$nbre_joueurs_max = $_POST['nbre_joueurs_max']; 
$commentaires = $_POST['commentaires']; 
// faire des vérifs avant !
$req = "INSERT INTO jeux_video (nom,possesseur,console,prix,nbre_joueurs_max,commentaires) VALUES
                    
                    (:nom, 
                    :possesseur,
                    :console,
                    :prix,
                    :nbre_joueurs_max,
                    :commentaires) ";
$stmt = $bdd->prepare($req);
$stmt->bindValue(":nom",$nom, PDO::PARAM_STR);
$stmt->bindValue(":possesseur",$possesseur, PDO::PARAM_STR);
$stmt->bindValue(":console",$console, PDO::PARAM_STR);
$stmt->bindValue(":prix",$prix, PDO::PARAM_INT);
$stmt->bindValue(":nbre_joueurs_max",$nbre_joueurs_max, PDO::PARAM_INT);
$stmt->bindValue(":commentaires",$commentaires, PDO::PARAM_STR);

$result = $stmt->execute(); // return true si good donc si 
$stmt->closeCursor();       // donc SI good redirect avec header
var_dump($stmt = $bdd->prepare($req));
// ah comme ça ! évidemment !
if ($result) {
    header("Location: test.php");
}