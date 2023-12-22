<?php

    require '../config.php';
    session_start();
    $Firstname= mysqli_real_escape_string($_POST['Firstname']);
    $Surname= mysqli_real_escape_string($_POST['Surname']);
    $Email=mysqli_real_escape_string($con,$_POST['Email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
        if(!preg_match($regex_email,$Email)){
        echo "Incorrect email. Redirecting you back to registration page...";
        ?>
        <!--https://www.w3schools.com/tags/tag_meta.asp-->
        <meta http-equiv="refresh" content="2;url=create_form.php" />
        <?php
    }
    $Username= mysqli_real_escape_string($con,$_POST['Username']);
    $Password=md5(md5(mysqli_real_escape_string($con,$_POST['Password'])));
    if(strlen($Password)<6){
        echo "Password should have at least 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=create_form.php" />
        <?php
    }
    $Address1=escape($new_user,$_POST['Address1']);
    $Address2=mysqli_real_escape_string($con,$_POST['Address2']);
    $City=mysqli_real_escape_string($con,$_POST['City']);
    $Postcode=mysqli_real_escape_string($con,$_POST['Postcode']);

    $duplicate_user_query="select id from users where email='$Email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: create_form.php');
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=create_form.php" />
        <?php
    }else{
        $user_registration_query="insert into users(Firstname,Surname,Email,Username,Password,Address1,Address2,City,Postcode) values ('$Firstname','$Surname','$Email','$Username''$Password','$Address1','$Address2','$City','$Postcode')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        echo "User successfully registered";
        $_SESSION['Email']=$Email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id']=mysqli_insert_id($con);
        //header('location: products.php');  //for redirecting
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }

?>