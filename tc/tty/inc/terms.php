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
    <title>服务条款 - <?php echo C('seo_title');?></title>
    <meta name="keywords" content="<?php echo C('seo_keywords');?>" />
    <meta name="description" content="<?php echo C('seo_description');?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link type="image/x-icon" rel="shortcut icon" href="static/favicon.ico">
    <link rel="stylesheet" href="static/style.css">
	<!--[if IE]> 
	<script type="text/javascript" src="static/html5.js"></script>
	<![endif]--> 

</head>
<body>
	<?php include("inc/header.php");?>
	<article>
		<div class="contentBox">
			<div id="tos">
				<h2>服务条款</h2>
				<ul>
					<li><?php echo C('seo_title');?> 如果该图片违反了我们的服务条款，我们将保留删除或停用该图片的权限。</li>
					<li>我们的图片储存服务不保障您的图片因任何理由所导致的损失。</li>
					<li><?php echo C('seo_title');?> 以下类型的图片均不允许上传至本网站:						<ul>
							<li>任何侵权的图片。</li>
							<li>任何含有成人内容及过分裸露情节的图片。</li>
							<li>任何含有恐怖场面的图片。</li>
							<li>任何侵犯个人隐私的图片。</li>
							<li>任何违反当地法律法规的图片。</li>
						</ul>
					</li>
					<li>所有图片均不会被删除，除非图片长时间处于低流量，或违反我们的服务条款。</li>
					<li><?php echo C('seo_title');?> 我们会保留禁止任何用户的权利。</li>
					<li><?php echo C('seo_title');?> 我们会保留随时变更或修改服务条款的一部分或全部内容的权利，而我们不会再次通知您。</li>
				</ul>
				<br><br>
				<h2>隐私权保护政策</h2>
				<ul>
					<li>我们永远不会向第三方泄露或出售您的资料。</li>
				</ul>
			</div>
		</div>
		<div class="clear_both"></div>
			<div class="footer_ad">
				<a href="#">广告招商 Email: xxx@xxx.com</a>
			</div>	
		</div>
	</article>
	<script type="text/javascript" src="static/jquery.js"></script>

	<?php include("inc/footer.php");?>

</body>
</html>
<?php die;?>
	