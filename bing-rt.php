<?php
include('./admin/fwl.php');/*访问统计*/
?>
<?php
date_default_timezone_set("Asia/Shanghai");
$time = date("Y-m-d");
$filename='bing-rt-'.$time.'.jpg';
$url=file_get_contents('http://cn.bing.com/HPImageArchive.aspx?idx=0&n=1');//定义bing api
if (preg_match("/<copyright>(.+?)<\/copyright>/ies", $url, $imgcopy)) {   //抓取<copyright>
    $imgconfig=$imgcopy[1];  //复制copyright 到 imgconfig
}
if (preg_match("/<urlBase>(.+?)<\/urlBase>/ies", $url, $dz)) //抓取<urlBase>
$imglst='http://s.cn.bing.com'.$dz[1].'_1280x720.jpg'; 
$imgurl='http://s.cn.bing.com'.$dz[1].'_1920x1080.jpg'; //加入bing的前段链接和分辨率

?>
  <html>
    <head>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="UTF-8"/>
    </head>
    <body>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

<div class="container">
      
     <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
         <img src="<?php echo $imglst;?>" type="button" id="bt">
              
              <!--
              【标题】来自bing每日推荐:
              <?php echo $imgconfig; ?>【标题】
              【原图】<?php echo $imgurl;?>【原图】
              
              【下载】<?php echo $imgurl;?>【下载】
              -->
            </div>
          </div>
        </div>
      </div>    


