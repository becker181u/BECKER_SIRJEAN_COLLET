</!DOCTYPE html>
<html lang="fr">
	<body>
	<?php 
		include("openbdd.php");
		include("en-tete.php");
	?>
	<?php 
	include("openbdd.php");
	if (isset($_POST['NbePlace']) && isset($_SESSION['identifiant'])){
		$N=$_POST['NbePlace'];
		$requete = 'UPDATE(membres SET nbePlace=$N WHERE identifiant=$_SESSION[identifiant])'; 
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
			<form method="post" id="Bouton">
				<div class="formulaire">
					<label for="NbePlace">Nombre de places disponibles : </label><br/>
					<input type="text" name="NbePlace" required/>
				</div>
				<br/>
				<input type="submit" value="Envoyer" />
			</form>	
			<?php
		}
		else{ ?>
			<p class="enr">Veuillez vous connecter</p><br/>
			<form  action ="connexion.php" method="post">
				<input  type="submit" value="Se connecter" />
			</form>
		<?php }
	} ?>
	<?php include("pied_de_page.php") ?>
	</body>
</html>