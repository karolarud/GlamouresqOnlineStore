<?php
require_once '../templates/header.php';
session_start();

if ($_SESSION['Active'] == false) { /* Redirects user to Login_admin.php if not logged in. Remember, we set $_SESSION['Active'] == true in login.php*/
    header("location:login_admin.php");
    exit;
}
/*the code inside these php tags (i.e. the 5 lines of code above) are required for every page you wish to be accessible only after login*/
?>
    <!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_default&stacked=h-->
    <head>
        <title>Bootstrap Example</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <div class="jumbotron text-center">
        <h1>Users info</h1>
        <p><em>Admin to update users details below..</em></p>
    </div>
<?php
    try {
        require "../common.php";
        require '../src/DBconnect.php';
        $sql = "SELECT * FROM users ";
        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?>
     <style>
        table, th, td {
            border: 2px solid black;
            padding: 5px;
        }
    </style>

    <h1>You are logged in </h1>
    <div class="container">
        <div class="col-s-16 col-s-offset-3" style="font-size:20px;">
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Surname</th>
            <th>Email Address</th>
            <th>Username</th>
            <th>Address1</th>
            <th>Address2</th>
            <th>City</th>
            <th>Postcode</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row) : ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><?php echo escape($row["firstname"]); ?></td>
                <td><?php echo escape($row["surname"]); ?></td>
                <td><?php echo escape($row["email"]); ?></td>
                <td><?php echo escape($row["username"]); ?></td>
                <td><?php echo escape($row["address1"]); ?></td>
                <td><?php echo escape($row["address2"]); ?></td>
                <td><?php echo escape($row["city"]); ?></td>
                <td><?php echo escape($row["postcode"]); ?></td>
                <td><a href="details_update.php?id=<?php echo escape($row["id"]); ?>">Edit</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
            <br><br>
<center>
    <form action="logout.php"  method="post" name="Logout_Form" class="form-signin">
        <button name="Submit" value="Logout" class="button" type="submit" style=' font-size:30px; color: blueviolet'>Log out</button><br>

    </form>
</center>
            <br><br>
    </div>
    </div>



<?php require "../templates/footer.php";?>