<?php
include("playerfunction.php");

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>PlayerInfo</title>
<style>
  body{
    background: linear-gradient(120deg,CYAN,AQUAMARINE);
    height: 100%;
  }
a {
  
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #f1f1f1;
  color: bue;
}

.previous {
  
  background-color: #ddd;
  color: purple;
  
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}

table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th {
  cursor: pointer;
}

th, td {
  text-align: left;
  padding: 16px;
  
}

/* tr:nth-child(even) {
  background-color: #f2f2f2
} */

</style>
</head>
<body >
<div class="container">
<h2 style="color:purple;">Player Info Table </h2> 
  <p style="color:purple;">Type Club name or Player name to filter the table </p>
  <p style="color:purple;">To Sort the players click on the header of the attribute by which you want to sort and to change the order of sorting click again on the same header</p>
  <input class="form-control" id="myInput" type="text" placeholder="Search.." style="color:purple;">
 
  <div class="row" style="padding: 15px;">
   
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered"  style="color:PURPLE;" id="myTable">
       <thead><tr><th>S.N</th>
         <th>Name</th>
         <th>Position</th>
         <th>Club</th>
         <th onclick="sortTable(4)">Goal</th>
         <th onclick="sortTable(5)">Assist</th>
         <th onclick="sortTable(6)">CleanSheet</th>
         <th onclick="sortTable(7)">MatchPlayed</th>
    </thead>
    <tbody id="myTable">
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['pos']??''; ?></td>
      <td><?php echo $data['club']??''; ?></td>
      <td><?php echo $data['goal']??''; ?></td>
      <td><?php echo $data['assist']??''; ?></td>
      <td><?php echo $data['clsh']??''; ?></td>
      <td><?php echo $data['gp']??''; ?></td>
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


<div style="text-align: center;">
<a href="homepage.php" class="previous">&laquo; HOME</a>
<!-- <a href="#" class="next">Next &raquo;</a> -->

<!-- <a href="#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a> -->
    </div>
    <br>
</div>



<!-- <?php
echo("{$_SESSION['a']}");
echo $b;
echo $c;

?> -->

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (Number(x.innerHTML)> Number(y.innerHTML)) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (Number(x.innerHTML) < Number(y.innerHTML)) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
</body>
</html>



