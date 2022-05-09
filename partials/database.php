<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="../assets/css/style.css"> -->

<?php
//--------------------READ-------------------------
$dbh = new PDO('mysql:host=localhost;dbname=immo', "root",""); //Connexion a la BDD
//   Host connexion a mon serveur ici localhost;(pas d'espace entre) dbname (DataBase name) : nom de ta base de donnée; 
// puis "identifiant" et "mot de passe"
$req  = $dbh->prepare("SELECT * FROM logement"); // la requete pour tout recuperer (SELECT *) de la table logement (FROM)
$req->execute(); 
$apparts = $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor();
//-----------------ENDREAD--------------------------
?>

<?php // var_dump($apparts); // permet de tester si on accede a la BDD
?>
