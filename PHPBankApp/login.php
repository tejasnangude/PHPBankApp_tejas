<?php  
	session_start();
	include 'connection.php';
	
	if (isset($_POST['usrname']) and isset($_POST['passwd'])){
		
		$username = $_POST['usrname'];
		$password = $_POST['passwd'];

		$query = "SELECT * FROM `customer` WHERE uname='$username' and passwd='$password'";

		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($result);
	
		if ($count == 1){
			$_SESSION['usrname'] = $username;
			$_SESSION["passwd"] = $password;
			header("location:menu.php");
		}else{
			echo "Invalid login credentials";
		}
	}	
		if (isset($_SESSION['usrname'])){
			$username = $_SESSION['usrname'];
			echo "Welcome " . $username . "";
			echo "<a href='logout.php'>Logout</a>";
		}
?>
<html>
	<head></head>
	<title>Login Form</title>
	<body>
		<h3 align="center">Enter Login details</h3>
		<div>
			<form action="" method="post" align="center">
			<p>
				<label for="username">Username:</label>
				<input type="text" name="usrname" id="username" required="">

			</p>
			
			<p>
				<label for="password">Password:</label>
				<input type="password" name="passwd" id="accno" required="">
			</p>
			
			<br><br>
			<input type="submit" name="LogIn" value="Login" class="btn btn-primary">
			<a href="registration.php"><input type="button" value="Register" class="btn btn-primary"/></a>
			<a href="index.php"><input type="button" value="Back" class="btn btn-primary"/></a>
		</form>
	</div>
	</body>
</html>