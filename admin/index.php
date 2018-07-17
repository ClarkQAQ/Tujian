<?php
include('./password.php');/*页面加密*/
?>

<!doctype html>
<html lang="cn">
<head>
	<meta charset="UTF-8">
	<title>后台管理-图鉴</title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../css/font.css">
	<link rel="stylesheet" href="../css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="../lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="../js/xadmin.js"></script>

</head>
<body>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="#">图鉴</a></div>
        <div class="left_open">
            <i title="展开左侧栏" class="iconfont">&#xe699;</i>
        </div>
        <ul class="layui-nav left fast-add" lay-filter="">
          <li class="layui-nav-item">
            <!--<a href="javascript:;">+新增</a>
            <dl class="layui-nav-child"> 
              <dd><a onclick="x_admin_show('资讯','http://www.baidu.com')"><i class="iconfont">&#xe6a2;</i>资讯</a></dd>
              <dd><a onclick="x_admin_show('图片','http://www.baidu.com')"><i class="iconfont">&#xe6a8;</i>图片</a></dd>
               <dd><a onclick="x_admin_show('用户','http://www.baidu.com')"><i class="iconfont">&#xe6b8;</i>用户</a></dd>-->
            </dl>
          </li>
        </ul>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">管理员</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a onclick="x_admin_show('图鉴宗旨','../guanyu')">图鉴宗旨</a></dd>
              <dd><a href="./password.php?action=logout">退出登陆</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item to-index"><a href="/">图鉴前台首页</a></li>
        </ul>
        
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
     <!-- 左侧菜单开始 -->
    <div class="left-nav">
      <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>前台页面</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont">&#xe70b;</i>
                            <cite>杂烩日图</cite>
                            <i class="iconfont nav_right">&#xe697;</i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a _href="../zh-api.php">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>日图api</cite>
                                    
                                </a>
                            </li >
                            <li>
                                <a _href="../zh-api-old.php">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>日图归档</cite>
                                    
                                </a>
                            </li>
                        </ul>
                        <li>
                        <a href="javascript:;">
                            <i class="iconfont">&#xe70b;</i>
                            <cite>二次元日图</cite>
                            <i class="iconfont nav_right">&#xe697;</i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a _href="../ecy-api.php">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>日图api</cite>
                                    
                                </a>
                            </li >
                            <li>
                                <a _href="../ecy-api-old.php">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>日图归档</cite>
                                    
                                </a>
                            </li>
                        </ul>
                            <li>
                                <a _href="../tg.php">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>投稿</cite>
                                    
                                </a>
                            </li>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>后台管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="./zh-admin.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>杂烩日图图片上传</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="./ecy-admin.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>二次元日图图片上传</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>文件编辑</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="./ed/admin-ed-zh.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>杂烩日图数据库编辑</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="./ed/admin-ed-ecy.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>二次元日图数据库编辑</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="./ed/admin-ed-tg.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>投稿数据库编辑</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe723;</i>
                    <cite>综合图床</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="./admin-tc-sm1.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>sm.ms图床精简api</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="../tc/tty">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>贴图云图床(不知道稳不稳，慎用。）</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe726;</i>
                    <cite>后台管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="./ed/admin-ed-xttz.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理首页通知推送</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6ce;</i>
                    <cite>系统统计</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="./ed/admin-ed-ip.php ">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>访问IP日志</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b4;</i>
                    <cite>其他管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="./admin-tg.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>投稿数据</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="../ftp.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>文件管理</cite>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
      </div>
    </div>
    <!-- <div class="x-slide_left"></div> -->
    <!-- 左侧菜单结束 -->
    <!-- 右侧主体开始 -->
    <div class="page-content">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
          <ul class="layui-tab-title">
            <li class="home"><i class="layui-icon">&#xe68e;</i>主页</li>
          </ul>
          <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src='./admin-index.php' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
            </div>
          </div>
        </div>
    </div>
    <div class="page-content-bg"></div>
    <!-- 右侧主体结束 -->
    <!-- 中部结束 -->
    <!-- 底部开始 -->
    <div class="footer">
        <div class="copyright">Copyright ©2018 图鉴 All Rights Reserved</div>  
    </div>
    <!-- 底部结束 -->

</body>
</html>