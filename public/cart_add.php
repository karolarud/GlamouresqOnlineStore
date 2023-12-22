<?php
    require '../src/DBconnect.php';

    session_start();
    $itemCode=$_GET['itemCode'];
    $userId=$_SESSION['userId'];
    $add_to_cart_query="insert into users_products (userId,itemCode,status) values ('$userId','$itemCode','Added to cart')";
    $add_to_cart_result=$connection->prepare("SELECT * FROM users_products WHERE itemCode=?");
    header('location: cart.php');
?>