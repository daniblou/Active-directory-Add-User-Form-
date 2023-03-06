<?php

include_once 'ActiveDirectory.php';
include_once 'fonctions.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // $password_regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{12,}$/";
        // if(empty($_POST['cn'])){
        //     $errors[] = "Veuillez saisir le nom complet";
        // }
        // if(empty($_POST['givenName'])){
        //     $errors[] = "Veuillez saisir le prénom";
        // }
        // if(empty($_POST['sn'])){
        //     $errors[] = "Veuillez saisir le nom";
        // }
        // if(empty($_POST['title'])){
        //     $errors[] = "Veuillez saisir la fonction";
        // }
        // if(empty($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
        //     $errors[] = "Veuillez saisir l'adresse email";
        // }
        // if(empty($_POST['displayName'])){
        //     $errors[] = "Veuillez saisir le nom d'affichage";
        // }
        // if(empty($_POST['streetAddress'])){
        //     $errors[] = "Veuillez saisir l'adresse";
        // }
        // if(empty($_POST['l'])){
        //     $errors[] = "Veuillez saisir la ville";
        // }
        // if(empty($_POST['postalCode'])){
        //     $errors[] = "Veuillez saisir le code postal";
        // }
        // if(empty($_POST['co'])){
        //     $errors[] = "Veuillez saisir le pays";
        // }
        // if(empty($_POST['telephoneNumber'])){
        //     $errors[] = "Veuillez saisir le numéro de téléphone";
        // }
        // if(empty($_POST['password']) || !preg_match($password_regex, $_POST['password'])){
        //     $errors[] = "Veuillez saisir le mot de passe. celui-ci doit contenir au moins 12 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial";
        // }
        // if(empty($_POST['confirmPassword'])){
        //     $errors[] = "Veuillez confirmer le mot de passe";
        // }
        // if($_POST['password']!= $_POST['confirmPassword']){
        //     $errors[] = "Les mots de passe ne correspondent pas";
        // }
        // if(empty($_POST['sAMAccountName'])){
        //     $errors[] = "Veuillez saisir le nom d'utilisateur";
        // }
        // if(empty($_POST['department'])){
        //     $errors[] = "Veuillez saisir le service";
        // }
        // if(empty($_POST['company'])){
        //     $errors[] = "Veuillez saisir l'entreprise";
        // }
        // if(empty($_POST['employeeID'])){
        //     $errors[] = "Veuillez saisir l'identifiant";
        // }
        // if(empty($_POST['manager'])){
        //     $errors[] = "Veuillez saisir le manager";
        // }
        // if(empty($_POST['description'])){
        //     $errors[] = "Veuillez saisir la description";
        // }
        // if(empty($_POST['division'])){
        //     $errors[] = "Veuillez saisir la division";
        // }
        // if(empty($_POST['extensionAttribute1'])){
        //     $errors[] = "Veuillez saisir le sous service";
        // }
        // if(empty($_POST['extensionAttribute3'])){
        //     $errors[] = "Veuillez saisir l'intranet";
        // }
        // if(empty($_POST['memberOf'])){
        //     $errors[] = "Veuillez saisir le groupe";
        // }
        // if(!empty($errors)){
        //     foreach($errors as $error){
        //         echo "<span class='error'>".$error."  </span>  <br>";
        //     }
        // }
        // else{
        //     $ad = new ActiveDirectory();
        //     // $ad->AddUser();
        // }

         $ad = new ActiveDirectory();
            // $ad->AddUser();
    }



