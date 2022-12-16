<?php 
include "dbconnect.php";

if(isset($_POST['qsubmit'])) {
    $FName = $_POST['qfname'];
    $LName = $_POST['qlname'];
    $Email = $_POST['qemail'];
    $Query = $_POST['query'];
    
    $sql_query = " INSERT INTO querytable (email,first_name,last_name,query) 
    VALUES ('$Email','$FName','$LName','$Query')";
    
    if (mysqli_query($con,$sql_query))
     {
       
    header('Location: squadselect.php');
    echo "Submitted Successfully !! " ;
     }
     else
     {
         echo "Error: ". $sql . "" . mysqli_error($con);
     }
     
    }
       mysqli_close($con);
    
    ?>