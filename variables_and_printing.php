<!DOCTYPE html>
<html>
<head>
<title>Exercises: Variables and printing</title>
</head>
<body>
<?php
/**************
*  Exercise 1  *
**************/

echo "<h3>Exercise 1</h3>";

// write your code here
$school = "Omnia";
$specialty = "software developer";
$amount = 24;

echo "<p>I study in $school.<br>I will graduate as $specialty.<br>There are $amount students in my class.</p>";

/**************
*  Exercise 2  *
**************/

echo "<h3>Exercise 2</h3>";
?>

<form action="variables_and_printing.php" method="post">
Name: <input type="text" name="name">
<input type="submit" name="ex2">
</form>

<?php

if(isset($_POST["ex2"])) {

	$name = $_POST["name"];
	echo "Hello, $name!";
	// write your code here

}
/**************
*  Exercise 3  *
**************/
echo "<h3>Exercise 3</h3>";
?>

<form action="variables_and_printing.php" method="post">
First number: <input type="text" name="number1"><br>
Second number: <input type="text" name="number2"><br>
<input type="submit" name="ex3">
</form>

<?php

if(isset($_POST["ex3"])) {

	$number1 = $_POST["number1"];
	$number2 = $_POST["number2"];

	// write your code here
	$add = $number1 + $number2;
	$sub = $number1 - $number2;
	$mult = $number1 * $number2;
	$div = $number1 / $number2;
	$mod = $number1 % $number2;

echo "$number1 + $number2 = $add <br>";
echo "$number1 - $number2 = $sub <br>";
echo "$number1 * $number2 = $mult <br>";
echo "$number1 / $number2 = $div <br>";
echo "$number1 % $number2 = $mod <br>";
}

/**************
*  Exercise 4  *
**************/
echo "<h3>Exercise 4</h3>";

$php = "PHP";
$java = "Java";
$perl = "Perl";
$jscript = "Javascript";


// write your code here

?>

<ul>
<li><?php echo $php ?></li>
<li><?php echo $java ?></li>
<li><?php echo $perl ?></li>
<li><?php echo $jscript ?></li>
</ul>

<?php

/**************
*  Exercise 5  *
**************/
echo "<h3>Exercise 5</h3>";
?>

<form action="variables_and_printing.php" method="post">
Give a number: <input type="text" name="number"><br>
<input type="submit" name="ex5">
</form>

<?php

if(isset($_POST["ex5"])) {

	$number = $_POST["number"];

	echo "The number is $number.<br>";
	// add 2 
	$number = $number + 2;
	echo "Added two. The number is $number.<br>";
	// subtract 4
	$number = $number - 4;
	echo "Subtracted four. The number is $number.<br>";
	// multiply by 5
	$number = $number * 5;
	echo "Multiplied by five. The number is $number.<br>";
	// divide by 3
	$number = $number / 3;
	echo "Divided by three. The number is $number.<br>";
	// increment by one (++ operator)
	$number++;
	echo "Incremented by one. The number is $number.<br>";
	// decrement by one (-- operator)
	$number--;
	echo "Decremented by one. The number is $number.<br>";

}
/**************
*  Exercise 6  *
**************/
echo "<h3>Exercise 6</h3>";

// write your code here
$numbers = array("2","5","7","12");
$numbers[] = "19";
echo $numbers[0]." ".$numbers[1]." ".$numbers[2]." ".$numbers[3]." ".$numbers[4];


/**************
*  Exercise 7  *
**************/
echo "<h3>Exercise 7</h3>";
?>

<form action="variables_and_printing.php" method="post">
Replace the contents of which box? <input type="text" name="index"><br>
Replace with which number? <input type="text" name="new_number"><br>
<input type="submit" name="ex7">
</form>

<?php

if(isset($_POST["ex7"])) {

	$index = $_POST["index"];
	$new_number = $_POST["new_number"];
	
	$number_array = array(1,2,3,4,5,6,7,8,9,10);
	
	echo "Numbers at the beginning: " . join(" ", $number_array) . "<br>";
	// write your code here
	$number_array[$index-1] = $new_number;
	
	echo "Numbers after replacement: " . join(" ", $number_array) . "<br>";
}

/**************
*  Exercise 8  *
**************/
echo "<h3>Exercise 8</h3>";

$capitals = array( "Italy"=>"Rome", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Estonia"=>"Tallinn", "Hungary"=>"Budapest", "Austria" => "Vienna", "Poland"=>"Warsaw");

// write your code in the echo commands below
echo "<p>The capital of Finland is {$capitals["Finland"]} </p>";
echo "<p>The capital of Italy is {$capitals["Italy"]}</p>";
echo "<p>The capital of Greece is {$capitals["Greece"]}</p>";
echo "<p>The capital of Netherlands is {$capitals["Netherlands"]}</p>";
echo "<p>The capital of Hungary is {$capitals["Hungary"]}</p>";

/**************
*  Exercise 9  *
**************/
echo "<h3>Exercise 9</h3>";

print_r(array(3, 5, 9));

echo "<br><br>";

$numbers = array(1,2,3,4,5,6,7,8,9,10);

print_r($numbers);

echo "<br><br>";

$capitals = array( "Italy"=>"Rome", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Estonia"=>"Tallinn", "Hungary"=>"Budapest", "Austria" => "Vienna", "Poland"=>"Warsaw");

print_r($capitals);

?>

</body>
</html>