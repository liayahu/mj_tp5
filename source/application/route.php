<?php

// 设限制URL兼容模式
// \think\Url::root('index.php?s=');
// \think\Route::rule(':name','index/index/index');
return [
    '__alias__' =>  [
        'index'  =>  'index/index/index',
        'contact'  =>  'index/index/contact',
        'products'  =>  'index/index/products',
        'blogs'  =>  'index/index/blogs',
        'about'  =>  'index/index/about',
        'mj_input'  =>  'index/index/mj_input',
    ],
    '[product]'     => [
        ':name'  => ['index/product', ['method' => 'get']],
        ':id' 	 => ['index/product', ['method' => 'post'], ['id' => '\d+']],
    ],
    '[blog]'     => [
        ':name'  => ['index/blog', ['method' => 'get']],
        ':id' 	 => ['index/blog', ['method' => 'post'], ['id' => '\d+']],
    ],

];
