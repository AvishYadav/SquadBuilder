<?php
include("fixturesfunction.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body{
    background: linear-gradient(120deg,#ff66b3,#ffcc66);
    height: 100%;
  }
a {
  
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #f1f1f1;
  color: blue;
}

.previous {
  
  background-color: #ddd;
  color: slateblue;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>
<body>
<div class="container" style="color:slateblue;">
<h2 >Fixtures Table</h2> 
  <p>Type Club name, Date or Time to filter the table </p>
  <input class="form-control" id="myInput" type="text" placeholder="Search.." style="color:slateblue;">
  <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered table-striped" style="color:slateblue;">
       <thead><tr><th>S.N</th>
         <th>Team 1</th>
         <th>Team 2</th>
         <th>Date</th>
         <th>Time</th>
    </thead>
    <tbody id="myTable">
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['team1']??''; ?></td>
      <td><?php echo $data['team2']??''; ?></td>
      <td><?php echo $data['date']??''; ?></td>
      <td><?php echo $data['time']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
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
<div style="text-align: center;">
<a href="homepage.php" class="previous">&laquo; HOME</a>
<!-- <a href="#" class="next">Next &raquo;</a> -->

<!-- <a href="#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a> -->
    </div>
    <br>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>
