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
    <title>常见问题 - <?php echo C('seo_title');?></title>
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
			<div id="faq">
				<h2>常见问题解答</h2>
					<div class="faq_box">
						<div class="title">什么是 <?php echo C('seo_title');?> ? 有什么用途?</div>
						<div class="answer" id="faq-1">我们提供免费图片上传服务，让用户上传图片或照片至本网站，分享给朋友，家人，同事及同学等等。</div>
					</div>

					<div class="faq_box">
						<div class="title">图片上传服务收费吗?</div>
						<div class="answer" id="faq-2">我们提供的图片上传服务 100% 免费! <?php echo C('seo_title');?>  依靠大家的赞助及广告商的支持。</div>
					</div>

					<div class="faq_box">
						<div class="title">支持哪些图片格式?</div>
						<div class="answer" id="faq-3">暂时支持 PNG、 JPG、 JPEG、 GIF 。</div>
					</div>

					<div class="faq_box">
						<div class="title">什么类型的图片可供上传?</div>
						<div class="answer" id="faq-4">我们提供上传合法照片服务，任何违反当地法律法规或违反 <a href="<?php echo URL('terms');?>" target="_blank" >服务条款</a> 的图片将被删除</div>
					</div>
					<div class="faq_box">
						<div class="title">图片上传服务提供外链吗?</div>
						<div class="answer" id="faq-6">我们提供图片外链服务，图片流量无限制。</div>
					</div>

					<div class="faq_box">
						<div class="title">图片储存的时间?</div>
						<div class="answer" id="faq-7">若图片没有违反我们的 <a href="<?php echo C('siteurl').rewrite('terms');?>" target="_blank" >服务条款</a> 将会永久储存，除非您自己删除或发生不可避免的意外。</div>
					</div>

					<div class="faq_box">
						<div class="title">图片文件的大小有限制吗?</div>
						<div class="answer" id="faq-8">图片限制最大 10MB。</div>
					</div>

					<div class="faq_box">
						<div class="title">如何支持本网站?</div>
						<div class="answer" id="faq-9">您可以在任何网站、同事、朋友、同学中推广本站，或通过赞助方式赞助本站!</div>
					</div>

					<div class="faq_box">
						<div class="title">还有更多的疑问?</div>
						<div class="answer" id="faq-10">我们欢迎您利用 <a href="<?php echo C('siteurl').rewrite('contact');?>" title="联系我们">联系我们</a> 功能，发送电子邮件查询问题。</div>
					</div>
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
	