<!DOCTYPE html>
<html>
<head>
<title>Exercises: Recap and some library functions</title>
</head>
<body>

<?php

/**************
*  Exercise 1  *
**************/
echo "<h3>Exercise 1</h3>";
?>

<form action="recap.php" method="post">
<input type="text" name="number1" size="5">
<select name="operation">
<option value="1">+</option>
<option value="2">-</option>
<option value="3">*</option>
<option value="4">/</option>
</select>
<input type="text" name="number2" size="5"><br>
<input type="submit" name="ex1">
</form>

<?php

if(isset($_POST["ex1"])) {
	$number1 = $_POST["number1"];
	$number2 = $_POST["number2"];
	$operation = $_POST["operation"];	// 1 = addition, 2 = subtraction, 3 = multiplication, 4 = division
	
	// write your code here
}


/**************
*  Exercise 2  *
**************/
echo "<h3>Exercise 2</h3>";

// write your code here

/**************
*  Exercise 3  *
**************/
echo "<h3>Exercise 3</h3>";

// write your code here


/**************
*  Exercise 4  *
**************/
echo "<h3>Exercise 4</h3>";

$numberarray = array(6, 29, 10, 2, 8, 24, 17);

// write your code in the print commands below (or between them if necessary)
echo "The length of array: ";
echo "<br>";
echo "The values in array: ";
echo "<br>";
echo "From smallest to largest: ";
echo "<br>";
echo "From largest to smallest: ";
echo "<br>";


/**************
*  Exercise 5  *
**************/
echo "<h3>Exercise 5</h3>";
?>

<form action="recap.php" method="post">
Write something: <input type="text" name="charstring">
<input type="submit" name="ex5">
</form>

<?php

if(isset($_POST["ex5"])) {

	$charstring = $_POST["charstring"];
	
	// write your code below to print the character string...
	echo "All lowercase: <br>";
	echo "All uppercase: <br>";
	echo "From the end to the beginning: <br>";
	echo "Length: <br>";
	echo "Each word in separate line:<br>";
	
}

/**************
*  Exercise 6  *
**************/
echo "<h3>Exercise 6</h3>";
?>

<form action="recap.php" method="post">
Input numbers (with spaces between them): <input type="text" name="numstring">
<input type="submit" name="ex6">
</form>

<?php

if(isset($_POST["ex6"])) {
	
	$numstring = $_POST["numstring"];
	$numarr = explode(" ", $numstring);
	
	// write your code here
	
}

?>

</body>
</html>