<?php
include("dbconnect.php");
// include("playerfunction.php");
include("fplfwdfunction.php");
include("fplmidfunction.php");
include("fpldeffunction.php");
include("fplgkfunction.php");


?>
<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>PlayerInfo</title>
<style>
  body{
    background: linear-gradient(120deg,aqua,indigo);
    height: 100%;
  }
  .cards{
    /* background-color: #ffccff; */
    /* border: 1px solid;  */
    /* height: 415px;  */
    /* width: 150px;  */
    text-align: justify; 
    margin: 5px;
    border-radius:15px;
  }
  .con{
    background: transparent;
    display: flex;
}
  </style>
</head>
<body>
<form name="" method="post" action="fplfunction.php">
<div class="container">
<h2>Make Your Dream Team</h2> 
  <p>Type Club name or Player name to filter the table </p>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
 <div class="row">
   
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <h3>Forwards</h3>
     <table class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>Name</th>
         <th>Position</th>
         <th>Club</th>
         <th>Goal</th>
         <th>Assist</th>
         <th>CleanSheet</th>
         <th>MatchPlayed</th>
    </thead>
    <tbody class="myTable">
  <?php
      if(is_array($fetchDatafwd)){      
      $sn=1;
      foreach($fetchDatafwd as $data){
    ?>
      <tr><label>
      <td><?php echo $sn; ?></td>
      <td><input type="checkbox" class="player-fwd-limit" name="techno[]" value="<?php echo $data['name']??''; ?>"> <?php echo $data['name']??''; ?></td>
      <td><?php echo $data['pos']??''; ?></td>
      <td><?php echo $data['club']??''; ?></td>
      <td><?php echo $data['goal']??''; ?></td>
      <td><?php echo $data['assist']??''; ?></td>
      <td><?php echo $data['clsh']??''; ?></td>
      <td><?php echo $data['gp']??''; ?></td></label>
      <!-- <td><input type="checkbox" name="techno[]" value="javascript"></td> -->
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchDatafwd; ?>
  </td>
    <tr>
    <?php
    }?>
    <?php
    
    ?>
    </tbody>
     </table>
     <h3>Mid-Fielders</h3>
     <table class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>Name</th>
         <th>Position</th>
         <th>Club</th>
         <th>Goal</th>
         <th>Assist</th>
         <th>CleanSheet</th>
         <th>MatchPlayed</th>
    </thead>
    <tbody class="myTable">
  <?php
      if(is_array($fetchDatamid)){      
      $sn=1;
      foreach($fetchDatamid as $data){
    ?>
      <tr><label>
      <td><?php echo $sn; ?></td>
      <td><input type="checkbox" class="player-mid-limit" name="techno[]" value="<?php echo $data['name']??''; ?>"> <?php echo $data['name']??''; ?></td>
      <td><?php echo $data['pos']??''; ?></td>
      <td><?php echo $data['club']??''; ?></td>
      <td><?php echo $data['goal']??''; ?></td>
      <td><?php echo $data['assist']??''; ?></td>
      <td><?php echo $data['clsh']??''; ?></td>
      <td><?php echo $data['gp']??''; ?></td></label>
      <!-- <td><input type="checkbox" name="techno[]" value="javascript"></td> -->
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchDatamid; ?>
  </td>
    <tr>
    <?php
    }?>
    <?php
    
    ?>
    </tbody>
     </table>
     <h3>Defenders</h3>
     <table class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>Name</th>
         <th>Position</th>
         <th>Club</th>
         <th>Goal</th>
         <th>Assist</th>
         <th>CleanSheet</th>
         <th>MatchPlayed</th>
    </thead>
    <tbody class="myTable">
  <?php
      if(is_array($fetchDatadef)){      
      $sn=1;
      foreach($fetchDatadef as $data){
    ?>
      <tr><label>
      <td><?php echo $sn; ?></td>
      <td><input type="checkbox" class="player-def-limit" name="techno[]" value="<?php echo $data['name']??''; ?>"> <?php echo $data['name']??''; ?></td>
      <td><?php echo $data['pos']??''; ?></td>
      <td><?php echo $data['club']??''; ?></td>
      <td><?php echo $data['goal']??''; ?></td>
      <td><?php echo $data['assist']??''; ?></td>
      <td><?php echo $data['clsh']??''; ?></td>
      <td><?php echo $data['gp']??''; ?></td></label>
      <!-- <td><input type="checkbox" name="techno[]" value="javascript"></td> -->
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchDatadef; ?>
  </td>
    <tr>
    <?php
    }?>
    <?php
    
    ?>
    </tbody>
     </table>
     <h3>Goal Keepers</h3>
     <table class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>Name</th>
         <th>Position</th>
         <th>Club</th>
         <th>Goal</th>
         <th>Assist</th>
         <th>CleanSheet</th>
         <th>MatchPlayed</th>
    </thead>
    <tbody class="myTable">
  <?php
      if(is_array($fetchDatagk)){      
      $sn=1;
      foreach($fetchDatagk as $data){
    ?>
      <tr><label>
      <td><?php echo $sn; ?></td>
      <td><input type="checkbox" class="player-gk-limit" name="techno[]" value="<?php echo $data['name']??''; ?>"> <?php echo $data['name']??''; ?></td>
      <td><?php echo $data['pos']??''; ?></td>
      <td><?php echo $data['club']??''; ?></td>
      <td><?php echo $data['goal']??''; ?></td>
      <td><?php echo $data['assist']??''; ?></td>
      <td><?php echo $data['clsh']??''; ?></td>
      <td><?php echo $data['gp']??''; ?></td></label>
      <!-- <td><input type="checkbox" name="techno[]" value="javascript"></td> -->
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchDatagk; ?>
  </td>
    <tr>
    <?php
    }?>
    <?php
    
    ?>
    </tbody>
     </table>
     <?php
    //  $loginemail = $_SESSION['loginemail'];
    //  $usertablename=strtok($loginemail, '@');
    // //  $tableexists=;
    //  if(mysqli_query($con,"SELECT * FROM ".$usertablename." WHERE 1")==TRUE){include("fplteamdatashow.php");}
    include("fplteamdatashow.php");
     ?>
   </div>
</div>

<section class="con">

<div class="cards">
  
<script>
$(document).ready(function(){
  $(".form-control").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

// var limit = 3;
// $('input.single-checkbox').on('change', function(evt) {
//    if($("input[class='single-checkbox']:checked").length >= limit) {
//        this.checked = false;
//    }
// });

var limitfwd = '<?php echo $_SESSION['fwd'] ?>';
$('input.player-fwd-limit').on('change', function(evt) {
   if($("input[class='player-fwd-limit']:checked").length > limitfwd) {
       this.checked = false;
   }
});

var limitmid = '<?php echo $_SESSION['mid'] ?>';
$('input.player-mid-limit').on('change', function(evt) {
   if($("input[class='player-mid-limit']:checked").length > limitmid) {
       this.checked = false;
   }
});

var limitdef = '<?php echo $_SESSION['def'] ?>';
$('input.player-def-limit').on('change', function(evt) {
   if($("input[class='player-def-limit']:checked").length > limitdef) {
       this.checked = false;
   }
});

var limitgk = '1';
$('input.player-gk-limit').on('change', function(evt) {
   if($("input[class='player-gk-limit']:checked").length > limitgk) {
       this.checked = false;
   }
});


</script>
<input type="submit" value="Submit" name="sub" id="sub">
</div>

<div class="cards">
<form method="post" action="changeformationfunction.php">
<div class="flex space-x-2 justify-center">
  <!-- <a href="squadselect.php"> -->
  <!-- <button
    type="submit"
    name="ChangeForm"
    data-mdb-ripple="true"
    data-mdb-ripple-color="light"
    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
  >Change Formation</button> -->
<!-- </a> -->
<input type="submit" value="Change Formation" name="sub_cf" id="sub_cf">
</div>
</form>

</section>



</div>

<br>

</body>
</html>
