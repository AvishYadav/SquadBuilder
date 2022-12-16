<?php


include("dbconnect.php");
// include("playerfunction.php");

// include("loginvalidate.php");

// echo $useremail;   
if(isset($_POST['sub']))  
{  
   $loginemail = $_SESSION['loginemail'];
$checkbox1=$_POST['techno'];  
$usertablename=strtok($loginemail, '@');
$chk="";  
// $tableexists=mysqli_query($con,"SELECT * FROM ".$usertablename." WHERE 1");
$tableexists=mysqli_query($con,"SHOW TABLES LIKE '".$usertablename."'");
// $tableexists=mysqli_query($con,"IF (EXISTS (SELECT * 
// FROM INFORMATION_SCHEMA.TABLES 
// WHERE TABLE_SCHEMA = 'footballsquadbuilder' 
// AND  TABLE_NAME = '".$usertablename."'))");
if($tableexists == FALSE){
   mysqli_query($con,"CREATE TABLE ".$usertablename." (id VARCHAR(30), name VARCHAR(30))");
foreach($checkbox1 as $chk1)  
   {  
      // $chk .= $chk1.",";  
      $chk = $chk1; 
      if( $chk != NULL) 
      {
        $in_ch=mysqli_query($con,"INSERT INTO ".$usertablename."(id, name) VALUES ('$loginemail','$chk')");
      } 
   }
}
else{
   mysqli_query($con,"DELETE FROM ".$usertablename);
   foreach($checkbox1 as $chk1)  
   {  
      // $chk .= $chk1.",";  
      $chk = $chk1; 
      if( $chk != NULL) 
      {
        $in_ch=mysqli_query($con,"INSERT INTO ".$usertablename."(id, name) VALUES ('$loginemail','$chk')");
      } 
   }
}

 
  
if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>'; 
      header('Location: fpl.php');
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   } 
   

}  

if(isset($_POST['sub_cf'])) {
   session_unset();   // destroy the session 
   //WE CAN ADD A BUTTON THAT ALLOWS THE USER TO 
   //CAHNGE THE FORMATION AND WHICH WILL DESTROY THE SESSION
   header('Location: squadselect.php'); 
}


?> 