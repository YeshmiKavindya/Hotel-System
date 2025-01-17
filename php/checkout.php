<?php
session_start();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  

  <div class="container" style="padding: 35px;">
    <h3>Checkout</h3>

    <?php
      
      if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
          echo "<table class='table'>
                  <thead>
                      <tr>
                          <th>Item Name</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Total</th>
                      </tr>
                  </thead>
                  <tbody>";

          $total_price = 0;
          foreach ($_SESSION['cart'] as $cart_item) {
              $total_price += $cart_item['price'] * $cart_item['quantity'];
              echo "<tr>
                      <td>{$cart_item['name']}</td>
                      <td>\${$cart_item['price']}</td>
                      <td>{$cart_item['quantity']}</td>
                      <td>\$" . ($cart_item['price'] * $cart_item['quantity']) . "</td>
                    </tr>";
          }

          echo "</tbody>
                </table>";
          echo "<h4>Total: \$" . $total_price . "</h4>";
      } else {
          echo "<p>Your cart is empty. Please add items to your cart before proceeding.</p>";
      }
    ?>

    <h4>Shipping Information</h4>
    <form method="POST" action="process_checkout.php">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Shipping Address</label>
            <textarea class="form-control" id="address" name="address" required></textarea>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-success">Proceed to Payment</button>
    </form>

  </div>

  <div class="footer">
    <footer>
      <p>@2024. All rights reserved.</p>
    </footer>
  </div>

  <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
