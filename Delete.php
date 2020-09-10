<?php 
include 'dbconnect.php';

$Name_id = $_GET['Name_id'];

$sql = "DELETE from studentinfo where Name_id=$Name_id";

$result = mysqli_query($conn, $sql);

if($result){
	header('Location:index.php');
}

 ?>