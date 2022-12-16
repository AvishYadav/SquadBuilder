<!-- <?php
include "loginvalidate.php";
include("pointstablefunction.php");

// Check user login or not
// if(!isset($_SESSION['loginemail'])){
//     header('Location: login.php');
// }

// // logout
// if(isset($_POST['but_logout'])){
//     session_destroy();
//     header('Location: login.php');
// }
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="hstyle.css"> -->
    <style>
      .header{
    position: relative; 
    top: 0px; 
    padding-left:0px;
    height: 150px; 
    text-align:center;
    background-color: transparent; 
    color: white;
}
.footer{
    position: static; 
    bottom: 0px; 
    height: 10px; 
    width: 100%; 
    background-color: transparent; 
    
}
.container{
    position: relative;
    display: flex;
    background-color: transparent;
}
.cards{
    background-color: indigo;
    border: 1px solid;
    border-color:aqua ; 
    height: 500px; 
    width: 32.5%; 
    text-align: justify; 
    margin: 5px;
}
.cards:hover{
    border-color: blue;
    transition: .5s;
    transform: scale(1.025);
}
.cardText{
    /* font:	verdana; */
    margin: 15px;
    color:aquamarine;
}
body{
  font-family: Arial, Helvetica, sans-serif;
    background-color:AQUA;
}
.logo{
  position:static;
  /* padding-left:50%; */
  height: 75px;
  width: 75px;
}
.icon{
  position:static;
  /* padding-left:50%; */
  height: 40px;
  width: 40px;
}
.title{
  position:relative;
  /* display:flex; */
  text-align:center;  
}
      </style>
</head>
<body>
    <div class="header" >
        <a href="squadselect.php"><img src="./icon/SB.png" class="logo"></a>
        <h1 style="text-align:center; color:Blue;"> Squad Builder Project </h1>
    </div>
        <section class="container" >
            <div class="cards" ><a href="fixtures.php">
                <img src="./icon/fixtures.jpg" alt="Processor img" height="50%" width="100%"><br>
                <p class="cardText">The fixtures that would be held are available in the form of list. To access the list click here. </p>
                <div  class="title"><img src="./icon/fixtureicon.png" class="icon"><h2 class="cardText" style="text-align: center ;" >FIXTURES</h2>
</div>
            </a>                        
            </div>
            <div class="cards" ><a href="playerinfo.php">
                <img src="./icon/player.jpg" alt="Processor img" height="50%" width="100%"><br>
                <p class="cardText">The data related to particular player and teams can be refered using this link.</p>
                <div style="text-align:center;"><img src="./icon/playerinfo.png" class="icon"><h2 class="cardText" style="text-align: center ;" >PLAYER INFO</h2>
                </div>
            </a>                        
            </div>
            <div class="cards" ><a href="squadselect.php">
                <img src="./icon/formation.jpg   " alt="Processor img" height="50%" width="100%"><br>
                <p class="cardText">You have full freedom to built your favourable team for the current game week after analyzing the data.</p>
                 <div style="text-align:center;"><img src="./icon/squad.png" class="icon"><h2 class="cardText" style="text-align: center ;" >SQUAD SELECTOR</h2>
                </div>  
            </a>         
            </div>
        </section>
        <br>
        <div style="color: blue;display: flex;text-align: centre;position:relative; ">
            <div class="row " style="display: flex; position:relative;  margin: auto; ">
              <div class="col-sm-10">
               <?php echo $deleteMsg??''; ?>
               <div class="table-responsive" >
                 <table class="table table-bordered" style="color: blue;">
                  <thead><tr>
                    <th>Position</th>
                    <th>Club</th>
                    <th>GP</th>
                    <th>W</th>
                    <th>D</th>
                    <th>L</th>
                    <th>GF</th>
                    <th>GA</th>
                    <th>GD</th>
                    <th>Points</th>
               </thead>
               <tbody>
             <?php
                 if(is_array($fetchData)){      
                 $sn=1;
                 foreach($fetchData as $data){
               ?>
                 <tr>
                 <td><?php echo $sn; ?></td>
                 <td><?php echo $data['club']??''; ?></td>
                 <td><?php echo $data['gplayed']??''; ?></td>
                 <td><?php echo $data['gwin']??''; ?></td>
                 <td><?php echo $data['gdraw']??''; ?></td>
                 <td><?php echo $data['glose']??''; ?></td>
                 <td><?php echo $data['gf']??''; ?></td>
                 <td><?php echo $data['ga']??''; ?></td>
                 <td><?php echo $data['gd']??''; ?></td>
                 <td><?php echo $data['points']??''; ?></td>
                </tr>
                <?php
                 $sn++;}}else{ ?>
                 <tr>
                   <td colspan="11">
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
           <br>
    <div class="footer" >
        this is footer
    </div>
</body>
</html>