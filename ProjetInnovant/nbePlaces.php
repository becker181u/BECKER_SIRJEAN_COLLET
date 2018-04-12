</!DOCTYPE html>
<html lang="fr">
	<?php include("openbdd.php");?>
	<?php include("en-tete.php");?>
	<body>
	<?php 
	if (isset($_POST['NbePlace']) && isset($_SESSION['identifiant'])){
		$N=$_POST['NbePlace']."";
		$requete=$bdd->prepare('UPDATE membres SET nbePlace= :nbePlace WHERE identifiant= :id');
		$requete->execute(array(
			'nbePlace' => $N,
			'id' => $_SESSION["identifiant"]
		));
		if ($requete){ ?>
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
			<h1>Ajouter un produit</h1>
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