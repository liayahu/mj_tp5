{{include file="layouts/_template/head" /}}
{{include file="layouts/_template/nav" /}}

        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Services One</h2>
                            <ul>
                                <li>
                                    <a href="{{$base_url}}{{:url('index/index/index')}}">Home</a>
                                </li>
                                <li>Services One</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Services Area -->
        <section class="services-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    {{foreach $list as $value }}
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="image">
                                <a href="{{$base_url}}{{:url('index/product',['name'=>$value['search_name']])}}"><img src="{{$value['image'][0]['file_path']}}" alt="{{$value['goods_name']}}"></a>
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
                    
                    <div class="col-lg-12 col-md-12">
                        <div class="paginationBox">
                            <?= $list->render() ?> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Area -->
{{include file="layouts/_template/footer" /}}