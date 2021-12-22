<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
    <title>Table employee</title>
</head>
<body>
    <div class="container">
        <h1 style="color:#cc33ff;text-align:center;margin-Top:5px;">Gérer Table des Employes </h1><br><br>
            <?php
                include_once 'ConnexionBD.php';
                $connexion = ConnexionBD::getInstance();
                $query="SELECT * FROM employes ";
                $response=$connexion->query($query);
                $users=$response->fetchAll(PDO::FETCH_OBJ);
            ?>
            <div style="text-align:center">
                <form action="edit.php" method="post" enctype="multipart/form-data">
                    <table class="table" style="margin-top:10px;">
                        <thead style="color:#cc33ff;">
                            <tr>
                                <th>Id</th>    
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Adresse mail</th>
                                <th>Mot de passe</th>
                                <th>Login</th>
                                <th>valsync</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <?php foreach($users as $user ){ ?>   
                            <tr>
                                <td name="id2" ><?=$user->id?></td>
                                <td ><?=$user->nom?></td>
                                <td name="prenom2" ><?=$user->prenom?></td>
                                <td name="email2"><?=$user->email?></td>
                                <td name="password2"><?=$user->pwd?></td>
                                <td name="login2"><?=$user->logi?></td>
                                <td name="valsync2"><?=$user->valsync?></td>
                                <td>
                                <a class="btn btn-info" href="delete.php?id=<?=$user->id ?>">Modifier</a>
                                    <a  name="delete"href="delete.php?idf=<?=$user->id ?>"class="btn btn-info">Suppprimer</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </form>
        
            <div style="margin-top:30px;text-align:center;border:solid #d9d9d9 1px ;margin:auto;width: 450px;height:500px;background-image: url('images/bg2.jpg');">
                <form action="processEmployes.php" method="post" enctype="multipart/form-data" >
                    <br><b style="color:#cc33ff;font-size:20px;">Si vous voulez ajoutez un employee remplir Ces champs</b><br><br>
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="name" > 
                    </div><br>

                    <div class="form-group">   
                        <label>Prénom</label> 
                        <input type="text" name="prenom" >
                    </div><br>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" > 
                    </div><br>
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" name="password" >
                    </div> <br>
                    <div class="form-group">
                        <label>login</label>
                        <input type="text" name="login"> 
                    </div><br>
                    <div class="form-group">
                        <label>valsync</label>
                        <input type="integer" name="valsync" > 
                    </div><br>
                    <div class="form-group">
                        <button class="btn-info" type="submit" name="save"><b style="color:white;font-size:20px">Enregistrer<b></button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>