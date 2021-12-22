<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
    <title>Expert Maintenance</title>
</head>
<body >
<div class="container" style="margin-top: 70px;text-align:center; width: 500px;height: 600px; border: solid #d9d9d9 1px ;background-image: url('images/bg2.jpg');">
    
    <div style="margin-top:30px;color:#0099e6">
        <h1>
            <i>
                 Welcome to Expert Maintenance
            </i> 
        </h1>
    </div>
    <hr>
    <br>
    <form action="processLogin.php" method="post" enctype="multipart/form-data" >
        <div id="border">
            <div style="text-align:center;color:#9370db;font-size:20px;font-weight: bold">
               Enter your login and password
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleInputEmail1" style="font-size:20px;">Email address</label><br>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <br>
             </div>
            <div class="form-group">
                <label for="exampleInputPassword1"style="font-size:20px;">Password</label><br>
                 <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
           <br>
           <br>
            <div style="text-align:center;">
                <button type="submit" style="width:120px;height:50px;font-size:20px;color:white ;background-color:#0099e6;font-weight: bold">Log In</button>
            </div>
                 <br>
            <hr>
           <?php
                if(isset($_GET['errorMessage'])) {
            ?>
            <div class="alert alert-danger">
                <?=$_GET['errorMessage'] ?>
            </div>
             <?php
                 }
             ?>
        </div>

    </form>
</div>

    
</body>
</html>