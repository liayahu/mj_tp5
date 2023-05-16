<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:80:"/www/wwwroot/baobomagnet.com/web/../source/application/index/view/index/blog.php";i:1620305144;s:77:"/www/wwwroot/baobomagnet.com/source/application/index/view/layouts/layout.php";i:1619704830;s:85:"/www/wwwroot/baobomagnet.com/source/application/index/view/layouts/_template/head.php";i:1619704838;s:84:"/www/wwwroot/baobomagnet.com/source/application/index/view/layouts/_template/nav.php";i:1619704838;s:87:"/www/wwwroot/baobomagnet.com/source/application/index/view/layouts/_template/footer.php";i:1620295040;}*/ ?>
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
        <div class="page-banner-area item-bg4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Blog Details</h2>
                            <ul>
                                <li>
                                    <a href="<?php echo $base_url; ?><?php echo url('index/index/index'); ?>">Home</a>
                                </li>
                                <li>Blog Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Blog Details Area -->
        <section class="blog-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                            <div class="article-title">
                                <h2><?php echo $detail['article_name']; ?></h2>
                            </div>
                            <div class="article-date">
                                <div class="entry-meta">
                                    <span>Posted On:</span> 
                                    <span><?php echo date('jS F Y',strtotime($detail['create_time'])); ?></span>
                                </div>
                            </div>
                            
                            <div class="article-title">
                                <?php if(empty($detail['image'][0]['image_name'])): ?>
                                    <img src="<?php echo $detail['image'][0]['file_path']; ?>" alt="<?php echo $detail['article_name']; ?>" />
                                <?php else: ?>
                                    <img src="<?php echo $base_url; ?>/uploads/<?php echo $detail['image'][0]['image_name']; ?>" alt="<?php echo $detail['image'][0]['image_alt']; ?>" />
                                <?php endif; ?>
                                
                            </div>
                            
                            <div class="article-content">
                                <?php echo htmlspecialchars_decode($detail['content']); ?>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">

                            <section class="widget widget_movex_posts_thumb">
                                <h3 class="widget-title">Popular Posts</h3>
                                <?php foreach($goods as $value): ?>
                                <article class="item">
                                    <a href="<?php echo $base_url; ?><?php echo url('index/product',['name'=>$value['search_name']]); ?>" class="thumb">
                                        <img class="fullimage cover" role="img" src="<?php echo $value['image'][0]['file_path']; ?>"/>
                                    </a>
                                    <div class="info">
                                        <h4 class="title usmall"><a href="<?php echo $base_url; ?><?php echo url('index/product',['name'=>$value['search_name']]); ?>"><?php echo $value['goods_name']; ?></a></h4>
                                    </div>
                                </article>
                                <?php endforeach; ?>
                                
                            </section>

                            <section class="widget widget_categories">
                                <h3 class="widget-title">Categories</h3>

                                <ul>
                                    <?php foreach($article as $value): ?>
                                    <li><a href="<?php echo $base_url; ?><?php echo url('index/blog',['name'=>$value['search_name']]); ?>"><?php echo $value['article_name']; ?> <span class="post-count">(<?php echo date('jS F Y',strtotime($value['create_time'])); ?>)</span></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->
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
