<html>
<head>
  <title>Créer un compte</title>
  </script>
</head>

<body>
  <form action="script_inscription.php" method="POST">
    Login : <input type="text" name="login" required/><br/>
    Mot de passe : <input type="password" name="password" required/><br/>
    Prénom : <input type="text" name="prenom"/><br/>
    Nom : <input type="text" name="nom"/> <br/>
    Sexe : Homme<input type="radio" name="sexe" value="homme"/> Femme<input type="radio" name="sexe" value="femme"/><br/>
    Mail : <input type="text" name="mail"/> <br/>
    Date de naissance : <input type="date" name="date_nais"/> <br/>
    Adresse : <input type="text" name="adresse"/> <br/>
    Ville : <input type="text" name="ville"/> <br/>
    Code postal : <input type="text" name="cp"/> <br/>
    Téléphone : <input type="text" name="tel"/> <br/>
    <input type="submit" value="Valider" onclick="inscription()"/>
  </form>
</body>
</html>
