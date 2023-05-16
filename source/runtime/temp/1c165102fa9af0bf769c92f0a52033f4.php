<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:111:"C:\Users\think\my\tool\phpstudy\PHPTutorial\WWW\guan.com\web/../source/application/index\view\index\contact.php";i:1619620742;s:105:"C:\Users\think\my\tool\phpstudy\PHPTutorial\WWW\guan.com\source\application\index\view\layouts\layout.php";i:1615861730;s:113:"C:\Users\think\my\tool\phpstudy\PHPTutorial\WWW\guan.com\source\application\index\view\layouts\_template\head.php";i:1619620845;s:112:"C:\Users\think\my\tool\phpstudy\PHPTutorial\WWW\guan.com\source\application\index\view\layouts\_template\nav.php";i:1619620845;s:115:"C:\Users\think\my\tool\phpstudy\PHPTutorial\WWW\guan.com\source\application\index\view\layouts\_template\footer.php";i:1619620845;}*/ ?>
﻿        <!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        
        <title>Magnets, Permanent Magnets, Magnetic Products by Baobo</title>

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
        <div class="page-banner-area item-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/index'); ?>">Home</a>
                                </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Contact Info Area -->
        <section class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>

                            <h3>Email Here</h3>
                            <p><a href="mailto:sales@baobomagnet.com">sales@baobomagnet.com</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="flaticon-pin"></i>
                            </div>

                            <h3>Location Here</h3>
                            <p>Huangshi Street, Baiyun District, Guangzhou City, China</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="flaticon-phone-call"></i>
                            </div>

                            <h3>Call Here</h3>
                            <p>+86 188 1918 6030</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Info Area -->
        
        <!-- Start Contact Area -->
        <section class="contact-area pb-100">
            <div class="container">
                <div class="section-title">
                    <span>Demand</span>
                    <h3>FILE YOUR INFORMATION</h3>
                    <div class="bar"></div>
                </div>

                <div class="contact-form">
                    <form enctype="multipart/form-data" method="post">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Name*</label>
                                    <input type="text" name="contact[name]" class="form-control" required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Your Email*</label>
                                    <input type="email" name="contact[email]" class="form-control" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Your Phone*</label>
                                    <input type="text" name="contact[phone]" required data-error="Please enter your number" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>



                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Message*</label>
                                    <textarea name="contact[message]" class="form-control" cols="30" rows="6" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    Send Message
                                </button>

                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->
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
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/mpcomagnetics" class="facebook" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/mpcomagnetics" class="twitter" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/mpcomagnetics/" class="pinterest" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/mpcomagnetics/" class="linkedin" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
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
