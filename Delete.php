<?php 
include 'dbconnect.php';

$id = $_GET['id'];

$sql = "DELETE from studentinfo where Name_id=$Name_id";

$result = mysqli_query($conn, $sql);

if($result){
	header('Location:index.php');
}

 ?>