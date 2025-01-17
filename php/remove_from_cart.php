<?php
session_start();


if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $food_id = $_GET['id'];

   
    foreach ($_SESSION['cart'] as $index => $cart_item) {
        if ($cart_item['id'] == $food_id) {
            unset($_SESSION['cart'][$index]);
            break;
        }
    }

    
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}


header("Location: cart.php");
exit();
