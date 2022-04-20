<?php session_start();  //starting session <---------- START OF MODEL
if(!isset($_SESSION['startNum']))
$_SESSION['startNum'] = rand(1,20); // if not set define a new number between 1 and 20
  if ( ! isset($_POST['guess']) ) {
    $_SESSION['attempt'] = 0;
    echo "<p align=center>Missing guess parameter</p>";
  } else if ( strlen($_POST['guess']) < 1 ) {
    $_SESSION['attempt']++;
    echo "<p align=center>#Attempt ". $_SESSION['attempt'] . "- Your guess is too short</p>";
  } else if ( ! is_numeric($_POST['guess']) ) {
    $_SESSION['attempt']++;
    echo "<p align=center>#Attempt ". $_SESSION['attempt'] ."- Your guess is not a number</p>";
  } else if ( $_POST['guess'] < $_SESSION['startNum'] ) {
    $_SESSION['attempt']++;
    echo "<p align=center>#Attempt ". $_SESSION['attempt'] ."- Your guess is too low</p>";
  } else if ( $_POST['guess'] > $_SESSION['startNum']) {
    $_SESSION['attempt']++;
    echo "<p align=center>#Attempt ". $_SESSION['attempt'] ."- Your guess is too high</p>";
  } else {
    $_SESSION['attempt']++;
    echo "<p align=center>Congratulations - You are right with #". $_SESSION['attempt'] ." Attempts</p>";
  } // <------------------ END OF MODEL
?>


<html> <!--STARTING OF VIEW-->
<title>Guessing Game Danish 205647</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<style>
hr {
    color: #a9a9a9;
    opacity: 0.3;
    }
input[type=text]{
     width: calc(15% - 52px);
     height: 38px;
     margin: 0px 0 0 45%;
     padding-left: 0px;
     border-radius: 0 0px 5px 0;
     border: solid 1px #cbc9c9;
     box-shadow: 0px 3px 5px rgba(0,0,0,2%);
     background: #fff;
     text-align: center;
     }
     .button {
         text-align: center;}
</style>
<body>
  <div style="background-color:lightblue; color: blue;text-align: center;border: 5px outset darkblue; padding:10px;">
  <h1>Danish's Guessing Game</h1>
</div><br>
  <div style="text-align: center;">
<span style="color:black;font-weight:bold">Enter a number between 1-20</span>
</div>
<hr>
<form method="post">
        <input type="text" name="guess" id="guess" placeholder="0-20" required/>
        <br>
        <div class="button" style="text-align:center;">
          <br>
          <button>Submit</button>
      </div>
      </form>
<hr>
<p>
</p>
</body>
</html> <!--END OF VIEW-->
