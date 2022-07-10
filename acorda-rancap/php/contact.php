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
    <title>C - Merged Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../styles/product.css">
    <link rel="stylesheet" type="text/css" href="../styles/contact.css">
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
    
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="contact-title">
          <h1>Contact Us</h1>
        </div>
      </div>
<div class="contact-text">
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h3>Location:</h3>
                <p>V. Maliwanag St. Calumpang, Famy, Laguna</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h3>Service Hours:</h3>
                <p>
                  Monday-Saturday:<br>
                  10:00 AM - 8:00 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h3>Email:</h3>
                <p><a href="">cmergedfoodie@gmail.com</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h3>Mobile #:</h3>
                <p><a href="">09122149381</a></p>
                <br>
                <p><a href="">09270541241</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="" id="contact-form" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email"  id="email"  class="form-control" name="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" id="subject" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>
      </div>
    </div>
      <div data-aos="fade-up" style="margin-top:50px">
            <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30912.70965349077!2d121.45431261960883!3d14.422049672249473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRestaurants!5e0!3m2!1sen!2sph!4v1656654578335!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    <script src="https://unpkg.com/@supabase/supabase-js"></script>
    
    <script>
     const { createClient } = supabase
     supabase = createClient("https://ddxshjmkblhpqyglzqtr.supabase.co", "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImRkeHNoam1rYmxocHF5Z2x6cXRyIiwicm9sZSI6ImFub24iLCJpYXQiOjE2NTY3MzE5NDgsImV4cCI6MTk3MjMwNzk0OH0.h_ZMXboAgEOLf5_V9Fk7jmfwZDVPhJCzmLTayDiR-60")
        
        const form = document.querySelector('#contact-form')
      form.addEventListener('submit', async (event) => {
          event.preventDefault()

          const formInputs = form.querySelectorAll('input, textarea')

          let submision = {}

          formInputs.forEach(element => {
            const { value, name } = element
            if (value) {
                submision[name] = value
            }
          })

          const { error, data } = await supabase.from('entries').insert([submision])

          if (error) {
              alert('There was an error please try again')
          } else {
              alert('Thanks for contacting us')
          }

          formInputs.forEach(element => element.value = '')

      })
    </script>
    </body>
</html>
