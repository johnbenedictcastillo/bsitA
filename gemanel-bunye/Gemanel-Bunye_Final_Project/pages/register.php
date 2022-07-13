<?php
$existed = 0;
$invalid = 0;


if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'connect.php';
  $username = $_POST['username'];
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$cpwd = $_POST['repassword'];
	$contact = $_POST['contact'];

  $sql = "SELECT * FROM `users` WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);
    if($result){
      $num = mysqli_num_rows($result);
        if($num>0){
          //echo 'Username has already exist';
          $existed = 1;
        }else{
            if($pwd === $cpwd){
              $sql = "INSERT INTO `users` (`username`, `email`, `password`, `contact`) VALUES ('$username', '$email', '$pwd', '$contact')";
              $result = mysqli_query($conn, $sql);
              if($result){
                //echo "Data has been recorded";
                header('location:login.php');
              }else{
                die(mysqli_error($conn));
              }
            }else{
            $invalid = 1;
          }
        }
    }
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/regstyle.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register </title>
    <style>
			h1 {
				font-family: "Times New Roman", Times, serif;
			}
			h2, input {
				font-family: "Times New Roman", Times, serif;
			}
		</style>
   </head>
<body>
	<a href="index.php"><img src="../assets/logo2.png" class="logo"></a>
  <div class="login-card">
    <h1>Register</h1><br>
  <form method="post">
  	<h2>Name: </h2>
    <input type="text" name="username" placeholder="Type your name... " required>
  	<h2>Email: </h2>
    <input type="text" name="email" placeholder="Type email... ">
    <h2>Password: </h2>
    <input type="password" name="password" placeholder="Type password... " required>
    <br>
    <h2>Confirm Password: </h2>
    <input type="password" name="repassword" placeholder="Type password... " required>
    <br>
    <h2>Contact Number: </h2>
    <input type="text" name="contact" placeholder="Type phone number... " required>
    <br>
    <br>
    <button type="submit" name="submit" class="action_btn submit" id="button1" > Sign-up</button>
    <a href="login.php"><input type="button" name="login" class="action_btn submit" id="button2" value="Login"></a>
  </form>
<br>
    <?php
      if($existed){
        echo '<div class="alert alert-danger" role="alert">
              <strong>Sorry! </strong>User already exist.
            </div>';
      }
    ?>
    <?php
      if($invalid){
        echo '<div class="alert alert-danger" role="alert">
              <strong>Password </strong>does not match.
            </div>';
      }
    ?>
    
</div>
    </div>
    </div>
    </div>
  </div>
<div>
	<h1 class="greet">Hello and Welcome to <br><hr>Rae's Menu</h1>

</div>
</body>
</html>