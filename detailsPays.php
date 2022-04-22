<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Details</title>
</head>
<body>
	 <?php require_once 'inc/manager-db.php';  
	     $id = $_GET['id'];
	 $detailsPays = getDetailsPays($id);?>
	 

 
	<?php foreach ($detailsPays as $dPays): ?> 
	<ul class="list-group bg-dark">
	<li class="list-group-item active">Détails</li>
	<p></p>
	<li class="list-group-item">ID : <?php echo $dPays->id ?> </li>
  	<li class="list-group-item">Pays : <?php echo $dPays->Name ?> </li>
	<li class="list-group-item">Nom local: <?php echo $dPays->LocalName ?> </li>
	<li class="list-group-item">Superficie actuelle (Km²): <?php echo $dPays->SurfaceArea ?> </li>
	<li class="list-group-item">Dirigeant: <?php echo $dPays->HeadOfState ?> </li>
	<li class="list-group-item">Type de gouvernement: <?php echo $dPays->GovernmentForm ?> </li>
  	<li class="list-group-item">Continent : <?php echo $dPays->Continent ?> </li>
  	<li class="list-group-item">Region : <?php echo $dPays->Region ?> </li>	
	<li class="list-group-item">Code à 3 lettres: <?php echo $dPays->Code ?> </li>
  	<li class="list-group-item">Année d'Independance : <?php echo $dPays->IndepYear ?> </li>
  	<li class="list-group-item">Population : <?php echo $dPays->Population ?> </li>
  	<li class="list-group-item">Espérence de vie: <?php echo $dPays->LifeExpectancy ?> </li>
	<li class="list-group-item">Produit national brut (PNB): <?php echo $dPays->GNP ?> </li>
	<li class="list-group-item">Ancien PNB: <?php echo $dPays->GNPOld ?> </li>
	
	</ul>
	<br>
	<br>
	<br>
		<form action = index.php>
	<button href="index.php" target="_parent" type="submit" class="btn-lg btn-success"> Retour à l'accueil</button>
	</form>
	<?php endforeach; ?>   

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>