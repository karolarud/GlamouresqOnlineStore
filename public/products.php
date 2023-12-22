<?php require_once '../templates/header.php';
?>
<!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_default&stacked=h-->
<head>
    <title>Bootstrap Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<div class="jumbotron text-center">
    <h1>Our Jewellery</h1>
    <p><em>Please check our selection of bespoke jewellery!</em></p>
</div>

<center>

<a href="rings.php"><img src="img/rings_banner.jfif" alt="Rings" onmouseover="this.src='img/rings_banner_hover.jpg';" onmouseout="this.src='img/rings_banner.jfif';" width="700px"
                         height="auto"><br>
    <a href="bracelets.php"><img src="img/bracelets_banner.jfif" alt="Bracelets" onmouseover="this.src='img/bracelets_banner_hover.jpg';" onmouseout="this.src='img/bracelets_banner.jfif';"width="700px"
                                 height="auto"><br>
        <a href="necklaces.php"><img src="img/necklaces_banner.jfif" alt="Necklaces" onmouseover="this.src='img/necklaces_banner_hover.jpg';" onmouseout="this.src='img/necklaces_banner.jfif';"width="700px"
                                     height="auto"><br>
            <a href="earrings.php"><img src="img/earrings_banner.jfif" alt="Earrings" onmouseover="this.src='img/earrings_banner_hover.jpg';" onmouseout="this.src='img/earrings_banner.jfif';"width="700px"
                                         height="auto">


</center>
<br><br>
<?php require_once '../templates/footer.php';?>
