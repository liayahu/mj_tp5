        {{include file="layouts/_template/head" /}}
        {{include file="layouts/_template/nav" /}}

        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Blog Details</h2>
                            <ul>
                                <li>
                                    <a href="{{$base_url}}{{:url('index/index/index')}}">Home</a>
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
                                <h2>{{$detail['article_name']}}</h2>
                            </div>
                            <div class="article-date">
                                <div class="entry-meta">
                                    <span>Posted On:</span> 
                                    <span>{{:date('jS F Y',strtotime($detail['create_time']))}}</span>
                                </div>
                            </div>
                            
                            <div class="article-title">
                                {{if condition="empty($detail['image'][0]['image_name'])"}}
                                    <img src="{{$detail['image'][0]['file_path']}}" alt="{{$detail['article_name']}}" />
                                {{else/}}
                                    <img src="{{$base_url}}/uploads/{{$detail['image'][0]['image_name']}}" alt="{{$detail['image'][0]['image_alt']}}" />
                                {{/if}}
                                
                            </div>
                            
                            <div class="article-content">
                                {{:htmlspecialchars_decode($detail['content'])}}
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">

                            <section class="widget widget_movex_posts_thumb">
                                <h3 class="widget-title">Popular Posts</h3>
                                {{foreach $goods as $value }}
                                <article class="item">
                                    <a href="{{$base_url}}{{:url('index/product',['name'=>$value['search_name']])}}" class="thumb">
                                        <img class="fullimage cover" role="img" src="{{$value['image'][0]['file_path']}}"/>
                                    </a>
                                    <div class="info">
                                        <h4 class="title usmall"><a href="{{$base_url}}{{:url('index/product',['name'=>$value['search_name']])}}">{{$value['goods_name']}}</a></h4>
                                    </div>
                                </article>
                                {{/foreach}}
                                
                            </section>

                            <section class="widget widget_categories">
                                <h3 class="widget-title">Categories</h3>

                                <ul>
                                    {{foreach $article as $value }}
                                    <li><a href="{{$base_url}}{{:url('index/blog',['name'=>$value['search_name']])}}">{{$value['article_name']}} <span class="post-count">({{:date('jS F Y',strtotime($value['create_time']))}})</span></a></li>
                                    {{/foreach}}
                                </ul>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->
{{include file="layouts/_template/footer" /}}