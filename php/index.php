<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Yarrow Heights Hotel</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body >
    
    <!--Navigation Bar-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 1px;padding-top: 15px;">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Language
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">English</a></li>
                <li><a class="dropdown-item" href="#">French</a></li>
                <li><a class="dropdown-item" href="#"> 한국어 </a></li>    
                <li><a class="dropdown-item" href="#">Hindi</a></li>
                <li><a class="dropdown-item" href="#"> 日本</a></li>            
              </ul>
            </li>  
            </li>
          </ul>  
        </div>
      </div>
    </nav>

<div class="fixed-top">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: black;">
  <div class="container-fluid">
    <?php
      require_once 'functions/navbar.php';
      addLogo();
      addToggleButton();
      navigationbar();
    ?>
    
  </div>
</nav>
</div>



<!--backgroung_image-->
<?php
  require_once 'functions/dbconf.php';
  require_once 'functions/imageadd.php';

  addImage(10,8,9,$connect);
?>

<div class="card text-center" style=" background-color: #FFDBB5;font-family: 'Times New Roman', Times,serif;border-radius: 0%;" >
  <div class="card-body">
    <h3 class="card-title" >WELCOME TO YARROW HEIGHTS HOTEL</h3>
    <p class="card-text" >We are dedicated to making your stay at Yarrow Heights Hotel a memorable experience by blending comfort and convenience.You'll find well-equipped suites that provide privacy with security, and a central location to restaurants and shopping. 
        Take a look at our site to learn more about us, and book your retreat today!</p>
        <h6>*All Guests Now Receive FREE Day Passes to Placencia Beach Club*</h6>
    </div>
</div>

<div class="card text-center" style="background-color: #FFDBB5; border-radius: 0%;">
  <div class="card-body">
    <h5 class="card-title">Contact Us</h5>
    <p class="card-text">Email:-yarrowheightshotel@gmail.com<br>Phone:-12345678</p>
  </div>
</div>

    <div class="footer">
      <footer>
        <p>@2024. All rights reserved.</p>
      </footer>
      
    </div>


  

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>