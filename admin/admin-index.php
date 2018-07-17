<?php
include('./password.php');/*页面加密*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="../css/font.css">
        <link rel="stylesheet" href="../css/xadmin.css">
    </head>
    <body>
    <div class="x-body layui-anim-up">
        <blockquote class="layui-elem-quote">现在时间：<?php date_default_timezone_set("Asia/Shanghai"); echo date('Y-m-d h:i');?>
           <script language="javaScript">
            
            now = new Date(),hour = now.getHours()
            if(hour < 6){document.write("还不睡啊想掉头发嘛？!")}
            else if (hour < 9){document.write("早安!今天也要元气满满呢！")}
            else if (hour < 12){document.write("午安!想好去吃什么了嘛？")}
            else if (hour < 14){document.write("现在是午休时间，不要老是忙啦，休息一会吧!")}
            else if (hour < 17){document.write("下午好呀!QAQ")}
            else if (hour < 19){document.write("傍晚好!晚餐吃什么呢？")}
            else if (hour < 22){document.write("晚安!早点睡觉！")}
            else {document.write("大半夜就你还在忙!")}
            
            </script>
        <fieldset class="layui-elem-field">
            <legend>数据统计</legend>
            <div class="layui-field-box">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-body">
                            <div class="layui-carousel x-admin-carousel x-admin-backlog" lay-anim="" lay-indicator="inside" lay-arrow="none" style="width: 100%; height: 160px;">
                                <div carousel-item="">
                                    <ul class="layui-row layui-col-space10 layui-this">
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>图片总数</h3>
                                                <p>
                                                    <cite>
                                                    <?php  
                                                        $zhzs=file_get_contents('../db/zh.db'); 
                                                        $tpzs1 = substr_count($zhzs,'img src'); 
                                                        $ecyzs = file_get_contents('../db/ecy.db'); 
                                                        $tpzs2 = substr_count($ecyzs,'img src');
                                                        $tpzs = $tpzs1+$tpzs2;
                                                        echo $tpzs;
                                                    ?>
                                                    </cite>
                                               </p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>日图总数</h3>
                                                <p>
                                                    <cite>
                                                    <?php  
                                                        $zhzs=file_get_contents('../db/zh.db'); 
                                                        $tpzs1 = substr_count($zhzs,'img src'); 
                                                        $ecyzs = file_get_contents('../db/ecy.db'); 
                                                        $tpzs2 = substr_count($ecyzs,'img src');
                                                        $tpzs = $tpzs1+$tpzs2;
                                                        echo $tpzs;
                                                    ?>
                                                    </cite>
                                               </p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>今日投稿</h3>
                                                <p>
                                                    <cite>
                                                      <?PHP
                                                        $jrtg1=file_get_contents('../db/tg.db'); 
                                                        date_default_timezone_set("Asia/Shanghai");
                                                        $jrtg2 = date("Y-m-d");
                                                        echo substr_count($jrtg1,$jrtg2);
                                                     ?>
                                                  
                                                  </cite></p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>今日图片</h3>
                                                <p>
                                                    <cite>
                                                        <?php  
                                                        date_default_timezone_set("Asia/Shanghai");
                                                        $jrtp1 = date("Y-m-d");
                                                        $jrtp2=file_get_contents('../db/zh.db'); 
                                                        $jrtp3 = substr_count($zhzs,$jrtp1); 
                                                        $jrtp4 = file_get_contents('../db/ecy.db'); 
                                                        $jrtp5 = substr_count($ecyzs,$jrtp1);
                                                        $jrtp = $jrtp3+$jrtp5;
                                                        echo $jrtp;
                                                    ?>
                                                    </cite></p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>今日访问</h3>
                                                <p>
                                                    <cite><?php
                                                        $ipjl=file_get_contents('../db/ip.db'); 
                                                        date_default_timezone_set("Asia/Shanghai");
                                                        $ipjl1 = date("Y-m-d");
                                                        echo substr_count($ipjl,$ipjl1); 
                                                    ?></cite>
                                               </p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>总访问量</h3>
                                                <p>
                                                    <cite><?php
                                                    $zpv=file_get_contents('../db/pv.db');
                                                    
                                                    echo $zpv;
                                                    ?></cite>
                                               </p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="layui-elem-field">
            <legend>系统通知</legend>
            <div class="layui-field-box">
                <table class="layui-table" lay-skin="line">
                    <tbody>
                        <tr>
                            <td><?php
                             $xttz=file_get_contents('../db/xttz.db');
                             echo '<pre>'.htmlspecialchars($xttz) . '</pre>';
                             //echo $xttz;
                            ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </fieldset>
        <fieldset class="layui-elem-field">
            <legend>系统信息</legend>
            <div class="layui-field-box">
                <table class="layui-table">
                    <tbody>
                        <tr>
                            <th>软件版本</th>
                            <td>图鉴v.beta5 Calrk 最终版</td></tr>
                        <tr>
                            <th>服务器地址</th>
                            <td><?php echo $_SERVER['SERVER_ADDR'] ?></td></tr>
                        <tr>
                            <th>操作系统</th>
                            <td><?php echo php_uname() ?></td></tr>
                        <tr>
                            <th>运行环境</th>
                            <td><?PHP echo $_SERVER ['SERVER_SOFTWARE']; ?></td></tr>
                        <tr>
                            <th>PHP版本</th>
                            <td><?php echo PHP_VERSION; ?></td></tr>
                        <tr>
                            <th>PHP运行方式</th>
                            <td><?php echo php_sapi_name() ?></td></tr>
                        <tr>
                            <th>Http请求中Host值</th>
                            <td><?php echo $_SERVER["HTTP_HOST"] ?></td></tr>
                        <tr>
                            <th>服务器当前时间</th>
                            <td><?php echo date("Y-m-d H:i") ?></td></tr>
                        <tr>
                            <th>上传附件限制</th>
                            <td><?php echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许" ?></td></tr>
                        <tr>
                            <th>执行时间限制</th>
                            <td><?php echo get_cfg_var("max_execution_time")."秒 "; ?></td></tr>
                        <tr>
                            <th>服务器系统目录</th>
                            <td><?php echo $_SERVER['SystemRoot'] ?></td></tr>
                    </tbody>
                </table>
            </div>
        </fieldset>
        <fieldset class="layui-elem-field">
            <legend>开发团队</legend>
            <div class="layui-field-box">
                <table class="layui-table">
                    <tbody>
                        <tr>
                            <th>版权所有</th>
                            <td>@Clark  图鉴 v.Clark beta5 最终版
                                <a href="http://clarkabe.top/" class='x-a' target="_blank">访问个人主页</a></td>
                        </tr>
                        <tr>
                            <th>开发者名单（不分先后）</th>
                            <td>@Cerasus. @Galentwww  @Chimon⠻  </td></tr>
                        <tr>
                            <th>图片维护者名单（不分先后）</th>
                            <td>@高桥李依 @晨霜攀黛瓦  @♪出卖笑的孩子 @泠鸢就是yousa @昵称什么的不重要 @荏士 @TouwaErio @半成品 </td></tr>
                    </tbody>
                </table>
            </div>
        </fieldset>
        <blockquote class="layui-elem-quote layui-quote-nm"></blockquote>
    </div>
    
    </body>
</html>