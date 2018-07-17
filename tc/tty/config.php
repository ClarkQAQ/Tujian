<?php
if(!defined('TTK')) die;
return array(
	
	//网站地址。如放在根目录 则无需修改；如放在子目录请改为【site_url().'二级目录名/三级目录/'】(必须以‘/’结尾)
	'siteurl'=>site_url().'/k/',
	
	//网站标题
	'seo_title'=>'贴图库图床 V1.1',
	
	//网站关键词
	'seo_keywords'=>'贴图库,图床,图片上传,图片外链',
	
	//网站描述
	'seo_description'=>'',
	
	//备案号
	'beian'=>'备案号',
	
	//贴图库token，（必填），获取地址http://www.tietuku.com/manager/createtoken
	'token'=>'55db290787786fca3916701082583d13f8e6f4b4:b2R2ZHpJU3FiTmNRZ2Y2eVI3c1V5UjFzZDJjPQ==:eyJkZWFkbGluZSI6MTQ1MzE2OTk4MSwiYWN0aW9uIjoiZ2V0IiwidWlkIjoiMTk0OSIsImFpZCI6IjExNDkyNjYiLCJmcm9tIjoiZmlsZSJ9',
	
	//图片类型，原图 linkurl ，中等图 s_url ，缩略图 t_url
	'returnType'=>'s_url',
	
	//开启防CC攻击 1为开启 0关闭
	'is_open_cc'=>1,
	
	//开启CC攻击日志 1为开启 0关闭 
	//（开启开启防CC攻击后，此配置才生效，开启后，根目录需可写权限，日志会记录在根目录cc_log.txt）
	'is_open_cc_log'=>0,
	
);