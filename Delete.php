<?php 
include 'dbconnect.php';

$SN = $_GET['SN'];

$sql = "DELETE from studentinfo where SN=$SN";

$result = mysqli_query($conn, $sql);

if($result){
	header('Location:index.php');
}

 ?>