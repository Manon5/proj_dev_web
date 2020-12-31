<?php
  include('Donnees.inc.php');


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
  }

  // on récupère la catégorie recherchée
  if(isset($_POST['ingredient'])){
    $ingredient = $_POST['ingredient'];
  }else{
    // aliment par défaut
    $ingredient = "Aliment";
  }
  // affichage titre
  echo "<h1>Ingrédient : ", $ingredient ,"</h1>";

  // on récupère les sous catégories associées
  if(isset($Hierarchie[$ingredient]['sous-categorie'])){
      $liste_categ = $Hierarchie[$ingredient]['sous-categorie'];
      // affichage des boutons pour les sous catégories
      echo "<h3>Sous catégories : </h3>";
      echo "<form action=\"\" method=\"post\">";
      foreach ($liste_categ as $categ) {
        echo "<input type=\"submit\" name=\"ingredient\" value=\"", $categ ,"\" />";
      }
      echo "</form>";
  }


// affichage des recettes associées
echo "<h3>Recettes avec cet ingrédient : </h3>";

foreach ($Recettes as $recette) {
  if(in_array($ingredient, $recette["index"])){
    afficher_recette($recette);
    echo "<input type='button' value='ajouter'>";
  }
}
?>
