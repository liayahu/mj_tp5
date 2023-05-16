<?php

namespace app\index\controller;
use app\common\model\Setting;
use app\common\model\Goods;
use app\common\model\Article;
use app\common\model\Message;
/**
 * 控制器
 * Class Index
 * @package app\index\controller
 */
class Index extends Controller
{

    //首页
    public function index(){
        
        $goods=(new Goods)->getHomeList();
        $article=(new Article)->getHomeList();
        $img_url='/assets/index/img/main-slider/slider-bg-1.jpg';
        $img=getimagesize('.'.$img_url);
        $seo=[
            'title_tag'=>'Powerful Magnets, Permanent Magnets, Magnetic Products, Baobo Magnets',
            'title_seo'=>'Powerful Magnets, Permanent Magnets, Magnetic Products, Baobo Magnets',
            'description'=>'Baobo Magnetic Products supply Magnets, Permanent Magnets,Powerful Magnets, Neodymium, SmCo, Ferrite, Magnetic Assembly, Magnetic Tool, Alnico.',
            'locale'=>'',
            'type'=>'',
            'updated_time'=>'',
            'keywords'=>'',
            'image'=>[
                'url'=>base_url1().$img_url,
                'width'=>$img[0],
                'height'=>$img[1],
            ],
        ];
        $this->seoTag($seo);
        return $this->fetch('index',compact('goods','article'));
    }
    //联系我们
    public function contact(){
        if (!$this->request->isPost()) {
            $img_url='/assets/index/img/page-banner/page-banner-4.jpg';
            $img=getimagesize('.'.$img_url);
            $seo=[
                'title_tag'=>'Contact Us - Magnets - Baobo Magnetics',
                'title_seo'=>'Powerful Magnets, Permanent Magnets, Magnetic Products,Contact Us - Baobo Magnets',
                'description'=>'Baobo Magnetic Products supply Magnets, Permanent Magnets,Powerful Magnets, Neodymium, SmCo, Ferrite, Magnetic Assembly, Magnetic Tool, Alnico.',
                'locale'=>'',
                'type'=>'article',
                'updated_time'=>'',
                'keywords'=>'',
                'image'=>[
                    'url'=>base_url1().$img_url,
                    'width'=>$img[0],
                    'height'=>$img[1],
                ],
            ];
            $this->seoTag($seo);

            return $this->fetch('contact');
        }
        $model = new Message;
        // 新增记录
        if ($model->add($this->postData('contact'))) {
            return $this->redirect(url('index/index'));
        }

    }
    //关于我们
    public function about(){
        $img_url='/assets/index/img/page-banner/page-banner-4.jpg';
        $img=getimagesize('.'.$img_url);
        $seo=[
            'title_tag'=>'About Us - Magnets - Baobo Magnetics',
            'title_seo'=>'Powerful Magnets, Permanent Magnets, Magnetic Products,About Us - Baobo Magnets',
            'description'=>'Baobo Magnetic Products supply Magnets, Permanent Magnets,Powerful Magnets, Neodymium, SmCo, Ferrite, Magnetic Assembly, Magnetic Tool, Alnico.',
            'locale'=>'',
            'type'=>'article',
            'updated_time'=>'',
            'keywords'=>'',
            'image'=>[
                'url'=>base_url1().$img_url,
                'width'=>$img[0],
                'height'=>$img[1],
            ],
        ];
        $this->seoTag($seo);
        return $this->fetch('about');
    }
    
    //产品列表
    public function products(){
        $img_url='/assets/index/img/page-banner/page-banner-3.jpg';
        $img=getimagesize('.'.$img_url);
        $seo=[
            'title_tag'=>'Products - Magnets - Baobo Magnetics',
            'title_seo'=>'Powerful Magnets, Permanent Magnets, Magnetic Products,Products - Baobo Magnets',
            'description'=>'Baobo Magnetic Products supply Magnets, Permanent Magnets,Powerful Magnets, Neodymium, SmCo, Ferrite, Magnetic Assembly, Magnetic Tool, Alnico.',
            'locale'=>'',
            'type'=>'article',
            'updated_time'=>'',
            'keywords'=>'',
            'image'=>[
                'url'=>base_url1().$img_url,
                'width'=>$img[0],
                'height'=>$img[1],
            ],
        ];
        $this->seoTag($seo);


        $list=(new Goods)->getIndexList();
		return $this->fetch('products',compact('list'));
    }
    //产品详情
    public function product($name=''){
        $name=trim($name);
        if(empty($name)){
            url('index/products');
        }else{
            $detail=Goods::detailName($name);
            $goods=(new Goods)->getDetailList();
            $seo=[
                'title_tag'=>$detail['goods_name'],
                'title_seo'=>$detail['goods_name'],
                'description'=>$detail['description'],
                'locale'=>'',
                'type'=>'article',
                'updated_time'=>strtotime($detail['update_time']),
                'keywords'=>'',
                'image'=>[
                    'url'=>$detail['image'][0]['file_path'],
                    'width'=>$detail['image'][0]['file_width'],
                    'height'=>$detail['image'][0]['file_height'],
                ],
            ];
            $this->seoTag($seo);

            return $this->fetch('product',compact('detail','goods'));
        }
    }

    //文章列表
    public function blogs(){
        $img_url='/assets/index/img/page-banner/page-banner-3.jpg';
        $img=getimagesize('.'.$img_url);
        $seo=[
            'title_tag'=>'Blogs - Magnets - Baobo Magnetics',
            'title_seo'=>'Powerful Magnets, Permanent Magnets, Magnetic Products,Blogs - Baobo Magnets',
            'description'=>'Baobo Magnetic Products supply Magnets, Permanent Magnets,Powerful Magnets, Neodymium, SmCo, Ferrite, Magnetic Assembly, Magnetic Tool, Alnico.',
            'locale'=>'',
            'type'=>'article',
            'updated_time'=>'',
            'keywords'=>'',
            'image'=>[
                'url'=>base_url1().$img_url,
                'width'=>$img[0],
                'height'=>$img[1],
            ],
        ];
        $this->seoTag($seo);

        $list=(new Article)->getIndexList();
        return $this->fetch('blogs',compact('list'));
    }

    //文章详情
    public function blog($name=''){
    	$name=trim($name);
    	if(empty($name)){
            url('index/blogs');
    	}else{
            $detail=Article::detailName($name);
            $article=(new Article)->getBestList();
            $goods=(new Goods)->getBestList();
            $seo=[
                'title_tag'=>$detail['article_name'],
                'title_seo'=>$detail['article_name'],
                'description'=>$detail['description'],
                'locale'=>'',
                'type'=>'article',
                'updated_time'=>strtotime($detail['update_time']),
                'keywords'=>'',
                'image'=>[
                    'url'=>$detail['image'][0]['file_path'],
                    'width'=>$detail['image'][0]['file_width'],
                    'height'=>$detail['image'][0]['file_height'],
                ],
            ];
            $this->seoTag($seo);
    		return $this->fetch('blog',compact('detail','article','goods'));
    	}
    }
    //midjourney输入
    public function mj_input(){
        $data=['text'=>'ca1te'.rand(1,100)];
        $code=1;
        $msg='success'; 
        return json_encode(compact('code', 'msg', 'data'));
        // return json_encode([]);
    }
}
