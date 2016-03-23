<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>下载打开统计</title>
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

<style>
    ul li{float: left;width: 50%;height: 30px;line-height: 30px;text-align: center;}
</style>
</head>
<body>
<div style="width: 50%;height: 30px;padding-left: 10px;margin-top: 50px;">
    <select id="selectdl">
        <option value="0">请选择代理</option>
        <option value="A">代理A</option>
        <option value="B">代理B</option>
        <option value="C">代理C</option>
        <option value="D">代理D</option>
        <option value="E">代理E</option>
    </select>
</div>

<div style="width: 50%;height: auto;">

<div id="down" style="float: left;width: 25%">
    <ul style="font-weight: bold;">
        <li>时间</li>
        <li id="downdl">下载数</li>
    </ul>
    <div id="downlist" style="clear: both;">

    </div>
</div>

<div id="open" style="float: left;width: 25%">
    <ul style="font-weight: bold;">
        <li>时间</li>
        <li id="opendl">打开数</li>
    </ul>
    <div id="openlist" style="clear: both;">

    </div>
</div>

<div id="reg" style="float: left;width: 25%">
    <ul style="font-weight: bold;">
        <li>时间</li>
        <li id="regdl">注册数</li>
    </ul>
    <div id="reglist" style="clear: both;">

    </div>
</div>

<div id="liveness" style="float: left;width: 25%">
    <ul style="font-weight: bold;">
        <li style="width:1%"></li>
        <li id="livenessdl">活跃数</li>
    </ul>
    <div id="livenesslist" style="clear: both;">

    </div>
</div>

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

<script>
    function getsum(selectVal){
        // var loadi = layer.load(0);
        $.getJSON("<?php echo U('Taskadmin/Push/pushlist');?>","udid="+selectVal,function(v){
            console.log(v.openlist);
            $('#downlist').empty();
            $('#openlist').empty();

            $('#reglist').empty();
            $('#livenesslist').empty();

            var downlist = "<ul>";
            $.each(v.downlist,function(i,val){
                downlist += "<li>"+val.downtime+"</li>";
                downlist += "<li>"+val.downsum+"</li>";
            });
            downlist += "</ul>";
            $('#downlist').append(downlist);

            var openlist = "<ul>";
            $.each(v.openlist,function(i,val_1){
                openlist += "<li>"+val_1.opentime+"</li>";
                openlist += "<li>"+val_1.opensum+"</li>";
            });
            openlist += "</ul>";
            $('#openlist').append(openlist);

            var reglist = "<ul>";
            $.each(v.reglist,function(i,val_1){
                reglist += "<li>"+val_1.regtime+"</li>";
                reglist += "<li>"+val_1.regsum+"</li>";
            });
            reglist += "</ul>";
            $('#reglist').append(reglist);

            var livenesslist = "<ul>";
            $.each(v.livenesslist,function(i,val_1){
                livenesslist += "<li style='width:1%'></li>";
                if (val_1[0].total == null) {
                    val_1[0].total = 0;
                };

                livenesslist += "<li>"+val_1[0].total+"</li>";
            });
            livenesslist += "</ul>";
            $('#livenesslist').append(livenesslist);
            // layer.close(loadi);
        });
    }
    $("#selectdl").change(function(){
        if($(this).val()!=='0'){
            $('#downdl').html($(this).val()+"下载数");
            $('#opendl').html($(this).val()+"打开数");

            $('#regdl').html($(this).val()+"注册数");
            $('#livenessdl').html($(this).val()+"活跃数");
            getsum($(this).val());
        }else{
            $('#downdl').html("下载数");
            $('#opendl').html("打开数");
            $('#downlist').empty();
            $('#openlist').empty();

            $('#regdl').html("注册数");
            $('#livenessdl').html("活跃数");
            $('#reglist').empty();
            $('#livenesslist').empty();
        }
    });
</script>
</html>