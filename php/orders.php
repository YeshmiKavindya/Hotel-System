<?php
session_start();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
  <br>

 

  <div class="row" style="padding: 35px;">
    <?php
      require_once 'functions/functions.php';
      $sql = "SELECT id, food_name, description, price, category, stock_quantity, image_url FROM food_items";
      $result = mysqli_query($connect, $sql);
      $numrecords = mysqli_num_rows($result);

     
      for ($i = 0; $i < $numrecords; $i++) {
          $row = mysqli_fetch_assoc($result);

          $id = $row['id'];
          $food_name = $row['food_name'];
          $description = $row['description'];
          $price = $row['price'];
          $category = $row['category'];
          $stock = $row['stock_quantity'];
          $img = $row['image_url'];

          echo "<div class='card-a' style='width: 25rem; margin:1em;padding:3px;'>
              <img src='$img' class='card-img-top' alt='...' style='margin:1px;padding:15px;'>
              <center>
              <div class='card-body'>
              <form method='POST' action=''>
                  <h5 class='card-title'>$food_name</h5>
                  <p class='card-text'>$description</p>
                  <p class='card-text'>Price: $$price</p>
                  <input type='number' name='quantity' min='1' max='$stock' value='1' class='form-control' required>
                  <input type='hidden' name='food_id' value='$id'>
                  <input type='hidden' name='food_name' value='$food_name'>
                  <input type='hidden' name='food_price' value='$price'>
                  <input type='submit' name='add_to_cart' value='Add to Cart' class='btn btn-warning'>
              </form>
              </div>
              </center>
              </div>";

          if ($i % 3 == 0) {
              echo "<br>";
          }
      }
    ?>
  </div>

  <?php
    
    if (isset($_POST['add_to_cart'])) {
       
        $food_id = $_POST['food_id'];
        $food_name = $_POST['food_name'];
        $food_price = $_POST['food_price'];
        $quantity = $_POST['quantity'];

        
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

      
        $new_cart_item = array(
            "id" => $food_id,
            "name" => $food_name,
            "price" => $food_price,
            "quantity" => $quantity
        );

        
        $item_exists = false;
        foreach ($_SESSION['cart'] as $index => $cart_item) {
            
            if ($cart_item['id'] == $food_id) {
                
                $_SESSION['cart'][$index]['quantity'] += $quantity;
                $item_exists = true;
                break;
            }
        }

        
        if (!$item_exists) {
            $_SESSION['cart'][] = $new_cart_item;
        }
    }
  ?>


<br>
    <div class="d-grid gap-2 col-6 mx-auto">
      <a href="cart.php" class="btn btn-secondary" type="button" >Check Orders Here</a>
    </div>
    <br><br>
  <div class="footer">
    <footer>
      <p>@2024. All rights reserved.</p>
    </footer>
  </div>

  <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
