<?php
include('./password.php');/*页面加密*/
?>

<?php
    $title = "简单、纯粹的图床程序。";
?>

    <script src="../js/jquery.min.js"></script>
	<script src="../js/layui.js"></script>
	<script src="../js/embed.js?v=1.2"></script>

        
            <!-- 上传图片表单 -->
            
	            <a href="javascript:;">
				    <input type="file" name="smfile" id="sm">
				</a>
            
            <!-- 上传图片表单END -->
        </div>
    </div>
    <div style = "clear:both;"></div>
    <!-- 图片上传成功 -->
    <div class="layui-row" id = "upok"> 
        <div>
            <div id="showpic" class = "layui-col-lg5"><a href="" target = "_blank"><img src=""></a></div>
            <div id="piclink" class = "layui-col-lg6 layui-col-md-offset1">
            <table class="layui-table" lay-skin="nob">
                <colgroup>
                    <col width="80">
                    <col width="400">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <td>URL</td>
                        <td><input type="text" class="layui-input" id = "url"></td>

                    </tr>



