</!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8"/>
<body>
<?php
	try{
		$drivers = [];
		if(defined("PDO::MYSQL_ATTR_INIT_COMMAND")){
			$drivers[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET names utf8';
		}
		$bdd = new PDO('mysql:host=localhost;dbname=bdd', 'root', '', $drivers);
	}
	catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
	}
?>
</body>
</html>