<?php
    session_start();
    include_once 'ConnexionBD.php';
    $connexion = ConnexionBD::getInstance();
    $query="DELETE FROM employes WHERE id = $idf"