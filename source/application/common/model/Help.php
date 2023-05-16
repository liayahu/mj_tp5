<?php

namespace app\common\model;

/**
 * 帮助中心
 * Class Help
 * @package app\common\model
 */
class Help extends BaseModel
{
    protected $name = 'help';

    /**
     * 获取帮助列表
     * @param $key
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getList($key)
    {
        return $this->where(compact('key'))->order(['sort' => 'asc'])->select();
    }

    /**
     * 帮助详情
     * @param $help_id
     * @return null|static
     * @throws \think\exception\DbException
     */
    public static function detail($help_id)
    {
        return self::get($help_id);
    }


    /**
     * 新增记录
     * @param $data
     * @return false|int
     */
    public function add($data)
    {
        
        return $this->allowField(true)->save($data);
    }

    /**
     * 更新记录
     * @param $data
     * @return bool|int
     */
    public function edit($data)
    {
        return $this->allowField(true)->save($data) !== false;
    }

    /**
     * 删除记录
     * @return int
     */
    public function remove() {
        return $this->delete();
    }

}
