<?php require_once '../templates/header.php';
?>
<!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_default&stacked=h-->
<head>
    <title>Bootstrap Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<title>Home page</title>
<div class="jumbotron text-center">
<h1>Welcome to GLAMOURESQ</h1>
    <p><em>Fall in love with our Jewellery</em></p>
</div>

<div id="bannerImage">
    <div class="container">
        <center>
            <div id="bannerContent">
                <p class="im">We sell beautiful styles</p>
                <a href="products.php" class="btn btn-danger">Shop Now</a>
            </div>
        </center>
    </div>
</div>

    <div class="menu">
<h3>Shop by collection</h3>
        <center>
            <a href="rings.php"><img src="img/rings_banner.jfif" alt="Rings" onmouseover="this.src='img/rings_banner_hover.jpg';" onmouseout="this.src='img/rings_banner.jfif';" >
                <a href="bracelets.php"><img src="img/bracelets_banner.jfif" alt="Bracelets" onmouseover="this.src='img/bracelets_banner_hover.jpg';" onmouseout="this.src='img/bracelets_banner.jfif';"><br>
                    <a href="necklaces.php"><img src="img/necklaces_banner.jfif" alt="Necklaces" onmouseover="this.src='img/necklaces_banner_hover.jpg';" onmouseout="this.src='img/necklaces_banner.jfif';">
                        <a href="earrings.php"><img src="img/earrings_banner.jfif" alt="Earrings" onmouseover="this.src='img/earrings_banner_hover.jpg';" onmouseout="this.src='img/earrings_banner.jfif';"><br>

        </center>
    </div>
    <div>
        <br> <br>
<h3>Bestsellers</h3>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div  class="thumbnail">
                        <a href="earrings.php">
                            <img src="img/earrings_diamond.jfif" alt="diamond earrings">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Diamond Earrings</p>
                                <p>Yellow Gold 2-Carat Diamond Stud Earrings</p>
                                <p>€ 3800.00</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="necklaces.php">
                            <img src="img/necklace_pearl.jfif" alt="Pearl necklace">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Pearl Necklace</p>
                                <p>Volume Up 4 Layer Pearl Necklace</p>
                                <p>€ 1200.00</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="rings.php">
                            <img src="img/ring_pearl.jfif" alt="Asymmetrical Yellow Gold Pearl Ring">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Pearl Ring</p>
                                <p>Asymmetrical Yellow Gold Pearl Ring</p>
                                <p>€ 1000.00</p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
    </div>
        <br>

        <?php require_once '../templates/footer.php';?>
