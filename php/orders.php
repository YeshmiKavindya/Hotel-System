<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


    <!-- <add navbar> -->
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


        <div class="row" style="padding: 35px;"><?php
         
         require_once 'functions/functions.php';
          cartTable();
          getFoodDetails($connect);

        ?></div>



    

    <div class="footer">
      <footer>
        <p>@2024. All rights reserved.</p>
      </footer>
      
    </div>


    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>