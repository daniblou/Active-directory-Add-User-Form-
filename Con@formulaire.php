<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // Récupération des données du formulaire
        $givenName = $_POST["givenName"];
        $sn = $_POST["sn"];
        $sAMAccountName = $_POST["sAMAccountName"];
        $mail = $_POST["mail"];
        $telephoneNumber = $_POST["telephoneNumber"];
        $title = $_POST["title"];
        $department = $_POST["department"];
        $company = $_POST["company"];
        
        // Paramètres de connexion
        $ldap_host = "labo.local"; // Adresse du serveur Active Directory
        $ldap_dn = "DC=labo,DC=local"; // Base DN
        $ldap_user = "CN=Administrateur,CN=Users,DC=labo,DC=local"; // Nom d'utilisateur avec les privilèges d'accès à l'annuaire AD
        $ldap_password = "Lab0Agglo!79300"; // Mot de passe de l'utilisateur
        
        // Connexion au serveur LDAP
        $ldap_conn = ldap_connect($ldap_host);
        
        // Configuration de l'encodage
        ldap_set_option($ldap_conn, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap_conn, LDAP_OPT_REFERRALS, 0);
        
        // Connexion au serveur avec les informations d'authentification
        if ($ldap_conn) {
            $ldapbind = ldap_bind($ldap_conn, $ldap_user, $ldap_password);
            // Vérifie si la connexion est valide
            if ($ldapbind) {
                echo "Connexion LDAP réussie";
            } else {
                echo "Echec de la connexion LDAP";
            }
        } // Préparation des données pour la création de l'utilisateur
        $add_user = array();
        $add_user["objectclass"][0] = "top";
        $add_user["objectclass"][1] = "person";
        $add_user["objectclass"][2] = "organizationalPerson";
        $add_user["objectclass"][3] = "user";
        $add_user["cn"] = $givenName." ".$sn;
        $add_user["givenName"] = $givenName;
        $add_user["sn"] = $sn;
        $add_user["sAMAccountName"] = $sAMAccountName;
        $add_user["mail"] = $mail;
        $add_user["telephoneNumber"] = $telephoneNumber;
        $add_user["title"] = $title;
        $add_user["department"] = $department;
        $add_user["company"] = $company;

        $add_user["userPrincipalName"] = $sAMAccountName."labo.local";
        $dn = "CN=".$add_user["sAMAccountName"].",OU=DSI,DC=labo,DC=local";
        var_dump($dn);
        // Ajout de l'utilisateur à l'Active Directory
        $result = ldap_add($ldap_conn, $dn, $add_user);
        
        // Traitement de la réponse
        if ($result) {
          echo "L'utilisateur a été ajouté avec succès.";
        } else {
          echo "Une erreur s'est produite lors de l'ajout de l'utilisateur:". ldap_error($ldap_conn);
        }

        // Fermeture de la connexion à l'Active Directory
        ldap_close($ldap_conn);
      }     
   