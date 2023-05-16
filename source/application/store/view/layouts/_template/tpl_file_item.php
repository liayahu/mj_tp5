
<script id="tpl-file-item" type="text/template">
    {{ each list }}
    <div class="file-item">
        <img src="{{ $value.file_path }}">
        <input type="hidden" name="{{ name }}" value="{{ $value.file_id }}">
        <span>图片别名：</span><input type="text" name="{{ image_name }}" value="">
        <span>alt说明：</span><input type="text" name="{{ image_alt }}" value="">
        <i class="iconfont icon-shanchu file-item-delete"></i>
    </div>
    {{ /each }}
</script>


