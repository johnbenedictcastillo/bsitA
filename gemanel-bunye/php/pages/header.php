<?php
session_start();
$conn = mysqli_connect('localhost','root','','raemenu') or die ('Failed Connection');
if (!isset($_SESSION['user_name'])) {  
	header("location:login.php");  
	exit();  }
	
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="preload" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="homestyle.css">
		<link rel="stylesheet" href="navbarstyle.css">
		<link rel="stylesheet" href="fontstyle.css">
        <style media="screen">
  .navbar {
    background: url("BG1.png?v=<?php echo time(); ?>");
  }
  .navigation .dropdown-menu{
    background-image: url("BG1.png?v=<?php echo time(); ?>");
  }
</style>
		<title>RAE'S MENU</title>
	</head>
	<body>	
    <div class="container" >
			<div class="row navigation">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="index.php"><img class="logo" src="Logo.png" alt="Rae's Menu logo"></a>
                    
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav navi">
							 <li class="nav-item">
								<a class="active" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a href="menu.php">Menu</a>
							</li>
							<li class="nav-item">
								<a href="about.php">About</a>
							</li>
							<li class="nav-item">
								<a href="contact.php">Contact</a>
							</li>
                            
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<div class ="dropdown-item">
                                 <li><a href='profile.php'>Profile</a></li>";
								<li><a href='includes/logout.inc.php'>Log out</a></li>";
								</div>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</div>