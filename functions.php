<!DOCTYPE html>
<html>
<head>
<title>Exercises: Functions</title>
<style>
.white {background-color: white; width: 30px; height: 30px;}
.black {background-color: black; width: 30px; height: 30px;}
</style>
</head>
<body>

<?php
/**************
*  Exercise 1  *
**************/
echo "<h3>Exercise 1</h3>";

function testFunction() {
	echo "<p>This is a test.</p>";
}

function printSum($number1, $number2) {
		echo "<p>The sum of $number1 and $number2 is " . ($number1 + $number2) . ".</p>";
}

function fancyText($text) {
	return "~*~" . $text . "~*~";
}

$number1 = 2;
$number2 = 3;
$text = "programming";

testFunction();
printSum($number1, $number2);
echo fancyText($text);

// write your code here

/**************
*  Exercise 2  *
**************/
echo "<h3>Exercise 2</h3>";

// write your code here
// un-comment the function calls once you have implemented the functions
function greet($name) {
	echo "Hello, $name!";
}
greet("Pekka");
echo "<br>";
greet("Leena");
echo "<br>";
greet("student");
echo "<br>";


/**************
*  Exercise 3  *
**************/
echo "<h3>Exercise 3</h3>";

// write your code here
// un-comment the function calls once you have implemented the functions
function multiply($number1, $number2) {
	return $number1 * $number2;
}
echo "2 x 3 = " . multiply(2, 3) . "<br>";
echo "5 x 6 = " . multiply(5, 6) . "<br>";
echo "12 x 12 = " . multiply(12, 12) . "<br>";

/**************
*  Exercise 4  *
**************/
echo "<h3>Exercise 4</h3>";

// write your code here
// un-comment the function calls once you have implemented the functions
function chessboard() {
echo "<table>";
for($row = 0; $row < 8; $row++) {
    echo "<tr>";
    for($col = 0; $col < 8; $col++) {
        // even row + even column = white; odd row + odd column = white; everything else = black (if - elseif - else)
		$total = $row + $col;
		
		if($total%2==0) {
			echo "<td class='white'>" . "</td>";
		}
		else {
			echo "<td class='black'>" . "</td>";
		}
    }
    echo "</tr>";
}
echo "</table>";
}
chessboard();

/**************
*  Exercise 5  *
**************/
echo "<h3>Exercise 5</h3>";

// write your code here
// un-comment the function calls once you have implemented the functions
function sumFromArray($arr) {
	return array_sum($arr);
}

$numbers = array(4, 9, 25, 30);

echo "<p>The sum of numbers in the array is " . sumFromArray($numbers) . "</p>";  // sum should be 68

$numbers2 = array(2, 16, 19, 42);

echo "<p>The sum of numbers in the array is " . sumFromArray($numbers2) . "</p>";  // sum should be 79

/**************
*  Exercise 6  *
**************/
echo "<h3>Exercise 6</h3>";

// write your code here
// un-comment the function calls once you have implemented the functions
function valueInArray($arr, $value) {
	foreach ($arr as $a) {
		if ($a == $value) {
			return true;
		}
		else {
			return false;
		}
	
	
	
	
	
	
	
	
	
	}
}
$a = 0;
$numbers = array(4, 9, 25, 30);
if(valueInArray($numbers, 4)) {
	echo "<p>Number 4 is in array.</p>";
} else {
	echo "<p>Number 4 is not in array.</p>";
}

if(valueInArray($numbers, 10)) {
	echo "<p>Number 10 is in array.</p>";
} else {
	echo "<p>Number 10 is not in array.</p>";
}


?>

</body>
</html>