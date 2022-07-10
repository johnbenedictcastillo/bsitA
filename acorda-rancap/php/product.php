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
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/product.css">
    <title>C - Merged Products</title>
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
                            <li><a class="dropdown-item" href="#filipino">Filipino Cuisine</a></li>
                            <li><a class="dropdown-item" href="#korean">Korean Cuisine</a></li>
                            <li><a class="dropdown-item" href="#japanese">Japanese Cuisine</a></li>
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


    <div class="home-bg">

        <section class="home" id="home">
     
           <div class="content">
              <h2>C - Merged</h2>
              <p> We provide extraordinary food experiences, inspired by our legacy. 
                Also, we just really love to make the three known traditions work in diversity.</p>
           </div>
     
        </section>
     
     </div>
     
     <div class="features">
     <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Features</h2>
            <p>What do we offer?</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4">
              <div class="box" data-aos="zoom-in" data-aos-delay="100">
                <span>01</span>
                <h3>Filipino Cuisine</h3>
                <p>Cuisine mixed of Asian and Western influences transformed through local cooking techniques.</p>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="zoom-in" data-aos-delay="200">
                <span>02</span>
                <h3>Korean Cuisine</h3>
                <p>One of the world's healthiest because of the wide use of natural and seasonal components of their food sources, like tofu, beans, garlic, and their all-natural kimchi.</p>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0" >
              <div class="box" data-aos="zoom-in" data-aos-delay="300">
                <span>03</span>
                <h3>Japanese Cuisine</h3>
                <p>Offers an abundance of gastronomical delights with a boundless variety of regional and seasonal dishes.</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
    </div>

    
    <section class="divider">
        <div class="container">
        <div class="section-title">
            <h2>Our Deals</h2>
            <p>Discount Offers</p>
          </div>
        </div>
    </section>

    <div class="featured-product" id="pricing">
        <div class="section-wrap">

            <div class="featured-products">
                <div class="product-wrap apple">
                    <div class="product-img">
                        <img src="../assets/bulalo.jpg" alt="">
                    </div>
                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        <p><span class="discount">10</span>% off</p>
                    </div>

                    <div class="product-description">
                        <p class="product-name">Bulalo</p>
                        <p class="price">Price: <del><span>100.00 </span>Pesos</del> <ins><br><span>90.00 </span>Pesos</ins></p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Add to Cart</p>
                        </div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="../assets/sisig.jpg" alt="">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        <p><span class="discount">10</span>% off</p>
                    </div>

                    <div class="product-description">
                        <p class="product-name">Pork Sisig</p>
                        <p class="price">Price: <del><span>100.00 </span>Pesos</del> <ins><br><span>90.00 </span>Pesos</ins></p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Add to Cart</p>
                        </div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="../assets/pininyahan.jpg" alt="">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        <p><span class="discount">10</span>% off</p>
                    </div>

                    <div class="product-description">
                        <p class="product-name">Pininyahang Manok</p>
                        <p class="price">Price: <del><span>80.00 </span>Pesos</del> <ins><br><span>70.00 </span>Pesos</ins></p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Add to Cart</p>
                        </div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="../assets/adobo.jpg" alt="">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        <p><span class="discount">10</span>% off</p>
                    </div>

                    <div class="product-description">
                        <p class="product-name">Chicken Adobo</p>
                        <p class="price">Price: <del><span>60.00 </span>Pesos</del> <ins><br><span>50.00 </span>Pesos</ins></p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Add to Cart</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    

    <section class="divider" id="filipino">

        <div class="heading">
            <h3>Filipino Cuisine Dishes</h3>
         </div>
    </section>

    <div class="featured-product" id="pricing">
        <div class="section-wrap">

            <div class="featured-products">
                <div class="product-wrap apple">
                    <div class="product-img">
                        <img src="../assets/bulalo.jpg" alt="">
                    </div>
                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        <p><span class="discount">10</span>% off</p>
                    </div>

                    <div class="product-description">
                        <p class="product-name">Bulalo</p>
                        <p class="price">Price: <del><span>120.00 </span>Pesos</del> <ins><br><span>110.00 </span>Pesos</ins></p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Add to Cart</p>
                        </div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="../assets/sisig.jpg" alt="">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        <p><span class="discount">10</span>% off</p>
                    </div>

                    <div class="product-description">
                        <p class="product-name">Pork Sisig</p>
                        <p class="price">Price: <del><span>120.00 </span>Pesos</del> <ins><br><span>110.00 </span>Pesos</ins></p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Add to Cart</p>
                        </div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="../assets/pininyahan.jpg" alt="">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        <p><span class="discount">10</span>% off</p>
                    </div>

                    <div class="product-description">
                        <p class="product-name">Pininyahang Manok</p>
                        <p class="price">Price: <del><span>90.00 </span>Pesos</del> <ins><br><span>80.00 </span>Pesos</ins></p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Add to Cart</p>
                        </div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-img">
                        <img src="../assets/adobo.jpg" alt="">
                    </div>

                    <div class="product-icons">
                        <div class="add-to-favorite"><span class="icon-heart"></span></div>
                        <p><span class="discount">10</span>% off</p>
                    </div>

                    <div class="product-description">
                        <p class="product-name">Chicken Adobo</p>
                        <p class="price">Price: <del><span>60.00 </span>Pesos</del> <ins><br><span>50.00 </span>Pesos</ins></p>
                        <div class="add-to-cart-btn">
                            <p><span class="icon-cart-plus"></span> Add to Cart</p>
                        </div>
                    </div>
                </div>
        
        <div class="product-wrap">
            <div class="product-img">
                <img src="../assets/bikol.jpg" alt="">
            </div>

            <div class="product-icons">
                <div class="add-to-favorite"><span class="icon-heart"></span></div>
                <p><span class="discount">10</span>% off</p>
            </div>

            <div class="product-description">
                <p class="product-name">Bicol Express</p>
                <p class="price">Price: <del><span>80.00 </span>Pesos</del> <ins><br><span>70.00 </span>Pesos</ins></p>
                <div class="add-to-cart-btn">
                    <p><span class="icon-cart-plus"></span> Add to Cart</p>
                </div>
            </div>
        </div>

        <div class="product-wrap">
            <div class="product-img">
                <img src="../assets/nilaga.jpg" alt="">
            </div>

            <div class="product-icons">
                <div class="add-to-favorite"><span class="icon-heart"></span></div>
                <p><span class="discount">10</span>% off</p>
            </div>

            <div class="product-description">
                <p class="product-name">Nilagang baboy</p>
                <p class="price">Price: <del><span>60.00 </span>Pesos</del> <ins><br><span>50.00 </span>Pesos</ins></p>
                <div class="add-to-cart-btn">
                    <p><span class="icon-cart-plus"></span> Add to Cart</p>
                </div>
            </div>
        </div>

        <div class="product-wrap">
            <div class="product-img">
                <img src="../assets/sinigang.jpg" alt="">
            </div>

            <div class="product-icons">
                <div class="add-to-favorite"><span class="icon-heart"></span></div>
                <p><span class="discount">10</span>% off</p>
            </div>

            <div class="product-description">
                <p class="product-name">Sinigang na Baboy</p>
                <p class="price">Price: <del><span>80.00 </span>Pesos</del> <ins><br><span>70.00 </span>Pesos</ins></p>
                <div class="add-to-cart-btn">
                    <p><span class="icon-cart-plus"></span> Add to Cart</p>
                </div>
            </div>
        </div>

        <div class="product-wrap">
            <div class="product-img">
                <img src="../assets/pakbet.jpg" alt="">
            </div>

            <div class="product-icons">
                <div class="add-to-favorite"><span class="icon-heart"></span></div>
                <p><span class="discount">10</span>% off</p>
            </div>

            <div class="product-description">
                <p class="product-name">Pinakbet Ilocano</p>
                <p class="price">Price: <del><span>50.00 </span>Pesos</del> <ins><br><span>40.00 </span>Pesos</ins></p>
                <div class="add-to-cart-btn">
                    <p><span class="icon-cart-plus"></span> Add to Cart</p>
                </div>
            </div>
        </div>

    </div>
</div>

<section class="divider" id="korean">

    <div class="heading">
        <h3>Korean Cuisine Dishes</h3>
     </div>
</section>

<div class="featured-product" id="pricing">
    <div class="section-wrap">

        <div class="featured-products">
            <div class="product-wrap apple">
                <div class="product-img">
                    <img src="../assets/samgyeopsal.jpg" alt="">
                </div>
                <div class="product-icons">
                    <div class="add-to-favorite"><span class="icon-heart"></span></div>
                    <p><span class="discount">10</span>% off</p>
                </div>

                <div class="product-description">
                    <p class="product-name">Samgyeopsal</p>
                    <p class="price">Price: <del><span>200.00 </span>Pesos</del> <ins><br><span>190.00</span>Pesos</ins></p>
                    <div class="add-to-cart-btn">
                        <p><span class="icon-cart-plus"></span> Add to Cart</p>
                    </div>
                </div>
            </div>

            <div class="product-wrap">
                <div class="product-img">
                    <img src="../assets/samgyetang.jpg" alt="">
                </div>

                <div class="product-icons">
                    <div class="add-to-favorite"><span class="icon-heart"></span></div>
                    <p><span class="discount">10</span>% off</p>
                </div>

                <div class="product-description">
                    <p class="product-name">Samgyetang</p>
                    <p class="price">Price: <del><span>100.00 </span>Pesos</del> <ins><br><span>90.00 </span>Pesos</ins></p>
                    <div class="add-to-cart-btn">
                        <p><span class="icon-cart-plus"></span> Add to Cart</p>
                    </div>
                </div>
            </div>

            <div class="product-wrap">
                <div class="product-img">
                    <img src="../assets/spicysofttofustew.jpg" alt="">
                </div>

                <div class="product-icons">
                    <div class="add-to-favorite"><span class="icon-heart"></span></div>
                    <p><span class="discount">10</span>% off</p>
                </div>

                <div class="product-description">
                    <p class="product-name">Spicy Soft Tofu Stew</p>
                    <p class="price">Price: <del><span>90.00 </span>Pesos</del> <ins><br><span>80.00 </span>Pesos</ins></p>
                    <div class="add-to-cart-btn">
                        <p><span class="icon-cart-plus"></span> Add to Cart</p>
                    </div>
                </div>
            </div>

            <div class="product-wrap">
                <div class="product-img">
                    <img src="../assets/kimchistew.jpg" alt="">
                </div>

                <div class="product-icons">
                    <div class="add-to-favorite"><span class="icon-heart"></span></div>
                    <p><span class="discount">10</span>% off</p>
                </div>

                <div class="product-description">
                    <p class="product-name">Kimchi Stew</p>
                    <p class="price">Price: <del><span>60.00 </span>Pesos</del> <ins><br><span>50.00 </span>Pesos</ins></p>
                    <div class="add-to-cart-btn">
                        <p><span class="icon-cart-plus"></span> Add to Cart</p>
                    </div>
                </div>
            </div>
    
    <div class="product-wrap">
        <div class="product-img">
            <img src="../assets/bibimbap.jpg" alt="">
        </div>

        <div class="product-icons">
            <div class="add-to-favorite"><span class="icon-heart"></span></div>
            <p><span class="discount">10</span>% off</p>
        </div>

        <div class="product-description">
            <p class="product-name">Bibimbap</p>
            <p class="price">Price: <del><span>80.00 </span>Pesos</del> <ins><br><span>70.00 </span>Pesos</ins></p>
            <div class="add-to-cart-btn">
                <p><span class="icon-cart-plus"></span> Add to Cart</p>
            </div>
        </div>
    </div>

    <div class="product-wrap">
        <div class="product-img">
            <img src="../assets/Jajangmyeo.jpg" alt="">
        </div>

        <div class="product-icons">
            <div class="add-to-favorite"><span class="icon-heart"></span></div>
            <p><span class="discount">10</span>% off</p>
        </div>

        <div class="product-description">
            <p class="product-name">Jajangmyeon</p>
            <p class="price">Price: <del><span>60.00 </span>Pesos</del> <ins><br><span>50.00 </span>Pesos</ins></p>
            <div class="add-to-cart-btn">
                <p><span class="icon-cart-plus"></span> Add to Cart</p>
            </div>
        </div>
    </div>

    <div class="product-wrap">
        <div class="product-img">
            <img src="../assets/bulgogi.jpg" alt="">
        </div>

        <div class="product-icons">
            <div class="add-to-favorite"><span class="icon-heart"></span></div>
            <p><span class="discount">10</span>% off</p>
        </div>

        <div class="product-description">
            <p class="product-name">Bulgogi</p>
            <p class="price">Price: <del><span>80.00 </span>Pesos</del> <ins><br><span>70.00 </span>Pesos</ins></p>
            <div class="add-to-cart-btn">
                <p><span class="icon-cart-plus"></span> Add to Cart</p>
            </div>
        </div>
    </div>

    <div class="product-wrap">
        <div class="product-img">
            <img src="../assets/tteokbokki.jpg" alt="">
        </div>

        <div class="product-icons">
            <div class="add-to-favorite"><span class="icon-heart"></span></div>
            <p><span class="discount">10</span>% off</p>
        </div>

        <div class="product-description">
            <p class="product-name">Tteokbokki</p>
            <p class="price">Price: <del><span>50.00 </span>Pesos</del> <ins><br><span>40.00 </span>Pesos</ins></p>
            <div class="add-to-cart-btn">
                <p><span class="icon-cart-plus"></span> Add to Cart</p>
            </div>
        </div>
    </div>

</div>
</div>
    

<section class="divider" id="japanese">

    <div class="heading">
        <h3>Japanese Cuisine Dishes</h3>
     </div>
</section>

<div class="featured-product" id="pricing">
    <div class="section-wrap">

        <div class="featured-products">
            <div class="product-wrap apple">
                <div class="product-img">
                    <img src="../assets/ramen.jpg" alt="">
                </div>
                <div class="product-icons">
                    <div class="add-to-favorite"><span class="icon-heart"></span></div>
                    <p><span class="discount">10</span>% off</p>
                </div>

                <div class="product-description">
                    <p class="product-name">Ramen</p>
                    <p class="price">Price: <del><span>200.00 </span>Pesos</del> <ins><br><span>190.00 </span>Pesos</ins></p>
                    <div class="add-to-cart-btn">
                        <p><span class="icon-cart-plus"></span> Add to Cart</p>
                    </div>
                </div>
            </div>

            <div class="product-wrap">
                <div class="product-img">
                    <img src="../assets/tempura.jpg" alt="">
                </div>

                <div class="product-icons">
                    <div class="add-to-favorite"><span class="icon-heart"></span></div>
                    <p><span class="discount">10</span>% off</p>
                </div>

                <div class="product-description">
                    <p class="product-name">Tempura</p>
                    <p class="price">Price: <del><span>100.00 </span>Pesos</del> <ins><br><span>90.00 </span>Pesos</ins></p>
                    <div class="add-to-cart-btn">
                        <p><span class="icon-cart-plus"></span> Add to Cart</p>
                    </div>
                </div>
            </div>

            <div class="product-wrap">
                <div class="product-img">
                    <img src="../assets/takoyaki.jpg" alt="">
                </div>

                <div class="product-icons">
                    <div class="add-to-favorite"><span class="icon-heart"></span></div>
                    <p><span class="discount">10</span>% off</p>
                </div>

                <div class="product-description">
                    <p class="product-name">Takoyaki</p>
                    <p class="price">Price: <del><span>90.00 </span>Pesos</del> <ins><br><span>80.00 </span>Pesos</ins></p>
                    <div class="add-to-cart-btn">
                        <p><span class="icon-cart-plus"></span> Add to Cart</p>
                    </div>
                </div>
            </div>

            <div class="product-wrap">
                <div class="product-img">
                    <img src="../assets/sukiyaki.jpg" alt="">
                </div>

                <div class="product-icons">
                    <div class="add-to-favorite"><span class="icon-heart"></span></div>
                    <p><span class="discount">10</span>% off</p>
                </div>

                <div class="product-description">
                    <p class="product-name">Sukiyaki</p>
                    <p class="price">Price: <del><span>60.00 </span>Pesos</del> <ins><br><span>50.00 </span>Pesos</ins></p>
                    <div class="add-to-cart-btn">
                        <p><span class="icon-cart-plus"></span> Add to Cart</p>
                    </div>
                </div>
            </div>
    
    <div class="product-wrap">
        <div class="product-img">
            <img src="../assets/gyukatsu.jpg" alt="">
        </div>

        <div class="product-icons">
            <div class="add-to-favorite"><span class="icon-heart"></span></div>
            <p><span class="discount">10</span>% off</p>
        </div>

        <div class="product-description">
            <p class="product-name">Gyukatsu</p>
            <p class="price">Price: <del><span>80.00 </span>Pesos</del> <ins><br><span>70.00 </span>Pesos</ins></p>
            <div class="add-to-cart-btn">
                <p><span class="icon-cart-plus"></span> Add to Cart</p>
            </div>
        </div>
    </div>

    <div class="product-wrap">
        <div class="product-img">
            <img src="../assets/okonomiyaki.jpg" alt="">
        </div>

        <div class="product-icons">
            <div class="add-to-favorite"><span class="icon-heart"></span></div>
            <p><span class="discount">10</span>% off</p>
        </div>

        <div class="product-description">
            <p class="product-name">Okonomiyaki</p>
            <p class="price">Price: <del><span>60.00 </span>Pesos</del> <ins><br><span>50.00 </span>Pesos</ins></p>
            <div class="add-to-cart-btn">
                <p><span class="icon-cart-plus"></span> Add to Cart</p>
            </div>
        </div>
    </div>

    <div class="product-wrap">
        <div class="product-img">
            <img src="../assets/omu-raisu.jpg" alt="">
        </div>

        <div class="product-icons">
            <div class="add-to-favorite"><span class="icon-heart"></span></div>
            <p><span class="discount">10</span>% off</p>
        </div>

        <div class="product-description">
            <p class="product-name">Omu-Raisu</p>
            <p class="price">Price: <del><span>80.00 </span>Pesos</del> <ins><br><span>70.00 </span>Pesos</ins></p>
            <div class="add-to-cart-btn">
                <p><span class="icon-cart-plus"></span> Add to Cart</p>
            </div>
        </div>
    </div>

    <div class="product-wrap">
        <div class="product-img">
            <img src="../assets/yakisoba.jpg" alt="">
        </div>

        <div class="product-icons">
            <div class="add-to-favorite"><span class="icon-heart"></span></div>
            <p><span class="discount">10</span>% off</p>
        </div>

        <div class="product-description">
            <p class="product-name">Yakisoba</p>
            <p class="price">Price: <del><span>50.00 </span>Pesos</del> <ins><br><span>40.00 </span>Pesos</ins></p>
            <div class="add-to-cart-btn">
                <p><span class="icon-cart-plus"></span> Add to Cart</p>
            </div>
        </div>
    </div>

</div>
</div>
    


    <div class="shopping-cart-area" id="product-cart-area">
        <div class="shopping-cart-wrap">
            <div class="product-cart-menu">
                <div class="cart-menu-items">
                    <h2 id="selected-products" class="active-cart-menu">Selected Products</h2>
                    <h2 id="favorite-products">Favorite Products</h2>
                </div>

                <div class="cart-close-btn">
                    <button>Close</button>
                </div>
            </div>

            <div class="cart-contents-header">
                <div class="total-cart-items">
                    <p id="total-selected" class="active-product-counter"><strong>Total Selected: </strong><span>No item
                            found</span></p>
                    <p id="total-favorite"><strong>Total Favorite: </strong><span>No item found</span></p>
                </div>

                <div class="buying-product-title">
                    <div class="total-buying-item">
                        <p><strong>Total Buying Items: </strong><span>0</span></p>
                    </div>
                    <div class="buy-items-button">
                        <button id="buy-items">Buy Items</button>
                    </div>
                </div>
            </div>

            <div class="cart-contents-area shopping-cart-contents-area active-cart-content">
                
            </div>
            <div class="cart-wishlist-area shopping-cart-contents-area">
               
            </div>

        </div>

    </div>
    
    <div class="remove-confirmation-message">
        <div class="remove-message-wrap">
            <div class="remove-message-title">
                <h2>Remove item confirmation message</h2>
            </div>

            <div class="remove-message-button">
                <button id="remove-confirm-btn">Remove</button>
                <button id="remove-cancel-btn">Cancel</button>
            </div>
        </div>
    </div>

    <div class="popup-shadow"></div>
  
    <div class="buying-details-area">
        <div class="buying-details-wrap">
            <div class="shop-title">
                <h1>Shopping Cart</h1>
            </div>

            <div class="shopping-details-wrap">
                <div class="shopping-details-header">
                    <div class="shopping-details">
                        <div class="shop-detail product-sl">
                            <h2>SL No.</h2>
                        </div>
                        <div class="shop-detail product-name">
                            <h2>Product Name</h2>
                        </div>
                        <div class="shop-detail regular-price">
                            <h2>Regular Price</h2>
                        </div>
                        <div class="shop-detail discount">
                            <h2>Discount</h2>
                        </div>
                        <div class="shop-detail present-price">
                            <h2>Present Price</h2>
                        </div>
                        <div class="shop-detail product-quantity">
                            <h2>Quantity</h2>
                        </div>
                        <div class="shop-detail total-amount">
                            <h2>Total Price</h2>
                        </div>
                        <div class="shop-detail remove-all-btn">
                            <button id="remove-all-items">Remove All</button>
                        </div>
                    </div>
                </div>

                <div class="shopping-details-content">
                   
                </div>
            </div>

            <div class="buying-details-footer">
                <div class="calculate-buying-details">
                    <div class="calculate-total-items">
                        <h2>Total Items: </h2>
                        <p><span>000</span></p>
                    </div>

                    <div class="calculate-total-weight">
                        <h2>Total Quantity: </h2>
                        <p><span>000</span> Orders</p>
                    </div>

                    <div class="calculate-total-amount">
                        <h2>Total Amount: </h2>
                        <p><span>000</span>Pesos</p>
                    </div>
                </div>

                <div class="confirm-order-button">
                    <button id="confirm-order-btn">Confirm Order</button>
                </div>
            </div>
        </div>

        <div class="close-buy-area">
            <div id="close-buy-area-btn"></div>
        </div>
    </div>
   


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
                  <li><a class="mb-2" href="#filipino">FILIPINO</a></li>
                  <li><a class="mb-2" href="#korean">KOREAN</a></li>
                  <li><a class="mb-2" href="#japanese">JAPANESE</a></li>
                  
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
<script src="../scripts/cart.js"></script>

</body>
</html>
