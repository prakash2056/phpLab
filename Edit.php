<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	
</head>
<body>

	<h1>Update a StudentInfo</h1>

	<?php
	include 'dbconnect.php';

		$SN = $_GET['SN'];

		$sql = "SELECT * from studentinfo where SN = $SN";

		$result = mysqli_query($conn, $sql);

		if($result){

			$row = mysqli_fetch_assoc($result);
					$SN = $row['SN'];
		  			$FirstName = $row['FirstName'];
		  			$MiddleName = $row['MiddleName'];
		  			$LastName = $row['LastName'];
		  			$Address = $row['Address'];
		  			$mobile = $row['mobile'];
		}

	 ?>

	<form action="Update.php" method="post">
		<input type="text" name="FirstName" value="<?php echo $FirstName; ?>" required> </br> </br>
		<input type="text" name="MiddleName" value="<?php echo $MiddleName; ?>" > <br> <br>
		<input type="text" name="LastName" value="<?php echo $LastName; ?>" required> <br> <br>
		<input type="text" name="Address" value="<?php echo $Address; ?>" required> <br> <br>
		<input type="number" name="mobile" value="<?php echo $mobile; ?>" required> <br> <br>
		<input type="hidden" name="SN" value="<?php echo $SN; ?>">
		<input type="submit" name="submit" value="Update">
	</form>
</body>
</html>