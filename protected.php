<?php
session_start();

if($_SESSION['username']==true){

echo $_SESSION['username'] .', '. 'you are logged in.';
} else {
    header('location:sessions.php');
}
?>

<p><a href="sessions.php?out">Log out</a></p>