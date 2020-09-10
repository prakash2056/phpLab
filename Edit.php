<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel="stylesheet" type="text/css" href="Update.css">
	
</head>
<body>

	

	<?php
	include 'dbconnect.php';

		$Name_id = $_GET['Name_id'];

		$sql = "SELECT * from studentinfo where Name_id = $Name_id";

		$result = mysqli_query($conn, $sql);

		if($result){

			$row = mysqli_fetch_assoc($result);
					$Name_id = $row['Name_id'];
		  			$FirstName = $row['FirstName'];
		  			$MiddleName = $row['MiddleName'];
		  			$LastName = $row['LastName'];
		  			$Address = $row['Address'];
		  			$mobile = $row['mobile'];
		}

	 ?>
	 <fieldset>
	 	<legend><h1>Update a Student Information</h1></legend>
	<form action="Update.php" method="post">
		<label id="Fname">First Name: </label>
		<input type="text" name="FirstName"  placeholder="Update First Name" value="<?php echo $FirstName; ?>" required> 
		<label id="Mname">Middle Name: </label>
		<input type="text" name="MiddleName" value="<?php echo $MiddleName; ?>" > 
		<label id="Lname">Last Name: </label>
		<input type="text" name="LastName" value="<?php echo $LastName; ?>" required> <br> <br>
		<label id="Add">Address: </label>
		<input type="text" name="Address" value="<?php echo $Address; ?>" required> <br> <br>
		<label>Contact No.: </label>
		<input type="number" name="mobile" value="<?php echo $mobile; ?>" required> <br> <br>
		<input type="hidden" name="Name_id" value="<?php echo $Name_id; ?>">
		<input type="submit" name="submit" value="Update">
	</form>
</fieldset>
</body>
</html>