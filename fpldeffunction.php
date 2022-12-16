<?php
$db= $con;
$tableName="playerinfo";
$columns= ['name', 'pos','club','goal','assist','clsh','gp'];
$fetchDatadef = fetch_data_def($db, $tableName, $columns);
function fetch_data_def($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." WHERE pos='CB' OR pos='RB' OR pos='LB'OR pos='RWB' OR pos='LWB' ORDER BY clsh DESC";
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
?>