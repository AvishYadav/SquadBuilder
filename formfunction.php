<?php 
// $x=1;
// function myForm($x){
//   return $x;
// }
// global $x;
// $val=myform($x);
// echo $val;
function setForm(){
  global $val;
  if ($val==1){
    $a[]=array(4,3,3);
  }
  elseif ($val==2){
    $a[]=array(5,3,2); 
  }
  elseif ($val==3){
    $a[]=array(3,5,2);
} 
else{
  $a[]=array($val,9,9);
}

print_r($a);
}

?>