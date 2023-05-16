<?php

namespace app\common\model;

use think\Cache;

/**
 * 商品分类模型
 * Class ArtCategory
 * @package app\store\model
 */
class ArtCategory extends BaseModel
{
    protected $name = 'art_category';

    /**
     * 分类图片
     * @return \think\model\relation\HasOne
     */
    public function image()
    {
        return $this->hasOne('uploadFile', 'file_id', 'image_id');
    }

    /**
     * 所有分类
     * @return mixed
     */
    public static function getALL()
    {
        $model = new static;
        if (!Cache::get('art_category')) {
            $data = $model->with(['image'])->order(['sort' => 'asc'])->select();
            $all = !empty($data) ? $data->toArray() : [];
            $tree = [];
            foreach ($all as $first) {
                if ($first['parent_id'] != 0) continue;
                $twoTree = [];
                foreach ($all as $two) {
                    if ($two['parent_id'] != $first['art_category_id']) continue;
                    $threeTree = [];
                    foreach ($all as $three)
                        $three['parent_id'] == $two['art_category_id']
                        && $threeTree[$three['art_category_id']] = $three;
                    !empty($threeTree) && $two['child'] = $threeTree;
                    $twoTree[$two['art_category_id']] = $two;
                }
                if (!empty($twoTree)) {
                    array_multisort(array_column($twoTree, 'sort'), SORT_ASC, $twoTree);
                    $first['child'] = $twoTree;
                }
                $tree[$first['art_category_id']] = $first;
            }
            Cache::set('art_category', compact('all', 'tree'));
        }
        return Cache::get('art_category');
    }

    /**
     * 获取所有分类
     * @return mixed
     */
    public static function getCacheAll()
    {
        return self::getALL()['all'];
    }

    /**
     * 获取所有分类(树状结构)
     * @return mixed
     */
    public static function getCacheTree()
    {
        return self::getALL()['tree'];
    }

    /**
     * 获取指定分类下的所有子分类id
     * @param $parent_id
     * @param array $all
     * @return array
     */
    public static function getSubArtCategoryId($parent_id, $all = [])
    {
        $arrIds = [$parent_id];
        empty($all) && $all = self::getCacheAll();
        foreach ($all as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                unset($all[$key]);
                $subIds = self::getSubArtCategoryId($item['art_category_id'], $all);
                !empty($subIds) && $arrIds = array_merge($arrIds, $subIds);
            }
        }
        return $arrIds;
    }
    /**
     * 添加新记录
     * @param $data
     * @return false|int
     */
    public function add($data)
    {
        $this->deleteCache();
        return $this->allowField(true)->save($data);
    }

    /**
     * 编辑记录
     * @param $data
     * @return bool|int
     */
    public function edit($data)
    {
        $this->deleteCache();
        return $this->allowField(true)->save($data);
    }

    /**
     * 删除商品分类
     * @param $art_category_id
     * @return bool|int
     */
    public function remove($art_category_id)
    {
        // 判断是否存在商品
        if ($goodsCount = (new Goods)->where(compact('art_category_id'))->count()) {
            $this->error = '该分类下存在' . $goodsCount . '个商品，不允许删除';
            return false;
        }
        // 判断是否存在子分类
        if ((new self)->where(['parent_id' => $art_category_id])->count()) {
            $this->error = '该分类下存在子分类，请先删除';
            return false;
        }
        $this->deleteCache();
        return $this->delete();
    }

    /**
     * 删除缓存
     * @return bool
     */
    private function deleteCache()
    {
        return Cache::rm('art_category');
    }
}
