<?php
include('./admin/fwl.php');/*访问统计*/
?>

<?php

$url=file_get_contents('http://cn.bing.com/HPImageArchive.aspx?idx=0&n=1');//定义bing api
if (preg_match("/<copyright>(.+?)<\/copyright>/ies", $url, $imgcopy)) {   //抓取<copyright>
    $imgconfig=$imgcopy[1];  //复制copyright 到 imgconfig
}


if (preg_match("/<urlBase>(.+?)<\/urlBase>/ies", $url, $dz)) //抓取<urlBase>
$imgurl='http://s.cn.bing.com'.$dz[1].'_1920x1080.jpg'; //加入bing的前段链接和分辨率


 header('Content-Type: image/JPEG');
  @ob_end_clean();
  @readfile($imgurl);
  @flush();
@ob_flush();
exit();

//echo $imgurl;
//echo $imgconfig;
?>
