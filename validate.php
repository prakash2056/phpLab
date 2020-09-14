<?php 

include 'dbconnect.php';

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = " SELECT * from users where email='$email' and password='$password'";

	$result = mysqli_query($conn, $sql);

	if($result){
		session_start();
		$row = mysqli_num_rows($result);
		if($row > 0){
			//successful case

			if(isset($_POST['remember'])){
				// set cookie
				setcookie("email", $email, time() + 60*60*7 );
				setcookie("password", $password, time() + 60*60*7 );

			}else{
				// unset cookie
				setcookie("email", "", time()-1 );
				setcookie("password", "", time()-1 );

			}

			$_SESSION['email'] = $email;

			header('location:index.php');

		}else{
			// email and password not matched
			$_SESSION['flash'] = "Incorrect email or Password !!!";
			header('location:login.php');
		}
	}

}else{
	header('location:login.php');
}




 ?>