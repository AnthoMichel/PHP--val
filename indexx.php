<?php require_once "./partials/header.php" ?>
<?php require_once "./partials/page.test.php";?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wf-immo</title>
</head>

<body>


    <main>

        <div class="container ">

            <div class="jumbotron my-5 text-center border border-secondary">
                <h1 class="display-3 text-danger">
                    WebForce-Immo
                </h1>
                <p class="lead">des appartement / Maison Jardin Terrasse a votre disposition pour l'achat ou/et la vente.</p>
                <hr class="my-4">
                <p>Accédait a nos bien en cliquant sur le bouton.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="nos_bien.php" role="button">Nos biens</a>

                </p>
            </div>

            <h2 class="my-5 text-center"> Nos biens phare</h2>
            <div class="card-deck flex-lg-row flex-md-row flex-xl-row flex-column">

                <?php for ($i = 0; $i < 2; $i++) : ?>
                    <div class="card text-center shadow my-3 border border-info">
                        <div class="card-header bg-dark text-white ">
                            <h2 class="card-title"><?= ucwords($apparts["$i"]["titre"]) ?></h2>
                        </div>

                        <div class="card-body">
                            <img src="<?= $apparts["$i"]["photo"] ?>" alt="photo1">
                            <hr>
                            <p>Type Immobilier:
                                <span><?= mb_strtoupper($apparts["$i"]["type_immo"]) ?></span>
                            </p>
                            <p>Adresse:
                                <span><?= mb_strtoupper($apparts["$i"]["adresse"]) ?></span>
                            </p>
                            <p>Ville :
                                <span><?= mb_strtoupper($apparts["$i"]["ville"]) ?></span>
                            </p>


                            <p>Code Postal :
                                <span><?= $apparts["$i"]["cp"] ?></span>
                            </p>

                            <p>Surface :
                                <?php if ($apparts["$i"]["surface"]) : ?>
                                    <span><?= $apparts["$i"]["cp"] ?> m²</span>
                                <?php else : ?>
                                    <span>NC</span>
                                <?php endif; ?>
                            </p>

                            <p>Prix :
                                <?php if ($apparts["$i"]["prix"]) : ?>
                                    <span><?= $apparts["$i"]["prix"] ?> €</span>
                                <?php else : ?>
                                    <span>NC</span>
                                <?php endif; ?>
                            </p>

                            <p>Type :
                                <?php if ($apparts["$i"]["type"]) : ?>
                                    <span><?= $apparts["$i"]["type"] ?></span>
                                <?php else : ?>
                                    <span>NC</span>
                                <?php endif; ?>
                            </p>

                            <p>Description :
                                <?php if ($apparts["$i"]["description"]) : ?>
                                    <span><?= $apparts["$i"]["description"] ?></span>
                                <?php else : ?>
                                    <span>NC</span>
                                <?php endif; ?>
                            </p>

                            <p>Réserver maintenant !</p>
                            <button class="btn btn-primary ">Réserver</button>
                        </div>
                    </div>

                    <hr>
                <?php endfor ?>

            </div>
            <!-- rapporter 2 card de la BDD -->
    </main>



    <?php require_once "./partials/footer.php" ?>
</body>

</html>