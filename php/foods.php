<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foods</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<style>

.card {
            width: 25rem;
            margin: 1em;
            padding: 3px;
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth scale and shadow */
        }

        /* Card hover effect */
        .card:hover {
            transform: scale(1.1);  /* Increase size when hovered */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Add shadow */
        }

        .logo {
    width: 80px;
    height: 50px;
  }
  .nav_bar {
    width: 100%;
    height: 30px;
  }
  
  .navbar a {
    display: block;
    color: black;
    justify-items: right;
    font-weight: 900;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
</style>


<!--Navigation bar-->
<nav
      class="navbar navbar-expand-lg navbar-light bg-light"
      style="background-color: black"
    >
      <div class="container-fluid">
        
        <?php
          require_once 'functions/navbar.php';
          addLogo();
          addToggleButton();
          navigationbar();
        ?>
      </div>
    </nav>
<?php
    require_once 'functions/functions.php';

    echo "<center><div class='row' style='margin:25px;'>";
   
    foodDetails($connect);
    
   echo  "</div></center>";
    
    

?>
    
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>