<?php

//on récupère le login et le mot de passe
$login = $_POST["login"];
$password = $_POST["password"];

// requête à la base de données
$db = mysqli_connect("127.0.0.1:3306", "root", "Bemuwu_5", "proj_dev_web");
$query = "SELECT * FROM user WHERE login = '{$login}' AND mdp = '{$password}'";
$res = mysqli_query($db, $query);

// si le compte est reconnu, on crée une session
if(mysqli_num_rows($res)){
  session_start();
  $_SESSION["login"] = $login;
  $_SESSION["mdp"] = $password;
  $row = $res->fetch_array();
  $_SESSION["nom"] = $row["nom"];
  $_SESSION["prenom"] = $row["prenom"];
}

// on enregistre les recettes favorites
if(isset($_SESSION["panier"])){
  foreach($_SESSION["panier"] as $recette){
    $query2 = "INSERT INTO recettes_fav (login, recette) VALUES ('" . $_SESSION['login'] . "', '" . $recette . "')";
    $res2 = mysqli_query($db, $query2);
  }
}

// on récupère les recettes favorites liées au compte
$_SESSION["panier"] = array();
$query3 = "SELECT recette FROM recettes_fav WHERE login = '" . $_SESSION['login'] . "'";
$res3 =  mysqli_query($db, $query3);
foreach($res3 as $rec){
  array_push($_SESSION["panier"], $rec["recette"]);
}

// redirection accueil
header('Location: home.php');
?>
