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

  session_start();
  if(isset($_SESSION['login'])){
    echo "Bienvenue, ", $_SESSION["prenom"], " ", $_SESSION["nom"], " !";
  }else{
    echo "Bienvenue !";
  } ?>

</body>
</html>
