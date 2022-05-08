<?php require_once "partials/header.php" ?>


<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create</title>
    </head>
    
    <body>
        
        <main class="container">
            
            <h1 class="p-4 my-5 bg-dark text-danger text-center">Ajouter un bien</h1>
            
            
            <form class="bg-light shadow p-3 form-group col-6 m-auto border" action="createValid.php" method="post">
                <input type="text" class="form-control my-2" name="titre" placeholder="titre" required>
                <select name="type_immo" required>
                    <option value="Maison">Maison</option>
                    <option value="appartement">appartement</option>
                <input type="text" class="form-control my-2" name="adresse" placeholder="Adresse" required>
                <input type="text" class="form-control my-2" name="ville" placeholder="Ville" required>
                <input type="number" class="form-control my-2" name="cp" placeholder="CP" required>
                <input type="number" class="form-control my-2" name="surface" placeholder="Surface en m²" required>
                <input type="number" class="form-control my-2" name="prix" placeholder="prix" required>
                <input type="file" accept="jpg," class="form-control my-2" name="photo" placeholder="Photo">
                <select name="type" required>
                    <option value="vente">Vente</option>
                    <option value="location">Location</option>
            <textarea type="text" class="form-control my-2" name="commentaires" placeholder="un commentaire..-"></textarea>
            <br>
            <button type="submit" class="m-auto my-2 d-block btn btn-success">Ajouter</button>
        </form>
    </main>
    
    
    
</body>
<?php require_once "partials/footer.php" ?>

</html>