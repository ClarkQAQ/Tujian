<?php
include('./admin/fwl.php');/*访问统计*/
?>

<?php session_start(); 

include("./theme/theme-tg.php");/*主题文件*/

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
<title>投稿-图鉴</title>
<meta charset="UTF-8">
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="./css/materialize.min.css"  media="screen,projection"/>
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
.jz {
          display: flex;
         align-items: center;        
         justify-content: center;    
  
      } 
</style>
</head>
<body>
<!--Import jQuery before materialize.js-->
    <script src="./js/jquery.min.js"></script>
	<script src="./js/layui.js"></script>
	<script src="./js/embed.js?v=1.2"></script>
    <script type="text/javascript" src="./js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="./js/materialize.min.js"></script>
<nav class="nav-extended">

    <div class="nav-wrapper">
      <a href="#" class="brand-logo">图鉴投稿Page</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="http://tj.tujian.ml">主站</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="http://tj.tujian.ml">主站</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        
      </ul>
    </div>
  </nav>
<?php

$filename = "./db/tg.db";
$header = array($o);
file_exists($filename) or file_put_contents($filename, "\xEF\xBB\xBF".implode($header)."\r\n");
if (isset($_POST["you"])){
    $src = $_POST["src"];
    $title = $_POST["title"];
    $p = $_POST["p"];
    $bz = $_POST["bz"];
    $id = $_POST["id"];
    
    $src1 = $b.$src;
    $title1 = $c.$title;
    $p1 = $d.$p;
    $bz1 = $e.$id;
    $id1 = $f.$bz;
    
    if($src==''){
        show("图片链接必填。");
    }else{
        header("Content-type:text/html;charset=utf-8");
        date_default_timezone_set("Asia/Shanghai");
        $time = date("<!--Y-m-d H:i:s-->");
        insertLine(implode($delimiter, array($time,$a,$src,$src1,$title1,$p1,$id1,$bz1,$g)));
        show("成功添加。");
    }
}else{
    show();
}

function show($message=""){
    global $delimiter, $insertToTop, $filename;
    echo '<form method="POST" action="./tg.php"> ';
    
    echo ' 
    <div class="jz">
    <div id="test1" class="col s12">
    <div class="row">
        <div >
            <div class="card">
            
                <div class="card-content">
                    <span class="card-title">信息填写块</span>
                    <p>*号为必填项</p>
                </div>
                <div class="row">
         ';
                    echo '<div class="input-field col s12"><label class="active" for="first_name2">图片链接*</label><input id = "url" type="text" id="first_name" name="src" class="validate" ></input></div>';
                    
                    echo '<div class="input-field col s12"><label class="active" for="first_name2">标题*</label><input type="text" name="title"  id="first_name" class="validate" ></input></div>';
                    
                    echo '<div class="input-field col s12"><label class="active" for="textarea1">来源*</label><input type="text" name="p" id="textarea1" class="materialize-textarea" ></input></div>';
                    
                    echo '<div class="input-field col s12"><label class="active" for="first_name2">投稿ID*</label><input type="text" name="id"   class="validate" id="first_name" ></input></div>';
                    
                    echo '<div class="input-field col s12"><label class="active" for="first_name2">备注</label><input type="text" name="bz"   class="validate" id="first_name"></input></div>';
                    
                    echo '<div class="input-field col s12"><label class="active" for="first_name2">临时粘贴处(不需要填)</label><input type="text" name="you" size="30" class="validate" id="first_name" ></input></div>';
                    echo '<center>';
                    echo '<a href="javascript:;">
				    <input type="file" name="smfile" id="sm">
				</a>';
				
				/*echo '
				<div class="layui-row" id = "upok"> 
        <div>
            <div id="showpic" class = "layui-col-lg5"><a href="" target = "_blank"><img src=""></a></div>
            <div id="piclink" class = "layui-col-lg6 layui-col-md-offset1">
            <table class="layui-table" lay-skin="nob">
                <colgroup>
                    <col width="80">
                    <col width="400">
                    <col>
                </colgroup>
                <tbody>
                </div></div></div></div>';*/
                    echo '<span class="warning">'.$message.'</span>';    
                    echo '<div class="waves-effect waves-light btn"><input id="submit" name="Btn" type="submit" value="提交"></div></form>';
                   
                    echo '
                </div>
                </form>
            </div>  
           </center>
        </div> </div>           ';
    
    
/*echo '
          <div class="col s12 m8">
            <div class="card">
              <div class="card-content">
                <span class="card-title">代码预览块</span>
                  <table class="striped">                
                    <tbody> 
         ';
                        
              //echo convertTable();  //加载数据库数据
              
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
         */
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