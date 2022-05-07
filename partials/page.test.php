<?php
$dbh = new PDO('mysql:host=localhost;dbname=immo', "root","");

$req  = $dbh->prepare("SELECT * FROM logement");
$req->execute();
$apparts = $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor();

?>

<?php
foreach ($apparts as $appart) {
    var_dump($appart) ;
}
