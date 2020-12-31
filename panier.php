<!DOCTYPE html>

<html>
<head>
	<title> Mes recettes preférées</title>
</head>
<body>
	<?php
		include('Donnees.inc.php');
		session_start();
		echo "<h3>Mes recettes préférées : </h3>";
		// affichage du panier
		$panier = $_SESSION['panier'];
		foreach($panier as $recette){
			echo "<li> - ", $recette, "</li>";
		}




	?>

</body>
</html>
