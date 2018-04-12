<!DOCTYPE html>
<html>
	<?php include("en-tete.php"); ?>
	<?php include("openbdd.php"); ?>
	<body>
		<?php
		if (isset($_SESSION['fonction'])) {
			switch ($_SESSION['fonction']){
				case 'Hébergement':?>
					<form  action ="nbePlaces.php" method="post">
						<input  type="submit" value="Ajuster le nombre de places disponibles" />
					</form>
					<form action ="ajout.php" method="post">
						<input type="submit" value="Ajouter un évênement" />
					</form>
					<?php
					break;

				case 'Actif':?>
					<form action ="ajout.php" method="post">
						<input type="submit" value="Ajouter un évênement" />
					</form>
					<?php
					break;

				case 'Administrateur':?>
					<form action ="ajout.php" method="post">
						<input type="submit" value="Ajouter un évênement" />
					</form>
					<form action="inscription.php" method="post">
						<input type="submit" value="Inscrire une personne ou un établissement">
					</form>
					<?php
					break;

				case 'Inactif':?>
					<h1>Votre compte est inactif. Contactez l'admnistrateur si ce n'est pas normal.</h1>
					<?php
					break;
			}}else{?>
				<form action="connexion.php" method="post">
					<h1>Se connecter</h1>
					<input type="submit" value="Se connecter"/> 
				</form>
			<?php
			}
		?>
	</body>
	<?php include("pied_de_page.php");?>