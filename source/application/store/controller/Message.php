<?php

namespace app\store\controller;

use app\common\model\Message as MessageModel;
/**
 * 留言管理控制器
 * Class Message
 * @package app\store\controller
 */
class Message extends Controller
{
    /**
     * 留言列表
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function index()
    {
        // 获取全部留言列表
        $model = new MessageModel;
        $list = $model->getList();
        return $this->fetch('index', compact('list'));
    }


    /**
     * 删除留言
     * @param $id
     * @return array
     * @throws \think\exception\DbException
     */
    public function delete($id)
    {
        $model = MessageModel::get($id);
        if (!$model->remove()) {
            return $this->renderError('删除失败');
        }
        return $this->renderSuccess('删除成功');
    }


}
