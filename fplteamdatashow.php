<?php
include("fplteamdatashowfunction.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>PlayerInfo</title>
</head>
<body>
<div class="container">
<h2>Your Selected Team</h2> 
  <!-- <p>Type Club name or Player name to filter the table </p>
  <input class="form-control" id="myInput" type="text" placeholder="Search.."> -->
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>Name</th>
         <!-- <th>Position</th>
         <th>Club</th>
         <th>Goal</th>
         <th>Assist</th>
         <th>CleanSheet</th>
         <th>MatchPlayed</th> -->
    </thead>
    <tbody id="myTable">
  <?php
      if(is_array($fetchDatateam)){      
      $sn=1;
      foreach($fetchDatateam as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['name']??''; ?></td>
      <!-- <td><?php //echo $data['pos']??''; ?></td>
      <td><?php //echo $data['club']??''; ?></td>
      <td><?php //echo $data['goal']??''; ?></td>
      <td><?php //echo $data['assist']??''; ?></td>
      <td><?php //echo $data['clsh']??''; ?></td>
      <td><?php //echo $data['gp']??''; ?></td> -->
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchDatateam; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
<script>
// $(document).ready(function(){
//   $("#myInput").on("keyup", function() {
//     var value = $(this).val().toLowerCase();
//     $("#myTable tr").filter(function() {
//       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//     });
//   });
// });
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>
