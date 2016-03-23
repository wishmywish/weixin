<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title></title>
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
html, body {
    margin: 0 auto;
    font-size: 12px;
    font-family: Arial, Helvetica, sans-serif,微软雅黑,宋体;
    background: #FFF; 
    height: 100%;
    width: 100%;
    padding: 15px;
}
</style>
    <body>

        <?php if(($tree) != ""): ?><span>所属分类：</span>
            <select id="shopClassSelect">
                <option  value="0" >顶级分类</option>
                <?php if(is_array($tree)): $k = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><option  value="<?php echo ($vo["f_id"]); ?>" >
                        <?php if(($vo["lv"]) == "1"): ?>├─<?php endif; ?>

                        <?php if(($vo["lv"]) == "2"): ?>├───<?php endif; ?>

                        <?php if(($vo["lv"]) == "3"): ?>├─────<?php endif; ?>

                        <?php if(($vo["lv"]) == "4"): ?>├───────<?php endif; ?>

                        <?php if(($vo["lv"]) == "5"): ?>├─────────<?php endif; ?>

                        <?php if(($vo["lv"]) == "6"): ?>├───────────<?php endif; ?>

                        <?php if(($vo["lv"]) == "7"): ?>├─────────────<?php endif; ?>

                        <?php if(($vo["lv"]) == "8"): ?>├───────────────<?php endif; ?>

                        <?php if(($vo["lv"]) == "9"): ?>├─────────────────<?php endif; ?>
                        <?php echo ($vo["f_classname"]); ?>
                    </option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        <?php else: ?>
            <span>所属分类：</span>
            <select id="shopClassSelect">
                <option  value="0" >顶级分类</option>
            </select><?php endif; ?>
        <br><br>


        <span>分类名称：</span></span> <input type="text" id="title" name="title" placeholder="请输入分类名称" value="<?php echo ($reModi["f_classname"]); ?>"><br><br>

        <a class="btn btn-default" href="#" role="button" id="addClassBtn" style="margin:190px 0px 0px 225px;">确定</a>
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

    
    <script>

    </script>
</html>