        {{include file="layouts/_template/head" /}}
        {{include file="layouts/_template/nav" /}}
        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Projects Details</h2>
                            <ul>
                                <li>
                                    <a href="{{$base_url}}{{:url('index/index/index')}}">Home</a>
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
                            {{:htmlspecialchars_decode($detail['content'])}}
                        </div>
                    </div>



                <div class="related-services col-lg-12">
                    <h5>Related Services</h5>

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
            </div>
        </section>
        <!-- End Projects Details Area -->
{{include file="layouts/_template/footer" /}}