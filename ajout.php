<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <title>Création de comtpe</title>
    </head>

    <body class="bg-dark">
	    <form target="blank" action="ajout2.php"method="post">
        
            <div class="form-group col-md-4">
                <label class="text-white">Login: </label>
                <input type="text" class="form-control" name="login" placeholder="Login" required>
            </div>

            <div class="form-group col-md-4">
                <label class="text-white">Mot de Passe:</label>
                <input type="password" class="form-control" name="password" placeholder="Mot de Passe">
            </div>

            <div class="form-group col-md-4">
                <label class="text-white">Rôle:</label>
                <select class="form-control" name="role" required>
                    <option></option>
                    <option>étudiant</option>
                    <option>professeur</option>
                    <option>admin</option>
                </select>
            </div>
            <button href="index.php" type="submit" class="btn btn-danger" style="margin-left:200px ;">Ajouter</button>
        </form>
        <br></br>
        <form action="index.php">
            <button href="index.php" type="submit" class="btn btn-danger" style="margin-left:170px ;">Annuler l'ajout</button>
        </form>
    </body>
</html>