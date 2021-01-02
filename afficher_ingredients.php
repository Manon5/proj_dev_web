<!DOCTYPE html>
<html>
<head>
  
	<script src="jquery.js"></script>
	<script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
	<script>
    $(function() {
      var availableTags = ['Malibu', 'Cerise', 'Jus de goyave', 'Cerise griotte', 'Aperol', 'Prosecco', 'Glaçon', 'Orange sanguine', 'Eau gazeuse', 'Curaçao', 'Rhum blanc', 'Tequila', 'Martini', 'Sirop de sucre de canne', 'Stout (bière)', 'Champagne', 'Vodka', 'Jus de tomates', 'Jus de citron', 'Sauce worcestershire', 'Sauce tabasco', 'Sel de céleri', 'Poivre', 'Jus d\'ananas', 'Jus de fruits de la passion', 'Sirop de grenadine', 'Jus de citron', 'Glaçon', 'Concombre', 'Citron', 'Sucre', 'Glaçon', 'Cachaça', 'Citron vert', 'Sucre en poudre', 'Glaçon', 'Sucre roux', 'Angostura', 'Cognac', 'Champagne', 'Noilly Prat', 'Champagne', 'Rhum', 'Sirop de grenadine', 'Jus de citron', 'Rhum', 'Sirop de grenadine', 'Jus de citron', 'Vodka', 'Cointreau', 'Jus de citron', 'Citron', 'Glaçon', 'Cava', 'Vodka', 'Citron vert', 'Zeste de citron vert', 'Champagne', 'Saké', 'Coriandre', 'Vin effervescent', 'Curaçao', 'Triple sec', 'Sirop de citrons', 'Sirop d\'oranges', 'Sucre de canne en poudre', 'Fraise', 'Jus d\'orange', 'Sirop de fraises', 'Limonade', 'Glaçon', 'Cognac', 'Jus d\'abricots', 'Champagne', 'Whisky', 'Crème de cassis', 'Bénédictine', 'Pastis', 'Glaçon', 'Martini blanc', 'Angostura', 'Jus de pamplemousse', 'Martini', 'Triple sec', 'Sucre de canne en poudre', 'Jus multivitaminé', 'Jus d\'orange', 'Vin blanc', 'Sirop de grenadine', 'Tequila', 'Jus de goyave', 'Jus d\'ananas', 'Jus de pommes', 'Sucre vanillé', 'Menthe', 'Jus d\'abricots', 'Jus de pommes', 'Eau gazeuse', 'Liqueur', 'Sirop de grenadine', 'Jus de pamplemousse', 'Jus d\'ananas', 'Jus de pommes', 'Framboise', 'Glaçon', 'Whisky', 'Jus de canneberge', 'Jus de cerises', 'Jus de pommes', 'Jus d\'ananas', 'Alcool de prune', 'Sirop de sucre de canne', 'Vin blanc sec', 'Sucre', 'Citron', 'Orange', 'Rhum', 'Perrier', 'Vin blanc', 'Vin effervescent', 'Framboise', 'Sucre', 'Martini', 'Agrume', 'Citron', 'Cidre brut', 'Crème de cassis', 'Cointreau', 'Kumquat', 'Litchi', 'Clémentine', 'Orange', 'Eau', 'Limonade', 'Orange', 'Rhum ambré', 'Limoncello', 'Glaçon', 'Jus d\'orange', 'Jus de citron', 'Fraise', 'Framboise', 'Sirop de sucre de canne', 'Kirsch', 'Limonade', 'Citron', 'Crémant', 'Melon', 'Crémant', 'Sirop de sucre de canne', 'Citron', 'Glaçon', 'Liqueur de café', 'Whisky', 'Lait', 'Sucre de canne en poudre', 'Glaçon', 'Glace pilée', 'Campari', 'Noilly Prat', 'Gin', 'Champagne', 'Glaçon', 'Jus de citrons verts', 'Menthe', 'Zeste de citron', 'Vin effervescent', 'Cointreau', 'Citron', 'Sirop de sucre de canne', 'Glaçon', 'Sirop à la menthe', 'Sirop de sucre de canne', 'Jus de citrons verts', 'Jus de citron', 'Menthe', 'Tranche de citron', 'Vodka', 'Lait', 'Crème glacée à la noix de coco', 'Vanille', 'Sirop de sucre de canne', 'Glaçon', 'Noix de coco', 'Rhum blanc', 'Crème de noix de coco', 'Jus de bananes', 'Sirop de fraises', 'Citron vert', 'Banane', 'Pomme', 'Kiwi', 'Eau', 'Sucre vanillé', 'Cassonade', 'Lait de coco', 'Jus multivitaminé', 'Jus de citrons verts', 'Glaçon', 'Citron vert', 'Jus d\'ananas', 'Jus de pommes', 'Glaçon', 'Ananas', 'Pomme', 'Sucre en poudre', 'Pomme', 'Citron', 'Glaçon', 'Jus de pommes', 'Calvados', 'Crème de cassis', 'Champagne', 'Cassis', 'Pomme', 'Ananas', 'Framboise', 'Sirop de gratte cul', 'Pamplemousse', 'Orange', 'Jus de mangue', 'Jus d\'ananas', 'Jus de fruit de la passion', 'Jus de citrons verts', 'Sucre', 'Liqueur d\'abricot', 'Liqueur de pommes', 'Jus de poires', 'Glaçon', 'Limonade', 'Curaçao', 'Sirop de fruit de la passion', 'Jus de citron', 'Glaçon', 'Jus de citrons verts', 'Jus de mangue', 'Banane', 'Mangue', 'Framboise', 'Prosecco', 'Litchi', 'Jus de litchis', 'Jus de baies', 'Limonade', 'Vin rosé', 'Sirop d\'agrumes', 'Jus d\'orange', 'Pastèque', 'Yaourt', 'Sirop de roses', 'Martini rosé', 'Eau minérale gazeuse', 'Citron vert', 'Menthe', 'Sucre', 'Bière', 'Jus d\'ananas', 'Sirop de fraises', 'Fraise', 'Sucre', 'Jus de citrons verts', 'Limonade', 'Malibu', 'Lait de coco', 'Lait de soja', 'Café', 'Sirop de sucre de canne', 'Glaçon', 'Pamplemousse', 'Glace pilée', 'Sucre roux', 'Menthe', 'Jus d\'orange', 'Vodka', 'Pisang Ambon', 'Sucre de canne en poudre', 'Jus d\'orange', 'Cointreau', 'Cognac', 'Grenadine', 'Champagne', 'Framboise', 'Framboise', 'Coriandre', 'Whisky', 'Crème fraiche', 'Pistache', 'Vin rosé', 'Jus de pamplemousse', 'Grenadine', 'Framboise', 'Citron', 'Glaçon', 'Jus de raisins', 'Jus d\'orange', 'Schweppes', 'Baie', 'Liqueur de litchi', 'Liqueur de fraises', 'Jus d\'orange', 'Jus de canneberge', 'Jus d\'orange', 'Framboise', 'Citron', 'Jus de citron', 'Jus de pommes', 'Gingembre', 'Sirop de cassis', 'Citronnelle', 'Gingembre', 'Glace pilée', 'Melon vert', 'Citron vert', 'Jus d\'orange', 'Jus d\'ananas', 'Eau gazeuse', 'Jus d\'ananas', 'Jus d\'orange', 'Sirop de cassis', 'Noix de coco', 'Glaçon', 'Jus d\'orange', 'Jus de pamplemousse', 'Jus d\'ananas', 'Citron', 'Malibu', 'Sirop de grenadine', 'Vodka', 'Crème de café', 'Lait entier', 'Glaçon', 'Jus d\'ananas', 'Jus d\'orange', 'Sirop de noix de coco', 'Crème fraiche', 'Ananas', 'Orange', 'Rhum blanc', 'Vermouth', 'Jus de citron', 'Grenadine', 'Rhum blanc', 'Citron vert', 'Coca-cola', 'Glaçon', 'Sorbet citron vert', 'Jus de pamplemousse', 'Sirop à la menthe', 'Menthe', 'Gin', 'Citron vert', 'Sirop de sucre de canne', 'Eau gazeuse', 'Gingembre', 'Vodka', 'Triple sec', 'Jus de citrons verts', 'Jus de canneberge', 'Grand marnier', 'Jus de citron', 'Martini blanc', 'Get 27', 'Jus de pamplemousse', 'Vodka', 'Curaçao', 'Limonade', 'Jus de bananes', 'Jus d\'ananas', 'Sirop d\'orgeat', 'Sirop de fraises', 'Fraise', 'Tequila', 'Triple sec', 'Jus de citrons verts', 'Sel', 'Glace pilée', 'Citron vert', 'Fraise', 'Tequila', 'Cointreau', 'Sucre', 'Rhum', 'Citron vert', 'Menthe', 'Eau gazeuse', 'Sucre', 'Rhum blanc', 'Eau gazeuse', 'Sirop de sucre de canne', 'Sucre roux', 'Citron vert', 'Basilic', 'Glaçon', 'Sucre de canne en poudre', 'Citron vert', 'Menthe', 'Eau gazeuse', 'Rhum', 'Glaçon', 'Campari', 'Martini rouge', 'Gin', 'Angostura', 'Soda', 'Glace pilée', 'Orange', 'Citron vert', 'Citron', 'Jus de framboises', 'Jus de pamplemousse', 'Sirop de roses', 'Limonade', 'Glaçon', 'Rhum blanc', 'Rhum ambré', 'Jus d\'ananas', 'Lait de coco', 'Crème liquide', 'Crème de noix de coco', 'Jus d\'ananas', 'Rhum blanc', 'Glaçon', 'Porto', 'Cognac', 'Oeuf', 'Cannelle', 'Sirop de sucre de canne', 'Noix de muscade', 'Glaçon', 'Pastèque', 'Orange', 'Pêche', 'Fraise', 'Menthe', 'Vin blanc', 'Gingembre', 'Rhum', 'Jus de pommes', 'Jus de citrons verts', 'Raifort', 'Kiwi', 'Glaçon', 'Jus d\'orange', 'Vodka', 'Sirop de grenadine', 'Curaçao bleu', 'Sirop de fraises', 'Jus de pêches', 'Vodka', 'Liqueur de poire', 'Glaçon', 'Rhum', 'Jus de pommes', 'Sucre de canne en poudre', 'Cannelle', 'Cidre de pommes', 'Cognac', 'Crème de cassis', 'Glaçon', 'Sirop de sangria', 'Jus de raisins', 'Jus d\'orange', 'Jus de citron', 'Fruit', 'Vodka', 'Jus d\'orange', 'Mangalore', 'Eau gazeuse', 'Sirop d\'abricot', 'Sirop de grenadine', 'Sauce tabasco', 'Vodka', 'Cointreau', 'Sirop de sucre de canne', 'Citron vert', 'Glaçon', 'Champagne', 'Tequila', 'Jus d\'orange', 'Sirop de grenadine', 'Rhum blanc', 'Sirop de sucre de canne', 'Citron vert', 'Glace pilée', 'Fraise', 'Sirop de pêche', 'Vodka', 'Liqueur de pommes', 'Glaçon', 'Malibu', 'Liqueur de litchi', 'Jus d\'ananas', 'Jus de pommes', 'Sirop de fraises'];
      $("#tags").autocomplete({
        source: availableTags
      });
    }); 
</script>
</head>
<body>

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
  ?>
  <div class="afficher"></div>

  <form action="" method="GET" class="formulaire">
  <div>
  <input type="search" name="oui" placeholder="Aliment souhaité" class="souhait" id="tags"/>
  <input type="search" name="non" placeholder="Aliment non souhaité" class="nonsouhait" />
  <input type="submit" value="Valider"/>
  </div>

</div>
<?php


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

</body>
</html>