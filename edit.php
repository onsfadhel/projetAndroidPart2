<?php
        if(isset($_GET['edit'])){
            session_start();
            include_once 'ConnexionBD.php';
            $connexion = ConnexionBD::getInstance();
            $id=$_GET['edit'];
            $nom=$_POST['nom'];
            $query = "UPDATE `employes` SET `nom` = `$nom` WHERE id= $id ;";
            $req = $connexion->prepare($query);
            $req->execute([
            
        ]);
    }