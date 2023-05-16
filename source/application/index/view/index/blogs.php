{{include file="layouts/_template/head" /}}
{{include file="layouts/_template/nav" /}}
        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Blog Three Column</h2>
                            <ul>
                                <li>
                                    <a href="{{$base_url}}{{:url('index/index/index')}}">Home</a>
                                </li>
                                <li>Blog Three Column</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Blog Area -->
        <section class="blog-area pt-100 pb-100">
            <div class="container-fluid">
                <div class="row">
                    {{foreach $list as $value }}
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item">
                            <div class="image">
                                <a href="{{$base_url}}{{:url('index/blog',['name'=>$value['search_name']])}}"><img src="{{$value['image'][0]['file_path']}}" alt="{{$value['article_name']}}"></a>
                                
                                <div class="date">
                                    <span>{{:date('jS F Y',strtotime($value['create_time']))}}</span>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="{{$base_url}}{{:url('index/blog',['name'=>$value['search_name']])}}">{{$value['article_name']}}</a>
                                </h3>
                                <a href="{{$base_url}}{{:url('index/blog',['name'=>$value['search_name']])}}" class="blog-btn">Read More +</a>
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
        <!-- End Blog Area -->
        {{include file="layouts/_template/footer" /}}
