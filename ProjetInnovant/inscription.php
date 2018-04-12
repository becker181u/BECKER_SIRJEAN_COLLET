<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8"/>
		<title>Borne Solidaire</title>
	</head>
	<?php include("en-tete.php"); ?>
	<body>
		<?php include("openbdd.php"); ?>
		<?php
		if (isset($_POST['identifiant'])AND($_POST['Pass']==$_POST['Pass2'])){			
			$Id=$_POST['identifiant'];
			$N=$_POST['Nom'];
			$A=$_POST['Adresse'];
			$V=$_POST['Ville'];
			$CP=$_POST['CodePostal'];
			$M=$_POST['Mail'];
			$T=$_POST['téléphone'];
			$D=$_POST['description'];
			$F=$_POST['fonction'];
			$Pa=password_hash($_POST['Pass'], PASSWORD_DEFAULT);
			$requete = "INSERT INTO membres VALUES (\"".$Id."\",\"".$Pa."\",\"".$N."\",0,\"".$A."\",\"".$V."\",\"".$CP."\",\"".$F."\",\"".$M."\",\"".$T."\",\"".$D."\")";
			$query='SELECT * FROM membres ;';
			$reponse = $bdd->query($query);
			while ($tranche=$reponse->fetch()){
				if ($tranche['identifiant']==$Id){
					$idutilisé="oui";
				}
				if(isset($idutilisé)){ ?>
					<p class="enr"> Identifiant déjà inscrit</p><br/>
					<form  action ="inscription.php" method="post">
						<input  type="submit" value="Recommencer" />
					</form> <?php
				}
				else{
					if($_POST['Pass']!=$_POST['Pass2']){?>
						<p class="enr">Mots de passe différents</p>
						<form  action ="Mathieu2.php" method="post">
							<input  type="submit" value="Retour" />
						</form> <?php
					}
				}
			}
			if ($reponse= $bdd->query($requete)){ ?>
				<p class="enr"> Enregistrement terminé</p> <br/>
				<form  action ="index.php" method="post">
					<input  type="submit" value="Retour" />
				</form>
				<?php 
			}
			else{ ?>
				<p class="enr"> Problème d'écriture </p> <br/>
				<form action="index.php" method="post">
					<input type="submit" value="Recommencer">
				</form>
			<?php }
		}
		else{
			?>
			<h1>Inscription</h1>
			<form method="post" id="Bouton">
				<div class="formulaire">
					<label for="identifiant">Identifiant: </label><br/>
					<input type="text" name="identifiant" required/>
				</div>
				<div class="formulaire">
					<label for="Nom">Nom de l'hébergement: </label><br/>
					<input type="text" name="Nom" required/>
				</div>
				<div class="formulaire">
					<label for="Adresse">Adresse de l'hébergement : </label><br/>
					<input type="text" name="Adresse" required/>
				</div>
				<div class="formulaire">
					<label for="Ville">Ville : </label><br/>
					<input type="text" name="Ville" required/>
				</div>
				<div class="formulaire">
					<label for="CodePostal">Code Postal : </label><br/>
					<input type="text" name="CodePostal" required/>
				</div>
				<div class="formulaire">
					<label for="téléphone">Numéro de téléphone </label><br/>
					<input type="text" name="téléphone">
				</div>
				<div class="formulaire">
					<label for="Mail">Mail:</label><br/>
					<input type="mail" name="Mail" required/>
				</div>
				<div class="formulaire">
					<label for="description">Description :</label><br/>
					<input type="text" name="description">
				</div>
				<div class="formulaire">
					<label for="Pass">Mot de passe :</label><br/>
					<input type="password" name="Pass" required/>
				</div>
				<div class="formulaire">
					<label for="Pass2">Confirmez le mot de passe : </label><br/>
					<input type="password" name="Pass2" required/>
				</div><br/>
				<div class="select">
					<select class="formulaire" name="fonction">
						<option value="Hébergement" selected>Hébergement</option>
						<option value="Administrateur">Administrateur</option>
						<option value="Actif">Membre actif</option>
						<option value="Inactif">Membre inactif</option>	
					</select>
				</div><br/>
				<input type="submit" value="Envoyer" />
			</form>
			<?php
		} ?>
</body>
<?php include("pied_de_page.php"); ?>
</html>