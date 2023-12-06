
<?php

session_start();
//koneksi ke database
  $koneksi= new mysqli("localhost","root","","medical_db");

  ?> 

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <title>Passion.cloth</title>
         <link rel="stylesheet" href="css/style.css">
         <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900'
         rel='stylesheet' type ='text/css'>
         <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700'
         rel='stylesheet' type ='text/css'>
        
         <link rel="stylesheet"
               href="css/style.css">;
    </head>
    <body>
        <div class="big-banner">
            <div class="menu">
                <div class="box">
                    <div class="logo">
                        <h1>Passion-<span class='red'>Cloth</span></h1>
                    </div>
                    <div class="menulist">
                    <a href="">Home</a>
                    <a href="index.php">Produk</a>
                    <a href="">Contact</a>    
                    </div>
                </div>
            </div>
            <div class="banner-text">
                    <h1><span class="bold"></span></h1><br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br><br>
                    <a href="login.php"class="btn-register">Sign in</a><br>
                    <br>
                       <a href="daftar.php"class="btn-register">Sign up</a>
                    
                </div>
            </div>    
        </div>
        <!-- End Big banner -->
        <!-- Featur-->
        <div class="feature">
        <div class="box">    
        <div class="col-3">
            <img src="Image/donation%20(1).png"alt="">
            <h3>Pembayaran</h3>
            <p>Kamu bisa membayar melalui Via transfer</p>
            </div>
        <div class="col-3">
            <img src="Image/clothes-donation.png"alt="">
            <h3>Kualitas Baju</h3>
            <p>Bagus,Nyaman,Harga merakyat</p>
           
            </div>
        <div class="col-3">
            <img src="Image/donation%20(2).png"alt="">
             <h3>Donasi Makanan</h3>
            <p>Berbagi itu indah</p>
            </div>
        </div>
        </div>
        <!-- End Feature -->
   
    </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/figma_ui/styles.css"> <!-- Add your custom styles file -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">
            <img src="assets/figma_ui/images/logo.png" alt="Logo" class="logotrial-removebg-preview-1-icon">
        </a>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <div class="medical">MEDICAL +</div>
        </div>
        <div class="login-register ml-auto">
            <a class="nav-link" href="#">Login</a> / 
            <a class="nav-link" href="#">Register</a>
        </div>
    </div>
</nav>
<br>
<br>
<br>
<br>
<br>

<div class="container mt-5">
    <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Menu2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Menu3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Menu4</a>
        </li>
    </ul>
</div>

</body>
</html>
