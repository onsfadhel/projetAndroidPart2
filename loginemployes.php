<?php 
    $db="expert_maintenance";
    $user=$_POST["user"];
    $pass=$_POST["pass"];
    $host="localhost"; 
    $conn=mysqli_connect($host,"root","",$db);
    if($conn){
        $q="SELECT * FROM  employes WHERE email like'$user'and  pwd like'$pass' ";
        $resultat=mysqli_query($conn,$q);
        if(mysqli_num_rows($resultat)>0){
            echo "Vous avez reussi de se loger";

        }else{
            echo "echec";

        }mysqli_close($conn);
    }else{
        echo "probleme de connexion";
    }
    ?>