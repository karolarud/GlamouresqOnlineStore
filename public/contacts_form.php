<?php require_once '../templates/header.php';
?>
<!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_default&stacked=h-->
<head>
    <title>Bootstrap Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    section {
        text-align: center;
        font-size: 20px;
        margin-bottom: 2em;
            }
</style>

<div class="jumbotron text-center">
    <h1>Contact us</h1>
    <p><em>Thank you for submitting your query!</em></p>
</div>

<section>
<p><b>
<br>
<br>
<?php

$firstname = $_REQUEST['firstname']; //or post
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];

if (($firstname!= null) && ($lastname!= null))
{
	echo "<br><br>Thank You for contacting us $firstname $lastname!<br><br>";
} 

if (($email!= null) || ($phone!= null))
	
{
	$msg="Your e-mail is: $email <br><br>";
	$msg.="Your phone number is: $phone <br><br>";
	echo ($msg);
}
echo "<br><br>We will get back to you as soon as we can!<br><br>";
?>
<br>
<br>
    </b></p>

</section>

<?php require_once '../templates/footer.php';?>