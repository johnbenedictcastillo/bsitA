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
                    <a class="yna navbar-brand" href="index.html">
                        ARTXYNA</a>
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
                      <ul class="navbar-nav" id="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="index.html">HOME</a>
                        </li> 
                        <li class="nav-item">
                           <a class="nav-link " href="#">REQUEST COMMISSION</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">LIBRARY</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="../pages/aboutus.html">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="../pages/login.html">LOGIN</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="../pages/register.html">REGISTER</a>
                        </li> 
                     </ul>   

                    </div>
                  </div>
                </nav>
          </header>

          <div class="card-area6">
                <div class="container d-flex justify-content-center card-list">
                    <div class="row g-2">
                        <div class="lllogin_column col-md-12 col-sm-12 text-wrap">
                            <div class="info-right">
                                <h3 class="reqcom text-center">Request Commission</h3>
                                <div class="card-body text-center">
                                    <form class="login-form">
                                        <label for="fname" id="req">FULL NAME:</label><br>
                                        <input type="text" id="fname" name="fname"><br><br>
                                        <label for="Email" id="req">EMAIL:</label><br>
                                        <input class ="col-md-8 col-sm-8" type="text" id="email" name="email"><br><br>
                                        <label for="quantity" id="req">CONTACT NUMBER:</label><br>
                                        <input type="text" id="fname" name="fname"><br><br>
                                        <label for="artwork" id="req">THIS ARTWORK IS FOR:</label><br>
                                        <label for="artwork">(ex. personal interest, birthday present, gift, etc.)):</label><br>
                                        <input type="text" id="fname" name="fname"><br><br>
                                        <label for="myfile" id="req">ATTACH REFERENCE:</label><br>
                                        <input type="file" id="myfile" name="myfile"><br><br>
                                        <label for="frame" id="req">APPROXIMATE SIZE YOU'RE AFTER:</label><br><br>
                                        <label for="phone">Phone Model:</label>
                                              <select id="cars" name="cars">
                                                <option value="samsung">SAMSUNG</option>
                                                <option value="apple">APPLE</option>
                                                <option value="huawei">HUAWEI</option>
                                                <option value="lenovo">LENOVO</option>
                                                <option value="xiaomi">XIAOMI</option>
                                                <option value="oppo">OPPO</option>
                                                <option value="realme">REALME</option>
                                                <option value="vivo">VIVO</option>
                                                <option value="asus">ASUS</option>
                                                <option value="infinix">INFINIX</option>
                                                <option value="acer">ACER</option>
                                              </select>
                                              <br><br>
                                        <label for="model">Specify the phone model:</label><br>
                                        <input type="text" id="fname" name="fname"><br><br>

                                        <label for="acrylic">Acrylic Glass:</label>
                                              <select id="acrylic" name="acrylic">
                                                <option value="4x6">4x6 inches</option>
                                                <option value="5x7">5x7 inches</option>
                                              </select>
                                              <br><br>

                                        <label for="date" id="req">I REQUIRE THE WORK FINISHED BY:</label>
                                        <input type="date" id="date" name="date"><br><br>

                                        <label for="date" id="req">ANYTHING ELSE YOU WANT TO ADD?</label><br><br>
                                        <textarea name="comments" rows="5" id="comments" class="form-control" placeholder="YOUR MESSAGE" cols="10"></textarea><br><br>

                                        <button class="btnsbmt btnsubmit">Submit</button>

                                    </form>
   

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
                            <li class="nav-item mb-6"><a href="#" class="nav-link p-0 text-dark"><p>gmail@gmail.com
                            </p></a></li>
                            <li class="nav-item mb-6"><a href="#" class="nav-link p-0 text-dark"><p>+1234567890
                            </p></a></li>
                            <br>
                            <li class="nav-item mb-6"><a href="#" class="nav-link p-0 text-dark"><p>PRIVACY POLICY</p></a></li>
                        </ul>
                    </div>
      
      
            <div class="col-12 col-md-4 mb-4">
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark"><p>REQUEST COMMISSION</p></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark"><p>LIBRARY</p></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark"><p>ABOUT US</p></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark"><p>CONTACT US</p></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark"><p>LOGIN</p></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark"><p>REGISTER</p></a></li>
              </ul>
            </div>
      
            <div class="col-12 col-md-3 mb-3">
                <h5>YOU WANT TO KNOW WHAT WE CAN CREATE?</h5>
                <ul class="nav flex-column">
                  <li class="nav-item1 mb-2"><a href="#" class="nav-link p-0 text-dark"><p>
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
        <script src="script/script.js"></script>


    </body>
</html>