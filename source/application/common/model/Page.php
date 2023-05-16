<?php

namespace app\common\model;

/**
 * diy页面模型
 * Class Page
 * @package app\common\model
 */
class Page extends BaseModel
{
    protected $name = 'page';

    /**
     * 格式化页面数据
     * @param $json
     * @return array
     */
    public function getPageDataAttr($json)
    {
        $array = json_decode($json, true);
        return compact('array', 'json');
    }

    /**
     * 自动转换data为json格式
     * @param $value
     * @return string
     */
    public function setPageDataAttr($value)
    {
        return json_encode($value ?: ['items' => []]);
    }

    /**
     * diy页面详情
     * @return null|static
     * @throws \think\exception\DbException
     */
    public static function detail($key)
    {
        return self::get(compact('key'));
    }
    /**
     * 更新页面数据
     * @param $page_data
     * @return bool
     */
    public function edit($page_data)
    {
        return $this->save(compact('page_data')) !== false;
    }


}
