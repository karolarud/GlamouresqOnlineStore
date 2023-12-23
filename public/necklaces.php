<?php require_once '../templates/header.php';
require 'lib/functions.php';
$products = get_products_necklaces();
$productsCount = count($products);
?>
    <!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_default&stacked=h-->
    <head>
        <title>Bootstrap Example</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <div class="jumbotron text-center">
        <h1>Necklaces</h1>
        <p>Please check our selection of <?php echo $productsCount ?> necklaces styles!</p>
    </div>

    <div class="container text-center">
        <div class="row">
            <?php  foreach ($products as $row) {?>

                <style>
                    .col-sm-4 {
                        padding: 10px;
                    }
                </style>
                <div class="col-sm-4">

                    <h3><?php echo $row['itemCode']; ?></h3>

                    <h4><b><?php echo $row['itemName'];?></b></h4>

                    <img src="/sites/GlamouresqOnlineStore/public/img/<?php echo $row['photo']; ?>" class="img-rounded" height="280" width="280">

                    <p><?php echo $row['description']; ?></p>

                    <blockquote class="details">
                        <p>
                            <?php
                            if (!array_key_exists('qtyOnHand', $row) || $row['qtyOnHand'] == '') {
                                echo 'Unknown';
                            } elseif ($row['qtyOnHand'] == 'hidden') {
                                echo '(contact us for details)';
                            } else {
                                echo $row['qtyOnHand'];echo " in stock |";
                            }
                            ?>
                            &euro; <?php echo $row['price']; ?>
                        </p>
                    </blockquote>
    <p><a class="btn btn-primary btn-lg" href="cart_add.php?id=<?echo escape($row["itemCode"]); ?>Add to cart &raquo;</a></p>

                </div>
            <?php } ?>

        </div>
    </div>

<?php require_once '../templates/footer.php';?>