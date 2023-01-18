<?php

	$connect = mysqli_connect("localhost", "root", "", "cars") or die("Error");
	$query ="SELECT socnumber, name FROM person";

	$result = $connect->query($query);
	if($result->num_rows> 0) {
		$option= mysqli_fetch_all($result, MYSQLI_ASSOC);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add a car</title>
</head>
<body>
	<h4>Input car information:</h4>
	<form action="carform.php" method="post">
		<input type="text" name="license" placeholder="License number"/><br><br>
		<input type="text" name="color" placeholder="Color"/><br><br>
		<input type="text" name="model" placeholder="Model (year)"/><br><br>
		<select name="owner" >
			<option> Owner </option>
		<!-- use PHP to add the persons from the database
		e.g. <option value="281182-070W">Anne Autoilija</option>
		-->
		<?php
			foreach ($option as $option) {
			?>
			<option value="<?php echo $option['socnumber']; ?>"><?php echo $option['name']; ?></option>
			<?php
			}
		?>
		</select><br><br>
		<input type="submit" name="add" value="Add car"><br><br>

		<?php 
		
		if(isset($_POST['add'])) {
			if(!empty($_POST['license'])) {

				$license = mysqli_real_escape_string ($connect, $_POST['license']);
				$color = mysqli_real_escape_string ($connect, $_POST['color']);
				$model = mysqli_real_escape_string ($connect,$_POST['model']);
				$owner = mysqli_real_escape_string ($connect,$_POST['owner']);

				$lic_check = "SELECT * FROM car WHERE licnumber = '$license'";
				$result = mysqli_query($connect, $lic_check);
				$count = mysqli_num_rows($result);

				if ($count != 0) {
					echo "License number already exists!";
				}else{
					mysqli_query($connect, "INSERT INTO car (`licnumber`, `color`, `model`, `owner`) VALUES ('$license', '$color', '$model', '$owner')");
					echo "Car is add!";
				}
				}else{
					echo "License number is required!";
			}
		}
		 ?>
	</form>
	</body>
</html>