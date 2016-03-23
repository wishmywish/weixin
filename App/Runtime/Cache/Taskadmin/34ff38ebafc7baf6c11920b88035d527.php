<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>[title]</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            var ROOT = "/wisdom";//网站根目录地址,例:/根目录
            var APP = "/wisdom/index.php";//当前应用（入口文件）地址,例:/根目录/index.php
            //var 
            //var UPFILE = "/wisdom/Public/upfile";
            var IMG = "/wisdom/Public/Taskadmin/Default/images";
            var STATIC = "/wisdom/Public/static";
            var UPFILE = "/wisdom/Public/upfile";
            var THEME = "/wisdom/Public/Taskadmin/Default";
            var accessVal = true;
        </script>
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/css/jquery.bigautocomplete.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/laypage/skin/laypage.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/layer/skin/layer.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/laydate/need/laydate.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/laydate/skins/default/laydate.css" />
<!--        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/um/themes/default/css/umeditor.css" />-->
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/Taskadmin/Default/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/um/themes/default/css/umeditor.css" />
<!--        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/um/themes/default/css/umeditor.min.css" />-->

<style type="text/css">
.header {
    background-color: #fff;
    position: relative;
    height: auto;
    min-height: 32px;
    max-height: 721px;
    z-index: 999;
}

.header li {   
    text-align: center;   
    float: left;   
    width: 176px;   
    margin: 3px;   
    padding: 4px;   
    list-style-type: none;   
    cursor:pointer; 
    color: black;
}   

.selected {
    background-color: #CCCCCC;
    color: #2b669a;
}
.info{
    background-color: white;
    margin-top: 20px;
}
</style>
    <body>
        <?php if(($reModi["result"]) != "000000"): ?><div class='listinfo'>
                <ul>
                    <li style='width:100%; text-align:center; line-height:500px;'>没有符合要求的信息</li>
                </ul>
            </div>

        <?php else: ?>

            <div class="add">
<!-- <?php echo ($reModi["userid"]); ?> -->
                <div class="header">
                    <ul id="main-nav">
                        <li value="0" id="sum" class="selected" onclick="taskType(<?php echo ($reModi['userid']); ?>);">全部<span class="sum"></span></li>
                        <li value="1" id="approval" class='' onclick="taskType(<?php echo ($reModi['userid']); ?>,1);">审核<span class="approval"></span></li>
                        <li value="2" id="progress" class='' onclick="taskType(<?php echo ($reModi['userid']); ?>,2);">进行<span class="progress"></span></li>
                        <li value="3" id="complete" class='' onclick="taskType(<?php echo ($reModi['userid']); ?>,3);">完成<span class="complete"></span></li>
                        <li value="4" id="lose" class='' onclick="taskType(<?php echo ($reModi['userid']); ?>,4);">失效<span class="lose"></span></li>
                    </ul>
                </div>

                
                <div class="taskInfo">
                    <?php if(is_array($reModi)): $k = 0; $__LIST__ = $reModi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if (isset($vo) && is_array($vo)) {?>
        		                <!-- {$vo.f_title} -->
                                <div class='info'>
            						<br>

            	                    <span>&nbsp;&nbsp;&nbsp;&nbsp;任务名称： <?php echo ($vo["f_title"]); ?></span><br><br>

            	                    <span style="padding-left:12px;">任务联系人： <?php echo ($vo["f_linkman"]); ?></span><br><br>
            	                    
            	                    <span style="padding-left:12px;">联系电话： <?php echo ($vo["f_linkphone"]); ?></span><br><br>

            	                    <span style="padding-left:12px;">任务类型： <?php echo ($vo["f_tasktype"]["f_typename"]); ?></span><br><br>
                                </div>
        	                <?php } endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div><?php endif; ?>
    </body>
        <script type="text/javascript" src="/wisdom/Public/static/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="/wisdom/Public/static/jquery.form.js"></script>
    <script type="text/javascript" src="/wisdom/Public/static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/wisdom/Public/static/js/jquery.bigautocomplete.js"></script>
    <script type="text/javascript" src="/wisdom/Public/static/layer/layer.js"></script>
    <script type="text/javascript" src="/wisdom/Public/static/laypage/laypage.js"></script>
    <script type="text/javascript" src="/wisdom/Public/static/laydate/laydate.js"></script>
    <script type="text/javascript" src="/wisdom/Public/static/cookie.js"></script>
    <script type="text/javascript" src="/wisdom/Public/static/js/area.js"></script>
    <script type="text/javascript" src="/wisdom/Public/static/js/fun.js"></script>
    <script type="text/javascript" src="/wisdom/Public/Taskadmin/Default/js/fun.js"></script>
    <script type="text/javascript" src="/wisdom/Public/static/js/page.js"></script>

    <!--ueditor编译器源码文件-->
    <script type="text/javascript" src="/wisdom/Public/static/um/umeditor.js"></script>

    <script type="text/javascript" src="/wisdom/Public/static/um/umeditor.min.js"></script>
    <script type="text/javascript" src="/wisdom/Public/static/um/umeditor.config.js"></script>
    <script type="text/javascript" src="/wisdom/Public/static/um/umeditor.min.js"></script>
    <script type="text/javascript" src="/wisdom/Public/static/um/lang/zh-cn/zh-cn.js"></script>


</html>