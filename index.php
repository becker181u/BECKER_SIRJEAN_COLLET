<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Borne solidaire</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <?php include("openbdd.php"); ?>
  <body>

    <div class="container-fluid">
	<div class="row header">
		<div class="col-md-2">
			11:06
		</div>
		<div class="col-md-8 title">
		Borne Solidaire
		</div>
		<div class="col-md-2 date">
			16 avril 2018
		</div>
	</div>
	<div class="col-md-12 degrade"></div>
	<div class="row bloc-haut">
		<div class="col-md-5 contain" >
			<h3>
				Hébergement à proximité :
			</h3>
			<div class="row">
				<div class="col-md-6">
					<?php $req = $bdd->query("SELECT Nom,nbePlace FROM membres ORDER BY nbePlace DESC");
					?>
					• <span class="textes">
					<?php				
					$donnees = $req->fetch();
					echo $donnees['Nom'];
					$places = $donnees['nbePlace'];
					?>	
					</span> 
				</div>
				<div class="col-md-4">
					<?php echo $places;?> places disponibles
				</div>
				<div class="col-md-2 last-row">					 
					<button class="btn btn-success btn-plus" type="button">
						Voir plus
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					• <span class="textes">					
					<?php				
					$donnees = $req->fetch();
					echo $donnees['Nom'];
					$places = $donnees['nbePlace'];
					?>	
					</span>
				</div>
				<div class="col-md-4">
					<?php echo $places; ?> places disponibles
				</div>
				<div class="col-md-2 last-row">					 
					<button class="btn btn-success btn-plus" type="button">
						Voir plus
					</button>
				</div>
			</div>
			<div class="row">
			
				<div class="col-md-6">
					• <span class="textes">
					<?php				
					$donnees = $req->fetch();
					echo $donnees['Nom'];
					$places = $donnees['nbePlace'];
					?>	
					</span>
				</div>
				<div class="col-md-4">
					<?php echo $places;?> places disponibles
				</div>
				<div class="col-md-2 last-row">					 
					<button class="btn btn-success btn-plus" type="button">
						Voir plus
					</button>
				</div>
			</div>
			<div class="row voir-plus">
				<div class="col-md-9 last-row">
				</div>
				
			</div>
		</div>
		<div class="col-md-2 mid">
		</div>
		<div class="col-md-5 contain next-event">
			<h3>
				Prochains événements
			</h3>
			<?php $req = $bdd->query("SELECT Titre,Date FROM evenements ORDER BY Date ASC");
			?>
			<div class="row">
				<div class="col-md-10">
					• <span class="textes">					
					<?php				
					$donnees = $req->fetch();
					echo $donnees['Titre'];
					echo " : ";
					echo $donnees['Date'];
					;
					?>	
				</span>
				</div>
				<div class="col-md-2 last-row">					 
					<button class="btn btn-success btn-plus" type="button">
						Voir plus
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10">
					• <span class="textes">					
					<?php				
					$donnees = $req->fetch();
					echo $donnees['Titre'];
					echo " : ";
					echo $donnees['Date'];
					;
					?></span>
				</div>
				<div class="col-md-2 last-row">					 
					<button class="btn btn-success btn-plus" type="button">
						Voir plus
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10">
					• <span class="textes">					
					<?php				
					$donnees = $req->fetch();
					echo $donnees['Titre'];
					echo " : ";
					echo $donnees['Date'];
					;
					?>
					</span>
				</div>
				<div class="col-md-2 last-row">					 
					<button class="btn btn-success btn-plus" type="button">
						Voir plus
					</button>
				</div>
			</div>
			<div class="row voir-plus">
				<div class="col-md-9 last-row">
				</div>
			</div>
		</div>
	</div>
	<div class="row bloc-bas">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-2 event">
			<h2>
			Liste des Événements/Centres
			</h2>
		</div>
		<div class="col-md-2 contact">
			Contacts utiles
		</div>
		<div class="sos">
			<span id="sos">SOS</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 footer">
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>