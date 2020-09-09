<?php 
include 'dbconnect.php';

$SN = $_POST['SN'];
$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$LastName = $_POST['LastName'];
$Address = $_POST['Address'];
$mobile = $_POST['mobile'];


$sql = "UPDATE studentinfo set FirstName='$FirstName', MiddleName='$MiddleName', LastName='$LastName', Address='$Address', mobile='$mobile' where SN= $SN";

$result = mysqli_query($conn, $sql);

if($result){
	header('Location:index.php');
}

 ?>
