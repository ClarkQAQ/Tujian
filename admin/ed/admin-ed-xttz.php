<?php
include('../password.php');/*页面加密*/
?>

<html>
<head>
<title>系统通知编辑-图鉴</title>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
<body>
<?php
$filename="../../db/xttz.db";
if (isset($_POST['content'])){
$content=$_POST['content'];
file_put_contents($filename,$content);
echo "<script>alert('保存成功');</script>";
}else $content=file_get_contents($filename);
?>
<center>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">系统通知编辑</span>
                    <P>该通知将会显示在后台管理首页</P>
                    <!--<h6>由于是直接用的post方式提交编辑框内容，所以刷新和返回操作都会让编辑框数据提交。</h6>-->
                </div>
                <div class="row">
                <div class="input-field col s12">
<form method="post">
<textarea id="content" name="content" class="validate"style= height:350px; font-size:12px>
<?php
echo $content;
?>
</textarea>
<br></br>
<input type="submit" name="Submit" value="提交" /><!--    <input type="button" value="返回首页" onclick="window.location.href='../'">-->
       </div>
          </div>
              </div>
                </div>
                </div>
</form>
</center>
</body>
</html>
