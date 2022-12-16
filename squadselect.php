<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <title>Squad Selector</title>
</head>
<style>
  input[type="submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: purple;
    border-radius: 25px;
    font-size: 18px;
    color: white;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}
input[type="submit"]:hover{
    background-color: blueviolet;
    color:black;
    transition: .5s;
}

  form .text-field{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
}
.text-field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
}
.text-field label{
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
}
.text-field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0;
    height: 2px;
    background: #2691d9;
}
.text-field input:focus ~ label,
.text-field input:valid ~ label{
    top: -5px;
    color: #2691d9;
}
.text-field input:focus ~ span::before,
.text-field input:valid ~ span::before{
    width: 100%;
}

  .container{
    background: transparent;
    display: flex;
}
  .cards{
    background-color: #ffccff;
    /* border: 1px solid;  */
    height: 415px; 
    width: 32.5%; 
    text-align: justify; 
    margin: 5px;
    border-radius:15px;
} 
.cardText{
    
    margin: 15px;
    color: blueviolet;
}

  .collapsible {
  background-color: rgb(87, 87, 87);
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: purple;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}




a {
  
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: blueviolet;
  color: plum;
  border-radius:30px;
}

.previous {
  padding: 14px 16px;
  text-decoration: none;
  font-size: x-large;
  display: inline-block;
  background-color: purple;
  color: black
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
body{
    background: linear-gradient(120deg,#f0cca8,#ffffcc);
    height: 100%;
  }
.dropul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: PURPLE;
  border-radius:30px;
}

.dropdown {
  float: left;
}

.dropdown a, .dropbtn {
    font-size: x-large;
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown a:hover, .dropdown:hover .dropbtn {
  background-color: blueviolet;
  color: plum;
  border-radius:30px;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: transparent ;
  min-width: 160px;
  /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
  z-index: 1; 
}

.dropdown-content .abutton {
  background-color: purple;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  position: relative;
  
}

.dropdown-content .abutton:hover {background-color: blueviolet;color: plum;transform: scale(1.1);transition: .3s; }

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<?php
        if(array_key_exists('button433', $_POST)) {
          myForm(1);
        }
        else if(array_key_exists('button442', $_POST)) {
            myForm(2);
        }
        else if(array_key_exists('button532', $_POST)) {
          myForm(3);
      }
        function myForm($x) {
           
          $a=array(9,9,9);
            if ($x==1){
              // echo "433";
              $a=array(4,3,3);
              // print_r($a);
              // echo($a[0] .', '. $a[1] .', '. $a[2]);

            }
            else if ($x==2){
              // echo "442";
              $a=array(4,4,2);
              // print_r($a);
              // echo($a[0] .', '. $a[1] .', '. $a[2]);
            }
            else if ($x==3){
              // echo "532";
              $a=array(5,3,2);;
              // print_r($a);
              // echo($a[0] .', '. $a[1] .', '. $a[2]);
            }
            
            if (!isset($_SESSION['def']))
            {
              $_SESSION['def'] = $a[0];
            }
            
            if (!isset($_SESSION['mid']))
            {
              $_SESSION['mid'] = $a[1];
            }
            
            if (!isset($_SESSION['fwd']))
            {
               $_SESSION['fwd'] = $a[2];
            }
            $_SESSION['emailID']= $_SESSION['loginemail'];
            header('Location: login.php');
        }
        // global $a;
        // echo($a[0] .', '. $a[1] .', '. $a[2]);
        
    ?>
 
<body >
<div >
  <ul class="dropul">
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Formations</a>
      <div class="dropdown-content">
      <form method="post">
      <input type="submit"
        class="abutton"
		    name="button433"
		    value="4-3-3" />
      <input type="submit"
        class="abutton"
		    name="button442"
		    value="4-4-2" />
      <input type="submit"
        class="abutton"
		    name="button532"
		    value="5-3-2" />

      </form>  
      
      </div>
    </li>
    <li style="text-align: right;">
        <a href="homepage.php" class="previous">&laquo; HOME</a>
    </li>
  </ul>
  <br>
  <div class="card">
    <h2>Instructions:</h2>
<button class="collapsible" style="border-radius:15px 15px 0 0;">Selecting Your Initial Squad</button>
<div class="content">
  <h3>Squad Size</h3>
  <p>To join the game select a fantasy football squad of 11 players, consisting of:</p>
  <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      1 Goalkeeper
      
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Atleast 3 Defenders
      
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Atleast 1 forward
     
    </li>
  </ul>
</div>
<button class="collapsible">Premier League Transfers</button>
<div class="content">
  <h3>If Player Is Transfered To Another PL Team</h3>
  <p>If a player is transferred to another team in the Premier League, and this transfer takes you over the 3 players per team limit, then you will need to go back under the limit when making your next transfers.</p>
  <h3>When Will New Player Be Added</h3>
  <p>New players will be added within 7 days of their transfer being completed.</p>
  <h3>If Player Left PL. What to Do?</h3>
  <p>You can leave the player in your squad, where he will continue to earn 0 points. To remove him permanently, you must use a transfer.</p>
</div>
<button class="collapsible" style="border-radius: 0 0 15px 15px;">FAQs</button>
<div class="content">
  <h3>Can I Have More Than 1 Team?</h3>
  <p>In the interest of fair play each person may only enter one team. You may enter this team in multiple leagues and compete against different groups of friends.</p>
  <h3>Is There A Full List Of Players </h3>
  <p>We have a<a href="playerinfo.php">full player list</a>you can view and print.</p>
</div>

  </div>
  <br >
  
</div>
<section class="container">
  <div class="cards">
    <h2 class="cardText">Query Form:</h2>
    <form name="myform" method="post" action="qvalidate.php">
      <div class="text-field">
          <input type="text" name="qfname" id="q_fname" required>
          <span></span>
          <label>First Name : </label>
      </div>
      <div class="text-field">
          <input type="text" name="qlname" id="q_lname" required>
          <span></span>
          <label>Last Name : </label>
      </div>
      <div class="text-field">
          <input type="text" name="qemail" id="q_email" required>
          <span></span>
          <label>Email : </label>
      </div>
      <div class="text-field">
          <input type="text" name="query" id="q_id" required>
          <span></span>
          <label>Query: </label>
      </div>
      <input type="submit" name="qsubmit" value="submit">
      
  </form>

  </div>
  <br>
  <div class="cards">
  <h1 class="cardText">Contact Us</h1>
    <p class="cardText">If your question isn't answered above or in the rules then you can contact us using the form. We aim to reply to all queries within two working days.</p>
    <p class="cardText">If you have an account please login before sending your message. If you are unable to login please provide as many details as possible to help us find your account.</p>
    <p style="margin: 15px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> Mobile : 9833743867</p>
    <p style="margin: 15px;"><span class="glyphicon">&#x2709;</span> Email : dopaminelord@gmail.com</p>

  </div>
</section>

<?php

?>  



<script>
  var coll = document.getElementsByClassName("collapsible");
  var i;
  
  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      } 
    });
  }
  </script>
</body>
</html>


