<?php
/**
 * 后台菜单配置
 *    'home' => [
 *       'name' => '首页',                // 菜单名称
 *       'icon' => 'icon-home',          // 图标 (class)
 *       'index' => 'index/index',         // 链接
 *     ],
 */
return [
    'index' => [
        'name' => '首页',
        'icon' => 'icon-home',
        'index' => 'index/index',
    ],
    'message' => [
        'name' => '留言管理',
        'icon' => 'icon-user',
        'index' => 'message/index',
        'submenu' => [
            [
                'name' => '留言列表',
                'index' => 'message/index',
            ],
        ]
    ],

];
