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
<div class="avatar">
		<label for="avatar">Choose a profile picture:</label><br>

<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg" style="font-size: 20px;"></div>
       
       <div class="avatar">
       <img src="../assets/default.png" class="default"><br>
       <input type="text" name="name">
   </div>
					<div class="login-card">
				<form>

  			<h2>Email: <input type="text" name="user"></h2>
   				 
    		<h2>Password: <input type="text" name="pass"></h2>
    		
    		<h2>Contact Number: <input type="text" name="pass"></h2>
    		<h2>Description: <input type="text" name="desc" style="height: 150px;"></h2>
    		
    
  </form>

</div>
<br>
<div class="button1">
<form method="get" action="/page2">
    <button type="submit" name="submit" class="action_btn submit" id="button1" value="submit" >Submit</button>
</form></div>
<br>
<div class="button2">
<form method="get" action="file:///C:/Users/raina/OneDrive/Desktop/Rae%20Menu/register.html">
    <button type="submit" name="logout" class="action_btn submit" id="button2" value="logout" >Log Out</button>
</form>
</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
