<?php
$db= $con;
$loginemail = $_SESSION['loginemail'];
$tableName=strtok($loginemail, '@');
$columns= ['name'];
$loginemail = $_SESSION['loginemail'];
   //   $usertablename=strtok($loginemail, '@');
    //  $tableexists=;
// $tableexists=mysqli_query($con,"SELECT * FROM ".$tableName." WHERE 1");
// if($tableexists==TRUE){
$fetchDatateam = fetch_data_team($db, $tableName, $columns);
function fetch_data_team($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
// $columnName = implode(", ", $columns);
$query = "SELECT name FROM $tableName";
$result = $db->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
// }
// else {
//    $msg= "No Data Found"; 
// }
?>