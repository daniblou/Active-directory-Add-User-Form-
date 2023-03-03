<?php

 function connectToSql($host = "localhost", $username = "root", $password = "", $database = "annuaire"){
      try {
          $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
      } catch (PDOException $e) {
        echo "Erreur de connexion à la base de donnée: " . $e->getMessage();
      }
        
      }

      // fonction pôur recuper les entites depuis la base de donnée
     function getCompany(){
        $pdo = connectToSql();
        $sql = "SELECT company FROM entites GROUP BY company";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $entites = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($entites);
        // return $entites;
        $valeur = 0;
         foreach($entites as $entite){
           $valeur++;
           echo "<option value='". $valeur ."'>".$entite['company']."</option>";
        }
        }

        // fonction pour recuperer les services depuis la base de donnée

        function getServices(){
          $pdo = connectToSql();
          $sql = "SELECT service FROM entites GROUP BY service";
          $stmt = $pdo->prepare($sql);
          $stmt->execute();
          $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
          $valeur = 0;
          foreach($services as $service){
            $valeur++;
            echo "<option value='". $valeur ."'>".$service['service']."</option>";
          }
        }

        // fonction pour recuperer les divisions depuis la base de donnée

        function getDivisions(){
          $pdo = connectToSql();
          $sql = "SELECT structure FROM entites GROUP BY structure";
          $stmt = $pdo->prepare($sql);
          $stmt->execute();
          $divisions = $stmt->fetchAll(PDO::FETCH_ASSOC);
          $valeur = 0;
          foreach($divisions as $division){
            $valeur++;
            echo "<option value='". $valeur ."'>".$division['structure']."</option>";
          }
        }