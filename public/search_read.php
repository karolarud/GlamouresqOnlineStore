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
    <h1>Search</h1>
    <p><em>Please check our selection of bespoke jewellery!</em></p>
</div>


<title>Search</title>
<style>
   th, td, h2, h3 {
        border: 2px solid black;
        padding: 10px;
       text-align: center;
    }
   table.center {
        margin-left: auto;
        margin-right: auto;
    }

   .container {
        position: relative;
        text-align: center;
        color: black;
        width: 100%;
       margin-bottom: 2em;
    }

   .centered {
       position: absolute;
       top: 50%;
       left: 50%;
       transform: translate(-50%, -50%);}
   .top-left {
       position: absolute;
       top: 0%;
       left: 17%;
       text-align: center;
   }
</style>

<body>

<?php
if (isset($_POST['submit'])) {
try {
require "../common.php";
require_once '../src/DBconnect.php';
$sql = "SELECT * FROM products WHERE itemName = :itemName";
$itemName = $_POST['itemName'];
$statement = $connection->prepare($sql);
$statement->bindParam(':itemName', $itemName, PDO::PARAM_STR);
$statement->execute();
$result = $statement->fetchAll();
} catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
}
}

?>

<div class="container">
<img class="banner-img" src="../public/img/banner_search.png" alt="Banner" width="100%" height="auto">
    <div class="top-left">
        <?php if (isset($_POST['submit'])) {
        if ($result && $statement->rowCount() > 0) {
        ?>
        <h2>Results</h2>

        <table class="center">
            <thead>
            <tr>

                <th>Product Code</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Units Available</th>
                <th>Price</th>
                <th>Photo</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $row) { ?>
                <tr>
                    <th><?php echo escape($row["itemCode"]); ?></th>
                    <th><?php echo escape($row["itemName"]); ?></th>
                    <th><?php echo escape($row["description"]); ?></th>
                    <th><?php echo escape($row["category"]); ?></th>
                    <th><?php echo escape($row["qtyOnHand"]); ?></th>
                    <th><?php echo escape($row["price"]); ?></th>
                    <th><img src="/sites/GlamouresqOnlineStore/public/img/<?php echo escape($row["photo"]); ?>" class="img-rounded"> </th>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <?php } else { ?>
            <h2>No results found for <?php echo escape($_POST['itemName']); ?> !!</h2>
        <?php }
        } ?>
    </div>
    <div class="centered">
        <h3>Find product based on product name</h3>
        <br>
        <form method="post">
            <label for="itemName">Search</label>
            <input type="text" id="itemName" name="itemName">
            <input type="submit" name="submit" value="View Results">
        </form>

        <a href="index.php">Back to home</a></div>
</div>


<?php require_once '../templates/footer.php';?>
