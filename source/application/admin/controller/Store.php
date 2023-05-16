<?php

namespace app\admin\controller;

use app\common\model\Store as StoreModel;

use app\common\library\storage\Driver as StorageDriver;
use app\common\model\Setting as SettingModel;
use think\Loader;
use think\Cache;
/**
 * 小程序商城管理
 * Class Store
 * @package app\admin\controller
 */
class Store extends Controller
{
    /**
     * 小程序列表
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $model = new StoreModel;
        return $this->fetch('index', [
            'list' => $list = $model->getList()
        ]);
    }


    /**
     * 添加小程序
     * @return array|mixed
     */
    public function add()
    {
        $model = new WxappModel;
        if (!$this->request->isAjax()) {
            return $this->fetch('add');
        }
        // 新增记录
        if ($model->add($this->postData('store'))) {
            return $this->renderSuccess('添加成功', url('store/index'));
        }
        return $this->renderError($model->getError() ?: '添加失败');
    }

    /**
     * 复制最新商品，分类
     * @param $wxapp_id
     * @return array
     * @throws \think\exception\DbException
     */
    public function copy($wxapp_id)
    {
        (new WxappModel)->copy($wxapp_id);
        return $this->renderSuccess('操作成功');
    }
    /**
     * 回收小程序
     * @param $wxapp_id
     * @return array
     * @throws \think\exception\DbException
     */
    public function recovery($wxapp_id)
    {
        // 小程序详情
        $model = WxappModel::detail($wxapp_id);
        if (!$model->recycle()) {
            return $this->renderError('操作失败');
        }
        return $this->renderSuccess('操作成功');
    }

    /**
     * 更新商品
     * @param $wxapp_id
     * @return array
     * @throws \think\exception\DbException
     */
    public function good_renew($wxapp_id)
    {
        (new GoodsModel)->renew($wxapp_id);
        return $this->renderSuccess('操作成功');
    }
    /**
     * 更新商品
     * @param $wxapp_id
     * @return array
     * @throws \think\exception\DbException
     */
    public function good_renew1($wxapp_id)
    {
        (new GoodsModel)->renew1($wxapp_id);
        return $this->renderSuccess('操作成功');
    }
    /**
     * 清理数据
     * @param $wxapp_id
     * @return array
     * @throws \think\exception\DbException
     */
    public function clear_data($wxapp_id)
    {
        (new GoodsModel)->clear_data($wxapp_id);
        return $this->renderSuccess('操作成功');
    }

    /**
     * 仓库库存清零导入准备
     * @param $wxapp_id
     * @return array
     * @throws \think\exception\DbException
     */
    public function good_num_clear($wxapp_id)
    {
        
        (new StoreWarehouseModel)->where(['wxapp_id'=>$wxapp_id])->update(['num'=>0]);
        return $this->renderSuccess('操作成功');
    }
    /**
     * excel
     * @param $wxapp_id
     * @return array
     * @throws \think\exception\DbException
     */
    public function excel_upload($wxapp_id)
    {
        if(empty($wxapp_id)){
            return $this->renderError('操作失败');
        }
        // 存储配置信息
        $config = SettingModel::getItem('storage');
        // 实例化存储驱动
        $StorageDriver = new StorageDriver($config);
        // 设置上传文件的信息
        $StorageDriver->setUploadFile('iFile');
        // 上传图片
        if (!$StorageDriver->upload()) {
            return $this->renderError('上传失败');
        }

        //获取上传上传的行数
        $currentData=Cache::get('excel_upload');


        // 图片上传路径
        $fileName =WEB_PATH .'uploads/'. $StorageDriver->getFileName();
        $exts = 'xlsx';
        //导入PHPExcel类
        Loader::import('excel.PHPExcel');
        $PHPExcel=new \PHPExcel();
        
        if($exts == 'xls'){
            $PHPReader=new \PHPExcel_Reader_Excel5();
        }else if($exts == 'xlsx'){
            $PHPReader=new \PHPExcel_Reader_Excel2007();
        }
        $PHPExcel=$PHPReader->load($fileName);
        $currentSheet=$PHPExcel->getSheet(0);
        $allColumn=$currentSheet->getHighestColumn();
        $allRow=$currentSheet->getHighestRow();

        //初始化缓存数据
        if(empty($currentData)){
            $currentData=[
                'currentRow'=>2,
                'wxapp_id'=>$wxapp_id,
            ];
        }
        //从哪行开始读取数据，索引值从0开始
        for($currentRow=$currentData['currentRow'];$currentRow<=$allRow;$currentRow++){
            //从哪列开始，A表示第一列
            for($currentColumn='A';$currentColumn<=$allColumn;$currentColumn++){
                $address=$currentColumn.$currentRow;
                $data[$currentRow][$currentColumn]=$currentSheet->getCell($address)->getValue();
            }

        }


        if(empty($data)){
            return $this->renderError('上传失败');
        }
        $currentData['currentRow']=$currentData['currentRow']+8000;

        foreach ($data as $key => $value) {
            if($key>=$currentData['currentRow']){
                break;
            }
            if(!empty($value['A'])){
                $result=[
                    'code'=>$value['A'],
                    'goods_name'=>$value['B'],
                    'num'=>$value['F'],
                    'unit'=>$value['H'],
                    'wxapp_id'=>$wxapp_id,
                ];
                if(!empty($value['I'])){
                    $result['spec']=$value['I'];
                }
                if(!empty($value['G'])){
                    $result['category']=$value['G'];
                }
                if($value['C']>0){
                    $result['price_in']=$value['C'];
                }
                if($value['D']>0){
                    $result['price_user']=$value['D'];
                }
                if($value['E']>0){
                    $result['price']=$value['E'];
                }
                (new StoreWarehouseModel)->excel_input($result);
            }else{
                if(empty($value['B'])){
                    break;
                }
            }
            
        }

        Cache::set('excel_upload',$currentData);
        //超过则重置
        if($currentData['currentRow']>$allRow){
            Cache::set('excel_upload',[]);
            return $this->renderSuccess('上传完毕');
        }

        return $this->renderSuccess('请继续上传');
    }
    /**
     * excel
     * @param $wxapp_id
     * @return array
     * @throws \think\exception\DbException
     */
    public function excel_upload_dis($wxapp_id)
    {
        if(empty($wxapp_id)){
            return $this->renderError('操作失败');
        }
        // 存储配置信息
        $config = SettingModel::getItem('storage');
        // 实例化存储驱动
        $StorageDriver = new StorageDriver($config);
        // 设置上传文件的信息
        $StorageDriver->setUploadFile('iFile');
        // 上传图片
        if (!$StorageDriver->upload()) {
            return $this->renderError('上传失败');
        }

        //获取上传上传的行数
        $currentData=Cache::get('excel_upload');


        // 图片上传路径
        $fileName =WEB_PATH .'uploads/'. $StorageDriver->getFileName();
        $exts = 'xlsx';
        //导入PHPExcel类
        Loader::import('excel.PHPExcel');
        $PHPExcel=new \PHPExcel();
        
        if($exts == 'xls'){
            $PHPReader=new \PHPExcel_Reader_Excel5();
        }else if($exts == 'xlsx'){
            $PHPReader=new \PHPExcel_Reader_Excel2007();
        }
        $PHPExcel=$PHPReader->load($fileName);
        $currentSheet=$PHPExcel->getSheet(0);
        $allColumn=$currentSheet->getHighestColumn();
        $allRow=$currentSheet->getHighestRow();

        //初始化缓存数据
        if(empty($currentData)){
            $currentData=[
                'currentRow'=>2,
                'wxapp_id'=>$wxapp_id,
            ];
        }
        //从哪行开始读取数据，索引值从0开始
        for($currentRow=$currentData['currentRow'];$currentRow<=$allRow;$currentRow++){
            //从哪列开始，A表示第一列
            for($currentColumn='A';$currentColumn<=$allColumn;$currentColumn++){
                $address=$currentColumn.$currentRow;
                $data[$currentRow][$currentColumn]=$currentSheet->getCell($address)->getValue();
            }

        }


        if(empty($data)){
            return $this->renderError('上传失败');
        }
        $currentData['currentRow']=$currentData['currentRow']+8000;

        foreach ($data as $key => $value) {
            if($key>=$currentData['currentRow']){
                break;
            }
            if(!empty($value['A'])){
                $result=[
                    'code'=>$value['A'],
                    'price_discount'=>$value['B'],
                    'discount_end_time'=>strtotime(excelTime($value['C']).' 21:00:00'),
                    'wxapp_id'=>$wxapp_id,
                ];
                (new StoreWarehouseModel)->excel_input_dis($result);
            }else{
                if(empty($value['B'])){
                    break;
                }
            }
            
        }

        Cache::set('excel_upload',$currentData);
        //超过则重置
        if($currentData['currentRow']>$allRow){
            Cache::set('excel_upload',[]);
            return $this->renderSuccess('上传完毕');
        }

        return $this->renderSuccess('请继续上传');
    }

    /**
     * 移出回收站
     * @param $wxapp_id
     * @return array
     * @throws \think\exception\DbException
     */
    public function move($wxapp_id)
    {
        // 小程序详情
        $model = WxappModel::detail($wxapp_id);
        if (!$model->recycle(false)) {
            return $this->renderError('操作失败');
        }
        return $this->renderSuccess('操作成功');
    }

    /**
     * 删除小程序
     * @param $wxapp_id
     * @return array
     * @throws \think\exception\DbException
     */
    public function delete($wxapp_id)
    {
        // 小程序详情
        $model = WxappModel::detail($wxapp_id);
        if (!$model->setDelete()) {
            return $this->renderError('操作失败');
        }
        return $this->renderSuccess('操作成功');
    }

}