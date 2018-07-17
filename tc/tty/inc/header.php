<?php
	/*
		贴图库开放图床系统
	*/
	if(!defined('TTK')) die;
?>
	
	<header>
		<ul class="fl navs">
			<li class="logo"><a title="<?php echo C('seo_title');?>" href="<?php echo C('siteurl');?>"><?php echo C('seo_title');?></a></li>
			<li <?php if($act=='index')echo 'class="active"';?>><a class="nav" href="<?php echo C('siteurl');?>">首页</a></li>
			<li <?php if($act=='history')echo 'class="active"';?>><a class="nav" href="<?php echo URL('history');?>">上传记录</a></li>
			
		</ul>
		<ul class="fr more navMore">
			<li <?php if($act=='faq')echo 'class="active"';?>><a class="nav" href="<?php echo URL('faq');?>">常见问题</a></li>
			<li <?php if($act=='terms')echo 'class="active"';?>><a class="nav" href="<?php echo URL('terms');?>">服务条款</a></li>
			<li <?php if($act=='contact')echo 'class="active"';?>><a class="nav" href="<?php echo URL('contact');?>">联系我们</a></li>			
		</ul>
		<ul class="fr more otMore">
			<li class="moreBtn"></li>
			<ul class="fr  dropDown">
				<li <?php if($act=='faq')echo 'class="active"';?>><a class="nav" href="<?php echo URL('faq');?>">常见问题</a></li>
				<li <?php if($act=='terms')echo 'class="active"';?>><a class="nav" href="<?php echo URL('terms');?>">服务条款</a></li>
				<li <?php if($act=='contact')echo 'class="active"';?>><a class="nav" href="<?php echo URL('contact');?>">联系我们</a></li>
			</ul>			
		</ul>
	</header>