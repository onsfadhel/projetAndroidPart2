<?php
session_start();

include_once 'ConnexionBD.php';
$connexion = ConnexionBD::getInstance();

$query = 'select * from users where email = :email and password = :password';
$req = $connexion->prepare($query);
$req->execute([
    'password' => $_POST['password'],
    'email' => $_POST['email']
]);
$user = $req->fetch(PDO::FETCH_OBJ);
if($user) {
    $_SESSION['email'] = $user->email;
    $_SESSION['id'] = $user->id;
    header('location:home.php');
} else {
    //rediriger le user vers la page login avec un messgae d'erreur
    header('location:login.php?errorMessage=veuillez verifier votre login et/ou mot de passe');
}