<html>
<head>
  <title>Accueil</title>
</head>

<body>
  <form>
    <button formaction="inscription.php">Créer un compte</button>
    <button formaction="connexion.php">Se connecter</button>
    <button formaction="afficher_ingredients.php">Voir les ingrédients</button>
    <button formaction="panier.php"> Mes recettes </button>
  </form>

  <?php
  include('Donnees.inc.php');

  $connection = new mysqli("localhost","root","");
  
  $bdd = "CREATE DATABASE inscription";
  $connection->query($bdd);
 

  $oui = new mysqli("localhost","root","","inscription");

  $table = "CREATE TABLE Inscrit ( login VARCHAR(30) PRIMARY KEY, mdp VARCHAR(30))";
  $oui->query($table);
  
  $recetteTable = "CREATE TABLE recettes2 ( titre VARCHAR(150) PRIMARY KEY, ingredient VARCHAR(150), preparation VARCHAR (150), indexe VARCHAR(150))";
  $oui->query($recetteTable);




  $groscul = "ALTER TABLE `recettes2` CHANGE `titre` `titre` VARCHAR(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `ingredient` `ingredient` VARCHAR(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `preparation` `preparation` VARCHAR(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `indexe` `indexe` VARCHAR(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;";
  $oui->query($groscul);



  echo count($Recettes);
foreach ($Recettes as $recette) {
   $gros = "INSERT INTO recettes2 (titre) VALUES ('" . $recette['titre'] . "')";
    $oui->query($gros);
  }


  /*session_start();*/
  if(isset($_SESSION['login'])){
    echo "Bienvenue, ", $_SESSION["prenom"], " ", $_SESSION["nom"], " !";
  }else{
    echo "Bienvenue !";
  } ?>

</body>
</html>