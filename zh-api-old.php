<?php
include('./admin/fwl.php');
?>


<?php
include("./theme/theme.php");
?>

<?php

$str=file_get_contents('./db/zh.db');
$contents = iconv("gb2312", "utf-8//IGNORE",$str);

header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("Asia/Shanghai");
$time1 = date("<!--Y-m-d-->",strtotime("-1 day"));

$time2 = "<!--www-->";

if ($x=strpos($str,$time1)) $str=substr($str,$x);
if ($x=strpos($str,$time2)) $str=substr($str,0,$x);
echo $o;
echo $str;
?>
