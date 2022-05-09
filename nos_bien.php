<?php
require_once "partials/database.php";
require_once "partials/header.php";
?>
<link rel="stylesheet" href="assets/css/style.css">
<main class="container">

    <h1 class="my-5 text-center">
        Nos Apparts
    </h1>

    <div class="row flex-lg-row flex-xl-row flex-column">

        <?php
        foreach ($apparts as $appart) : ?>
            <div class="card text-center shadow my-3">

                <div class="card-header bg-dark text-white ">
                    <h2 class="card-title"><?= ucwords($appart["titre"]) ?></h2>
                </div>

                <div class="card-body">
                    <img src="<?= $appart["photo"] ?>" alt="Photo du bien" style=[max-width>
                    <hr>
                    <p>Adresse:
                        <span><?= ucwords($appart["adresse"]) ?></span>
                    </p>

                    <p>Ville :
                        <span><?= mb_strtoupper($appart["ville"]) ?></span>
                    </p>

                    <p>Code Postal :
                        <span><?= $appart["cp"] ?></span>
                    </p>

                    <p>Surface :
                        <span><?= $appart["surface"] ?> m²</span>
                    </p>

                    <p>Prix :
                        <span><?= $appart["prix"] ?> €</span>
                    </p>

                    <p>Type :
                        <span><?= $appart["type"] ?></span>
                    </p>

                    <p>Description :
                        <?php if ($appart["description"]) : ?>
                            <span><?= $appart["description"] ?></span>
                        <?php else : ?>
                            <span>NC</span>
                        <?php endif; ?>
                    </p>

                    <p>Réserver maintenant !</p>

                    <button class="btn btn-primary ">Réserver</button>
                </div>
            </div>
            <hr>

        <?php endforeach ?>

    </div>
</main>
<?php
require_once "partials/footer.php";
?>