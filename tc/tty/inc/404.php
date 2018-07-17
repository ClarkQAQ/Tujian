<?php
	/*
		贴图库开放图床系统
	*/
	if(!defined('TTK')) die;
	header("HTTP/1.0 404 Not Found");
	header("Status: 404 Not Found");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 页面未找到 - <?php echo C('seo_title');?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link type="image/x-icon" rel="shortcut icon" href="static/favicon.ico">
	<!--[if IE]> 
	<script type="text/javascript" src="static/html5.js"></script>
	<![endif]--> 
    <link rel="stylesheet" href="static/style.css">
	<style>
div#da-wrapper {
    height: auto;
    min-height: 100%;
    position: relative;
    min-width: 320px;
}
div#da-content {
    clear: both;
    padding-bottom: 58px;
}
div#da-wrapper .da-container, div#da-wrapper.fluid .da-container {
    width: 96%;
    margin: auto;
}
div#da-error-wrapper {
    width: 320px;
    padding: 30px 0;
    margin: auto;
    position: relative;
}
div#da-error-wrapper #da-error-pin {
    width: 38px;
    height: 38px;
    display: block;
    margin: auto;
    margin-bottom: -27px;
    z-index: 10;
    position: relative;
    background: url("static/images/error-pin.png") no-repeat center center;
}
div#da-error-wrapper #da-error-code {
    width: 285px;
    height: 170px;
    padding: 127px 16px 0 16px;
    position: relative;
    margin: auto;
    margin-bottom: 20px;
    z-index: 5;
    line-height: 1;
    font-size: 32px;
    text-align: center;
    background: url("static/images/error-hanger.png") no-repeat center center;
    -webkit-transform-origin: center top;
    -moz-transform-origin: center top;
    transform-origin: center top;
    -webkit-animation: error-swing infinite 2s ease-in-out alternate;
    -moz-animation: error-swing infinite 2s ease-in-out alternate;
    animation: error-swing infinite 2s ease-in-out alternate;
}
div#da-error-wrapper .da-error-heading {
    color: #e15656;
    text-align: center;
    font-size: 48px;
    font-family: Georgia,"Times New Roman",Times,serif;
}
div#da-error-wrapper p {
    text-align: center;
    font-size: 14px;
}
div#da-error-wrapper p a {
    margin: 5px;
    color: #fff;
    background: #a6d037;
    text-decoration: none;
    padding: 10px 23px;
    display: inline-block;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
div#da-error-wrapper #da-error-code span {
    font-size: 90px;
    display: block;
}

	</style>
</head>
<body>
	<?php include("inc/header.php");?>
	<article>
		<div id="da-wrapper" class="fluid">
		
			<!-- Content -->
			<div id="da-content">
				
				<!-- Container -->
				<div class="da-container clearfix">
				
					<div id="da-error-wrapper">
						
						<div id="da-error-pin"></div>
						<div id="da-error-code"><a href="<?php echo C('siteurl');?>" target="_self">
						  <span>404</span> </a></div>
					
					  <h1 class="da-error-heading"><strong>哎哟喂!走错了!</strong></h1>
					  <p> <a href="<?php echo C('siteurl');?>">返回首页</a></p>
				  </div>
				</div>
			</div>
			
			<!-- Footer -->
		  
		</div>
	</article>
	<script type="text/javascript" src="static/jquery.js"></script>

	<?php include("inc/footer.php");?>

</body>
</html>
<?php die;?>
	