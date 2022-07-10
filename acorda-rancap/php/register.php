<?php
    session_start();
    if (isset($_SESSION["SESSION_EMAIL"])) {
        header("Location: index.php");
    }

    if (isset($_POST["submit"])) {
        include 'config.php';

        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, ($_POST["password"]));
        $cpassword = mysqli_real_escape_string($conn, ($_POST["cpassword"]));
        $limits = mysqli_real_escape_string($conn, $_POST["limits"]);
        $limit_used = 0;

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
            echo "<script>alert('{$email} - This email has already taken.');</script>";
        }else {
            if ($password === $cpassword) {
                $sql = "INSERT INTO users (name, email, password, login_limits, limit_used) VALUES ('{$name}', '{$email}', '{$password}', '{$limits}', '{$limit_used}')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    header("Location: login.php");
                }else {
                    echo "<script>Error: ".$sql.mysqli_error($conn)."</script>";
                }
            }else {
                echo "<script>alert('Password and confirm password do not match.');</script>";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="C - Merged">
    <meta name="author" content="Acorda, Jaedee & Rancap, Sharlyn">
    <link rel="stylesheet" href="../php/register.css">
    <title>C - Merged Registration <Form></Form></title>
</head>
<body>
<main>

<div class="box">
  <div class="inner-box">
    <div class="forms-wrap">
      <form  method="post" class="form" autocomplete="off" class="sign-in-form">
        <div class="logo">
          <h1>C - Merged Login</h1>
        </div>

        <div class="main-form">
          <div class="input-wrap">
            <input type="name" id="name" name="name" maxlength="50" class="input-field" autocomplete="off" required/>
            <label for="name" class="input-label">Full Name</label>

          </div>

          <div class="input-wrap">
          <input type="email" id="email" name="email" maxlength="50" class="input-field" autocomplete="off" required/>
            <label for="email" class="input-label">Email</label>
          </div>

          <div class="input-wrap">
          <input type="password" id="password" name="password" maxlength="50" class="input-field" autocomplete="off" required/>
            <label for="password" class="input-label">Password</label>
          </div>
          <div class="input-wrap">
          <input type="password" id="cpassword" name="cpassword" maxlength="50" class="input-field" autocomplete="off" required/>
            <label for="cpassword" class="input-label">Confirm Password</label>
          </div>

          <div class="input-wrap">
          <label for="limit" class="input-field" >Login Limit</label><br>
                <select id="limit" name="limits"  required>
                    <option value="" disabled selected>Select Limit</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

          </div>
 
        <button id="login" name="submit" class="float-left submit-button" >Submit</button>
        <p class="text-white">You have already an account! <a href="./login.php">Login</a></p>

        </div>

    </div>

    <div class="carousel">
      <div class="images-wrapper">
        <img src="../assets/4.jpg" class="image img-1 show" alt="Filipino Cuisine" />
        <img src="../assets/8.jpg" class="image img-2" alt="Korean Cuisine" />
        <img src="../assets/12.jpg" class="image img-3" alt="Japanese Cuisine" />
      </div>

      <div class="text-slider">
        <div class="text-wrap">
          <div class="text-group">
            <h2>Filipino Cuisine</h2>
            <h2>Korean Cuisine</h2>
            <h2>Japanese Cuisine</h2>
          </div>
        </div>

        <div class="bullets">
          <span data-value="1"></span>
          <span data-value="2"></span>
          <span data-value="3"></span>
        </div>
      </div>
    </div>
  </div>
</div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="../scripts/form.js"></script>
