 <?php include_once 'fonctions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire.css">
    <title>Document</title>
</head>
<body>
   <header>
        <nav>
            <ul>
                <li><a href="#">Créer</a></li>
                <li><a href="#">Modifier</a></li>
            </ul>
        </nav>
    </header>  
   <form id="form" action="main.php" method="POST">
    <fieldset> 
      
    <legend>Informations personnelles</legend>
     <label>Prénom *:</label>
  <input type="text" id="givenName" name="givenName" ><br>

   <label>Nom  *:</label>
  <input type="text" id="sn" name="sn" ><br>

  <label>Nom complet *:</label>
  <input type="text" id="cn" name="cn" ><br>

   <label>Nom d'utilisateur *:</label>
  <input type="text" id="sAMAccountName" name="sAMAccountName" ><br>

  <label>Nom d'affichage :</label>
  <input type="text" id="displayName" name="displayName" ><br>

  <label>Adresse e-mail *:</label>
  <input type="email" id="mail" name="mail" ><br>

  <label>Numéro de téléphone :</label>
  <input type="tel" id="telephoneNumber" name="telephoneNumber" ><br>

  <label>Adresse :</label>
  <input type="text" id="streetAddress" name="streetAddress" ><br>

  <label>Ville :</label>
  <select name="l" id="l">
    <option value=""> </option>
  </select>

  <label>Code Postal :</label>
  <input type="text" id="postalCode" name="postalCode" ><br>
  

  <label>Pays :</label>
  <select name="co" id="co">
    <option value="fr">France</option>
  </select>

    <label>Mot de passe :</label>
  <input type="password" id="password" name="password" ><br>
  <span id="passError"></span>

    <label>Confirmation du mot de passe :</label>
  <input type="password" id="confirmPassword" name="confirmPassword" ><br>

  <label>Description :</label>
  <textarea name="description" id="description" cols="20" rows="10"></textarea><br>
  </fieldset>

  <fieldset>
    <legend>Informations professionnelles</legend>
 <label>Membre de  :</label>
  <select name="memberOf" id="memberOf">
    <option value=""></option>
  </select>

  <label>N+1 :</label>
  <input type="text" id="manager" name="manager" ><br>

    <label>Fonction :</label>
  <input type="text" id="title" name="title" ><br>

    <label>Entités :</label>
  <select id="company" name="company" >
    <option value="">Choisissez une valeur </option>
    <?php  getCompany(); ?>
    <select><br>

     <label>Service :</label>
  <select name="department" id="department">
     <option value="">Choisissez une valeur </option>
    <?php  getServices(); ?>
  </select>

    <label>Division:</label>
  <select name="division" id="division">
     <option value="">Choisissez une valeur </option>
    <?php  getDivisions(); ?>
  </select>
</fieldset>

  <fieldset>
    <legend>Informations de configuration </legend>
      <label>Carnet d'adresse Exchange :</label>
  <select name="extensionAttribute15" id="extensionAttribute15">
    <option value=""></option>
  </select>

    <label>ID employé :</label>
  <input type="number" id="employeeID" name="employeeID" ><br>

    <label>Date d'entrée:</label>
  <input type="date" id="extensionAttribute2" name="extensionAttribute2" ><br>

  <label>Compte expiré :</label>
  <input type="date" id="accountExpires" name="accountExpires" ><br>

 <label>extensionAttribute1 (sous-service) :</label>
  <input type="text" id="extensionAttribute1" name="extensionAttribute1" ><br>

  <label>extensionAttribute3 (Intranet) :</label>
  <input type="text" id="extensionAttribute3" name="extensionAttribute3" ><br>
  
  </fieldset>

  <input type="submit"  id="submit" value="Envoyer">
</form>
 <script type="application/json" src="cities.json"></script>
<script src="formulaire.js"></script>
</body>
</html>