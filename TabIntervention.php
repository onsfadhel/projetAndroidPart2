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
        <h1 style="color:#cc33ff;text-align:center;margin-Top:5px;">Gérer Table des Interventions </h1><br><br>
            <?php
                include_once 'ConnexionBD.php';
                $connexion = ConnexionBD::getInstance();
                $query="SELECT * FROM interventions ";
                $response=$connexion->query($query);
                $interventions=$response->fetchAll(PDO::FETCH_OBJ);
            ?>
            <div style="text-align:center">
                <form action="edit.php" method="post" enctype="multipart/form-data">
                    <table class="table" style="margin-top:10px;">
                        <thead style="color:#cc33ff;">
                            <tr>
                                <th>Id</th>    
                                <th>Titre Intervention</th>
                                <th>Date debut</th>
                                <th>Date Fin</th>
                                <th>Heure debut plan</th>
                                <th>Heure Fin plan</th>
                                <th>Commentaires</th>
                                <th>Date de planification</th>
                                <th colspan="1">Action</th>
                            </tr>
                        </thead>
                        <?php foreach($interventions as $intervention ){ ?>   
                            <tr>
                                <td name="id2" ><?=$intervention->id?></td>
                                <td ><?=$intervention->titre?></td>
                                <td ><?=$intervention->datedebut?></td>
                                <td ><?=$intervention->datefin?></td>
                                <td ><?=$intervention->heuredebutplan?></td>
                                <td ><?=$intervention->heurefinplan?></td>
                                <td ><?=$intervention->commentaires?></td>
                                <td ><?=$intervention->dateplanification?></td>
                                <td>
                                
                                    <a  name="delete"href="deleteintervention.php?id=<?=$intervention->id ?>"class="btn btn-info">Suppprimer</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </form>
        
            <div style="margin-top:30px;text-align:center;border:solid #d9d9d9 1px ;margin:auto;width: 450px;height:550px;background-image: url('images/bg2.jpg');">
                <form action="processInterventions.php" method="post" enctype="multipart/form-data" >
                    <br><b style="color:#cc33ff;font-size:20px;">Si vous voulez ajoutez une Intervention remplir Ces champs</b><br><br>
                    <div class="form-group">
                        <label>Titre de l'intervention</label>
                        <input type="text" name="titre" > 
                    </div><br>

                    <div class="form-group">   
                        <label>Date Début </label> 
                        <input type="date" name="datedebut" >
                    </div><br>
                    <div class="form-group">
                        <label>Date Fin</label>
                        <input type="date" name="datefin" > 
                    </div><br>
                    <div class="form-group">
                        <label>Heure Debut Plan</label>
                        <input type="Time" name="heuredebut" >
                    </div> <br>
                    <div class="form-group">
                        <label>Heure Fin Plan</label>
                        <input type="Time" name="heurefin"> 
                    </div><br>
                    <div class="form-group">
                        <label>Commentaire</label>
                        <input type="text" name="commentaire" > 
                    </div><br>
                    <div class="form-group">
                        <label>Date du planification</label>
                        <input type="date" name="planification" > 
                    </div><br>
                    <div class="form-group">
                        <button class="btn-info" type="submit" name="save"><b style="color:white;font-size:20px">Ajouter<b></button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>