<!DOCTYPE html>
<html>
<head>
<style> 	body{
		  background-image:url('abcde.jpg');
			padding:10px 60px 100px 60px;

		}
		
		fieldset.b{
			
			margin-left:10px;
			
		}
		h1,h2{
			color: red;
			padding: 10px;
		}
		legend{
			text-align: center;
		}
		label#Lname,label#Mname{
			margin-left: 10px;
		}	
	form{
		margin-left: 30px;
		}
		table{
			margin-left: 20px;
		}
		th,td{
			font-size: 15px;
			color: pink;
			padding: 7px;
		}
		 td {
			font-size: 15px;
			color: pink;
			padding: 7px;
		}

		</style>

			
	<title>Contact Form</title>
	
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
			<th>S.N.</th>
			<th>Name_id</th>
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
		 /* $sql="SET @row_number=0;
SELECT
(@row_number:=@row_number+1) AS SN,
Name_id,
FirstName,
LastName,
Address,
mobile
FROM studentinfo"; */
		  $result = mysqli_query($conn, $sql);
		  $FirstName = "";
		  $MiddleName = "";
		  $LastName = "";
		  $Address = "";
		  $mobile = "";
		  if($result){
		  	$sn=0;
		  		while ($row = mysqli_fetch_assoc($result)) {
		  			$Name_id = $row['Name_id'];
		  			
	 	  			$FirstName=$row['FirstName'];
		  			$MiddleName=$row['MiddleName'];
		  			$LastName = $row['LastName'];
		  			$Address=$row['Address'];
		  			$mobile = $row['mobile'];
		  			$sn++;
		?>
		<tr>
			<td><?php echo $sn;?></td>
			<td><?php echo $Name_id;?></td>
			<td><?php echo $FirstName; ?></td>
			<td><?php echo $MiddleName; ?></td>
			<td><?php echo $LastName; ?></td>
			<td><?php echo $Address; ?></td>
			<td><?php echo $mobile; ?></td>
			<td>
				<a href="Edit.php?Name_id=<?php echo $Name_id; ?>">Update</a>
				<a href="Delete.php?Name_id=<?php echo $Name_id; ?>">Delete</a>
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