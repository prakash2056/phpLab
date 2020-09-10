<?php 
include 'dbconnect.php';

$Name_id = $_POST['Name_id'];
$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$LastName = $_POST['LastName'];
$Address = $_POST['Address'];
$mobile = $_POST['mobile'];


$sql = "UPDATE studentinfo set FirstName='$FirstName', MiddleName='$MiddleName', LastName='$LastName', Address='$Address', mobile='$mobile' where Name_id= $Name_id";

$result = mysqli_query($conn, $sql);

if($result){
	header('Location:index.php');
}

 ?>
