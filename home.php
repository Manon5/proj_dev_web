<html>
<head>
  <title>Accueil</title>
</head>

<body>
  <form>
    <button formaction="inscription.php">Créer un compte</button>
    <button formaction="connexion.php">Se connecter</button>
  </form>

  <?php
  session_start();
  if(isset($_SESSION['login'])){
    echo "Bienvenue, ", $_SESSION["prenom"], " ", $_SESSION["nom"], " !";
  }else{
    echo "Bienvenue !";
  } ?>

</body>
</html>
