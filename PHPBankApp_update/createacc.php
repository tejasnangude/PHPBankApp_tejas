<?php 
	include 'customer.class.php';
	include 'connection.php';
	include 'savingsacc.class.php';
	
	session_start();
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$savObj=new SavingsAcc($_POST['accno'],$_POST['amount']);
		
		$sql="INSERT INTO account (acc_no,acc_bal) VALUES ('".$savObj->getAccno()."','".$savObj->getAccbal()."')";
		
		if($conn->query($sql) === true){
				echo "Account created successfully.";
				//$_SESSION['usrname'] = $username;
				//$_SESSION["passwd"] = $password;
				
				header("location:operations.php");
		} else{
				echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
	$conn->close();
?>



<html>
	<head></head>
	<title>Create account</title>
	<body>
		<h3 align="center">Enter Account details to create account</h3>
		<div>
			<form action="" method="post" align="center">
			
			<p>
				<label for="accountNo">Account No:</label>
				<input type="number" name="accno" id="accno" required="">

			</p>
				
			<p>
				<label for="amount">Amount to deposit:</label>
				<input type="number" name="amount" id="amount" required="">

			</p>
			
			<br><br>
			<input type="submit" name ="create" value="Create" class="btn btn-primary"/>
			<a href="logout.php"><input type="button" value="Log Out" class="btn btn-primary"/></a>
			<a href="index.php"><input type="button" value="Main Menu" class="btn btn-primary"/></a>
		</form>
	</div>
	</body>
</html>