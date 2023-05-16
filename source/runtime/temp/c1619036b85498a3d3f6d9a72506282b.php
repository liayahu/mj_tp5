<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:81:"/www/wwwroot/baobomagnet.com/web/../source/application/index/view/index/about.php";i:1619704826;s:77:"/www/wwwroot/baobomagnet.com/source/application/index/view/layouts/layout.php";i:1619704830;s:85:"/www/wwwroot/baobomagnet.com/source/application/index/view/layouts/_template/head.php";i:1619704838;s:84:"/www/wwwroot/baobomagnet.com/source/application/index/view/layouts/_template/nav.php";i:1619704838;s:87:"/www/wwwroot/baobomagnet.com/source/application/index/view/layouts/_template/footer.php";i:1620295040;}*/ ?>
﻿        <!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><?php echo $seo; ?>
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/index/css/bootstrap.min.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/index/css/animate.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/index/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/index/css/boxicons.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/index/css/flaticon.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/index/css/owl.carousel.min.css">
        <!-- Owl Theme Carousel CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/index/css/owl.theme.default.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/index/css/nice-select.min.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/index/css/odometer.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/index/css/magnific-popup.min.css">
        <!-- Imagelightbox CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/index/css/imagelightbox.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/index/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/index/css/responsive.css">
        <link rel="icon" type="image/png" href="<?php echo $base_url; ?>/assets/index/img/favicon.png">
        
    </head>

    <body>
        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?php echo $base_url; ?>/assets/index/img/logo.png" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="<?php echo $base_url; ?>/assets/index/img/logo.png" alt="image">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/index'); ?>" class="nav-link <?php if($route['action']=="index"): ?>active<?php endif; ?>">
                                        Home 
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/about'); ?>" class="nav-link <?php if($route['action']=="about"): ?>active<?php endif; ?>">
                                        About Us 
                                    </a>

                                </li>


                                <li class="nav-item">
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/products'); ?>" class="nav-link <?php if($route['action']=="products"): ?>active<?php endif; ?>">
                                        Magnetic Products
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/blogs'); ?>" class="nav-link <?php if($route['action']=="blogs"): ?>active<?php endif; ?>">
                                        Blog 
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/contact'); ?>" class="nav-link <?php if($route['action']=="contact"): ?>active<?php endif; ?>">
                                        Contact
                                    </a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->


        <!-- Start Page Banner -->
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>About</h2>
                            <ul>
                                <li>
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/index'); ?>">Home</a>
                                </li>
                                <li>About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start About Area -->
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-image-two">
                            <img src="<?php echo $base_url; ?>/assets/index/img/about/about-2.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="about-item-content">
                            <span>Our Company</span>
                            <h3>Providing customers with competitive magnetic products and good service!</h3>
                            <p>We own one-stop complete industrial chain from raw material blank, cutting, electroplating and standard packing.We provide customers magnets with various size and grade. Magnetic holders, magnetic bar, magnetic frame and other powerful magnet assemblies, as well as magnetic decorative wall, magnetic white board, magnetic bookmark, fridge magnets and magnetic gifts are also our superior products. All of our products are passed the certifications of ISO9001:2008, RoHS, Reach etc., and exported widely to the United States, Europe, Hongkong, Taiwan and other countries and regions.</p>

                            <ul class="about-list">
                                <li>
                                    <i class="flaticon-check"></i>
                                    Having good reputation, be truthful in speech and firm in action.
                                </li>
                                <li>
                                    <i class="flaticon-check"></i>
                                    With diligence, hard work and strong will.
                                </li>
                                <li>
                                    <i class="flaticon-check"></i>
                                    Learning new ideas, create new methods, and strive for new progress.
                                </li>
                                <li>
                                    <i class="flaticon-check"></i>
                                     A win-win situation is formed in company together with employees,customers,vendors.
                                </li>
                            </ul>
                        </div>

                        <div class="about-information">
                            <h5>Need products & Ready to book? Contact Us</h5>
                            <h6>
                                <a href="">
                                    <i class="flaticon-telephone"></i>
                                    (+86) 188 1918 6030
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->



        <!-- Start Team Area -->
        <section class="team-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h3>Production Environment</h3>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="<?php echo $base_url; ?>/assets/index/img/about/about1.jpg" alt="image">
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="<?php echo $base_url; ?>/assets/index/img/about/about2.jpg" alt="image">

       
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="<?php echo $base_url; ?>/assets/index/img/about/about3.jpg" alt="image">

                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Team Area -->

        <!-- Start Testimonial Area -->
        <section class="testimonial-area bg-ffffff">
            <div class="container-fluid">
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <div class="icon">
                            <i class="flaticon-left-quotes-sign"></i>
                        </div>
                        <span>Testimonial</span>
                        <h3>What Clients Say About Us</h3>
                        <p>In our state, we have four distributors. We have found since the change to using MPCO magnetic products, they have lasted the other competitors hands down. Customer satisfaction 100%.</p>

                        <div class="testimonial-info">
                            <img src="<?php echo $base_url; ?>/assets/index/img/client/client-1.jpg" alt="image">
                            <h4>Karine Turcotte</h4>
                            <span>Canada</span>
                        </div>

                        <div class="map-shape">
                            <img src="<?php echo $base_url; ?>/assets/index/img/testimonial-map.png" alt="image">
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="icon">
                            <i class="flaticon-left-quotes-sign"></i>
                        </div>
                        <span>Testimonial</span>
                        <h3>What Clients Say About Us</h3>
                        <p>I am a dealer in London. In using MPCO’s magnets we have saved ourselves a lot of downtime and money! Service above and beyond what I ever imagined – you are an example to the industry. Thank You so much!</p>

                        <div class="testimonial-info">
                            <img src="<?php echo $base_url; ?>/assets/index/img/client/client-2.jpg" alt="image">
                            <h4>Andrew Cunningham</h4>
                            <span>UK</span>
                        </div>

                        <div class="map-shape">
                            <img src="<?php echo $base_url; ?>/assets/index/img/testimonial-map.png" alt="image">
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="icon">
                            <i class="flaticon-left-quotes-sign"></i>
                        </div>
                        <span>Testimonial</span>
                        <h3>What Clients Say About Us</h3>
                        <p>Quality products and friendliness is why I chose to work with MPCO Magnetics. It just felt right. You were very easy to work with. The whole experience has been great and I am very happy with your products.</p>

                        <div class="testimonial-info">
                            <img src="<?php echo $base_url; ?>/assets/index/img/client/client-3.jpg" alt="image">
                            <h4>Kevin Moore</h4>
                            <span>U.S.A</span>
                        </div>

                        <div class="map-shape">
                            <img src="<?php echo $base_url; ?>/assets/index/img/testimonial-map.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->

    
<!-- Start Footer Area -->
        <div class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="logo">
                                <h2>
                                    <a href="index.html">Baobo</a>
                                </h2>
                            </div>
                            <p>baobo is China’s largest and most trusted global supplier of high quality, powerful strong magnets, magnetic tools & equipment. With over 5000 different permanent magnets and magnetic products available, we can cater to any need!</p>

                        </div>
                    </div>



                    <div class="col-lg-4 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>Quick Links</h3>
    
                            <ul class="quick-links">
                                <li>
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/about'); ?>">About Us</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/products'); ?>">Magnetic Products</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/blogs'); ?>">Blog</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/contact'); ?>">Contact</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/index'); ?>">Home</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Contact Us</h3>

                            <ul class="footer-contact-info">
                                <li>
                                    <i class='bx bxs-phone'></i>
                                    <span>Phone</span>
                                    (+86) 188 1918 6030
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <span>Email</span>
                                    <a href="mailto:sales@baobomagnet.co">sales@baobomagnet.com</a>
                                </li>
                                <li>
                                    <i class='bx bx-map'></i>
                                    <span>Address</span>
                                    Huangshi Street, Baiyun District, Guangzhou City, China
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Area -->


        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-up-arrow-alt'></i>
        </div>
        <!-- End Go Top Area -->
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7LRYQ700FD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7LRYQ700FD');
</script>
        <!-- Jquery Slim JS -->
        <script src="<?php echo $base_url; ?>/assets/index/js/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="<?php echo $base_url; ?>/assets/index/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="<?php echo $base_url; ?>/assets/index/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="<?php echo $base_url; ?>/assets/index/js/jquery.meanmenu.js"></script>
        <!-- Owl Carousel JS -->
        <script src="<?php echo $base_url; ?>/assets/index/js/owl.carousel.min.js"></script>
        <!-- Odometer JS -->
        <script src="<?php echo $base_url; ?>/assets/index/js/odometer.min.js"></script>
        <!-- Jquery Appear JS -->
        <script src="<?php echo $base_url; ?>/assets/index/js/jquery.appear.min.js"></script>
        <!-- Datepicker JS -->
        <script src="<?php echo $base_url; ?>/assets/index/js/datepicker.min.js"></script>
        <!-- Imagelightbox JS -->
		<script src="<?php echo $base_url; ?>/assets/index/js/imagelightbox.min.js"></script>
        <!-- Popup JS -->
        <script src="<?php echo $base_url; ?>/assets/index/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
        <script src="<?php echo $base_url; ?>/assets/index/js/jquery.nice-select.min.js"></script>
        <!-- Ajaxchimp JS -->
		<script src="<?php echo $base_url; ?>/assets/index/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Validator JS -->
		<script src="<?php echo $base_url; ?>/assets/index/js/form-validator.min.js"></script>
		<!-- Contact JS -->
        <script src="<?php echo $base_url; ?>/assets/index/js/contact-form-script.js"></script>
        <!-- Wow JS -->
        <script src="<?php echo $base_url; ?>/assets/index/js/wow.min.js"></script>
        <!-- Custom JS -->
        <script src="<?php echo $base_url; ?>/assets/index/js/main.js"></script>
    </body>
</html>
