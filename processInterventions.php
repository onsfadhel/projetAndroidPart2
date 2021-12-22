<?php
    include_once 'ConnexionBD.php';
    $connexion = ConnexionBD::getInstance();
    $query="INSERT INTO `interventions` (`titre`,`datedebut`,`datefin`,`heuredebutplan`,`heurefinplan`,`commentaires`,`dateplanification`) 
    VALUES (:titre,:datedebut,:datefin,:heuredebutplan,:heurefinplan,:commentaires,:datedebutplanification);";
    $req = $connexion->prepare($query);
    $req->execute([
        'titre'=> $_POST['titre'],
        'datedebut' => $_POST['datedebut'],
        'datefin' => $_POST['datefin'],
        'heuredebutplan' => $_POST['heuredebut'],
        'heurefinplan'=> $_POST['heurefin'],
        'commentaires'=> $_POST['commentaire'],
        'datedebutplanification'=> $_POST['planification']
    ]);
    

    header('location:TabIntervention.php');


