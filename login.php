<!DOCTYPE html>
<html>
<head>
	<title>Contact Form | Login</title>
	
</head>
<body>

	<?php 
		session_start();
		if(isset($_SESSION['email'])){
			header('location:index.php');
		}

		$email = "";
		$password = "";

		if(isset($_COOKIE['email']) &&isset($_COOKIE['password'])){
			$email = $_COOKIE['email'];
			$password = $_COOKIE['password'];
		}
	 ?>

	<h1>Login</h1>

	<form action="validate.php" method="post">
		<input type="email" name="email" placeholder="example@exmple.com" value="<?php echo $email; ?>" required> <br> <br>
		<input type="password" name="password" placeholder="******" value="<?php echo $password; ?>" required> <br> <br>
		<input type="checkbox" name="remember" value="remember" checked="true"> Remember me <br> <br>
		<input type="submit" name="login" value="Login">
	</form>

	<p style="color: red; margin-left: 20px;">
		<?php 
		if(isset($_SESSION['flash'])){
			echo $_SESSION['flash'];
			unset( $_SESSION['flash']);
		}
	 ?>
	</p>

</body>
</html>