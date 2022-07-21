<?php 

include 'config.php';

error_reporting(0);

if(!isset($_SESSION)){
    session_start();
}

include("config.php");


if(isset($_POST['submit']))
{
    $emails = $_POST['emails'];
    $passwords = $_POST['password'];


    $query = "SELECT * FROM users WHERE email = '$emails' AND password = '$passwords'";

    $l_user = $conn->query($query) or die($conn->error);
    $row = $l_user->fetch_assoc();

    $total = $l_user->num_rows;


    if($total > 0 ){
        $_SESSION['UserInfo'] = $row['username'];
        $_SESSION['UserEmail'] = $row['email'];
        header("Location: home.php");
    }
    


}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="emails" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>