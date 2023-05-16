<?php

namespace app\store\controller\store;

use app\store\controller\Controller;
use app\common\model\Store as StoreModel;

/**
 * 管理员控制器
 * Class StoreUser
 * @package app\store\controller
 */
class User extends Controller
{
    /**
     * 更新当前管理员信息
     * @return array|mixed
     * @throws \think\exception\DbException
     */
    public function renew()
    {
        
        $model = StoreModel::detail($this->store['store']['store_id']);
        if ($this->request->isAjax()) {
            if ($model->renew($this->postData('store'))) {
                return $this->renderSuccess('更新成功');
            }
            return $this->renderError($model->getError() ?: '更新失败');
        }
        return $this->fetch('renew', compact('model'));
    }
}
