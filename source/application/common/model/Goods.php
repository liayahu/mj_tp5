<?php

namespace app\common\model;
use think\Request;
use think\Db;
/**
 * 商品模型
 * Class Goods
 * @package app\common\model
 */
class Goods extends BaseModel
{
    protected $name = 'goods';

    /**
     * 关联商品分类表
     * @return \think\model\relation\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('app\common\model\Category');
    }


    /**
     * 关联商品图片表
     * @return \think\model\relation\HasMany
     */
    public function image()
    {
        return $this->hasMany('GoodsImage')->order(['id' => 'asc']);
    }

    /**
     * 计费方式
     * @param $value
     * @return mixed
     */
    public function getGoodsStatusAttr($value)
    {
        $status = [10 => '上架', 20 => '下架'];
        return ['text' => $status[$value], 'value' => $value];
    }
    /**
     * 计费方式
     * @param $value
     * @return mixed
     */
    public function getIsHomeAttr($value1)
    {
        $status1 = [10 => '否', 20 => '是'];
        return ['text' => $status1[$value1], 'value' => $value1];
    }

    /**
     * 获取商品列表
     * @param $param
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function getList($param)
    {
        // 商品列表获取条件
        $params = array_merge([
            'status' => 10,         // 商品状态
            'category_id' => 0,     // 分类id
            'search' => '',         // 搜索关键词
            'sortType' => 'all',    // 排序类型
            'sortPrice' => false,   // 价格排序 高低
            'listRows' => 15,       // 每页数量
        ], $param);

        // 筛选条件
        $filter = [];
        $params['category_id'] > 0 && $filter['category_id'] = ['IN', Category::getSubCategoryId($params['category_id'])];
        $params['status'] > 0 && $filter['goods_status'] = $params['status'];
        !empty($params['search']) && $filter['goods_name'] = ['like', '%' . trim($params['search']) . '%'];

        // 排序规则
        $sort = [];
        if ($params['sortType'] === 'all') {
            $sort = ['goods_sort', 'goods_id' => 'desc'];
        } elseif ($params['sortType'] === 'sales') {
            $sort = ['goods_sales' => 'desc'];
        } elseif ($params['sortType'] === 'price') {
            $sort = $params['sortPrice'] ? ['goods_max_price' => 'desc'] : ['goods_min_price' => 'asc'];
        }
        // 执行查询
        $list = $this->field(['*', '(sales_initial + sales_actual) as goods_sales'])->with(['category', 'image.file'])
            ->where('is_delete', '=', 0)
            ->where($filter)
            ->order($sort)
            ->paginate($params['listRows'], false, [
                'query' => Request::instance()->request()
            ]);
        // 整理列表数据并返回
        return $this->setGoodsListData($list, true);
    }

    /**
     * 设置商品展示的数据
     * @param $data
     * @param bool $isMultiple
     * @param callable $callback
     * @return mixed
     */
    protected function setGoodsListData($data, $isMultiple = true, callable $callback = null)
    {
        if (!$isMultiple) $dataSource = [&$data]; else $dataSource = &$data;
        // 整理商品列表数据
        foreach ($dataSource as &$goods) {
            // 商品主图
            $goods['goods_image'] = $goods['image'][0]['file_path'];
            // 回调函数
            is_callable($callback) && call_user_func($callback, $goods);
        }
        return $data;
    }

    /**
     * 获取商品详情
     * @param $goods_id
     * @return null|static
     * @throws \think\exception\DbException
     */
    public static function detail($goods_id)
    {
        return self::get($goods_id, ['category', 'image.file']);
    }
    /**
     * 获取文章详情
     * @param $name
     * @return null|static
     * @throws \think\exception\DbException
     */
    public static function detailName($name)
    {
        return self::get(['search_name'=>$name], ['category', 'image.file']);
    }
    /**
     * 文章猜你喜欢列表
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getBestList()
    {
        return $this->with(['category', 'image.file'])
            ->where('is_delete', '=', 0)
            ->where('goods_status', '=', 10)
            ->order(['goods_sort' => 'asc'])
            ->paginate(6, false, [
                'query' => Request::instance()->request()
            ]);
    }
    /**
     * 商品产品详情列表
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getDetailList()
    {
        return $this->with(['category', 'image.file'])
            ->where('is_delete', '=', 0)
            ->where('goods_status', '=', 10)
            ->order(['update_time' => 'desc'])
            ->paginate(3, false, [
                'query' => Request::instance()->request()
            ]);
    }
    /**
     * 商品产品列表
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getIndexList()
    {
        return $this->with(['category', 'image.file'])
            ->where('is_delete', '=', 0)
            ->where('goods_status', '=', 10)
            ->order(['sales_initial' => 'desc', 'goods_sort' => 'asc'])
            ->paginate(9, false, [
                'query' => Request::instance()->request()
            ]);
    }
    /**
     * 首页商品
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getHomeList()
    {
        return $this->with(['category', 'image.file'])
            ->where('is_delete', '=', 0)
            ->where('goods_status', '=', 10)
            ->where('is_home', '=', 20)
            ->order(['sales_initial' => 'desc', 'goods_sort' => 'asc'])
            ->paginate(10, false, [
                'query' => Request::instance()->request()
            ]);

    }


    /**
     * 添加商品
     * @param array $data
     * @return bool
     */
    public function add(array $data)
    {
        if (!isset($data['images']) || empty($data['images'])) {
            $this->error = '请上传商品图片';
            return false;
        }
        $data['search_name']=str_replace(' ','-',$data['goods_name']);
        $data['search_name']=str_replace('x','*',$data['search_name']);
        $data['content'] = isset($data['content']) ? $data['content'] : '';
        // 开启事务
        Db::startTrans();
        try {
            // 添加商品
            $this->allowField(true)->save($data);
            // 商品图片
            $this->addGoodsImages($data['images'],$data['image_name'],$data['image_alt']);
            Db::commit();
            return true;
        } catch (\Exception $e) {
            Db::rollback();
        }
        return false;
    }

    /**
     * 添加商品图片
     * @param $images
     * @return int
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    private function addGoodsImages($images,$image_name,$image_alt)
    {
        $this->image()->delete();
        
        // 复制文件目录
        $fileDate= date('Ymd').'/';
        $fileUploads = WEB_PATH . 'uploads/';
        $filePath = $fileUploads.$fileDate;
        // 目录不存在则自动创建
        if (!is_dir($filePath)) {
            mkdir($filePath, 0755, true);
        }
        $data = [];
        foreach ($images as $key => $value) {
            $array=[
                'image_id' => $value,
            ];
            if(!empty($image_alt[$key])){
                $array['image_alt']=$image_alt[$key];
            }
            //拷贝新图片
            if(!empty($image_name[$key])){
                $file=UploadFile::get($value);
                $newfile=$fileDate.$image_name[$key].'.'.$file['extension'];
                copy($fileUploads.$file['file_name'],$fileUploads.$newfile);
                $array['image_name']=$newfile;
            }

            $data[]=$array;
        }

        return $this->image()->saveAll($data);
    }
    /**
     * 编辑商品
     * @param $data
     * @return bool
     */
    public function edit($data)
    {
        if (!isset($data['images']) || empty($data['images'])) {
            $this->error = '请上传商品图片';
            return false;
        }
        $data['search_name']=str_replace(' ','-',$data['goods_name']);
        $data['search_name']=str_replace('x','*',$data['search_name']);
        $data['content'] = isset($data['content']) ? $data['content'] : '';
        // 开启事务
        Db::startTrans();
        try {
            // 保存商品
            $this->allowField(true)->save($data);
            // 商品图片
            $this->addGoodsImages($data['images'],$data['image_name'],$data['image_alt']);
            Db::commit();
            return true;
        } catch (\Exception $e) {
            Db::rollback();
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     * 删除商品
     * @return bool
     */
    public function remove()
    {
        // 开启事务处理
        Db::startTrans();
        try {
            // 删除商品图片
            $this->image()->delete();
            // 删除当前商品
            $this->delete();
            // 事务提交
            Db::commit();
            return true;
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            Db::rollback();
            return false;
        }
    }
}
