<?php

var_dump($_POST);

$bdd = new PDO('mysql:host=localhost;dbname=immo', "root", ""); 
// hum un require database.php serait mieux non ?
$idGame = $_POST['gameID'];

$req  = $bdd->prepare("SELECT * FROM logement WHERE ID=:gameID"); 

$req->bindValue('gameID', $idGame, PDO::PARAM_INT); 

$req->execute(); 

$game = $req->fetchAll(PDO::FETCH_ASSOC); 

$req->closeCursor(); 

var_dump($game);
var_dump($game[0]['nom']);




?>

<form action="editValid.php" method="post">
    <input type="text" name="nom" value="<?= $game[0]['nom'] ?>">
    <input hidden type="text" name="gameID" value="<?= $game[0]['ID'] ?>">
<button type="submit">Edit</button>
</form>