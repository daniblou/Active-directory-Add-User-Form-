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
    <form id="createUserForm" action="Con@formulaire.php" method="POST">
        <label for="givenName">Prénom :</label>
        <input type="text" id="givenName" name="givenName" >
        <br>
        <label for="sn">Nom de famille :</label>
        <input type="text" id="sn" name="sn" >
        <br>
        <label for="sAMAccountName">Nom d'utilisateur :</label>
        <input type="text" id="sAMAccountName" name="sAMAccountName" >
        <br>
        <label for="mail">Adresse e-mail :</label>
        <input type="email" id="mail" name="mail" >
        <br>
        <label for="telephoneNumber">Numéro de téléphone :</label>
        <input type="tel" id="telephoneNumber" name="telephoneNumber" >
        <br>
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" >
        <br>
        <label for="department">Departement :</label>
        <input type="text" id="department" name="department" >
        <br>
        <label for="company">Entreprise :</label>
        <input type="text" id="company" name="company" >
        <br>
        <input type="submit" id="submit" value="Créer l'utilisateur">
    </form>
    
</body> 

</html>

  
