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


    <body>
        <?php if(($reModi["result"]) != "000000"): ?><div class='listinfo'>
                <ul>
                    <li style='width:100%; text-align:center; line-height:500px;'>没有符合要求的信息</li>
                </ul>
            </div>

        <?php else: ?>

            <div class="add">
             <br><br>

                <span>&nbsp;&nbsp;&nbsp;&nbsp;业务员姓名： <input type="text" id="trueName"  style="width:285px;" value="<?php echo ($reModi["list"]["trueName"]); ?>"/></span>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;联系电话： <input type="text" id="mobile"  style="width:285px;" value="<?php echo ($reModi["list"]["mobile"]); ?>"/></span><br><br>

                <?php if ($reModi['one']) {?>
                
                <span style="font-size:18px;">绑定银行卡或支付宝信息</span><br><br>
                <?php if(is_array($reModi["one"])): $i = 0; $__LIST__ = $reModi["one"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["f_accounttype"]) == "1"): ?><span>&nbsp;&nbsp;&nbsp;&nbsp;开户银行： <input type="text" id="bankName"  style="width:285px;" value="<?php echo ($vo["f_accountname"]); ?>"/></span>
                        <span style="padding-left:12px;">银行卡号： <input type="text" id="bankNum" style="width:285px;" value="<?php echo ($vo["f_bankaccount"]); ?>"/></span>
                        <span style="padding-left:12px;">绑定时间： <input type="text" id="time" value="<?php echo ($vo["f_linkdatetime"]); ?>"/></span><br><br>
                    <?php else: ?>
                        <!-- <span style="font-size:18px;">绑定支付宝信息</span><br><br> -->
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;支付宝名称： <input type="text" id="bankName"  style="width:262px;" value="<?php echo ($vo["f_accountname"]); ?>"/></span>
                        <span style="padding-left:12px;">支付宝账号： <input type="text" id="bankNum" style="width:285px;" value="<?php echo ($vo["f_bankaccount"]); ?>"/></span>
                        <span style="padding-left:12px;">绑定时间： <input type="text" id="time" value="<?php echo ($vo["f_linkdatetime"]); ?>"/></span><br><br><?php endif; endforeach; endif; else: echo "" ;endif; ?>

                <?php }?>



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