<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<link rel="preload" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="../styles/homestyle.css">
		<link rel="stylesheet" href="../styles/navbarstyle.css">
		<link rel="stylesheet" href="../styles/fontstyle.css">
		<title>RAE'S MENU</title>
	<style>
		.navbar{
			background-image:url("../assets/HBG1.png");
			background-size: cover;
		}
	</style>

	</head>
	<body>	
		<div class="container">
			<div id="navigation" class="row navigation">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="#Home"><img class="logo" src="../assets/logo2.png" alt="Rae's Menu logo"></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav navi">
							 <li class="nav-item">
								<a class="active" href="#Home">Home</a>
							</li>
							<li class="nav-item">
								<a href="menu.php" name="menu">Menu</a>
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
									<?php
									if(isset($_SESSION['username'])){?>
										<li><a class="dropdown-item" name="profile" href="profile.php">Profile</a></li>
										<li><a class="dropdown-item" name="logout" href="logout.php">Log out</a></li>
									<?php }
										else{  ?>
										<li><a class="dropdown-item" name="register" href="register.php">Register</a></li>
										<li><a class="dropdown-item" name="login" href="login.php">Login</a></li>
									<?php }
									?>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="row productpart">
				<h3 class="h3font">LATEST MENU</h3>
				<div class="col-md-5 col-sm-12">
					<figure class="figure"  id="latestpic1">
						<img src="../assets/Palitaw.jpeg" alt="Palitaw" class="product">
						<p class="productfont">Palitaw</p>
					</figure>
				</div>
				<div class="col-md-2 col-sm-0"></div>
				<div class="col-md-5 col-sm-12">
					<figure class="figure"  id="latestpic2">
						<img src="../assets/Butchi.jpeg" alt="Butchi" class="product">
						<p class="productfont">Butchi</p>
					</figure>
				</div>
			</div>
			<div class="row schedulepart">
				<div class="col-md-12 col-sm-12">
					<h3 class="h3font">SCHEDULES</h3>
					<table class="table table-striped table-bordered">
						<thead>
						  <tr class="table-success border-dark">
							<th scope="col" class="thfont">Product</th>
							<th scope="col" class="thfont">Day's of Available</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td scope="row" class="tdfont">Tuna Aglio Olio</th>
							<td class="tdfont">Wednesday</td>
						  </tr>
						  <tr>
							<td scope="row" class="tdfont">Spaghetti</th>
							<td class="tdfont">Monday</td>
						  </tr>
						  <tr>
							<td scope="row" class="tdfont">Butchi</th>
							<td class="tdfont">Monday and Wednesday</td>
						  </tr>
						  <tr>
							<td scope="row" class="tdfont">Palitaw</th>
							<td class="tdfont">Monday and Wednesday</td>
						  </tr>
						  <tr>
							<td scope="row" class="tdfont">Chicken Popper</th>
							<td class="tdfont">Saturday</td>
						  </tr>
						  <tr>
							<td scope="row" class="tdfont">Pork Tonkatsu</th>
							<td class="tdfont">Sunday</td>
						  </tr>
						</tbody>
					  </table>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>