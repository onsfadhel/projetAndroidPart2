<?php
    include_once 'ConnexionBD.php';
    $connexion = ConnexionBD::getInstance();
    $query="INSERT INTO `employes` (`nom`,`prenom`,`email`,`pwd`,`logi`,`valsync`) 
    VALUES (:nom,:prenom,:email,:passwword,:loggin,:valsync);";
    $req = $connexion->prepare($query);
    $req->execute([
        'nom'=> $_POST['name'],
        'prenom' => $_POST['prenom'],
        'email' => $_POST['email'],
        'passwword' => $_POST['password'],
        'loggin'=> $_POST['login'],
        'valsync'=> $_POST['valsync']
    ]);
    

    header('location:TabEmployes.php');


