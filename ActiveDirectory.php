<?php
class ActiveDirectory
{
    private $username;
    private $fullname;
    private $firstname;
    private $lastname;
    private $fonction;
    private $email;
    private $displayname;
    private $address;
    private $city;
    private $zip;
    private $country;
    private $phone;
    private $password;
    private $confirmPassword;
    private $group;
    private $disabled;
    private $manager ;
    private $service ;
    private $dateEntre;
    private $exchange;
    private $employeeID;
    private $entreprise;
    private $expire;
    private $division; 
    private $description;
    private $intranet;
    private $sousService ;
    
   public function __construct(){
        // $this->expire = $_POST['accountExpires'];
          $this->entreprise = $_POST['company'];
          $this->employeeID = $_POST['employeeID'];
         $this->exchange = $_POST['extensionAttribute15'];
        // $this->dateEntre = $_POST['extensionAttribute2'];
         $this->service = $_POST['department'];
         $this->fonction = $_POST['title'];
         $this->username = $_POST['sAMAccountName'];
         $this->fullname = $_POST['cn'];
         $this->firstname = $_POST['givenName'];
        $this->lastname = $_POST['sn'];
         $this->email = $_POST['mail'];
         $this->displayname = $_POST['displayName'];
         $this->address = $_POST['streetAddress'];
         $this->city = $_POST['l'];
         $this->zip = $_POST['postalCode'];
         $this->country = $_POST['co'];
         $this->phone = $_POST['telephoneNumber'];
         $this->description = $_POST['description'];
         $this->password = $_POST['password'];
        // $this->confirmPassword = $_POST['confirmPassword'];
        // $this->group = $_POST['memberOf'];
        // $this->disabled = isset($_POST['disabled']) ? true : false;
         $this->manager = $_POST['manager'];
         $this->division = $_POST['division'];
        $this->sousService = $_POST['extensionAttribute1'];
        $this->intranet = $_POST['extensionAttribute3'];

    }

    // fonction pour se connecter a la base de donnée Myssql

    

    public function testConnexion()
       {
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
    }

    }

    public function AddUser(){

        // Preparation des informations de l'utilisateur
   
        $info["sn"] = $this->lastname;
         $info["givenName"] = $this->firstname;
         $info["displayName"] = $this->displayname;  
         $info["mail"] = $this->email;
         $info["streetAddress"] = $this->address;
         $info["l"] = $this->city;
         $info["postalCode"] = $this->zip;
         $info["co"] = $this->country;
         $info["telephoneNumber"] = $this->phone;
         $info["title"] = $this->fonction;
         $info["department"] = $this->service;
         $info["company"] = $this->entreprise;
         $info["employeeID"] = $this->employeeID;
         $info["manager"] = $this->manager;
         $info["sAMAccountName"] = $this->username;
        $info["description"] = $this->description;
        // $info["userPrincipalName"] = $this->username."@labo.local";
        $info["objectclass"][0] = "top";
        $info["objectclass"][1] = "person";
        $info["objectclass"][2] = "organizationalPerson";
        $info["objectclass"][3] = "user";
        // $info["userAccountControl"] = $this->disabled ? 514 : 512;
        // $info["accountExpires"] = $this->expire;
        // $info["pwdlastset"] = 0;
        // $info["unicodePwd"] = iconv('UTF-8', 'UTF-16LE', $this->password);
        // $info["exchange"] = $this->exchange;
        // $info["whenCreated"] = $this->dateEntre;
         $info["division"] = $this->division;
       
    //    if($this->group){
    //     $info["memberOf"][0] = "cn=".$this->group.",ou=Groupes,dc=labo,dc=local";
    //    }
        $ldap_host = "labo.local";
          $ldap_conn = ldap_connect($ldap_host);
           $ldap_user = "CN=Administrateur,CN=Users,DC=labo,DC=local"; 
            $dn = "CN=".$this->fullname.",OU=DSI,DC=labo,DC=local";
       // Ajouter l'utilisateur a l'AD 
        $ldapbind = ldap_bind($ldap_conn,$ldap_user,"Lab0Agglo!79300");
        $ldapbind = ldap_add($ldap_conn,$dn,$info);
        if ($ldapbind) {
            echo "Utilisateur ajouté avec succès";
        } else {
            echo "Echec de l'ajout de l'utilisateur " . ldap_error($ldap_conn);
        }
        ldap_close($ldap_conn);
    }


}





     