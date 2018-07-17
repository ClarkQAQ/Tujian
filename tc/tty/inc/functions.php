<?php
	/*
		贴图库开放图床系统
	*/
	if(!defined('TTK')) die;
?>
<?php
$config1 = include("config.php");
$config2 = include("inc/common/config.php");
$config = array_merge($config2,$config1);
/*
*入口
*/
function Start(){
	
	global $config;
	
	if(empty($config['token'])){
		die('Token can\'t be empty. Please go there <a href="http://www.tietuku.com/manager/createtoken" target="_blank">http://www.tietuku.com/manager/createtoken</a> to get!<br>Modify Token in file \'config.php\' at root directory.');
	}
	
	$act=safe_query_string();
	
	$act=empty($act)?'index':$act;
	
	if(($act!=''||!empty($act))&&file_exists("inc/".$act.".php")) 
		include("inc/".$act.".php");
	
	elseif(($act!=''||!empty($act))&&!file_exists("inc/".$act.".php"))
		include("inc/404.php");
}
/**
 * 返回配置
 * @param string $name 配置名称
 */
function C($name=''){
	global $config;
	if(!$name)
		return $config;
	else
		return $config[$name]?$config[$name]:'';
}
/**
 * Cookie 设置、获取、删除
 * @param string $name cookie名称
 * @param mixed $value cookie值
 * @param mixed $options cookie参数
 * @return mixed
 */
function cookie($name='', $value='', $option=null) {
	global $config;
    // 默认设置
    $config = array(
        'prefix'    =>  C('COOKIE_PREFIX'), // cookie 名称前缀
        'expire'    =>  C('COOKIE_EXPIRE'), // cookie 保存时间
        'path'      =>  C('COOKIE_PATH'), // cookie 保存路径
        'domain'    =>  C('COOKIE_DOMAIN'), // cookie 有效域名
        'httponly'  =>  C('COOKIE_HTTPONLY'), // httponly设置
    );
    // 参数设置(会覆盖黙认设置)
    if (!is_null($option)) {
        if (is_numeric($option))
            $option = array('expire' => $option);
        elseif (is_string($option))
            parse_str($option, $option);
        $config     = array_merge($config, array_change_key_case($option));
    }
    if(!empty($config['httponly'])){
        ini_set("session.cookie_httponly", 1);
    }
    // 清除指定前缀的所有cookie
    if (is_null($name)) {
        if (empty($_COOKIE))
            return;
        // 要删除的cookie前缀，不指定则删除config设置的指定前缀
        $prefix = empty($value) ? $config['prefix'] : $value;
        if (!empty($prefix)) {// 如果前缀为空字符串将不作处理直接返回
            foreach ($_COOKIE as $key => $val) {
                if (0 === stripos($key, $prefix)) {
                    setcookie($key, '', time() - 3600, $config['path'], $config['domain']);
                    unset($_COOKIE[$key]);
                }
            }
        }
        return;
    }elseif('' === $name){
        // 获取全部的cookie
        return $_COOKIE;
    }
    $name = $config['prefix'] . str_replace('.', '_', $name);
    if ('' === $value) {
        if(isset($_COOKIE[$name])){
            $value =    $_COOKIE[$name];
            if(0===strpos($value,'think:')){
                $value  =   substr($value,6);
                return array_map('urldecode',json_decode(MAGIC_QUOTES_GPC?stripslashes($value):$value,true));
            }else{
                return $value;
            }
        }else{
            return null;
        }
    } else {
        if (is_null($value)) {
            setcookie($name, '', time() - 3600, $config['path'], $config['domain']);
            unset($_COOKIE[$name]); // 删除指定cookie
        } else {
            // 设置cookie
            if(is_array($value)){
                $value  = 'think:'.json_encode(array_map('urlencode',$value));
            }
            $expire = !empty($config['expire']) ? time() + intval($config['expire']) : 0;
            setcookie($name, $value, $expire, $config['path'], $config['domain']);
            $_COOKIE[$name] = $value;
        }
    }
}
/**
 * 浏览器友好的变量输出
 * @param mixed $var 变量
 * @param boolean $echo 是否输出 默认为True 如果为false 则返回输出字符串
 * @param string $label 标签 默认为空
 * @param boolean $strict 是否严谨 默认为true
 * @return void|string
 */
function dump($var, $echo=true, $label=null, $strict=true) {
    $label = ($label === null) ? '' : rtrim($label) . ' ';
    if (!$strict) {
        if (ini_get('html_errors')) {
            $output = print_r($var, true);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        } else {
            $output = $label . print_r($var, true);
        }
    } else {
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        if (!extension_loaded('xdebug')) {
            $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        }
    }
    if ($echo) {
        echo($output);
        return null;
    }else
        return $output;
}
/*
*返回伪静态地址
*/
function rewrite($act){
	global $config;
	if(!empty($config['open_rewrite']))
		return !empty($act)?$act:'';
	else
		return "?$act";
}

/*
*返回伪静态地址
*/
function URL($act){
	return !empty($act)?C('siteurl').rewrite($act):C('siteurl');
}

/*
*返回当前域名
*/
function get_domain(){
	return $_SERVER['HTTP_HOST']?$_SERVER['HTTP_HOST']:'';
}

/*
*返回当前网址
*/
function site_url(){
	return 'http://'.get_domain().'/';
}

/*
*返回客户端longIP
*/
function get_long_ip(){
	return ip2long($_SERVER['REMOTE_ADDR']);
}
/*
*过滤非字母数字
*/
function safe_query_string(){
	if(C('is_open_cc')) CC();
	if($_SERVER['REQUEST_METHOD']=='post') die();
	$str = $_SERVER['QUERY_STRING'];
	$str = preg_replace("#[^A-z0-9]#",'',$str);
	return $str;
}
/*
*防CC攻击
*/
function CC(){
	session_start(); 
	$timestamp = time(); 
	$cc_nowtime = $timestamp ;
	if (isset($_SESSION['cc_lasttime'])){
		$cc_lasttime = $_SESSION['cc_lasttime'];
		$cc_times = $_SESSION['cc_times'] + 1;
		$_SESSION['cc_times'] = $cc_times;
	}else{
		$cc_lasttime = $cc_nowtime;
		$cc_times = 1;
		$_SESSION['cc_times'] = $cc_times;
		$_SESSION['cc_lasttime'] = $cc_lasttime;
	}
	if (($cc_nowtime - $cc_lasttime)<5){
	    if ($cc_times>=10){
		   header(sprintf("Location: %s",'http://127.0.0.1'));
		   exit;
		}
	}else{
		$cc_times = 0;
		$_SESSION['cc_lasttime'] = $cc_nowtime;
		$_SESSION['cc_times'] = $cc_times;
	}
	//记录cc日志
	if(C('is_open_cc_log')) {
		if (isset($_SERVER)){
			$realip = $_SERVER[HTTP_X_FORWARDED_FOR];
		}else{
			$realip = getenv("HTTP_X_FORWARDED_FOR");
		}
		if($realip<>""){
			$remoteip=$_SERVER['REMOTE_ADDR'];
			log_cc_ip($remoteip,$realip);
		}
	}
	
}
/*
*记录CC日志
*/
function log_cc_ip($remote_ip,$real_ip){
    $temp_time = date("y-m-d  G:i:s");
    $temp_result = $temp_time."\t".$real_ip."\t".$remote_ip."\n";
    if(!$fhandle=fopen("cc_log.txt","a+")){
        print "error";
        exit;
    }
	fwrite($fhandle,$temp_result);
	fclose($fhandle);
}