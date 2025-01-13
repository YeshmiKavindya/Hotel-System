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

      <div class="row" style="margin:1em;padding:1em;">
        <table border="2">
          <thead>
            <th>Order No</th>
            <th>Name</th>
            <th>Item Price</th>
            <th>Quantity</th>
            <th>Price</th>
          </thead>
        </table>

      </div>


      <div class="row" style="padding: 35px;">
        <?php
         
          require_once 'functions/functions.php';
          $sql = "SELECT id,food_name,description,price,category,stock_quantity,image_url FROM food_items ";
          $result = mysqli_query($connect,$sql);
          $numrecords = mysqli_num_rows($result);

          for ($i=0; $i < $numrecords ; $i++) { 
              
              $row = mysqli_fetch_assoc($result);

              $id = $row['id'];
              $food_name = $row['food_name'];
              $description = $row['description'];
              $price = $row['price'];
              $category = $row['category'];
              $stock = $row['stock_quantity'];
              $img = $row['image_url'];

              echo "<div class='card' style='width: 25rem; margin:1em;padding:3px;'>
                  <img src='$img' class='card-img-top' alt='...' style='margin:1px;padding:15px;'>
                  <center>
                  <div class='card-body'>
                  <form method='GET' action=''>
                      <h5 class='card-title'>$id</h5>
                      <h5 class='card-title'>$food_name</h5>
                      <p class='card-text' >$description</p>
                      <p class='card-text'>Price : $$price</p>
                      
                        <input type='submit' value='Add to cart' name='submit' class='btn btn-warning' >
                      </form>
                  </div>
                  </center>
                  </div>";

              if ($i%3 == 0) {
                  echo "<br>";
              }

          }
        ?>
    </div>

      <?php

        if (isset($_GET['submit'])){

          $orderid = $id;
          echo $orderid;



          
        }else{

        }
      
      
      ?>

    

    <div class="footer">
      <footer>
        <p>@2024. All rights reserved.</p>
      </footer>
      
    </div>


    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>