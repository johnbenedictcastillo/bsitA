<?php



?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
	<img src="logo.png" class="logo">
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="includes/login.inc.php" method="post">
  	<h2>Email: </h2>
    <input type="text" name="user_name" placeholder="Type name/email... ">
    <h2>Password: </h2>
    <input type="password" name="password" placeholder="Type password... ">
    <br>
    <br>
    <input type="submit" name="login" class="action_btn submit" id="button1" value="Log in" >
    <a href="register.php"><input type="button" name="submit" class="action_btn submit" id="button2" value="Register" ></a>
</form>

<?php
 if(isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
    echo "<p> Fill in all Fields!</p>";
    }
    
    else if ($_GET["error"] == "wronglogin") {
        echo "<p> Input your correct email/password</p>";
        }
        
    else if ($_GET["error"] == "none") {
     echo "<p> Welcome to Rae Menu! </p>";
     }
 }
 ?>
<br>
  <div class="login-help">
    <a href="#">Forgot Password?</a>
  </div>
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