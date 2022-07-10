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
                    <a class="yna navbar-brand" href="#">
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
                        <li class="nav-items">
                          <a class="nav-link" href="#">HOME</a>
                        </li> 
                        <li class="nav-item">
                           <a class="nav-link " href="#">REQUEST COMMISSION</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="#">LIBRARY</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="#">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="login.html">LOGIN</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="register.html">REGISTER</a>
                        </li> 
                     </ul>   

                    </div>
                  </div>
                </nav>
          </header>

          <section class="card-area5">
        <div class="container">
                <div class="row">
                    <div class="contactus col">

         <ul class="breadcrumb">
            <li class="fileTrailCurrent active">Contact Us</li>
         </ul>
         <form name="contentForm" enctype="multipart/form-data" method="post" action="/contact-us/index.stml">
            <!-- <h4>CONTACT FORM</h4> -->
            <div class="contactForm">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group icon-1">
                        <label class="control-label sr-only" for="firstName">First Name</label> 
                        <input name="firstName" id="firstName" class="form-control" placeholder="FIRST NAME" type="text" value="">
                     </div>
                     <div class="form-group icon-1">
                        <label class="control-label sr-only" for="c_lastname">Last Name</label> 
                        <input name="lastname" id="c_lastname" class="form-control" placeholder="LAST NAME" type="text" value="">
                     </div>
                     <div class="form-group icon-2">
                        <label class="control-label sr-only" for="fromEmail">Email</label> 
                        <input name="fromEmail" id="fromEmail" class="form-control" placeholder="EMAIL" type="text" value="">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="control-label sr-only" for="comments">Your Message</label> 
                        <textarea name="comments" rows="5" id="comments" class="form-control" placeholder="YOUR MESSAGE" cols="10"></textarea>
                     </div>
                     <input type="submit" value="SUBMIT" class="btn btn-primary btn-block">
                  </div>
               </div>
               <!-- / row -->
            </div>
            <!-- / contactForm -->
         </form>

                    </div>
          </div>
      </div>
      
</section>


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