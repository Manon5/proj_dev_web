<!DOCTYPE html>

<html>
<head>
	<title> Mes recettes preférées</title>
</head>
<body>
	<?php
		include('Donnees.inc.php');
		session_start();
		// affichage du panier
		$panier = $_SESSION['panier'];
		
		foreach($panier as $recette){
			echo "<li> - ", $recette, "</li>";
		}




	?>

</body>
</html>
