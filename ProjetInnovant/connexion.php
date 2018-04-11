<!DOCTYPE html>
<html>
	<?php include("en-tete.php"); ?>
	<body class="ppp">
		<?php include("openbdd.php"); ?>
		<form method="post" id="Bouton">
			<div class="formulaire">
				<label for="identifiant">Identifiant: </label><br/>
				<input type="text" name="identifiant" required/>
			</div>
			<div class="formulaire ">
				<label for="pass">Mot de passe : </label><br/>
				<input type="password" name="pass" required/>
			</div>
			<input type="submit" value="Se connecter" />
		</form>	
		<?php 
		if (isset($_POST['identifiant']) AND isset($_POST['pass'])) {
			// Hachage du mot de passe
			// Vérification des identifiants
			$req = $bdd->prepare('SELECT * FROM membres WHERE identifiant=?');
			$req->execute(array($_POST['identifiant'])); 
			$resultat = $req->fetch();
			$F = $resultat['Fonction'];
			$resultat2 = password_verify($_POST['pass'],$resultat['Pass']);
			if (!$resultat2){?>
			    <p class="enr"> Mauvais identifiant ou mot de passe !</p>
			<?php }
			else{
			    $_SESSION['identifiant'] = $_POST['identifiant'];
			    $_SESSION['fonction'] = $F;
			    echo '<p class="enr"> Vous êtes connecté ! </p>';?>
				<form  action ="index.php" method="post">
					<input  type="submit" value="Accueil" />
				</form>
			<?php } 
		}?>
		<form method="post" id="Bouton">
			<div class="formulaire">
				<label for="identifiant">Identifiant: </label><br/>
				<input type="text" name="identifiant" required/>
			</div>
			<div class="formulaire ">
				<label for="pass">Mot de passe : </label><br/>
				<input type="password" name="pass" required/>
			</div>
			<input type="submit" value="Se connecter" />
		</form>	
		<form method="post" id="Bouton">
			<div class="formulaire">
				<label for="identifiant">Identifiant: </label><br/>
				<input type="text" name="identifiant" required/>
			</div>
			<div class="formulaire ">
				<label for="pass">Mot de passe : </label><br/>
				<input type="password" name="pass" required/>
			</div>
			<input type="submit" value="Se connecter" />
		</form>	
		<form method="post" id="Bouton">
			<div class="formulaire">
				<label for="identifiant">Identifiant: </label><br/>
				<input type="text" name="identifiant" required/>
			</div>
			<div class="formulaire ">
				<label for="pass">Mot de passe : </label><br/>
				<input type="password" name="pass" required/>
			</div>
			<input type="submit" value="Se connecter" />
		</form>	
		<form method="post" id="Bouton">
			<div class="formulaire">
				<label for="identifiant">Identifiant: </label><br/>
				<input type="text" name="identifiant" required/>
			</div>
			<div class="formulaire ">
				<label for="pass">Mot de passe : </label><br/>
				<input type="password" name="pass" required/>
			</div>
			<input type="submit" value="Se connecter" />
		</form>	
	</body>
	<?php include("pied_de_page.php"); ?>
</html>