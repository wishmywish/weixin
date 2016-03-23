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
             <span style="font-size:18px;">经销商信息</span><br><br>

                 <span>&nbsp;&nbsp;&nbsp;&nbsp;经销商名称： <input type="text" id="companyNameOne"  style="width:285px;" value="<?php echo ($reModi["one"]["f_companynameone"]); ?>"/></span><br><br>

                <span style="padding-left:12px;">经营区域： <input type="text" id="f_area" value="<?php echo ($reModi["two"]["f_area"]); ?>"/></span>
                <span style="padding-left:12px;">渠道类型： <input type="text" id="f_channeltype" value="<?php echo ($reModi["two"]["f_channeltype"]); ?>"/></span>
                <span style="padding-left:12px;">主营行业： <input type="text" id="f_mainindustry" value="<?php echo ($reModi["two"]["f_mainindustry"]); ?>"/></span>
                <span style="padding-left:12px;">年营业额： <input type="text" id="f_yearturnover" value="<?php echo ($reModi["two"]["f_yearturnover"]); ?>"/></span><br><br>

                <span style="padding-left:12px;">流动资金： <input type="text" id="f_floatingcapital" value="<?php echo ($reModi["two"]["f_floatingcapital"]); ?>"/></span>
                <span style="padding-left:12px;">销售人数： <input type="text" id="f_salesqty" value="<?php echo ($reModi["two"]["f_salesqty"]); ?>"/></span>
                <span style="padding-left:12px;">品牌个数： <input type="text" id="f_famousbrandqty" value="<?php echo ($reModi["two"]["f_famousbrandqty"]); ?>"/></span>
                <span style="padding-left:12px;">网点数量： <input type="text" id="f_latticepointqty" value="<?php echo ($reModi["two"]["f_latticepointqty"]); ?>"/></span><br><br>

                <span style="padding-left:12px;">物流车数： <input type="text" id="f_salesqty" value="<?php echo ($reModi["two"]["f_salesqty"]); ?>"/></span>
                <span style="padding-left:12px;">资源优势： <input type="text" id="f_advantage" style="width:605px;" value="<?php echo ($reModi["two"]["f_advantage"]); ?>"/></span><br><br>


                <span style="font-size:18px;">业务员信息</span><br><br>

                <span>&nbsp;&nbsp;&nbsp;&nbsp;业务员姓名： <input type="text" id="companyNameOne"  style="width:285px;" value="<?php echo ($reModi["one"]["trueName"]); ?>"/></span><br><br>
                <span>联系电话： <input type="text" id="mobile"  style="width:285px;" value="<?php echo ($reModi["one"]["mobile"]); ?>"/></span><br><br>
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

    <script src="http://s11.cnzz.com/z_stat.php?id=1256375228&web_id=1256375228" language="JavaScript"></script>

</html>