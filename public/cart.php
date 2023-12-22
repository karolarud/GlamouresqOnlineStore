<?php
require_once '../templates/header.php';
session_start();

if ($_SESSION['Active'] == false) { /* Redirects user to Login.php if not logged in. Remember, we set $_SESSION['Active'] == true in login.php*/
    header("location:login.php");
    exit;
}
?>
    <!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_default&stacked=h-->
    <head>
        <title>Bootstrap Example</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <div class="jumbotron text-center">
        <h1>Shopping cart</h1>
        <p><em>Review your order..</em></p>
    </div>

<?php
    try {
        require "../common.php";
        require '../src/DBconnect.php';
        $sql = "SELECT itemCode, itemName, price FROM users_products AS up INNER JOIN products AS p ON up.itemCode=p.itemCode ";
        $sql_result = $connection->prepare($sql);
        $users_products_result = $connection->prepare("SELECT * FROM users_products WHERE itemCode=?");
        $itemCode = 0;
        $users_products_result->execute([$itemCode]);
        $resultExists = $users_products_result->fetchColumn();
        $sum=0;
        $sql_result->execute();
        $result = $sql_result->fetchAll();
        if($resultExists==0){
            //echo "Add items to cart first.";
            ?>
            <script>
                window.alert("No items in the cart!!");
            </script>
            <?php
        }else{
            while($row=$users_products_result->fetch()){
                echo $sum=$sum+$row['price'];
            }
        }

    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?>
    <div class="container">
        <table class="table table-bordered table-striped">
            <tbody>
            <tr>
                <th>Item Code</th><th>Item Name</th><th>Price</th><th></th>
            </tr>

            <tr>
                <th></th><th>Total</th><th>Rs <?php echo $sum;?>/-</th><th><a href="success.php?id=<?php echo $userId?>" class="btn btn-primary">Confirm Order</a></th>
            </tr>
            </tbody>
        </table>
    </div>
    <?php foreach ($result as $row) : ?>
        <tr>
            <td><?php echo escape($row["itemCode"]); ?></td>
            <td><?php echo escape($row["itemName"]); ?></td>
            <td><?php echo escape($row["price"]); ?></td>
        </tr>
    <?php endforeach; ?>

        <br><br><br>
    <center>
        <form action="logout.php"  method="post" name="Logout_Form" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit" style=' font-size:30px; color: blueviolet'>Log out</button><br>

        </form>
    </center>
    <br><br>


<?php require_once '../templates/footer.php';?>