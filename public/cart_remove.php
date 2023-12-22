<?php
    require 'connection.php';
    session_start();
    $itemCode=$_GET['itemCode'];
    $userId=$_SESSION['userId'];
    $delete_query="delete from users_products where userId='$userId' and itemCode='$itemCode'";
    $delete_query_result==$connection->prepare("SELECT * FROM users_products WHERE itemCode=?");
    header('location: cart.php');
?>