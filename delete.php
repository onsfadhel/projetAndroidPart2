<?php
    session_start();
    include_once 'ConnexionBD.php';
    $connexion = ConnexionBD::getInstance();   
    if(isset($_GET['idf'])){
        $id=$_GET['idf'];
        $query="DELETE FROM employes Where id= $id";
        $req = $connexion->prepare($query);
        $req->execute([
    
        ]);   

    }
        
    
      header('location:TabEmployes.php');