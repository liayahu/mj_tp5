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
                    <span>Our Products</span>
                    <h3>Sound products to your enterprise to provide efficient solutions</h3>
                    <p>We have the strongest magnets in the world! High Quality magnets made to order, fast!
Our team all have extensive expertise in product life cycles and all aspects of design and testing of rare earth magnets, permanent magnet, sintered & bonded magnets, electromagnet, magnetic assemblies and systems.</p>
                </div>

                <div class="row">
                    {{foreach $goods as $value }}
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="image">
                                <a href="{{$base_url}}{{:url('index/product',['name'=>$value['search_name']])}}">
                                    <img src="{{$value['image'][0]['file_path']}}" alt="{{$value['goods_name']}}">
                                </a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="{{$base_url}}{{:url('index/product',['name'=>$value['search_name']])}}">{{$value['goods_name']}}</a>
                                </h3>
                                <p>{{$value['description']}}</p>
                                <a href="{{$base_url}}{{:url('index/product',['name'=>$value['search_name']])}}" class="services-btn">Read More <i class="flaticon-right-arrow-1"></i></a>
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
                    <h3>Recommended products</h3>
                </div>

                <div class="projects-slider owl-carousel owl-theme">
                    {{foreach $goods as $value }}
                    <div class="projects-item">
                        <div class="image">
                            <a href="{{$base_url}}{{:url('index/product',['name'=>$value['search_name']])}}"><img src="{{$value['image'][0]['file_path']}}" alt="{{$value['goods_name']}}"></a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="{{$base_url}}{{:url('index/product',['name'=>$value['search_name']])}}">{{$value['goods_name']}}</a>
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
                                <h3>Latest News</h3>
                                <p>LLearn more about magnets and their uses</p>
                            </div>
                            {{foreach $article as $value }}
                            <div class="work-inner-content">
                                <div class="number">
                                    <span>√</span>
                                </div>
                                <h4>{{$value['article_name']}}</h4>
                                <p>{{$value['description']}}</p>
                                <a href="{{$base_url}}{{:url('index/blog',['name'=>$value['search_name']])}}" class="services-btn">Read More <i class="flaticon-right-arrow-1"></i></a>
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