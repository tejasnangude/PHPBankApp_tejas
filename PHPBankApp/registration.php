<?php
	include 'customer.class.php';
	include 'connection.php';

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$custObj=new Customer($_POST['custfname'],$_POST['custlname'],$_POST['aadhar'],$_POST['pan'],$_POST['usrname'],$_POST['passwd']);
		
		$sql="INSERT INTO customer (first_name,last_name,aadhar_no,pan_no,uname,passwd) VALUES ('".$custObj->getCustFname()."','".$custObj->getCustLname()."','".$custObj->getAadharno()."','".$custObj->getPanno()."','".$custObj->getUsername()."','".$custObj->getPassword()."')";
		
		if($conn->query($sql) === true){
				echo "Records inserted successfully.";
		} else{
				echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
	$conn->close();
?>

<html>
	<head></head>
	<title>Registration Form</title>
	<body>
		<h3 align="center">Enter Registration details</h3>
		<div>
			<form action="" method="post" align="center">
			<p>
				<label for="custFName">First Name:</label>
				<input type="text" name="custfname" id="custFName" required="">

			</p>
			<p>
				<label for="custLName">Last Name:</label>
				<input type="text" name="custlname" id="custLName" required="">

			</p>
			
			<p>
				<label for="aadharNo">Aadhar Number:</label>
				<input type="number" name="aadhar" id="aadharNo" required="">

			</p>
			<p>
				<label for="panNo">PAN Number:</label>
				<input type="text" name="pan" id="panNo" required="">

			</p>
			
			<p>
				<label for="username">Username:</label>
				<input type="text" name="usrname" id="username" required="">

			</p>
			
			<p>
				<label for="password">Password:</label>
				<input type="password" name="passwd" id="password" required="">

			</p>
			<br><br>
			<input type="submit" name ="register" value="Register" class="btn btn-primary"/>
			<a href="login.php"><input type="button" value="Log In" class="btn btn-primary"/></a>
			<a href="index.php"><input type="button" value="Main Menu" class="btn btn-primary"/></a>
		</form>
	</div>
	</body>
</html>