<?php



?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="regstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register </title>
   </head>
<body>
	<img src="logo.png" class="logo">
  <div class="login-card">
    <h1>Register</h1><br>
  <form action="includes/signup.inc.php" method="post">
  	<h2>Name: </h2>
    <input type="text" name="user_name" placeholder="Type your name... " required>
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

<?php
 if(isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
    echo "<p> Fill in all Fields!</p>";
    }
    else if ($_GET["error"] == "invaliduser_name") {
    echo "<p> Input a correct name</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<p> Input your correct email</p>";
        }
        else if ($_GET["error"] == "unmatchedpassword") {
            echo "<p> Your passwords doesn't match</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p> Something Went Wrong, Try again! </p>";
                }
                else if ($_GET["error"] == "accountalreadyexists") {
                    echo "<p> Name already Exists! </p>";
                    }
                    else if ($_GET["error"] == "none") {
                        echo "<p> Welcome to Rae Menu! </p>";
                        }
 }
 
?>
<br>
  
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