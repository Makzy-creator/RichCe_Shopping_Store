<!-- This page contains all the functions I'll use in this single-page shopping store which includes the header and footer functions -->

<?php
    function header($title){
        echo <<<EOT
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>$title</title>
            <!-- Favicons -->
            <link href="../assets/img/Tea/RichCe Logo.png Logo.png" rel="icon" />
                    
                <!-- Google Fonts -->
                <link
                    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
                    rel="stylesheet"
                    />

                    <!-- Vendor CSS Files -->
                    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
                        <link
                        href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
                    <link
                     href="../assets/vendor/bootstrap-icons/bootstrap-icons.min.css"
                    rel="stylesheet"/>
                    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
                    <link
                    href="../assets/vendor/glightbox/css/glightbox.min.css"
                     rel="stylesheet"/>
                    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
                    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
                     <link href="../assets/css/style.css" rel="stylesheet" />
                    <link rel="stylesheet" href="../assets/css/all.css" />
                    <link rel="stylesheet" href="../assets/css/fontawesome.min.css" />
        </head>
        <body>
            <header id="header" class="fixed-top">
                <div class="container d-flex align-items-center justify-content-lg-between">
                        <h1 class="logo me-auto me-lg-0">
                        <a href="index.html">RichCe<span>.</span></a>
                        </h1>
                        <nav id="navbar" class="navbar navbar-expand-md order-last order-lg-0">
                            <ul>
                                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                                <li><a class="nav-link scrollto" href="#products">Products</a></li>
                                <li><a class="nav-link scrollto" href="#about">About</a></li>
                                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                                <li><a class="nav-link scrollto" href="#checkout.php">Checkout</a></li>
                                <li class="nav-item">
                                <a href="../includes/cart.php" class="nav-link text-white"><i class="fas fa-shopping-cart" style="color:white; margin-right:3px;"></i>
                                 <span id="cart-item" style="color: white;" class="badge">0</span></a>
                                </li>
                            </ul>
                            <i class="bi bi-list mobile-nav-toggle"></i>
                        </nav>
                    <div class="btns">
                    <a href="#products" class="get-started-btn cta scrollto">SignUp</a>
                    <a href="#products" class="get-started-btn cta scrollto">Login</a>
                    </div>
                </div>
            </header>
        </body>
        </html>
        EOT;
    }
    
    //my footer
    function footer(){
        echo <<<EOT
        <foooter id="footer">
            <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="footer-info">
                    <h3>RichCe<span>.</span></h3>
                    <p>
                      Owerri-west Imo state Nigeria<br /><br />
                      <strong>Phone:</strong> +234 901 190 4516<br />
                      <strong>Email:</strong> keichamaxwell@gmail.com<br />
                    </p>
                    <div class="social-links mt-3">
                      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                      <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                      <a href="#" class="linkedin"
                        ><i class="bx bxl-linkedin"></i
                      ></a>
                    </div>
                  </div>
                </div>
    
                <div class="col-lg-2 col-md-6 footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    <li>
                      <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                    </li>
                    <li>
                      <i class="bx bx-chevron-right"></i> <a href="#">About us</a>
                    </li>
                    <li>
                      <i class="bx bx-chevron-right"></i> <a href="products">Products</a>
                    </li>
                    <li>
                      <i class="bx bx-chevron-right"></i>
                      <a href="#">Terms of service</a>
                    </li>
                    <li>
                      <i class="bx bx-chevron-right"></i>
                      <a href="#">Privacy policy</a>
                    </li>
                  </ul>
                </div>
    
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Our Products</h4>
                  <ul>
                    <li>
                      <i class="bx bx-chevron-right"></i> <a href="#">Easy Health</a>
                    </li>
                    <li>
                      <i class="bx bx-chevron-right"></i>
                      <a href="#">Health on a budget</a>
                    </li>
                    <li>
                      <i class="bx bx-chevron-right"></i>
                      <a href="#">Healthy Living</a>
                    </li>
                    <li>
                      <i class="bx bx-chevron-right"></i> <a href="#">Tea</a>
                    </li>
                    <li>
                      <i class="bx bx-chevron-right"></i>
                      <a href="#">Natural Tea</a>
                    </li>
                  </ul>
                </div>
    
                <div class="col-lg-4 col-md-6 footer-newsletter">
                  <h4>Our Newsletter</h4>
                  <p>
                    You will enjoy a healthier budget-friendly living when you subscribe to this newsletter.
                  </p>
                  <form action="" method="post">
                    <input type="email" name="email" /><input
                      type="submit"
                      value="Subscribe"
                    />
                  </form>
                </div>
              </div>
            </div>
          </div>

            <div class="container">
                <div class="copyright">
                &copy; Copyright <strong><span>RichCe</span></strong>. All Rights Reserved
                </div>
                <div class="credits">Designed by <a href="https://whatsapp/09011904516">Dev. Keicha</a>
                </div>
            </div>

        </footer>

        EOT;
    }

?>