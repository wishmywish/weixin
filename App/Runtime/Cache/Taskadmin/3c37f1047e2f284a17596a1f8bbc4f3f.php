<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>业务员管理</title>
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

</style>
    <body>
        <div class="adminB">
            <div class="adminMenu">
    <div class="menutop">招商管理平台</div>
    <div class="menupro">
        <div class="headimg"></div>
    </div>
    <div class="menutitle"><span class="icon-reorder"></span> MAIN NAVIGATION</div>
    <ul class="menuul">
        <li onclick="location.href = APP+'/Taskadmin/Task/index?access=100'"><span class="icon-tasks"></span>&nbsp;&nbsp;&nbsp;&nbsp;任务管理</li>
        <li onclick="location.href = APP+'/Taskadmin/Review/index'"><span class="icon-group"></span>&nbsp;&nbsp;&nbsp;&nbsp;任务审核</li>
        <li onclick="location.href = APP+'/Taskadmin/Sales/index'"><span class="icon-group"></span>&nbsp;&nbsp;&nbsp;&nbsp;业务员管理</li>
        <li onclick="location.href = APP+'/Taskadmin/Company/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;企业管理</li>
        <li onclick="location.href = APP+'/Taskadmin/Ad/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;活动与广告</li>
        <li onclick="location.href = APP+'/Taskadmin/Withdraw/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;提现管理</li>
        <li onclick="location.href = APP+'/Taskadmin/Salesreport/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;报表中心</li>
        <li onclick="location.href = APP+'/Taskadmin/DealerPro/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;招商进度管理</li>
        <li onclick="location.href = APP+'/Taskadmin/Shop/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;产品列表管理</li>
        <li onclick="location.href = APP+'/Taskadmin/ShopRecord/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;消费记录管理</li>
        <li onclick="location.href = APP+'/Taskadmin/Power/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;权限部署</li>
        <li onclick="location.href = APP+'/Taskadmin/Dealer/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;经销商管理</li>
        <!--<li onclick="location.href = APP+'/Taskadmin/Report/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;统计报表</li>-->
    </ul>
</div>
            <div class="adminRight">
                <div class="righttop"></div>
                <div class="breadlist">首页 / 业务员管理</div>

                <div class="tabli">
                    <ul id="tabli_bid">
                        <li value="1" class='<?php if(($classtype) == "1"): ?>selected<?php endif; ?>' id="messages" ><a href="/wisdom/index.php/Taskadmin/Report/index" style="text-decoration:none;color:black;">统计报表</a></li>
                        <li value="2" class='<?php if(($classtype) == "2"): ?>selected<?php endif; ?>'><a href="<?php echo U('Taskadmin/Sales/index1');?>" style="color:black;text-decoration: none;">全部业务员</a><span id="all"></span></li>
                        <li value="3" class='<?php if(($classtype) == "3"): ?>selected<?php endif; ?>'><a href="<?php echo U('Taskadmin/Sales/realName1');?>" style="color:black;text-decoration: none;">已实名认证</a><span id="name"></span></li>
                        <li value="4" class='<?php if(($classtype) == "4"): ?>selected<?php endif; ?>'><a href="<?php echo U('Taskadmin/Sales/cardBind');?>" style="color:black;text-decoration: none;">已银行卡绑定</a><span id="card"></span></li>
                    </ul>
                    <ul class="action">
                        <li id="explodeCard" value="0"><a href="/wisdom/index.php/Taskadmin/Report/explodeCard" style="text-decoration:none;color:white;">导出</a></li>
                    </ul>
                </div>

                <div class="list">
                    <ul>
                        <li style='width:5%;'><input id="allcheck" type='checkbox' value='0'></li>
                            <li style='width:20%;'>手机号</li>
                            <li style='width:35%;'>姓名</li>
                            <li style='width:15%;'>金币</li>
                            <li style='width:15%;'>银票</li>
                            <li style='width:10%;'>认领任务数</li>
                            <!-- <li style='width:10%;'>评分</li>
                            <li style='width:10%;'>状态</li> -->
                    </ul>
                    <div class='listinfo'>
                        <ul>
                            <li style='width:100%;'>暂无业务员数据</li>
                        </ul>
                    </div>
                    <div class="page"></div>
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
        plist_Sales(1,2);
    </script>
</html>