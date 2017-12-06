<!--?php
		
		include 'connection.php';
		if(isset($_POST['register'])){		
			
			$custfname = $conn->real_escape_string($_POST['custfname']);
			$custlname=$conn->real_escape_string($_POST['custlname']);
			$aadhar = $conn->real_escape_string($_POST['aadhar']);
			$pan = $conn->real_escape_string($_POST['pan']);
			$username = $conn->real_escape_string($_POST['usrname']);
			$password=$conn->real_escape_string($_POST['passwd']);

			// insert into db
			$sql = "INSERT INTO customer (first_name,last_name,aadhar_no,pan_no,uname,passwd) VALUES ('$custfname','$custlname','$aadhar','$pan','$username','$password')";
			if($conn->query($sql) === true){
				echo "Records inserted successfully.";
			} else{
				echo "ERROR: Could not able to execute $sql. " . $conn->error;
			}
		}
		// Close connection
		$conn->close();
		
	?-->