        {{include file="layouts/_template/head" /}}
        {{include file="layouts/_template/nav" /}}
        <!-- Start Main Slider Area -->
        <div class="home-slides owl-carousel owl-theme">
            <div class="main-slider-item">
                <img src="{{$base_url}}/assets/index/img/main-slider/slider-bg-1.jpg">
            </div>

            <div class="main-slider-item item-two">
                <img src="{{$base_url}}/assets/index/img/main-slider/slider-bg-2.jpg">
            </div>

            <div class="main-slider-item item-three">
                <img src="{{$base_url}}/assets/index/img/main-slider/slider-bg-3.jpg">
            </div>
        </div>
        <!-- End Main Slider Area -->
        
        
        <!-- Start Services Area -->
        <section class="services-area bg-fafafa pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Our Services</span>
                    <h3>We are Top Based Service Provider</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="row">
                    {{foreach $goods as $value }}
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="image">
                                <a href="{{$base_url}}{{:url('index/product',['name'=>$value['goods_name']])}}">
                                    <img src="{{$value['image'][0]['file_path']}}" alt="{{$value['goods_name']}}">
                                </a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="{{$base_url}}{{:url('index/product',['name'=>$value['goods_name']])}}">{{$value['goods_name']}}</a>
                                </h3>
                                <p>{{$value['description']}}</p>
                                <a href="{{$base_url}}{{:url('index/product',['name'=>$value['goods_name']])}}" class="services-btn">Read More <i class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                    {{/foreach}}

                </div>
            </div>
        </section>
        <!-- End Services Area -->

        <!-- Start Projects Area -->
        <section class="projects-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="section-title">
                    <span>Projects</span>
                    <h3>Our Projects</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                </div>

                <div class="projects-slider owl-carousel owl-theme">
                    {{foreach $goods as $value }}
                    <div class="projects-item">
                        <div class="image">
                            <a href="{{$base_url}}{{:url('index/product',['name'=>$value['goods_name']])}}"><img src="{{$value['image'][0]['file_path']}}" alt="{{$value['goods_name']}}"></a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="{{$base_url}}{{:url('index/product',['name'=>$value['goods_name']])}}">{{$value['goods_name']}}</a>
                            </h3>
                        </div>
                    </div>
                    {{/foreach}}

                </div>
            </div>
        </section>
        <!-- End Projects Area -->

        
        <!-- Start Work Process Area -->
        <section class="work-process-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="work-process-item">
                            <div class="work-content">
                                <span>Working Process</span>
                                <h3>How to Works Movex Company</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
                            </div>
                            {{foreach $article as $value }}
                            <div class="work-inner-content">
                                <div class="number">
                                    <span>√</span>
                                </div>
                                <h4>{{$value['article_name']}}</h4>
                                <p>{{$value['description']}}</p>
                                <a href="{{$base_url}}{{:url('index/blog',['name'=>$value['article_name']])}}" class="services-btn">Read More <i class="flaticon-right-arrow-1"></i></a>
                            </div>
                            {{/foreach}}

                        </div>

                        <div class="work-process-shape">
                            <img src="{{$base_url}}/assets/index/img/work-process-map.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Work Process Area -->
{{include file="layouts/_template/footer" /}}