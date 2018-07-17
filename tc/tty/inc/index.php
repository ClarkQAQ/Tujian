<?php
	/*
		贴图库开放图床系统
	*/
	if(!defined('TTK')) die;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo C('seo_title');?></title>
    <meta name="keywords" content="<?php echo C('seo_keywords');?>" />
    <meta name="description" content="<?php echo C('seo_description');?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link type="image/x-icon" rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="static/style.css?123">
	<!--[if IE]> 
	<script type="text/javascript" src="static/html5.js"></script>
	<![endif]--> 
	<script>
	var siteurl='<?php echo C('siteurl');?>';
	var apiurl='<?php echo C('apiurl');?>';
	var token='<?php echo C('token');?>';
	var returnType='<?php echo C('returnType');?>';
	</script>
</head>
<body>
	<?php include("inc/header.php");?>
	<article>
		
		<div id="continue">继续上传</div>
		<div id="wrapper">
			<div id="container">
				<!--头部，相册选择和格式选择-->

				<div id="uploader">
					<div class="queueList">
						<div id="dndArea" class="placeholder">
							<div id="filePicker"></div>
							<p>支持鼠标拖拽、QQ截屏后Ctrl+V粘贴，单次最多可选<b style="color:#999">300</b>张</p>
							<p class="notice">严禁上传任何形式的色情、擦边、大尺度写真、反动、爆恐等违法违规图片！</p>
						</div>
						
					</div>
					<div class="clear:both;"></div>
					<div class="statusBar" style="display:none;">
						<div class="progress">
							<span class="text">0%</span>
							<span class="percentage"></span>
						</div><div class="info"></div>
						<div class="btns">
							<div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
						</div>
					</div>
				</div>
				<ul class="successList"></ul>
			</div>
		</div>
	</article>
	<script type="text/javascript" src="static/jquery.js"></script>
	<script type="text/javascript" src="static/webuploader.min.js"></script>
	<script type="text/javascript" src="static/jquery.zclip.min.js"></script>
	<script type="text/javascript" src="static/layer/layer.js"></script>
	<script type="text/javascript" src="static/common.js"></script>
	<?php include("inc/footer.php");?>

</body>
</html>
<?php die;?>