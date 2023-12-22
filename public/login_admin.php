<?php
//require_once '../src/DBconnect.php';
session_start();
require_once '../templates/header.php';
?>

<!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_default&stacked=h-->
<head>
    <title>Bootstrap Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<div class="jumbotron text-center">
    <h1>Admin log in</h1>
    <p><em>... to update users details</em></p>
</div>

<style>
    @import "css/php.css";
</style>
<title>Log in</title>

<?php
if (isset($_POST['Submit'])) {
    try {
        require_once '../src/DBconnect.php';
        $sql = "SELECT * FROM admin WHERE admin_Name = :admin_Name AND Password = :Password";
        $admin_Name = $_POST['admin_Name'];
        $Password = $_POST['Password'];
        $statement = $connection->prepare($sql);
        $statement->bindParam(':admin_Name', $admin_Name, PDO::PARAM_STR);
        $statement->bindParam(':Password', $Password, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetchAll();
    }
    catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_POST['Submit'])) {
    if ($result && $statement->rowCount() > 0) {
        $_SESSION['Active'] = true;
        echo "<p style='color:red; font-size:35px; text-align: center;'><b>Hello " . $_POST['admin_Name']. "!<br>Redirecting to our users update page..</p></b>";?>
        <!--https://www.w3schools.com/tags/att_meta_http_equiv.asp refresh content after 5 seconds and redirect to products page-->
        <meta http-equiv="refresh" content="5; url=details.php"/>
        <!--header("location:products.php");
        //exit;-->
    <?php } else {

        echo "<p style='color:red; font-size:35px; text-align: center;'><b>Incorrect Admin_Name or Password!</p></b>";
    }
}
/*if (isset($_POST['Submit'])) {
    if (($_SESSION['username'] == $username) && ($_POST['password'] == $password)) {
        /* Success: Set session variables and redirect to protected page */
/*$_SESSION['username'] = $username; //store Username to the session
$_SESSION['Active'] = true; //remember we can call a session what we like e.g. $_SESSION["newsession"]=$value;
//header("location:index.php"); /* 'header() is used to redirect the browser */
// exit; //we’ve just used header() to redirect to another page but we must terminate all current code so that it doesn’t run when we redirect
/* }}*/
?>

<body>

<div class="container">
    <!--https://w3schools.com/bootstrap4/bootstrap_grid_system.asp-->
    <div class="col-xs-6 col-xs-offset-3" style="font-size:20px;">
        <form action="" method="post" name="Login_Form" class="form-signin">

            <label for="inputUsername" >Admin Name</label>
            <input name="admin_Name" type="text" id="admin_Name" class="form-control" placeholder="admin_Name" required autofocus>
            <br>
            <label for="inputPassword">Password</label>
            <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me </label>
            </div>
            <button name="Submit" value="Login" class="button" type="submit">Log in</button><br><br><br><br>


        </form>
    </div>
</div><br><br>

</body>

<?php require_once '../templates/footer.php';?>
