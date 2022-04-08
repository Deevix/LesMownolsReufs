<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Création de compte</title>
    </head>

    <body class="bg-dark">
        <?php
            require_once("inc/connect-db.php");
            require_once("inc/manager-db.php");
            ajoutCompte();
        ?>
        <br></br>
        <form action = index.php>
            <button href="index.php" target="_parent" type="submit" class="btn btn-danger" style="margin-left:10px ;">Revenir à l'accueil</button>
        </form>
    </body>
</html>