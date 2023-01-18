<!DOCTYPE html>
<html>
<head>
<title>Exercises: Loops</title>
</head>
<body>

<?php

/**************
*  Exercise 1  *
**************/
echo "<h3>Exercise 1</h3>";

$x = 1;

while($x <= 5) {
	echo "Julia <br>";
	$x++;
}
// write your code here

/******************
*  Exercises 2 + 3 *
******************/
echo "<h3>Exercises 2 and 3</h3>";
?>

<form action="loops.php" method="post">
Give the upper bound: <input type="text" name="highest"><br>
<input type="submit" name="ex2">
</form>

<?php

if(isset($_POST["ex2"])) {
	
	$highest = $_POST["highest"];
	$a = 1;

	/*  while($a <= $highest) {
		echo "$a <br>";
		$a++;
	} */
	// write your code here

	for($a = 1; $a <= $highest; $a++) {
		echo "$a <br>";
	}
}

/**************
*  Exercise 4  *
**************/
echo "<h3>Exercise 4</h3>";

// write your code here
$r = 11;
$z = 10;

for ($i = 1; $i <= $r; $i++) {
	echo $i, " * ", $z, " = ", $i * $z, "<br>";
}

/**************
*  Exercise 5  *
**************/
echo "<h3>Exercise 5</h3>";
?>

<form action="loops.php" method="post">
Lower bound: <input type="text" name="lower"><br>
Upper bound: <input type="text" name="upper"><br>
<input type="submit" name="ex5">
</form>

<?php

if(isset($_POST["ex5"])) {

	$lower = $_POST["lower"];
	$upper = $_POST["upper"];
	$sum = 0;
    
	for($q = $lower; $q <= $upper; $q++) {
		$sum += $q;
	}
	echo "The sum of numbers is $sum.";
	// write your code here

}


/**************
*  Exercise 6  *
**************/
echo "<h3>Exercise 6</h3>";

$numbers = array();
$num = 20;

for ($s = 1; $s <= $num; $s++) {
	$numbers[] = $s;
}

print_r($numbers);

// write your code here

/**************
*  Exercise 7  *
**************/
echo "<h3>Exercise 7</h3>";

// write your code here

foreach($numbers as $number) {
	echo $number;
	echo "<br>";
}
/**************
*  Exercise 8  *
**************/
echo "<h3>Exercise 8</h3>";

$capitals = array( "Italy"=>"Rome", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Estonia"=>"Tallinn", "Hungary"=>"Budapest", "Austria" => "Vienna", "Poland"=>"Warsaw");

// write your code here
foreach($capitals as $country=>$city) {
	echo "$country: $city";
	echo "<br>";
}
?>

</body>
</html>