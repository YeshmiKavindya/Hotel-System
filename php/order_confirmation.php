<?php
session_start();  


if (!isset($_SESSION['order'])) {
    
    header('Location: checkout.php');  
    exit();
}

$order = $_SESSION['order'];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  

  <div class="container" style="padding: 35px;">
    <h3>Order Confirmation</h3>

    <p><strong>Order ID:</strong> <?php echo $order['order_id']; ?></p>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($order['name']); ?></p>
    <p><strong>Shipping Address:</strong> <?php echo nl2br(htmlspecialchars($order['address'])); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($order['email']); ?></p>
    <p><strong>Status:</strong> <?php echo $order['status']; ?></p>

    <h4>Items Ordered</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach ($order['items'] as $item) {
                $item_total = $item['price'] * $item['quantity'];
                echo "<tr>
                        <td>{$item['name']}</td>
                        <td>\${$item['price']}</td>
                        <td>{$item['quantity']}</td>
                        <td>\${$item_total}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>

    <h4>Total Price: $<?php echo number_format($order['total_price'], 2); ?></h4>

    
    <a href="index.php" class="btn btn-primary">Return to Homepage</a>
  </div>

  <div class="footer">
    <footer>
      <p>@2024. All rights reserved.</p>
    </footer>
  </div>

  <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
