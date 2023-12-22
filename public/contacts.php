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
        <h1>Contact Us</h1>
        <p><em>Let us know if you have any questions</em></p>
    </div>

    <title>Contact Us</title>
    <style>
        h2, p {
            margin: 0;
        }

        #container main
        {
            float:left;
            width: 50%;
            padding: 0em 0em 2em 4em;
        }
        #container main p
        {
            margin: 0;
            text-align: center;
            font-size: 18px;

            border-left: 1px solid gray;
        }

        #container aside
        {
            float:right;
            width:47.2%;
            margin: 0 3em 2em 0 ;
        }
    </style>

<aside>
   <img class="banner-img" src="img/banner_contact2.jpg" alt="Banner" width="100%" height="auto">

    <!--<h2>Status: You are logged in
    <?php echo $_SESSION['Username'] ?? ''; ?>
    </h2>
            <p class="lead">This is where we will put the logout button</p>

            <form action="logout.php"  method="post" name="Logout_Form" class="form-signin">
                <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
            </form>-->
</aside>
<main>
    <h2>Submit an online enquiry</h2>

    <form action="contacts_form.php" method="post">

        <p><br><br><br><b>First name:</b>
            <input type="text" size="45" name="firstname" required="required"> <br><br>
            <b>Last name:</b>
            <input type="text" size="45" name="lastname"required="required"> <br><br>
            <b>E-mail:</b>
            <input type="email" size="49" name="email"required="required"> <br><br>
            <b>Phone:</b>
            <input type="tel" size="49" name="phone"required="required"> <br><br><br><br>
            <b>Message:</b><br><br>
            <textarea name="Text1" cols="55" rows="11"></textarea>
            <br><br><br>
            <b>Please select your preferred method of communication:</b><br> <br>
            <input type="radio" name="comm" value="phone" checked="checked"> Phone
            <input type="radio" name="comm" value="email"> E-mail
            <input type="radio" name="comm" value="text"> Text <br><br>


            <input class="search" type="submit" name="submit" value="Submit This Form"><br><br><br></p>

    </form>

</main>

<?php require_once '../templates/footer.php';?>