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


   
   function afficher_hierarchie($recette)
   {
       // afficher titre
      echo "<h5>", $Hierarchie["Épice"], "</h5>";
      echo "<p>", $Hierarchie["Épice"]["sous-categorie"] , "</p>";
    
    }   



   $element =   $Hierarchie[$_POST["oui"]];
   foreach($element["sous-categorie"] as $rjgh)
      foreach($Recettes as $pasrtek)
      print_r($pasrtek);
      if(in_array($rjgh,$pasrtek["index"]))
            echo "triple pute";  
          else
            echo "hehfizo";
  
   



?>


