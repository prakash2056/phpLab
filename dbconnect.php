<?php 

$host = "localhost";
$username = "root";
$password = "";
$dbname = "info_db";

// Mysql connection
$conn = mysqli_connect($host, $username, $password, $dbname) or die("error");
echo"Conneted successfully to info_db database.";
echo"<br>";


 ?>