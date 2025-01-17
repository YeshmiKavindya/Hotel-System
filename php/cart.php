<?php
session_start();  // Start the session to access cart data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar code here -->

  <div class="row" style="padding: 35px;">
    <h3>Your Cart</h3>

    <?php
      // Check if the cart is not empty
      if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
          echo "<table class='table'>
                  <thead>
                      <tr>
                          <th>Item Name</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Total</th>
                          <th>Remove</th>
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
                      <td><a href='remove_from_cart.php?id={$cart_item['id']}' class='btn btn-danger'>Remove</a></td>
                    </tr>";
          }

          echo "</tbody>
                </table>";
          echo "<h4>Total: \$" . $total_price . "</h4>";
          echo "<a href='checkout.php' class='btn btn-success'>Proceed to Checkout</a>";

      } else {
          echo "<p>Your cart is empty.</p>";
      }
    ?>
  </div>

  <div class="footer">
    <footer>
      <p>@2024. All rights reserved.</p>
    </footer>
  </div>

  <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
