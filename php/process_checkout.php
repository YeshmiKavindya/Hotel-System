<?php
session_start();


if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
    
    header('Location: index.php');  
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'], $_POST['address'], $_POST['email'])) {
    
    
    $name = htmlspecialchars($_POST['name']);  
    $address = htmlspecialchars($_POST['address']);  
    $email = htmlspecialchars($_POST['email']);  

    
    $total_price = 0;
    foreach ($_SESSION['cart'] as $cart_item) {
        $total_price += $cart_item['price'] * $cart_item['quantity'];
    }

    
    $order_id = uniqid();  
    $order_details = [
        'order_id' => $order_id,
        'name' => $name,
        'address' => $address,
        'email' => $email,
        'total_price' => $total_price,
        'items' => $_SESSION['cart'],
        'status' => 'Pending'  
    ];

    
    $_SESSION['order'] = $order_details;

   
    unset($_SESSION['cart']);  

    
    header('Location: order_confirmation.php');
    exit();
} else {
   
    header('Location: checkout.php');
    exit();
}
?>
