<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	//database connection here

		$host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "projectdb";

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	if($conn->connect_error){
		die("Failed to connect : ".$conn->connect_error);
	}else{
		$stmt= $conn->prepare("SELECT * FROM register WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['password'] === $password){
				echo "Login succesfully";
				header("refresh:3; url=../finalchange/pages/projectfrontpage.html");
				exit();
			}else{
			echo "Invalid email or password";
			header("refresh:3; url=index.html");
			}
		}
	}
?>