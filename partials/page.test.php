<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<?php
$dbh = new PDO('mysql:host=localhost;dbname=immo', "root","");

$req  = $dbh->prepare("SELECT * FROM logement");
$req->execute();
$apparts = $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor();

?>

<?php
foreach ($apparts as $appart) :?>
<div class="card text-center shadow my-3">
    
        <div class="card-header bg-dark text-white ">
            <h2 class="card-title"><?= ucwords($appart["titre"]) ?></h2>
        </div>
    
        <div class="card-body">
            <img src="<?= $appart["photo"] ?>" alt="photo1"> 
            <hr>
            <p>Adresse: 
                <?php if ($appart["adresse"]): ?>
                <span><?= mb_strtoupper($appart["adresse"])?></span>
                    <?php else: ?>
                        <span>NC</span>
                <?php endif; ?>
    
            </p>
    
            <p>Ville: <?php ($appart["ville"])?></p>
    
            <p>CP :
                <?php if ($appart["cp"]): ?>
                    <span><?= $appart["cp"]?></span>
                    <?php else: ?>
                        <span>NC</span>
                <?php endif; ?>
            </p>
    
            <p>Réserver maintenant !</p>
            <button  class="btn btn-primary ">Réserver</button>
        </div>
    </div>
    <hr>
    
}
<?php endforeach ?>