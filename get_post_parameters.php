<!DOCTYPE html>
<html>
<head>
<title>Exercises: GET and POST</title>
</head>
<body>

<?php

/**************
*  Exercise 1  *
**************/
echo "<h3>Exercise 1</h3>";
?>

<a href="get_post_parameters.php?tekno=html">HTML</a><br>
<a href="get_post_parameters.php?tekno=css">CSS</a><br>
<a href="get_post_parameters.php?tekno=javascript">Javascript</a><br>
<a href="get_post_parameters.php?tekno=php">PHP</a><br>
<a href="get_post_parameters.php?tekno=java">Java</a><br>

<?php



if(isset($_GET["tekno"])) {
	
	// write your code here
	switch($_GET["tekno"]) {
		case "html":
			echo "HTML defines the structure of a document.";
			break;
		case "css":
			echo "CSS defines the appearance of a document.";
			break;
		case "javascript":
			echo "Javascript is a client-side language.";
			break;
		case "php":
			echo "PHP is a server-side language.";
			break;
		default:
		    echo "Technology not found!";
	}
}

/**************
*  Exercise 2  *
**************/
echo "<h3>Exercise 2</h3>";
?>

<form action="get_post_parameters.php" method="post">
First name: <input type="text" name="firstname"><br>
Last name: <input type="text" name="lastname"><br>
<input type="submit" name="ex2">
</form>

<?php

if(isset($_POST["ex2"])) {
	
	// write your code here
	echo 'First name: '. $_POST["firstname"]. '<br>';
	echo 'Last name: '. $_POST["lastname"]. '<br>';
}


/*******************
*  Exercises 3 + 4  *
*******************/
echo "<h3>Exercises 3 and 4</h3>";
?>
<?php 

// error_reporting(0);

$nameErr = $emailErr = $passwordErr = "";
$name = $email = $password = $gender = $country = $description = "";
$flag = true;

if(isset($_POST["ex3"])) {
	if (empty($_POST["name"])) {
		$nameErr = " * Please fill all mandatory fields.";
		$flag = false;
	}
	else {
		$name = input($_POST["name"]);
	}

	if (empty($_POST["email"])) {
		$emailErr = " * Please fill all mandatory fields.";
		$flag = false;
	}
	else {
		$email = input($_POST["email"]);
	}

	if (empty($_POST["password"])) {
		$passwordErr = " * Please fill all mandatory fields.";
		$flag = false;
	}
	else {
		$password = input($_POST["password"]);
	}

	if (empty($_POST["gender"])) {
		$gender = "";
	}
	else {
		$gender = input($_POST["gender"]);
	}

	if (empty($_POST["country"])) {
		$country = "";
	}
	else {
		$country = input($_POST["country"]);
	}

	if (empty($_POST["description"])) {
		$description = "";
	}
	else {
		$description = input($_POST["description"]);
	}
} 

function input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
<form action="get_post_parameters.php" method="post">
Name * <input type="text" name="name"><br>
<span style = "color:red;"><?php echo $nameErr;?></span>
 <br>
E-mail * <input type="text" name="email"><br>
<span style = "color:red;"><?php echo $emailErr;?></span>
  <br>
Password * <input type="password" name="password"><br>
<span style = "color:red;"><?php echo $passwordErr;?></span>
  <br>
Gender
<input type="radio" name="gender" value="male" checked>Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="other">Other<br>
Country
<select name="country">
<option value="Denmark">Denmark</option>
<option value="Finland">Finland</option>
<option value="Iceland">Iceland</option>
<option value="Norway">Norway</option>
<option value="Sweden">Sweden</option>
</select><br>
Description<br>
<textarea name="description"></textarea><br>
<input type="hidden" name="join_year" value="2022">
<input type="submit" name="ex3" value="Sign up">
</form>

<?php

// write your code here

if ($flag == true) {
	echo 'Name : '. $name. '<br>';
	echo 'E-mail: '. $email. '<br>';
	echo 'Password: '. $password. '<br>';
	echo 'Gender: '. $gender. '<br>';
	echo 'Country: '. $country. '<br>';
	echo 'Description: '. $description. '<br>';
	if (isset($_POST["join_year"])) {
	echo 'Join year: '. $_POST["join_year"]. '<br>';
	}
}

/**************
*  Exercise 5  *
**************/
echo "<h3>Exercise 5</h3>";
?>

<form action="get_post_parameters.php" method="post">
Name: <input type="text" name="name"><br>
Title: <input type="text" name="title"><br>
Text:<br>
<textarea name="text"></textarea>
<input type="submit" name="ex5">
</form>

<?php

// write your code here
if (isset($_POST["ex5"])) {
	
$name = $_POST["name"];
$title = $_POST["title"];
$textarea = $_POST["text"];

if (empty($_POST["title"])) {
	echo "Please fill all fields.<br>";
} elseif (empty($_POST["name"])) {
	echo "Please fill all fields.<br>";
} elseif (empty($_POST["text"])) {
	echo "Please fill all fields.<br>";
} else {
	echo strip_tags (trim($title));
	echo " || ";
	echo strip_tags (trim($name));
	echo "<br>";
	echo strip_tags (trim($textarea));
}
}
?>

</body>
</html>