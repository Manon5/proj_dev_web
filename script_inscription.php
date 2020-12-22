<?php
$db = mysqli_connect("127.0.0.1:3306", "root", "", "proj_dev_web");
//requete d'insertion
$query = "INSERT INTO user (login, mdp, prenom, nom, sexe, mail, date_nais, adresse, ville, code_postal, telephone)
VALUES ('{$_POST["login"]}', '{$_POST["password"]}', '{$_POST["prenom"]}', '{$_POST["nom"]}', '{$_POST["sexe"]}', '{$_POST["mail"]}',
 '{$_POST["date_nais"]}', '{$_POST["adresse"]}', '{$_POST["ville"]}', '{$_POST["cp"]}', '{$_POST["tel"]}');";
$res = mysqli_query($db, $query);
// redirection vers l'Accueil
header('Location: home.php');
?>
