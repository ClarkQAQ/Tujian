<?php
if (is_file("./db/pv.db")) {
    $a =file_get_contents("./db/pv.db");
$a++;
 file_put_contents("./db/pv.db", $a);
//echo '当前PV数是:'.$a;
} else {
$bol = file_put_contents("./db/pv.db",1);
//echo '当前PV数是:1';
}

error_reporting(0); //抑制所有错误信息
@header("content-Type: text/html; charset=utf-8"); //语言强制
//获取用户IP地址
$ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"];
logResult($ip);
 

 
function logResult($word='') {
    $fp = fopen("./db/ip.db","a");
    flock($fp, LOCK_EX) ;
    date_default_timezone_set("Asia/Shanghai");
    $time = date("Y-m-d H:i:s");
    fwrite($fp," ".$time." ".$word."\n");
    flock($fp, LOCK_UN);
    fclose($fp);
}

?>