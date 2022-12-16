<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="center">
<form name="myform" method="post" action="register.php">
        <div class="text-field">
            <input type="text" name="regfname" id="reg_fname" required>
            <span></span>
            <label>First Name : </label>
        </div>
        <div class="text-field">
            <input type="text" name="reglname" id="reg_lname" required>
            <span></span>
            <label>Last Name : </label>
        </div>
        <div class="text-field">
            <input type="text" name="regemail" id="reg_email" required>
            <span></span>
            <label>Email : </label>
        </div>
        <div class="text-field">
            <input type="password" name="regpassword" id="reg_password" required>
            <span></span>
            <label>Password : </label>
        </div>
        <input type="submit" name="register" value="Register">
        
    </form>
    <br>

</div>
    
</body>
</html>
<?php 
include "dbconnect.php";

if(isset($_POST['register'])) {
    $FName = $_POST['regfname'];
    $LName = $_POST['reglname'];
    $Email = $_POST['regemail'];
    $Password = $_POST['regpassword'];
    $usertablename=strtok($Email, '@');
    mysqli_query($con,"CREATE TABLE ".$usertablename." (id VARCHAR(30), name VARCHAR(30))");

    $sql_query = " INSERT INTO users (email,first_name,last_name,user_password) 
    VALUES ('$Email','$FName','$LName','$Password')";
    
    if (mysqli_query($con,$sql_query))
     {
      echo "Registered Successfully !! " ;
     }
     else
     {
         echo "Error: ". $sql . "" . mysqli_error($con);
     }
     
    }
       mysqli_close($con);
    
    ?>