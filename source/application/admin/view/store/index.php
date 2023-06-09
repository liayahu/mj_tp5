<div class="row">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-cf">商城列表</div>
            </div>
            <div class="widget-body am-fr">
                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                    <div class="am-form-group">
                        <div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs">
                                <a class="am-btn am-btn-default am-btn-success am-radius"
                                   href="<?= url('store/add') ?>">
                                    <span class="am-icon-plus"></span> 新增
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="am-u-sm-12">
                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>名称</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!$list->isEmpty()): foreach ($list as $item): ?>
                            <tr>
                                <td class="am-text-middle">
                                    <p class="item-title"><?= $item['store_id'] ?></p>
                                </td>
                                <td class="am-text-middle">
                                    <p class="item-title"><?=  $item['user_name'] ?></p>
                                </td>
                                <td class="am-text-middle"><?= $item['create_time'] ?></td>
                                <td class="am-text-middle">
                                    <div class="tpl-table-black-operation">
                                        <a href="<?= url('store/enter', ['store_id' => $item['store_id']]) ?>"
                                           class="j-move" data-id="<?= $item['store_id'] ?>" target="_blank">
                                            <i class="am-icon-arrow-right"></i> 进入商城
                                        </a>
                                        <a href="javascript:void(0);" class="j-delete tpl-table-black-operation-del"
                                           data-id="<?= $item['store_id'] ?>">
                                            <i class="am-icon-trash"></i> 删除
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; else: ?>
                            <tr>
                                <td colspan="4" class="am-text-center">暂无记录</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="am-u-lg-12 am-cf">
                    <div class="am-fr"><?= $list->render() ?> </div>
                    <div class="am-fr pagination-total am-margin-right">
                        <div class="am-vertical-align-middle">总记录：<?= $list->total() ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {

        // 删除元素
        var url = "<?= url('store/recovery') ?>";
        $('.j-delete').delete('store_id', url, '确定要删除吗？可在回收站中恢复');
    });
</script>

<script type="text/javascript">
$('.j_excel').click(function(){
    var id=$(this).data('id');
    $(".js_upload").each(function(){
        if(id==$(this).data('id')){
            $(this).click()
        }
    });
});
function uploadFile(e){
    var pic = $(e).get(0).files[0];
    var formData = new FormData();
    formData.append("iFile" , pic);
    $.ajax({
        type: "POST",
        url: "<?= url('store/excel_upload') ?>/store_id/"+$(e).data('id'),
        data: formData ,
        processData : false, 
        contentType : false , 
        success : function(data){
            alert(data.msg);
        },
        xhr: function(){
            var xhr = $.ajaxSettings.xhr();
            xhr.upload;
            return xhr;
        } 
    });
 }

</script>
<script type="text/javascript">
$('.j_excel_dis').click(function(){
    var id=$(this).data('id');
    $(".js_upload_dis").each(function(){
        if(id==$(this).data('id')){
            $(this).click()
        }
    });
});
function uploadFileDis(e){
    var pic = $(e).get(0).files[0];
    var formData = new FormData();
    formData.append("iFile" , pic);
    $.ajax({
        type: "POST",
        url: "<?= url('store/excel_upload_dis') ?>/store_id/"+$(e).data('id'),
        data: formData ,
        processData : false, 
        contentType : false , 
        success : function(data){
            alert(data.msg);
        },
        xhr: function(){
            var xhr = $.ajaxSettings.xhr();
            xhr.upload;
            return xhr;
        } 
    });
 }

</script>