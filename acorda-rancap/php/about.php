<?php
    session_start();
    if (!isset($_SESSION["SESSION_EMAIL"])) {
        header("Location: login.php");
    }
    include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="C - Merged">
    <meta name="author" content="Acorda, Jaedee & Rancap, Sharlyn">
    <title>C - Merged About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../styles/product.css">
    <link rel="stylesheet" type="text/css" href="../styles/about.css">
</head>
<body>

<div class="wrapper">
        <?php
            $sql = "SELECT * FROM users WHERE email='{$_SESSION["SESSION_EMAIL"]}'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        ?>
        <?php } ?>
    </div>  

<header class="header_area" id="home">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <div class="container">
                  <a class="navbar-brand" href="../php/index.php">C - Merged</a>
                      <button 
                          class="navbar-toggler" 
                          type="button" 
                          data-bs-toggle="collapse" 
                          data-bs-target="#navbarSupportedContent" 
                          aria-controls="navbarSupportedContent" 
                          aria-expanded="false" 
                          aria-label="Toggle navigation">

                          <span class="navbar-toggler-icon" style="color: #000000"></span>
                      </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav me-auto mb-2 mb-lg-0"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="../php/index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="../php/product.php" role="button" aria-expanded="false">Products</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../php/product.php">Filipino Cuisine</a></li>
                            <li><a class="dropdown-item" href="../php/product.php">Korean Cuisine</a></li>
                            <li><a class="dropdown-item" href="../php/product.php">Japanese Cuisine</a></li>
                          </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../php/about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../php/contact.php">Contact Us</a>
                        </li>
                      </ul>
                      <div class="icon-links">
                    <div id="icon-shopping-cart"><span class="icon-cart-arrow-down ml-5"><span id="item-counter">0</span></div>
                     </div>
                      <div class="text-end">
                          <button type="button" class="btn2"><?php echo $row["name"]; ?> <span class="form"><a href="logout.php">Logout</a></span></button>
                      </div>
                  </div>
                </div>
            </nav>
        </header>
    
   <section class="about-bg">
   <div class="container">
    <div class="row">
        <div class="col-12">
    <div class="about-us">
        <div class="inner-section">
            <h1>About Us</h1>
            <p class="text">
                We provide extraordinary food experiences, inspired by our legacy. 
                Also, we just really love to make the three known traditions work in diversity.

                We are starting a new journey with our partners to make this business a success and attain a good partnership on our business collaborators.
                We, bring you the taste of different cultures in one site and one place that is reachable enough in order to gain access to it.
                
                This business has started in a rush thought and we, plan to execute it. 
                To our viewers, clients and partners, a pleasure to work with you.
            </p>
            <div class="contact">
                <button>Contact Us</button>
            </div>

            
        </div>
    </div>
    </div>
    </div>

</section>
    
    <section id="about" class="about">
       <div class="profile">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
              <div class="about-img">
                <img src="../assets/jd.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h2>Acorda, Jaedee Babe P.</h2>
              <p class="fst-italic">
                “There has ling been a happy symbiotic relationship between kitchen and bar. Simply put, the kitchen wants booze, and the bartender wants food.”
                <br>
                ― Anthony Bourdain
              </p>
              <ul>
                <li><a href="">FB Account: Jaedee Acorda</a></li>
                <li><a href="">Email: jaedeebabe.acorda@lspu.edu.ph</a></li>
                <li><a href="">Mobile #: 09270541241</a></li>
              </ul>
            </div>
          </div>
  
        </div>
    </div>

    <div class="profile">
        <div class="container" data-aos="fade-up">
  
            <div class="row">
              <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="about-img">
                  <img src="../assets/shar.jpg" alt="">
                </div>
              </div>
              
              <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h2>Rancap, Sharlyn A.</h2>
                <p class="fst-italic">
                    “Thus, the sweetened breakfast was born, as was a core industry strategy that food processors would deploy forevermore...Just swap out the problem component for another that wasn't, at the moment, as high on the list of concerns.”
                <br>
                ― Michael Moss
                </p>
                <ul>
                    <li><a href="">FB Account: Rancap, Sharlyn</a></li>
                    <li><a href="">Email: sharlyn.rancap@lspu.edu.ph</a></li>
                    <li><a href="">Mobile #: 09122149381</a></li>
                </ul>
              </div>
            </div>
    
          </div>
        </div>
      </section>  

      <section class="served">
        <div class="container">
          <footer class="container py-5">
            <div class="row">
              <div class="col-md-3">
                <h5>DEVELOPED BY</h5>
                <small class="d-block mb-3 text-white">&copy; 2022 All rights reserved. <br>
                  C-Merged</small>         
              </div>
              <div class="col-md-3">
                <h5>FEATURES</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="mb-2" href="../php/product.php">FILIPINO</a></li>
                  <li><a class="mb-2" href="../php/product.php">KOREAN</a></li>
                  <li><a class="mb-2" href="../php/product.php">JAPANESE</a></li>
                  
                </ul>
              </div>
              <div class="col-md-3">
                <h5>RESOURCES</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="" href="../php/product.php">PRODUCT</a></li>
                  <li><a class="mb-2" href="../php/contact.php">CONTACT US</a></li>
                  <li><a class="mb-2" href="../php/about.php">ABOUT US</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h5>BE THE FIRST TO KNOW</h5>
                <ul class="list-unstyled text-small">
                  <li><p>
                    Check out C - Merged 's latest culinary discoveries, events, promotions, & more.
                  </p></li>
                  <li><a class="mb-2" href="../php/register.php"><p>
                    SIGN-UP NOW
                  </p></a></li>
                </ul>
              </div>
            </div>
          </footer>
          </div>
          
    </section>

       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
