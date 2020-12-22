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
// redirection accueil
header('Location: home.php');
?>
