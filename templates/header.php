<?php
//session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />


    <style>
    @import "css/nav.css";
    @import "css/root.css";
    @import "css/header_footer.css";
    @import "css/basic.css";
    </style>
</head>

<div id = "container">
    <header>
        <div class="bg-div">
            <a href="../public/index.php"><img class="logo-img" src="../public/img/glamouresq.jfif" alt="Glamouresq">
            </a>
            <nav>
                <div class="relative">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a>></li>
                        <li><a href="products.php">Our Jewellery</a>
                            <ul>
                                <li><a href="rings.php">Rings</a></li>
                                <li><a href="bracelets.php">Bracelets</a></li>
                                <li><a href="necklaces.php">Necklaces</a></li>
                                <li><a href="earrings.php">Earrings</a></li>
                            </ul>
                        <li><a href="search_read.php"><span class="glyphicon glyphicon-shopping-search"></span> Search</a></li>
                        <li><a href="contacts.php">Contact us</a></li>
                        <li><a href="cart.php">Shopping cart</a></li>
                        <li><a href="create_form.php">Sign up</a></li>
                        <li><a href="login.php"  method="post" name="Login_Form" class="form-signin">
                                Log in</a></li>
                        <li><a href="logout.php"  method="post" name="Logout_Form" class="form-signin">
                                Log out</a></li>
                        <li><a href="details.php">Users info</a></li>

                    </ul>
            </nav>
    </header>

