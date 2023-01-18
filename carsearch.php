<?php

	$connect = mysqli_connect("localhost", "root", "", "cars") or die("Error");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Car search</title>
</head>
<body>
	<h4>Give license number:</h4>
	<form action="" method="post">
		<input type="text" name="licence_number" /><br><br>
		<input type="submit" name="search" /><br><br><hr>
	</form>

<?php
       
	   if(isset($_POST['search'])){
		$search = $_POST['licence_number'];
		$query = "SELECT * FROM car WHERE licnumber LIKE '%$search%'";
	    $result = mysqli_query($connect, $query);

		if (mysqli_num_rows($result) > 0) {
			foreach($result as $row) {
?>
		<p><?php echo "License number: ". $row['licnumber']; ?></p><br>
		<p><?php echo "Color: ". $row['color']; ?></p><br>
		<p><?php echo "Model: ". $row['model']; ?></p><br>
		<p><?php echo "Owner: ". $row['owner']; ?><p><br><hr>

<?php
		}
			} else {
?>
			<p>No results</p>

<?php
			}
		}
?>

	</body>
</html>