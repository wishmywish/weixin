<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
    <head>
        <title><?php echo ($webtitle); ?></title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <script>
            var ROOT = "/wisdom";//网站根目录地址,例:/根目录
            var APP = "/wisdom/index.php";//当前应用（入口文件）地址,例:/根目录/index.php
            var APP_NAME = "__APP_NAME__";//网站应用根目录,例:/根目录/应用目录
            var IMG = "/wisdom/Public/Mobileweb/Default/images";
            var STATIC = "/wisdom/Public/static";
            var UPFILE = "/wisdom/Public/upfile";
            var THEME = "/wisdom/Public/Mobileweb/Default";
        </script>

        <link rel="stylesheet" type="text/css" href="/wisdom/Public/Mobileweb/Default/css/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/Mobileweb/Default/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/css/font-awesome.min.css" />
        <script type="text/javascript" src="/wisdom/Public/static/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="/wisdom/Public/Mobileweb/Default/js/jquery.mobile-1.4.5.min.js"></script>
    </head>

</head>
 <script type="text/javascript" src="/wisdom/Public/static/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/wisdom/Public/Mobileweb/Default/js/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript" src="/wisdom/Public/static/layer/layer.js"></script>

 <body>
    <?php if(($re) != ""): if(is_array($re)): $k = 0; $__LIST__ = $re;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div data-role="page" id="page<?php echo ($k); ?>">
                <div  class="heads">
                    <h1>随手赚</h1>
                </div>
                <div data-role="content">
                    <div class="head_top">
                        <p><?php echo ($vo["f_problemtatile"]); ?></p>
                    </div>
                    <div class="head_nav">
                        <div class="ui-grid-b">
                            <div class="ui-block-a">
                                <a  class="ui-btns a4" data-icon="arrow-l" data-role="button" onclick="lastProblem(<?php echo ($k); ?>,<?php echo ($vo["f_type"]); ?>)")> </a>
                            </div>
                            <div class="ui-block-b nav_cent">
                                <span class="sp5"><?php echo ($k); ?></span>
                                <span>/<?php echo ($count); ?></span>
                            </div>
                            <div class="ui-block-c">
                                <a  class="ui-btns a5" data-icon="arrow-r" data-role="button" onclick="nextProblem(<?php echo ($k); ?>,<?php echo ($vo["f_type"]); ?>,<?php echo ($count); ?>)"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="head_con">
                        <p><?php echo ($vo["f_problemtatile"]); ?></p>
                    </div>
                    <div class="head_con2">
                        <?php if(is_array($vo["f_options"])): $ky = 0; $__LIST__ = $vo["f_options"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voy): $mod = ($ky % 2 );++$ky;?><p>
                                <input type="checkbox" class="inps" name="inps<?php echo ($k); ?>" value="<?php echo ($ky-1); ?>" />
                                <span class="sp6"><?php echo ($voy); ?></span>
                            </p><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div>
                        <input type="hidden" id="trueAnswer<?php echo ($k); ?>" value="<?php echo ($vo["f_trueanswer"]); ?>">
                    </div>
                    <div class="head_con4">
                        <button>完成</button>
                    </div>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
         <div>
             <input type="hidden" id="userid" value="<?php echo ($userid); ?>">
             <input type="hidden" id="taskid" value="<?php echo ($taskid); ?>">
         </div><?php endif; ?>
</body>
 <script type="text/javascript">
        function nextProblem(k,f_type,count){
            // alert($("input[name='inps"+k+"']:onclick"));
            // var inspdisabled=$("input[name='inps"+k+"']:disabled").val();
            var inpschecked=$("input[name='inps"+k+"']:checked");
            var tureanswer=$("#trueAnswer"+k+"").val();
            var data=tureanswer.split(",");
            for (var i = 0; i < data.length; i++) {
                data[i]++;
            };
            var trueanswerall=data.join(",");
            // if(inspdisabled==undefined||inspdisabled=="undefined"){
                if(f_type==1){
                    if(inpschecked.length == 0){
                        layer.msg("请勾选选项", {'icon': 8});
                        return false;
                    }else if (inpschecked.length > 1) {
                        layer.msg("单选只能选择一条记录，你选择了" + inpschecked.length + "条", {'icon': 8});
                        return false;
                    }else{
                        layer.msg("正确答案是第"+trueanswerall+"个选项");
                        // setTimeout('nextProblemTime('+k+','+count+')',3000);
                    }

                }else if(f_type==2){
                    if(inpschecked.length < 2){
                        layer.msg("多选的答案至少两个，你选择了" + inpschecked.length + "个", {'icon': 8});
                         return false;
                    }else{
                        layer.msg("正确答案共有" + data.length + "个,第"+trueanswerall+"个选项是正确的");
                        // setTimeout('nextProblemTime('+k+','+count+')',3000);
                    }
                }else if(f_type==3){
                    layer.msg("目前文本问答还未完善，请进行下一题！");
                    setTimeout('nextProblemTime('+k+','+count+')',3000);
                }else if(f_type==4){
                    layer.msg("目前图片问答还未完善，请进行下一题！");
                   setTimeout('nextProblemTime('+k+','+count+')',3000);
                }
            // }else{
                // location.hash="page"+(++k); 
            // }
            
        }

        function nextProblemTime(k,count){

            //$.mobile.changePage (APP+"/Mobileweb/Events/slides?userid="+$("#userid").val()+"&taskid="+$("#taskid").val()+"#page"+(++k), 'fade', false, false);

            //$("#page"+(k+1)+"").show();
            //$("#page"+k+"").hide();

            //$.mobile.changePage("#page"+(++k),{transition:"pop"});

            // location.hash="#page"+(++k);
            location.href=APP+"/Mobileweb/Events/slides?userid="+$("#userid").val()+"&taskid="+$("#taskid").val()+"#page"+(++k);
            
            if (k>count) {
                layer.msg("当前页是最后页");
            }

        }

        function lastProblem(k,f_type){
            $("input[name='inps"+(k-1)+"']").attr("onclick","return false;");
            location.hash="#page"+(--k);
            if (k<1) {
                layer.msg("当前页是第一页");
            }
        }



    </script>
</html>