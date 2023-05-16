<?php

namespace app\index\controller;
use app\common\model\Setting as SettingModel;
/**
 * API控制器基类
 * Class BaseController
 * @package app\index\controller
 */
class Controller extends \think\Controller
{
    /* @var string $route 当前控制器名称 */
    protected $controller = '';

    /* @var string $route 当前方法名称 */
    protected $action = '';

    /* @var string $route 当前路由uri */
    protected $routeUri = '';

    /* @var string $route 当前路由：分组名称 */
    protected $group = '';


    /**
     * 基类初始化
     * @throws BaseException
     */
    public function _initialize()
    {
        // 当前路由信息
        $this->getRouteinfo();
        // 全局layout
        $this->layout();
    }

    /**
     * 全局layout模板输出
     */
    private function layout()
    {
        // 输出到view
        $this->assign([
            'base_url' => base_url1(),                      // 当前域名
            'group' => $this->group,
            'setting' => SettingModel::getAll() ?: null,        // 当前商城设置
            'route' => ['controller'=>$this->controller,'action'=>$this->action],        // 当前路由信息
        ]);
    }
    /**
     * 解析当前路由参数 （分组名称、控制器名称、方法名）
     */
    protected function getRouteinfo()
    {
        // 控制器名称
        $this->controller = toUnderScore($this->request->controller());
        // 方法名称
        $this->action = $this->request->action();
        // 控制器分组 (用于定义所属模块)
        $groupstr = strstr($this->controller, '.', true);
        $this->group = $groupstr !== false ? $groupstr : $this->controller;
        // 当前uri
        $this->routeUri = $this->controller . '/' . $this->action;
    }
    /**
     * SEO标签
     */
    protected function seoTag($seo=[])
    {
        $setting=SettingModel::getItem('store');
        $html='';
        $html_og='';
        //网站标题
        if(!empty($seo['title_tag'])){
            $html.='
        <title>'.$seo['title_tag'].'</title>';
        }else{
            $html.='
        <title>'.$setting['name'].'</title>';
        }
        $html.='
        <link rel="canonical" href="'.current_url().'" />';
        //网站语言
        if(!empty($seo['locale'])){
            $html_og.='
        <meta property="og:locale" content="'.$seo['locale'].'" />';
        }else{
            $html_og.='
        <meta property="og:locale" content="en_US" />';
        }
        //网站类型
        if(!empty($seo['type'])){//article,website
            $html_og.='
        <meta property="og:type" content="'.$seo['type'].'" />';
        }else{
            $html_og.='
        <meta property="og:type" content="website" />';
        }
        //网站标题
        if(!empty($seo['title_seo'])){
            $html_og.='
        <meta property="og:title" content="'.$seo['title_seo'].'" />';
        }else{
            $html_og.='
        <meta property="og:title" content="'.$setting['name'].'" />';
        }
        //网站描述
        if(!empty($seo['description'])){
            $html.='
        <meta name="description" content="'.$seo['description'].'" />';
            $html_og.='
        <meta property="og:description" content="'.$seo['description'].'" />';
        }else{
            $html.='
        <meta name="description" content="'.$setting['name'].'" />';
            $html_og.='
        <meta property="og:description" content="'.$setting['name'].'" />';
        }
        //网站图片
        if(!empty($seo['image']['url'])){
            $html_og.='
        <meta property="og:image" content="'.$seo['image']['url'].'" />';
            $html_og.='
        <meta property="og:image:secure_url" content="'.$seo['image']['url'].'" />';
            $html_og.='
        <meta property="og:image:width" content="'.$seo['image']['width'].'" />';
            $html_og.='
        <meta property="og:image:height" content="'.$seo['image']['height'].'" />';
        }
        //链接内容更新时间
        if(!empty($seo['updated_time'])){
            $html_og.='
        <meta property="og:updated_time" content="'.date('Y-m-d',$seo['updated_time']).'T'.date('H:i:s',$seo['updated_time']).'+0000'.'" />';
        }
        $html_og.='
        <meta property="og:url" content="'.current_url().'" />';
        
        $html_og.='
        <meta property="og:site_name" content="'.$setting['name'].'" />';
        
        //网站关键词
        if(!empty($seo['keywords'])){
            $html.='
        <meta name="keywords" content="'.$seo['keywords'].'" />';
        }
        $html.=$html_og;
        // 输出到view
        $this->assign([
            'seo' => $html,// seo标签
        ]);
    }

  /**
     * 返回封装后的 API 数据到客户端
     * @param int $code
     * @param string $msg
     * @param string $url
     * @param array $data
     * @return array
     */
    protected function renderJson($code = 1, $msg = '', $url = '', $data = [])
    {
        return compact('code', 'msg', 'url', 'data');
    }

    /**
     * 返回操作成功json
     * @param string $msg
     * @param string $url
     * @param array $data
     * @return array
     */
    protected function renderSuccess($msg = 'success', $url = '', $data = [])
    {
        return $this->renderJson(1, $msg, $url, $data);
    }

    /**
     * 返回操作失败json
     * @param string $msg
     * @param string $url
     * @param array $data
     * @return array
     */
    protected function renderError($msg = 'error', $url = '', $data = [])
    {
        return $this->renderJson(0, $msg, $url, $data);
    }

    /**
     * 获取post数据 (数组)
     * @param $key
     * @return mixed
     */
    protected function postData($key)
    {
        return $this->request->post($key . '/a');
    }

}
