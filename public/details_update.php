<?php
require_once '../templates/header.php';

?>
<!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_default&stacked=h-->
<head>
    <title>Bootstrap Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    form {
        width: 20%;
        text-align: left;
        font-size: 18px;

    }
</style>

<div class="jumbotron text-center">
    <h1>Update details</h1>
    <p><em>Admin can edit customers info below..</em></p>
</div>
<?php
/**
 * Use an HTML form to edit an entry in the
 * users table.
 *
 */
require "../common.php";
if (isset($_POST['submit'])) {
    try {
        require_once '../src/DBconnect.php';
        $user =[
            "id" => escape($_POST['id']),
            "firstname" => escape($_POST['firstname']),
            "surname" => escape($_POST['surname']),
            "email" => escape($_POST['email']),
            "username" => escape($_POST['username']),
            "password" => escape($_POST['password']),
            "address1" => escape($_POST['address1']),
            "address2" => escape($_POST['address2']),
            "city" => escape($_POST['city']),
            "postcode" => escape($_POST['postcode']),
            "date" => escape($_POST['date'])
        ];
        $sql = "UPDATE users
 SET id = :id,
 firstname = :firstname,
 surname = :surname,
 email = :email,
 username = :username,
 password = :password,
 address1 = :address1,
 address2 = :address2,
 city = :city,
 postcode = :postcode
 WHERE id = :id";
        $statement = $connection->prepare($sql);
        $statement->execute($user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
if (isset($_GET['id'])) {
    try {
        require_once '../src/DBconnect.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = :id";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
} else {
    echo "Something went wrong!";
    exit;
}
?>


<?php if (isset($_POST['submit']) && $statement) : ?>
        <?php echo "<p style='color:red; font-size:35px; text-align: center;'><b>User " . escape($_POST['username']). " successfully updated!</p></b>";?>
<?php endif; ?>
<center>
<h2>Edit a user</h2>
<form method="post">
    <?php foreach ($user as $key => $value) : ?>
        <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
        <input type="text" size="35" name="<?php echo $key; ?>" id="<?php echo $key;
        ?>" value="<?php echo escape($value); ?>" <?php echo ($key === 'id' ?
            'readonly' : null); ?>>
    <br>
    <?php endforeach; ?>
    <input type="submit" name="submit" value="Submit">
    <br><br>
<b><a href="details.php">Back to Update Users Page</a></b>
    <br><br><br>
</form>
</center>

<?php require "../templates/footer.php"; ?>
