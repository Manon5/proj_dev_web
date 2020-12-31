<?php
  include('Donnees.inc.php');

  session_start();

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
  }
}


  // ajouter une recette aux favoris
  if(isset($_POST['recettefav'])){
    // cas où l'utilisateur n'est pas connecté
    if(isset($_SESSION['panier'])){
      // on ajoute la recette au panier
      array_push($_SESSION['panier'], $_POST['recettefav']);
    }else{
      // on crée le panier
      $_SESSION['panier'] = array($_POST['recettefav']);
    }

    if(isset($_SESSION['login'])){
      // cas où l'utilisateur est connecté : on ajoute la recette à la bdd
      $db = mysqli_connect("127.0.0.1:3306", "root", "Bemuwu_5", "proj_dev_web");
      $query = "INSERT INTO recettes_fav (login, recette) VALUES ('" . $_SESSION['login'] . "', '" . $_POST['recettefav'] . "')";
      $res = mysqli_query($db, $query);
    }
  }


?>
