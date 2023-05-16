<?php

namespace app\common\model;
use think\Request;
/**
 * 消息中心
 * Class Message
 * @package app\common\model
 */
class Message extends BaseModel
{
    protected $name = 'message';

    /**
     * 获取帮助列表
     * @param $key
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getList()
    {
        return $this->order(['create_time' => 'desc'])->paginate(15, false, [
                'query' => Request::instance()->request()
            ]);;
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
     * 删除记录
     * @return int
     */
    public function remove() {
        return $this->delete();
    }

}
