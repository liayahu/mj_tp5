<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:111:"C:\Users\think\my\tool\phpstudy\PHPTutorial\WWW\guan.com\web/../source/application/index\view\index\product.php";i:1619620742;s:105:"C:\Users\think\my\tool\phpstudy\PHPTutorial\WWW\guan.com\source\application\index\view\layouts\layout.php";i:1615861730;s:113:"C:\Users\think\my\tool\phpstudy\PHPTutorial\WWW\guan.com\source\application\index\view\layouts\_template\head.php";i:1619620653;s:112:"C:\Users\think\my\tool\phpstudy\PHPTutorial\WWW\guan.com\source\application\index\view\layouts\_template\nav.php";i:1619620742;s:115:"C:\Users\think\my\tool\phpstudy\PHPTutorial\WWW\guan.com\source\application\index\view\layouts\_template\footer.php";i:1619620742;}*/ ?>
﻿        <!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/index/css/bootstrap.min.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/index/css/animate.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/index/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/index/css/boxicons.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/index/css/flaticon.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/index/css/owl.carousel.min.css">
        <!-- Owl Theme Carousel CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/index/css/owl.theme.default.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/index/css/nice-select.min.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/index/css/odometer.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/index/css/magnific-popup.min.css">
        <!-- Imagelightbox CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/index/css/imagelightbox.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/index/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>assets/index/css/responsive.css">
        
        <title>Magnets, Permanent Magnets, Magnetic Products by Baobo</title>

        <link rel="icon" type="image/png" href="<?php echo $base_url; ?>assets/index/img/favicon.png">
    </head>

    <body>
        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?php echo $base_url; ?>assets/index/img/logo.png" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="<?php echo $base_url; ?>assets/index/img/logo.png" alt="image">
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
                            <h2>Projects Details</h2>
                            <ul>
                                <li>
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/index'); ?>">Home</a>
                                </li>
                                <li>Projects Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Projects Details Area -->
		<section class="portfolio-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="projects-details-desc">
                            <?php echo htmlspecialchars_decode($detail['content']); ?>
                        </div>
                    </div>



                <div class="related-services">
                    <h5>Related Services</h5>

                    <div class="row">

                        <?php foreach($goods as $value): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="services-item">
                                <div class="image">
                                    <a href="<?php echo $base_url; ?><?php echo url('index/product',['name'=>$value['goods_name']]); ?>">
                                        <img src="<?php echo $value['image'][0]['file_path']; ?>" alt="<?php echo $value['goods_name']; ?>">
                                    </a>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="<?php echo $base_url; ?><?php echo url('index/product',['name'=>$value['goods_name']]); ?>"><?php echo $value['goods_name']; ?></a>
                                    </h3>
                                    <p><?php echo $value['description']; ?></p>
                                    <a href="<?php echo $base_url; ?><?php echo url('index/product',['name'=>$value['goods_name']]); ?>" class="services-btn">Read More <i class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Projects Details Area -->
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
        <script src="<?php echo $base_url; ?>assets/index/js/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="<?php echo $base_url; ?>assets/index/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="<?php echo $base_url; ?>assets/index/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="<?php echo $base_url; ?>assets/index/js/jquery.meanmenu.js"></script>
        <!-- Owl Carousel JS -->
        <script src="<?php echo $base_url; ?>assets/index/js/owl.carousel.min.js"></script>
        <!-- Odometer JS -->
        <script src="<?php echo $base_url; ?>assets/index/js/odometer.min.js"></script>
        <!-- Jquery Appear JS -->
        <script src="<?php echo $base_url; ?>assets/index/js/jquery.appear.min.js"></script>
        <!-- Datepicker JS -->
        <script src="<?php echo $base_url; ?>assets/index/js/datepicker.min.js"></script>
        <!-- Imagelightbox JS -->
		<script src="<?php echo $base_url; ?>assets/index/js/imagelightbox.min.js"></script>
        <!-- Popup JS -->
        <script src="<?php echo $base_url; ?>assets/index/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
        <script src="<?php echo $base_url; ?>assets/index/js/jquery.nice-select.min.js"></script>
        <!-- Ajaxchimp JS -->
		<script src="<?php echo $base_url; ?>assets/index/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Validator JS -->
		<script src="<?php echo $base_url; ?>assets/index/js/form-validator.min.js"></script>
		<!-- Contact JS -->
        <script src="<?php echo $base_url; ?>assets/index/js/contact-form-script.js"></script>
        <!-- Wow JS -->
        <script src="<?php echo $base_url; ?>assets/index/js/wow.min.js"></script>
        <!-- Custom JS -->
        <script src="<?php echo $base_url; ?>assets/index/js/main.js"></script>
    </body>
</html>
