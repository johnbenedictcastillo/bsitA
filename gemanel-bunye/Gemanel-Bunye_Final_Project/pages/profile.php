<?php 

if(isset($_POST['update'])){
	include 'connect.php';
	$id = $_POST['id'];
	$name = $_POST['username'];
	$email = $_POST['user'];
	$pwd = $_POST['pass'];
	$contact = $_POST['contact'];
	$desc = $_POST['desc'];

	
	$sql = "UPDATE `users` SET `username` = '$name', `email` = '$email', `password` = '$pwd', `contact` = '$contact', `description` = '$desc' WHERE `id` = '$id'";
	$result = $conn->query($sql);
	if($result){
		header('location: profile.php');
	}else{
		die(mysqli_error($conn));
	}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script src="../scripts/main.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="../styles/profstyle.css">

		<title>Profile</title>
		<style>
			h3 {
				font-family: "Times New Roman", Times, serif;
			}
			.avatar, .input {
				font-family: "Times New Roman", Times, serif;
			}
		</style>
	</head>
	<body>	
		<div class="container">
			<div id="navigation" class="row navigation" >
				<?php
                include_once 'nav.php';
                ?>
			</div>
<br>

				<h3 class="h3font"><b>PROFILE</b></h2>
					<hr>
	<form method="post">
		<div class="avatar">
			<label for="avatar">Choose a profile picture:</label><br>
			<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" style="font-size: 20px;">
		</div>
       	<div class="avatar">
			<img src="../assets/default.png" class="default"><br>
			<input type="text" name="username"  value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];}?>">
   		</div>
		<div class="login-card">	
			<h2>ID Number: <input type="text" name="id" value="<?php if(isset($_SESSION['id'])){ echo $_SESSION['id'];}?>"></h2>
  			<h2>Email: <input type="text" name="user" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?>"></h2>	 
    		<h2>Password: <input type="text" name="pass" value="<?php if(isset($_SESSION['password'])){ echo $_SESSION['password'];}?>"></h2>
    		<h2>Contact Number: <input type="text" name="contact" value="<?php if(isset($_SESSION['contact'])){ echo $_SESSION['contact'];}?>"></h2>
    		<h2>Description: <input type="text" name="desc" style="height: 150px;" value="<?php if(isset($_SESSION['description'])){ echo $_SESSION['description'];}?>"></h2>
			<button type="submit" name="update" class="action_btn submit" id="button1" > Update</button>
		</div>
	</form>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>