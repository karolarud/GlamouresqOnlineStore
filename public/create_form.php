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
    <h1>Register here</h1>
    <p><em>Please insert your details</em></p>
</div>

<?php

if (isset($_POST['submit'])) {
    require "../common.php";
    try {
//$connection = new PDO($dsn, $username, $password, $options);
        require_once '../src/DBconnect.php';
        $new_user = array(
            "Firstname" => escape($_POST['Firstname']),
            "Surname" => escape($_POST['Surname']),
            "Email" => escape($_POST['Email']),
            "Username" => escape($_POST['Username']),
            "Password" => escape($_POST['Password']),
            "Address1" => escape($_POST['Address1']),
            "Address2" => escape($_POST['Address2']),
            "City" => escape($_POST['City']),
            "Postcode" => escape($_POST['Postcode'])
        );
        $sql = sprintf( "INSERT INTO %s (%s) values (%s)", "users", implode(", ",
            array_keys($new_user)), ":" . implode(", :", array_keys($new_user)) );

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_POST['submit']) && $statement)
{
      echo "<p style='color:red; font-size:35px; text-align: center;'><b>User " . $new_user['Username']. " successfully added</p></b>";
?>
    <!--https://www.w3schools.com/tags/att_meta_http_equiv.asp refresh content after 5 seconds and redirect to products page-->
    <meta http-equiv="refresh" content="5; url=products.php"/>
<?php }
?>
<div class="container">
    <div class="row">
        <!--https://w3schools.com/bootstrap4/bootstrap_grid_system.asp-->
        <div class="col-xs-6 col-xs-offset-3">
            <h2><b>Create account</b></h2>
            <form method="post" action="">
                <div class="form-group">
                    <input type="text" class="form-control" name="Firstname" placeholder="Firstname" required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Surname" placeholder="Surname" required="true">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="Email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Username" placeholder="Username" required="true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="Password" placeholder="Password" required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Address1" placeholder="Address Line 1" required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Address2" placeholder="Address Line 2" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="City" placeholder="City" required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Postcode" placeholder="Postcode" required="true">
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit the form" name="submit">
                </div><br>
                <div class="form-group">
                    <a href="index.php">Back to home</a><br><br>
                </div><br>
</form>

            </div>
    </div>
</div>

<?php require_once '../templates/footer.php';?>

