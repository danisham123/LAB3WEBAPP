<?php session_start(); //starting session ?>
<html>
<title>Guessing Game Danish 205647</title>
<body>
<h1>Welcome to my guessing game</h1>
<p>
<?php
  if ( ! isset($_GET['guess']) ) {
    $_SESSION['attempt'] = 0;
    echo "Missing guess parameter";
  } else if ( strlen($_GET['guess']) < 1 ) {
    $_SESSION['attempt']++;
    echo "#Attempt ". $_SESSION['attempt'] . "- Your guess is too short";
  } else if ( ! is_numeric($_GET['guess']) ) {
    $_SESSION['attempt']++;
    echo "#Attempt ". $_SESSION['attempt'] ."- Your guess is not a number";
  } else if ( $_GET['guess'] < 42 ) {
    $_SESSION['attempt']++;
    echo "#Attempt ". $_SESSION['attempt'] ."- Your guess is too low";
  } else if ( $_GET['guess'] > 42 ) {
    $_SESSION['attempt']++;
    echo "#Attempt ". $_SESSION['attempt'] ."- Your guess is too high";
  } else {
    $_SESSION['attempt']++;
    echo "Congratulations - You are right with #". $_SESSION['attempt'] ." Attempts";

  }
?>
</p>
</body>
</html>
