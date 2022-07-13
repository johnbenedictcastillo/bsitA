<?php
$invalid = 0;

if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'connect.php';
  $username = $_POST['username'];
  $pwd = $_POST['password'];

  $sql = "SELECT * FROM `users` WHERE username = '$username' and `password` = '$pwd'";
  $result = $conn->query($sql);
  
    if($result){
      $num = mysqli_num_rows($result);
        if($num>0){
          session_start();
          while($row = $result->fetch_assoc()){
          $_SESSION['id'] = $row['id'];
          $_SESSION['username'] = $row['username'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['password'] = $row['password'];
          $_SESSION['contact'] = $row['contact'];
          $_SESSION['address'] = $row['address'];
          }
          header('location:index.php');
        }else{
          $invalid = 1;
        }
    }
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/loginstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <h1>Log-in</h1><br>
  <form method="post">
  	<h2>Name: </h2>
    <input type="text" name="username" placeholder="Type name... ">
    <h2>Password: </h2>
    <input type="password" name="password" placeholder="Type password... ">
    <br>
    <br>
    <input type="submit" name="login" class="action_btn submit" id="button1" value="Log in" >
    <a href="register.php"><input type="button" name="submit" class="action_btn submit" id="button2" value="Register" ></a>
</form>
    <?php
      if($invalid){
        echo '<div class="alert alert-danger text-center" role="alert">
                <strong>Please </strong>login or
                the <strong>user </strong>does not exist.
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