<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="../assets/css/style.css">

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

<?php var_dump($apparts); // permet de tester si on accede a la BDD
?>


<main class="container">

<h1 class="my-5 text-center">
    Nos Apparts
</h1>

<div class="row flex-lg-row flex-xl-row flex-column">
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
            <p>Ville : 
                <?php if ($appart["ville"]): ?>
                <span><?= mb_strtoupper($appart["ville"])?></span>
                    <?php else: ?>
                        <span>NC</span>
                <?php endif; ?>
            </p>
    
    
            <p>Code Postal :
                <?php if ($appart["cp"]): ?>
                    <span><?= $appart["cp"]?></span>
                    <?php else: ?>
                        <span>NC</span>
                <?php endif; ?>
            </p>

            <p>Surface :
                <?php if ($appart["surface"]): ?>
                    <span><?= $appart["cp"]?> m²</span>
                    <?php else: ?>
                        <span>NC</span>
                <?php endif; ?>
            </p>

            <p>Prix :
                <?php if ($appart["prix"]): ?>
                    <span><?= $appart["prix"]?> €</span>
                    <?php else: ?>
                        <span>NC</span>
                <?php endif; ?>
            </p>

            <p>Type :
                <?php if ($appart["type"]): ?>
                    <span><?= $appart["type"]?></span>
                    <?php else: ?>
                        <span>NC</span>
                <?php endif; ?>
            </p>

            <p>Description :
                <?php if ($appart["description"]): ?>
                    <span><?= $appart["description"]?></span>
                    <?php else: ?>
                        <span>NC</span>
                <?php endif; ?>
            </p>
    
            <p>Réserver maintenant !</p>
            <button  class="btn btn-primary ">Réserver</button>
        </div>
    </div>
    <hr>
    

<?php endforeach ?>
</div>


</main>