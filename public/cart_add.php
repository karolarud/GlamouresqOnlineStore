<?php
    require '../src/DBconnect.php';

    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $add_to_cart_query="insert into users_products (userId,itemCode,status) values ('$userId','$itemCode','Added to cart')";
    $add_to_cart_result=$connection->prepare("SELECT * FROM users_products WHERE itemCode=?");
    header('location: cart.php');
?>