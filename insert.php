<?php  

include 'dbconnect.php';

$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$LastName = $_POST['LastName'];
$Address = $_POST['Address'];
$mobile = $_POST['mobile'];

$sql = "INSERT INTO studentinfo(FirstName, MiddleName, LastName, Address, mobile) VALUES('$FirstName','$MiddleName','$LastName','$Address', '$mobile')";

$result = mysqli_query($conn, $sql);

if($result){
	echo "successful insert";
	header('Location:index.php');
}
?>