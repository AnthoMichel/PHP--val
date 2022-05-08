<link rel="stylesheet" href="./assets/css/style.css">
<?php
require_once "partials/header.php";


//--------------------------------------------  READ -------------------------------------------------

$bdd = new PDO('mysql:host=localhost;dbname=immo', "root", ""); 
// connexion à la BDD
$req  = $bdd->prepare("SELECT * FROM logement "); // la requete 
$req->execute(); // envoi et execution en BDD 
$apparts = $req->fetchAll(PDO::FETCH_ASSOC); 
$req->closeCursor(); 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="p-4 my-5 bg-dark text-danger text-center"> Page test</h1>


    
</main>
    
        <table class="table table-hover text-center">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">photo</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Ville</th>
                    <th scope="col">CP</th>
                    <th scope="col">surface</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Description</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($apparts as $appart) : ?>
                    <tr class="table">
                        <td> <?= $appart['id_logement'] ?></td>
                        <td> <img src="<?= $appart['photo'] ?>" alt=""></td>
                        <td> <?= $appart['titre'] ?></td>
                        <td> <?= $appart['adresse'] ?></td>
                        <td> <?= $appart['ville'] ?></td>
                        <td> <?= $appart['cp'] ?></td>
                        <td> <?= $appart['surface'] ?></td>
                        <td> <?= $appart['prix'] ?> &euro;</td>
                        <td> <?= $appart['description'] ?></td>
                        <td>
                        <form action="delete.php" method="post" 
                            onSubmit="return confirm('Êtes-vous certain ?')">
                            <input hidden type="text" name="IDappart " value="<?= $appart['id_logement'] ?>">
                        <button class="btn" type="submit">X</button>
                        </form>
                        </td>
                        <td>
                        <form action="edit.php" method="post">
                            <input hidden type="text" name="appartID" value="<?= $appart['id_logement'] ?>">
                        <button class="btn" type="submit">Edit</button>
                        </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="create.php" class="btn btn-info d-block">Ajouter un jeu</a>
    </main>
<?php require_once "partials/footer.php" ?>
</body>
</html>

