<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>                                                        
<meta http-equiv="Cache-Control" content="no-transform" />
<link rel="alternate" media="handheld" href="#" />
<link href="/wisdom/Public/static/css/font-awesome.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>经销商详情</title>
<script>
    var ROOT = "/wisdom";//网站根目录地址,例:/根目录
    var APP = "/wisdom/index.php";//当前应用（入口文件）地址,例:/根目录/index.php
    var APP_NAME = "__APP_NAME__";//网站应用根目录,例:/根目录/应用目录
    var IMG = "/wisdom/Public/Taskadmin/Default/images";
    var STATIC = "/wisdom/Public/static";
    var UPFILE = "/wisdom/Public/upfile";
    var THEME = "/wisdom/Public/Taskadmin/Default";
 </script>
</head>

<style type="text/css">

</style>
<body>
    <div  style="min-height:400px;">
        <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["f_proname"]) == "bid"): ?>状态：已中标&nbsp;<span>操作人：<?php echo ($vo["user"]["trueName"]); ?></span>&nbsp;<span>操作时间：<?php echo ($vo["f_protime"]); ?></span><?php endif; ?>

            <?php if(($vo["f_proname"]) == "contract"): if(($vo["f_prostatus"]) == "1"): ?>状态：经销商合同已签订&nbsp;<span>操作人：<?php echo ($vo["user"]["trueName"]); ?></span>&nbsp;<span>操作时间：<?php echo ($vo["f_protime"]); ?></span>
                <?php else: ?>
                状态：双方合同都已签订&nbsp;<span>操作人：<?php echo ($vo["user"]["trueName"]); ?></span>&nbsp;<span>操作时间：<?php echo ($vo["f_protime"]); ?></span><?php endif; endif; ?>

            <?php if(($vo["f_proname"]) == "remit"): if(($vo["f_prostatus"]) == "1"): ?>状态：经销商已打款&nbsp;<span>操作人：<?php echo ($vo["user"]["trueName"]); ?></span>&nbsp;<span>操作时间：<?php echo ($vo["f_protime"]); ?></span>
                <?php else: ?>
                状态：等待发货&nbsp;<span>操作人：<?php echo ($vo["user"]["trueName"]); ?></span>&nbsp;<span>操作时间：<?php echo ($vo["f_protime"]); ?></span><?php endif; endif; ?>

            <?php if(($vo["f_proname"]) == "dispatch"): ?>状态：已发货&nbsp;<span>操作人：<?php echo ($vo["user"]["trueName"]); ?></span>&nbsp;<span>操作时间：<?php echo ($vo["f_protime"]); ?></span><?php endif; ?>

            <?php if(($vo["f_proname"]) == "receive"): ?>状态：已收货&nbsp;<span>操作人：<?php echo ($vo["user"]["trueName"]); ?></span>&nbsp;<span>操作时间：<?php echo ($vo["f_protime"]); ?></span><?php endif; ?><br>

            <?php if(($vo["f_proname"]) == "commissionsquare"): ?>状态：经销商收货，并已经佣金结算&nbsp;<span>操作人：<?php echo ($vo["user"]["trueName"]); ?></span>&nbsp;<span>操作时间：<?php echo ($vo["f_protime"]); ?></span><?php endif; ?><br>

            <?php if(($vo["f_proname"]) == "Settlement"): ?>状态：管理平台已经对首批款进行了结算，并已经确认。&nbsp;<span>操作人：<?php echo ($vo["user"]["trueName"]); ?></span>&nbsp;<span>操作时间：<?php echo ($vo["f_protime"]); ?></span><?php endif; ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
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
<script type="text/javascript">

</script>
</html>