<!DOCTYPE html>
<html>
	<?php include("en-tete.php"); ?>
	<?php include("openbdd.php"); ?>
	<body>
		<?php 	$_SESSION = array();
			session_destroy(); 
		?>
		<h1>Déconnexion</h1>
		<p class="enr">Vous êtes déconnecté(e) !<p>
		<form id="retour" action ="index.php" method="post">
			<input id="bouton_retour" type="submit" value="Retour" />
		</form>
	<?php include('pied_de_page.php'); ?>
	</body>
</html>