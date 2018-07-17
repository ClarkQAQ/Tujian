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
    <title>上传历史 - <?php echo C('seo_title');?></title>
    <meta name="keywords" content="<?php echo C('seo_keywords');?>" />
    <meta name="description" content="<?php echo C('seo_description');?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link type="image/x-icon" rel="shortcut icon" href="static/favicon.ico">
    <link rel="stylesheet" href="static/style.css">
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
		
		<div id="container" style="width:88%;">
			<button class="clearAll" onclick="clearHistory()">删除全部</button>
			<ul class="hislist">
			
				<div class="nopic">还没有上传过任何图片，去<a href="<?php echo C('siteurl');?>">上传</a></div>
			</ul>
		</div>
		
		<div class="clear_both"></div>
	</article>
	<script type="text/javascript" src="static/jquery.js"></script>
	<script type="text/javascript" src="static/layer/layer.js"></script>
	<script type="text/javascript" src="static/jquery.zclip.min.js"></script>
	<script type="text/javascript" src="static/his.js?123"></script>
	<?php include("inc/footer.php");?>

</body>
</html>
<?php die;?>
	