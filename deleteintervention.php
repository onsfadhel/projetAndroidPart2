<?php

    include_once 'ConnexionBD.php';
    $connexion = ConnexionBD::getInstance();   
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM interventions Where id= $id";
        $req = $connexion->prepare($query);
        $req->execute([
    
        ]);   

    }
        
    
      header('location:TabIntervention.php');