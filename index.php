<!DOCTYPE html>
<html>
<head>

			
	<title>Contact Form</title>
	<link rel="stylesheet" type="text/css" href="external.css">
</head>
<body>
<fieldset class="a">
	<legend><h1>Student Information</h1></legend>

	<form action="insert.php"  method="post">
		<label for="fname">First Name</label>
		 <input type="text" name="FirstName" id="Fname" placeholder="Enter First Name" required>
		 <label id="Mname">Middle Name</label> 
	 	 <input  type="text" name="MiddleName" id="Mname" placeholder="Enter Middle Name" >
	 	 <label id="Lname">Last Name</label>
		<input type="text"name="LastName"
		id="Lname" placeholder="Enter Last Name" required> <br> <br>
		Address: <input type="text" name="Address"placeholder="Enter your Address" required><br><br>
		Contact No.: <input type="number" name="mobile" placeholder="Enter your Mobile Number" required> <br> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</fieldset>

<fieldset class="b">
	<legend><h2>List of Student Contacts</h2></legend>
	<table border="1px;">
		<tr>
			<th>FirstName</th>
			<th>MiddleName</th>
			<th>LastName</th>
			<th>Address</th>
			<th>mobile</th>
			<th>Action</th>
		</tr>

		<?php
		  include 'dbconnect.php';

		  $sql = "SELECT * from studentinfo";
		  $result = mysqli_query($conn, $sql);
		  $FirstName = "";
		  $MiddleName = "";
		  $LastName = "";
		  $Address = "";
		  $mobile = "";
		  if($result){
		  		while ($row = mysqli_fetch_assoc($result)) {
		  			$SN = $row['SN'];
		  			$FirstName=$row['FirstName'];
		  			$MiddleName=$row['MiddleName'];
		  			$LastName = $row['LastName'];
		  			$Address=$row['Address'];
		  			$mobile = $row['mobile'];
		?>
		<tr>
			<td><?php echo $FirstName; ?></td>
			<td><?php echo $MiddleName; ?></td>
			<td><?php echo $LastName; ?></td>
			<td><?php echo $Address; ?></td>
			<td><?php echo $mobile; ?></td>
			<td>
				<a href="Edit.php?SN=<?php echo $SN; ?>">Update</a>
				<a href="Delete.php?id=<?php echo $SN; ?>">Delete</a>
			</td>
		</tr>


		<?php

		  		}
		  }

		 ?>
	</table>
	
</fieldset>

	


</body>
</html>