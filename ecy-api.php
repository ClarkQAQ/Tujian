<?php
include('./admin/fwl.php');/*访问统计*/
?>

<?php
include("./theme/theme.php");
?>
<?php
//获取网页内容
$str=file_get_contents('./db/ecy.db');
$contents = iconv("gb2312", "utf-8//IGNORE",$str);

header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("Asia/Shanghai");
$time1 = date("<!--Y-m-d-->",strtotime("-0 day"));

$time2 = date("<!--Y-m-d-->",strtotime("-1 day"));

if ($x=strpos($str,$time1)) $str=substr($str,$x);//删除 xxxx之前的内容

if ($x=strpos($str,$time2)) $str=substr($str,0,$x);//删除 xxxx之后的内容

echo $o;
echo $str;//输出结果

