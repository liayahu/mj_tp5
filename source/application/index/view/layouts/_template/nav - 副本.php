<!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{$base_url}}/assets/index/img/logo.png" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{$base_url}}/assets/index/img/logo.png" alt="image">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{$base_url}}{{:url('index/index/index')}}" class="nav-link {{if condition='$route.action=="index"'}}active{{/if}}">
                                        Home 
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{$base_url}}{{:url('index/index/about')}}" class="nav-link {{if condition='$route.action=="about"'}}active{{/if}}">
                                        About Us 
                                    </a>

                                </li>


                                <li class="nav-item">
                                    <span class="nav-link {{if condition='$route.action=="products"'}}active{{/if}}">
                                        Magnetic Products
                                        <i class='bx bx-chevron-down'></i>
                                    </span>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{$base_url}}{{:url('index/index/products')}}" class="nav-link">
                                                Permanent Magnets
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{$base_url}}{{:url('index/index/products')}}" class="nav-link">
                                                Permanent Magnets
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{$base_url}}{{:url('index/index/blogs')}}" class="nav-link {{if condition='$route.action=="blogs"'}}active{{/if}}">
                                        Blog 
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{$base_url}}{{:url('index/index/contact')}}" class="nav-link {{if condition='$route.action=="contact"'}}active{{/if}}">
                                        Contact
                                    </a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <!-- <div class="option-item">
                                    <i class="search-btn flaticon-loupe"></i>
                                    <i class="close-btn flaticon-close"></i>
                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form class="search-form">
                                                <input class="search-input" name="search" placeholder="Search" type="text">

                                                <button class="search-button" type="submit">
                                                    <i class="flaticon-loupe"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
