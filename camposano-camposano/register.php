<?php
include "config.php";
// if the form's submit button is clicked, we need to process the form
    if (isset($_POST['submit'])) {
        // get variables from the form
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //write sql query

        $sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `password`) VALUES ('$fname','$lname','$email','$password')";

        // execute the query


        $result = $conn->query($sql);

        if (isset($_SESSION['lname'])) {
          header("Location: login.php");
        }

        $conn->close();

    }



?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>ARTXYNA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="styles/styles.css">

    </head>
    
    
    <body class="loginbody">          
            <header class="header_area">
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-5-strong" id="navbar">
                  <div class="container">
                    <a class="yna navbar-brand" href="samplee.php">
                        ARTXYNA</a>
                        <button 
                            class="navbar-toggler" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#navbarSupportedContent" 
                            aria-controls="navbarSupportedContent" 
                            aria-expanded="false" 
                            aria-label="Toggle navigation">

                            <span class="navbar-toggler-icon"></span>
                        </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <div class="navbar-nav me-auto mb-2 mb-lg-0"></div>
                      <ul class="navbar-nav" id="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="samplee.php">HOME</a>
                        </li> 
                        <li class="nav-item">
                           <a class="nav-link " href="request.php">REQUEST COMMISSION</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="library.php">LIBRARY</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="aboutus.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="contactus.php">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="login.php">LOGIN</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="register.php">REGISTER</a>
                        </li> 
                     </ul>   

                    </div>
                  </div>
                </nav>
          </header>

          <div class="card-area4">
                <div class="container d-flex justify-content-center card-list">
                    <div class="row g-2">
                        <div class="llogin_column col-md-12 col-sm-12 text-wrap">
                            <div class="info-right">
                                        <div class="ynalogo">
                                            <img class="ynalogo" src="assets/ynalogo.png">
                                        </div>
                                <h3 class="login_your_account text-center">Register your Account</h3>
                                <div class="card-body text-center">
                                    <form class="login-form" action="" method="POST">
                                        <fieldset>
                                        <label for="fname" id="loginemail">First name: </label><br>
                                        <input class ="col-md-8 col-sm-8" type="text" id="fname" name="fname" ><br><br>
                                        <label for="lname" id="loginemail">Last name: </label><br>
                                        <input class ="col-md-8 col-sm-8" type="text" id="lname" name="lname" ><br><br>


                                        <label for="Email" id="loginemail">Email:</label><br>
                                        <input class ="col-md-8 col-sm-8" type="text" id="email" name="email" ><br>
                                        <label for="Password" id="loginpwd">Password:</label><br>
                                        <input class ="col-md-8 col-sm-8" type="password" id="pwd" name="password" ><br>
                                        <input type="checkbox" id="checkbox" name="checkbox" onclick="myFunction()">
                                        <label for="showpass" id="showpss"> Show Password</label><br>

                                        <script>
                                            function myFunction() {
                                                var x = document.getElementById("pwd");
                                                if (x.type === "password") {
                                                    x.type = "text";
                                                }
                                                else {
                                                    x.type = "password";
                                                }
                                            }
                                        </script>
                                        <input class="btn1" type="reset" value="Reset" id="reset">
                                        <button class="btn1" type="submit" value="submit" name="submit" id="login" onclick="myFunctionCP()">Register</button>
                                        </fieldset>
                                    </form>
                                 
                                <div class="registerlink">
                                    <a id="registerlink" href="register.php">Already have an account? Click here to Login Now!</a>
                                </div>

                                <div id="ajax">
                                    <button id="ajaxbtn" type="button" onclick="loadDoc()">Why Create an Account?</button>
                                    </div>

                                    <script>
                                    function loadDoc() {
                                      const xhttp = new XMLHttpRequest();
                                      xhttp.onload = function() {
                                        document.getElementById("ajax").innerHTML =
                                        this.responseText;
                                      }
                                      xhttp.open("GET", "info.txt");
                                      xhttp.send();
                                    }
                                    </script>

                                </div>


                            </div>
                        </div>
                </div>
            </div>
            </div>

          <section class="feature">
        <div class="container">
            <footer class="py-5">
                <div class="row">


                    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top"></div>


                    <div class="col-12 col-md-5 mb-5">
                        <h5>CONTACT INFO</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-6"><a href="mailto:ynamarie.camposano@lspu.edu.ph" class="nav-link p-0 text-dark"><p>ynamarie.camposano@lspu.edu.ph
                            </p></a></li>
                            <li class="nav-item mb-6"><a href="tel:09656544002" class="nav-link p-0 text-dark"><p>09656544002
                            </p></a></li>
                            <br>
                            <li class="nav-item mb-6"><a href="#" class="nav-link p-0 text-dark"><p>PRIVACY POLICY</p></a></li>
                        </ul>
                    </div>
      
      
            <div class="col-12 col-md-4 mb-4">
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="request.php" class="nav-link p-0 text-dark"><p>REQUEST COMMISSION</p></a></li>
                <li class="nav-item mb-2"><a href="library.php" class="nav-link p-0 text-dark"><p>LIBRARY</p></a></li>
                <li class="nav-item mb-2"><a href="aboutus.php" class="nav-link p-0 text-dark"><p>ABOUT US</p></a></li>
                <li class="nav-item mb-2"><a href="contactus.php" class="nav-link p-0 text-dark"><p>CONTACT US</p></a></li>
                <li class="nav-item mb-2"><a href="login.php" class="nav-link p-0 text-dark"><p>LOGIN</p></a></li>
                <li class="nav-item mb-2"><a href="register.php" class="nav-link p-0 text-dark"><p>REGISTER</p></a></li>
              </ul>
            </div>
      
            <div class="col-12 col-md-3 mb-3">
                <h5>YOU WANT TO KNOW WHAT WE CAN CREATE?</h5>
                <ul class="nav flex-column">
                  <li class="nav-item1 mb-2"><a href="library.php" class="nav-link p-0 text-dark"><p>
                    Check out ARTXYNA's awesome commissions!
                  </p></a></li>
                </ul>
              </div>
          </div>
      
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; 2022 ARTXYNA. All rights reserved.</p>
          </div>
        </footer>
      </div>
      
</section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="script\script.js"></script>


    </body>
</html>