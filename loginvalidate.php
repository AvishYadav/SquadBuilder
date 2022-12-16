<?php
session_start(); 
?>

<?php
include "dbconnect.php";
//include "login.php";

if(isset($_POST['submit_button'])){

    //$loginemail = mysqli_real_escape_string($con,$_POST['login_email']);
    //$loginpassword = mysqli_real_escape_string($con,$_POST['login_password']);
    $loginemail = $_POST['email'];
    $loginpassword = $_POST['password'];
    //$loginemail = "avishjy@gmail.com";
    //$loginpassword = "12345";

    if ($loginemail != "" && $loginpassword != ""){

        $sql_query = "select count(*) as cntUser from users where email='".$loginemail."' and user_password='".$loginpassword."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            echo "Valid email and password";
            $_SESSION['loginemail'] = $loginemail;

            header('Location: fpl.php');
        }else{
            echo "Invalid email and password";
        }

    }

}