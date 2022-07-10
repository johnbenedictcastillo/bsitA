<?php
    session_start();
    if (isset($_SESSION["SESSION_EMAIL"])) {
        header("Location: index.php");
    }

    if (isset($_POST["login"])) {
        include 'config.php';
        
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string ($conn, $_POST["password"]);

        $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['login_limits'] === $row['limit_used'] || $row['login_limits'] < $row['limit_used']) {
                echo "<script>alert('Your login limits are not enough.');</script>";
            }else {
                $x = $row["limit_used"] + 1;
                mysqli_query($conn, "UPDATE users SET limit_used='{$x}' WHERE email='{$email}'");

                $_SESSION["SESSION_EMAIL"] = $email;
                header("Location: index.php");
            }
        }else {
            echo "<script>alert('Your Login details is incorrect.');</script>";
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
    <link rel="stylesheet" href="../php/style1.css">
    <title>C-Merged Login <Form></Form></title>
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
            <input type="email" id="email" name="email" maxlength="50" class="input-field" autocomplete="off" required/>
            <label>Email</label>
          </div>

          <div class="input-wrap">
            <input type="password" id="password" name="password" maxlength="20" class="input-field" autocomplete="off" required />
            <label>Password</label>
          </div>
          

          <button id="login" name="login" class="float-left submit-button" >Login</button>

        </div>

        <div class="heading">
          <h6>Not registred yet?</h6>
          <a href="/php/register.php" class="toggle">Register</a>
        </div>


        <div id="ajax">
        <button id="ajaxbtn" type="button" class="note" onclick="loadDoc()">A Little Remainder ^_^</button>
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

<script>
      function loadDoc() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
        document.getElementById("ajax").innerHTML =
        this.responseText;
        }
        xhttp.open("GET", "remainder.txt");
        xhttp.send();
        }
</script>
</body>
</html>
