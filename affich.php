<?php
	include "Donnees.inc.php";
	function afficher_recette($recette){
    // afficher titre
    echo "<h5>", $recette["titre"], "</h5>";
    // afficher l'image si elle existe
    $titre = str_replace(" ", "_", $recette["titre"]);
    $chemin = "Photos/" . $titre . ".jpg";
    if(file_exists($chemin)){
      echo "<img src=\"Photos/", $titre, ".jpg\" />";
    }
    // afficher la recette
    echo "<p>", $recette["ingredients"] , "</p>";
    echo "<p>", $recette["preparation"] , "</p>";
    // bouton qui permet d'ajouter la recette à ses favoris
    echo "<form action = \"\" method = \"POST\">";
    echo "<input type=\"hidden\" name=\"recettefav\" value=\"{$titre}\">";
    echo "<input type = \"submit\" name =\"favoris\" value = \"Ajouter à mes recettes favorites\" id = \"favoris\" >";
    echo "</form>";
  }
    foreach ($Recettes as $recette) {
      if(isset($_POST["oui"])){
        if(in_array($_POST["oui"], $recette["index"])){
          afficher_recette($recette);
        }
    } 
   }


   
 
   /*	$element = $Hierarchie[$_POST["oui"]]["sous-categorie"];
   	print_r($element);
     foreach($Recettes as $voila){
		if(in_array($element,$voila["index"])){
            echo "oui";}
          else{
            print_r($voila["index"]);}
        
  	}*/
  	$sousCategories = $Hierarchie[$_POST["oui"]]["sous-categorie"];
    foreach($sousCategories as $ingredient)
    {
        foreach ($Recettes as $recette) {
            if(in_array($ingredient, $recette["index"])){
                    afficher_recette($recette);
                }
          } 
    }
   



?>


