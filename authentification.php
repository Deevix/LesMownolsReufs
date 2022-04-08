<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <title>Connexion</title>
    </head>

    <body class="bg-dark">
        <form action="login.php" method="post">
            <br /><label class="text-white" style="margin-left:50px ;">Votre login : <input type="text" name="login"></label><br />
            <label class="text-white" style="margin-left:50px ;">Votre mot de passe : <input type="password" name="password"></label><br />
            <br /><button href="login.php" type="submit" class="btn btn-danger" style="margin-left:170px ;">Connexion</button>
        </form>
        <form action="ajout.php" method="post">
        <br /><button href="ajout.php" type="submit" class="btn btn-danger" style="margin-left:170px ;">Inscription</button>
        </form>
    </body>
</html>