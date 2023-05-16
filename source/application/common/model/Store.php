<?php

namespace app\common\model;

use think\Session;
/**
 * 商家用户模型
 * Class store
 * @package app\common\model
 */
class Store extends BaseModel
{
    protected $name = 'store';

    /**
     * 新增默认商家用户信息
     * @return false|int
     */
    public function insertDefault()
    {
        return $this->save([
            'user_name' => 'hishop_' . time(),
            'password' => md5(uniqid()),
        ]);
    }
    /**
     * 商家用户登录
     * @param $data
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function login($data)
    {
        // 验证用户名密码是否正确
        if (!$store = self::useGlobalScope(false)->where([
            'user_name' => $data['user_name'],
            'password' => hishop_hash($data['password'])
        ])->find()) {
            $this->error = '登录失败, 用户名或密码错误';
            return false;
        }
        // 保存登录状态
        Session::set('hishop_store', [
            'store' => [
                'store_id' => $store['store_id'],
                'user_name' => $store['user_name'],
            ],
            'is_login' => true,
        ]);
        return true;
    }

    /**
     * 商户信息
     * @param $store_id
     * @return null|static
     * @throws \think\exception\DbException
     */
    public static function detail($store_id)
    {
        return self::get($store_id);
    }

    /**
     * 更新当前管理员信息
     * @param $data
     * @return bool
     */
    public function renew($data)
    {
        if ($data['password'] !== $data['password_confirm']) {
            $this->error = '确认密码不正确';
            return false;
        }
        // 更新管理员信息
        if ($this->save([
                'user_name' => $data['user_name'],
                'password' => hishop_hash($data['password']),
            ]) === false) {
            return false;
        }
        // 更新session
        Session::set('hishop_store.store', [
            'store_id' => $this['store_id'],
            'user_name' => $data['user_name'],
        ]);
        return true;
    }
    /**
     * 获取列表
     * @param boolean $is_recycle
     * @return \think\Paginator
     * @throws \think\exception\DbException
     */
    public function getList()
    {
        return $this->order(['create_time' => 'desc'])
            ->paginate(15, false, [
                'query' => request()->request()
            ]);
    }

}
