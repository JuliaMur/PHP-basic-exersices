<!DOCTYPE html>
<html>
<head>
<title>Exercises: Sessions</title>
</head>
<body>

<?php
session_start();

/**************
*  Exercise 4  *
**************/
echo "<h3>Exercise 4</h3>";
// So that the login form appears correctly immediately after logging out, the code of this exercise has to be here
// do the exercises in order anyway
?>

<p><a href="sessions.php?out">Log out</a></p>

<?php
if(isset($_GET['logout'])){
   session_unset();
   session_destroy();
}

// write your code here

/********************
*  Exercises 1 + 2  *
********************/
echo "<h3>Exercises 1 and 2</h3>";
 ?>
 
 <?php

if(isset($_POST["ex1"])) {
   $user = $_POST['username'];
   $keyword = $_POST['key'];
   
   if($keyword == "php-programming") {
      
   $_SESSION['username'] = $user;
   header("Location: protected.php");
   //echo "You're logged in as: ". $user;
   } else {
    echo "WRONG KEY!";
   }
}

?>

<form action="sessions.php" method="post">
Username: <input type="text" name="username"><br>
Key: <input type="text" name="key"><br>
<input type="submit" name="ex1">
</form>



<?php

/**************
*  Exercise 3  *
**************/
echo "<h3>Exercise 3</h3>";

echo session_id();
// write your code here

?>

</body>
</html>