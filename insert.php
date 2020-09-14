<?php  

include 'dbconnect.php';

$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$LastName = $_POST['LastName'];
$Address = $_POST['Address'];
$mobile = $_POST['mobile'];

$fileName = basename($_FILES['photo']['name']);
$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

$targetFileName = $name. "_".time().".".$fileExtension;

$targetFilePath = $targetDir.$targetFileName;

$sql = "INSERT INTO studentinfo(FirstName, MiddleName, LastName, Address, mobile, photo) VALUES('$FirstName','$MiddleName','$LastName','$Address', '$mobile', '$targetFileName')";

$result = mysqli_query($conn, $sql);

if($result){
	
	if(move_uploaded_file($_FILES['photo']['tmp_name'], $targetFilePath)){
		echo "Succesful upload photo = ". $targetFileName;
	}else{
		echo "Unable to upload file";
	}

	echo "successful insert";
	header('Location:index.php');
}
?>