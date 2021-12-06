<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<?php   
        include "koneksi.php";
        $detail=mysqli_query($conn,"select * from users where username = '".$_SESSION['username']."'");
        $data=mysqli_fetch_array($detail);
    ?>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
                <div class="row z-depth-3" style="border-radius: 30px;"> 
                    <div class="col-sm-4 rounded-left" style="background-color:rgb(24, 17, 17);padding:110px 0 80px 0; border-radius: 30px;">
                        <div class="card-block text-center text-white" style="margin: 0 auto;">
                            <i class="fas fa-user-tie fa-7x mt-5"></i>
                            <h2 class="font-weight-bold mt-4" style="font-family: 'Poppins', sans-serif;font-size: 24pt;"><?=$_SESSION['username']?></h2>
                        </div>
                        <center style="margin-top:80px;">
                        </center>
                    </div>
                    <div class="col-sm-8 rounded-light" style="background-color:rgb(24, 17, 17);color:white;margin:0 auto;padding: 30px; border-radius: 30px;">
                        <h3 class="mt-3 text-center" style="font-family: 'Poppins', sans-serif;font-size: 27pt;">Information</h3><br>
                        <div class="row">
                            <div class="col-sm-10">
                                <p class="font-weight-bold" style="font-family: 'Poppins', sans-serif;font-size: 15pt;">Full Name</p>
                                <h6 style="font-family: 'Poppins', sans-serif;font-size: 13.5pt;"><?=$_SESSION['username']?></h6> 
                                <hr class="bg-success mt-0">
                            </div>
                            <div class="col-sm-10">
                                <p class="font-weight-bold" style="font-family: 'Poppins', sans-serif;font-size: 15pt;">Email</p>
                                <h6 style="font-family: 'Poppins', sans-serif;font-size: 13.5pt;"><?=$_SESSION['email']?></h6> 
                                <hr class="bg-success mt-0">
                            </div>
                            <div class="col-sm-10"style="padding-bottom: 10px;">
                                <p class="font-weight-bold" style="font-family: 'Poppins', sans-serif;font-size: 15pt;">Phone</p>
                                <h6 style="font-family: 'Poppins', sans-serif;font-size: 13.5pt;"><?=$_SESSION['phone']?></h6> 
                                <hr class="bg-success mt-0">
                            </div>
                        </div>
                        <ul class="list-unstyled d-flex justify-content-center mt-4">
                            <li><a href="#"><i class="fab fa-facebook-f px-3 h4 text-success"></i></a></li>
                            <li><a href="#"><i class="fab fa-github px-3 h4 text-success"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram px-3 h4 text-success"></i></a></li>
                        </ul>
                        <a href="login.php" class="btn-danger" style="; padding: 12px 23px 12px 23px; text-align:center; border-radius:20px;font-family: 'Poppins', sans-serif;font-size: 12pt;">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>