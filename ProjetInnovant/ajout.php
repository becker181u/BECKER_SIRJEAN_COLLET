</!DOCTYPE html>
<html lang="fr">
	<?php 
		include("openbdd.php");
		include("en-tete.php");
	?>
	<body>
	<?php 
	include("openbdd.php");
	if (isset($_POST['Nom']) && isset($_SESSION['Pseudo'])){
		$T=$_POST['Titre'];
		$Des=$_POST['Description'];
		$D=$_POST['Date'];
		$I=$_POST['Infos'];
		$D=$_POST['description'];
		$requete = "INSERT INTO evenements VALUES (\"".$T."\",\"".$Des."\",\"".$D."\",\"".$I."\",\"".$_SESSION['Pseudo']."\")"; 
		if ($reponse= $bdd->query($requete)){ ?>
			<p class="enr">Enregistrement terminée </p><br/>
			<form  action ="index.php" method="post">
				<input  type="submit" value="Retour" />
			</form>
		<?php }
		else{ ?>
			<p class="enr">Problème d'écriture </p><br/>
			<form  action ="ajout.php" method="post">
				<input  type="submit" value="Recommencer" />
			</form>
		<?php }

	}
	else{
		if (isset($_SESSION['identifiant'])) {
			?>
			<h1>Ajouter un évènement</h1>
			<form method="post" id="Bouton">
				<div class="formulaire">
					<label for="Titre">Titre de l'évènement: </label><br/>
					<input type="text" name="Titre" required/>
				</div>
				<div class="formulaire">
					<label for="Description">Description : </label><br/>
					<input type="text" name="Description" required/>
				</div>
				<div class="formulaire">
					<label for="Date">Date:</label><br/>
					<input type="date" name="Date" value="0"/>
				</div>
				<div class="formulaire">
					<label for="Infos">Infos supplémentaires:</label><br/>
					<input type="text" name="Infos" />
				</div>
				<br/>
				<input type="submit" value="Envoyer" />
			</form>	
			<?php
		}
		else{ ?>
			<p class="enr">Veuillez vous connecter s'il-vous-plaît.</p><br/>
			<form action ="connexion.php" method="post">
				<input type="submit" value="Se connecter" />
			</form>
		<?php }
	} ?>
	<?php include("pied_de_page.php") ?>
	</body>
</html>