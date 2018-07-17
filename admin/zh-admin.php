<?php
include('./password.php');/*页面加密*/
?>
<?php session_start(); 

include("../theme/theme-rt.php");/*主题文件*/

//////////////  设置  /////////
// True：新数据插在最前面
// False：新数据插在最后面
$insertToTop = true;

// 设置数据文件里的分隔符号,默认为 竖线
$delimiter = "
";
//////////////////////////////
?>
<!DOCTYPE html>
<html>
<head>
<title>日图-图鉴</title>
<meta charset="UTF-8">
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<style>
body {direction: ltr;background: #FFFFFF;font-size: 1.0em;font-family: Tahoma, Arial, sans-serif;}
textarea {padding: 2pt;border: 1px solid #000000;width: 50%;font-size:1.2em;}
input[type="submit"]{margin: 6px 0;font-size:1.2em;width:110px;}
.warning, .warning a:hover,.warning a,.warning a:visited{color:red;font-size:1.0em;}
table{border-collapse: collapse;border-spacing: 0;margin:10px;}
td{padding:2px 12px;border: 1px #ccc solid;}
.link, .link a:hover,.link a,.link a:visited{font-size:1em; color:blue;margin:5px;}
@media screen and (max-width: 800px) {
textarea {width: 100%;height: auto;}
.btn{font-size: 1.1em;}
.post {width: 100%;}
.warnpost {width: 100%;}
}
</style>
</head>
<body>
<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
<nav class="nav-extended">
    <div class="nav-wrapper">
    </div>
  </nav>
<?php

$filename = "../db/zh.db";
$header = array($o);
file_exists($filename) or file_put_contents($filename, "\xEF\xBB\xBF".implode($header)."\r\n");
if (isset($_POST["you"])){
    $src = $_POST["src"];
    $title = $_POST["title"];
    $ct = $_POST["ct"];
    $time1 = $_POST["time1"];
    
    $ct1=$n1.$ct.$n2;
    $title1=$b1.$title.$b2;
    $src1=$l1.$src.$l2;
    $time1=$z1.$time1.$z2;
    
    

    if($src==''){
        show("图片链接必填。");
    }else{
        header("Content-type:text/html;charset=utf-8");
        date_default_timezone_set("Asia/Shanghai");
        //$time = date("<!--Y-m-d-->");
        insertLine(implode($delimiter, array($time1,$a,$src,$title1,$ct1,$src1)));
        show("成功添加。");
    }
}else{
    show();
}
function show($message=""){
    global $delimiter, $insertToTop, $filename;
    echo '<form method="POST" action="./zh-admin.php"> ';
    
    echo ' 
    
    <div id="test1" class="col s12">
    <div class="row">
        <div class="col s12 m4">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">信息填写块</span>
                    <p>*号为必填项</p>
                </div>
                <div class="row">
         ';
                    echo '<div class="input-field col s12"><label class="active" for="first_name2">图片链接*</label><input type="text" id="first_name" name="src" class="validate" ></input></div>';
                    
                    echo '<div class="input-field col s12"><label class="active" for="first_name2">标题*</label><input type="text" name="title"  id="first_name" class="validate" ></input></div>';
                    
                    echo ' <div class="input-field col s12"><textarea id="textarea1" name="ct" class="materialize-textarea"></textarea><label for="textarea1">内容*</label></div>';
                    
                    echo '<div class="input-field col s12"><label class="active" for="first_name2">推送日期*</label><input type="text" name="time1" size="40"  class="validate" id="first_name" value='.date('Y-m-d').'></input></div>';
                    
                    echo '<div class="input-field col s12">临时粘贴处<input type="text" name="you" size="30" placeholder="这里用作临时修改，不需要填。"></input></div>';
                    
                    echo '<span class="warning">'.$message.'</span>';    
                    echo '<div class="waves-effect waves-light btn"><input id="submit" name="Btn" type="submit" value="提交"></div><a href="./'.$filename.'" ><span class="new badge blue" data-badge-caption="">访问修改页面</span></a><!--<span>(新数据加在最'.($insertToTop?'上':'下').'面,第一行是css/js（默认永远第一行）)</span>--></form>';
                   // echo '<div class="link"></div>';
                    echo '
                </div>
                </form>
            </div>
      </div>  
          ';
    
    
/*
    echo '<p>图片链接：<input type="text"  name="src" size="40"></input></p>';
    echo '<p>标题：<input type="text" name="title" size="40" ></input></p>';
    echo '<p>内容：<input type="text" name="ct" size="40" ></input></p>';
    echo '<p>显示日期：<input type="text" name="time1" size="40"  value='.date('Y-m-d').'></input></p>';


//舍不得删除
    
    
    echo '<p>临时粘贴处：<input type="text" name="you" size="30" placeholder="这里用作临时修改，不需要填。"></input></p>';
    echo '<span class="warning">'.$message.'</span>';      
    echo '<p><div class=btn><input id="submit" name="Btn" type="submit" value="提交"></div></form>';
    echo '<div class="link"><a href="./'.$filename.'" > 访问修改页面 </a><span>(新数据加在最'.($insertToTop?'上':'下').'面,第一行是css/js（默认永远第一行）)</span></div>';
    echo convertTable(); 
*/
    echo '
          <div class="col s12 m8">
            <div class="card">
              <div class="card-content">
                <span class="card-title">代码预览块</span>
                  <table>                
                    <tbody> 
         ';
                        
              echo convertTable();  //加载数据库数据
              
              echo '
                    </tbody>
                  </table>
              </div>
            </div>
            <div class="card">
              <div class="card-content">
                 <p>© '.date("Y").'&nbsp;<a href="http://tj.clarkabe.top">图鉴</a></p>
              </div>
            </div>
         </div>   
           ';
         
}

function convertTable()
{
    global $delimiter, $filename;
    $result="<table>\n\n";
    $lines = explode("\n", str_replace("\r\n","\n",rtrim(file_get_contents($filename))));
    foreach ($lines as $line) {
        $result.= "<tr>\n";
        $cells = explode($delimiter, $line);
        foreach($cells as $cell){
            $result.= "<td>" . htmlspecialchars($cell) . "</td>";
        }
        $result.= "</tr>\n";
    }
    $result.= "\n</table>";

    return $result;
}   

function insertLine($newline){
    global $insertToTop, $filename;
    if($insertToTop){
        $lines = explode("\n", str_replace("\r\n","\n",rtrim(file_get_contents($filename))));
        array_splice($lines,1,0,$newline);
        file_put_contents($filename, implode("\r\n", $lines)."\r\n"); 
    }else{
        file_put_contents($filename, file_get_contents($filename).$newline."\r\n"); 
    }
}

?>
</body>
</html>