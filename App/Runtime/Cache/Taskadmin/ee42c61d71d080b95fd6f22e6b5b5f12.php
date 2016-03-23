<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>活跃度报表</title>
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
.action_search
{
    background-color: #fff;
    margin:0  15px;
    padding-left: 15px;
    padding-right: 15px;
}
.action_search .tabwidth
{
    font-size: 18px;
    width: 60px;
    height:30px;
    margin-left: 10px;
    margin-top: 5px;
    line-height:30px;
    text-align: center;
    cursor: pointer;
    background-color: #3c8dbc;color:#fff;
}

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
            <div class="adminRight" >

                <div class="righttop">
    <div class="showright"><span id="user_setting" class="fa fa-user">个人设置</span> <span id="user_out" class="fa fa-sign-out">退出登录</span></div>
</div>
                <div class="breadlist">首页 / 活跃度报表</div>
                <div class="tabli">
                    <ul id="tabli">
                        <li value="1" class='' id="messages"><a href="/wisdom/index.php/Taskadmin/Salesreport/index" style="text-decoration:none;">活跃度报表</a></li>
                        <li value="2" class='' style="width:200px;"><a href="/wisdom/index.php/Taskadmin/Salesreport/shareNum" style="text-decoration:none;">推广赚日金币总数</a></li>
                        <li value="3" class='' style="width:200px;"><a href="/wisdom/index.php/Taskadmin/Salesreport/widelyShareNum" style="text-decoration:none;">随手赚日金币总数</a></li>
                        <li value="4" class='' style="width:200px;"><a href="/wisdom/index.php/Taskadmin/Salesreport/allTaskShare" style="text-decoration:none;">全部任务日分享数</a></li>
                        <li value="5" class='selected' style="width:200px;"><a href="/wisdom/index.php/Taskadmin/Salesreport/widelyFinish" style="text-decoration:none;">随手赚完成情况统计</a></li>
                    </ul>

                </div>

            <div class="action_search">

                <input type="text" id="searcharea" placeholder="请输入任务名称" style="width:140px;height: 22px;line-height: 22px;"/>

<!--                 <input id="startTime"  name="startTime"  class=" laydate-icon"   placeholder="起始时间"/>
                至
                <input id="endTime"  name="endTime" placeholder="终止时间"  class=" laydate-icon" /> -->

                <span class="tabwidth" id="seach">搜索</span>
                <span class="tabwidth" id="empty">清空</span>
                <span class="tabwidth" id="export"><a href="/wisdom/index.php/Taskadmin/Salesreport/exportWideFinish" style="text-decoration:none;color:white;">导出</a></span>
                <input type="hidden" id="sTime" name="sTime" value="">
                <input type="hidden" id="eTime" name="eTime" value="">
            </div>

            <div class="list">
                <ul>
                    <li style='width:25%;'>任务名称</li>
                    <li style='width:15%;'>总份数</li>
                    <li style='width:20%;'>单份金币</li>
                    <li style='width:15%;'>认领数量</li>
                    <li style='width:10%;'>完成数量</li>
                    <li style='width:15%;'>应付金币 </li>
                </ul>
                <div class='listinfo'>
                        <ul>
                            <li style='width:100%;'>无相应数据</li>
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
    function getBeforeDate(n){
        var n = n;
        var d = new Date();
        var year = d.getFullYear();
        var mon=d.getMonth()+1;
        var day=d.getDate();
        if(day <= n){
                if(mon>1) {
                   mon=mon-1;
                }
               else {
                 year = year-1;
                 mon = 12;
                 }
               }
              d.setDate(d.getDate()-n);
              year = d.getFullYear();
              mon=d.getMonth()+1;
              day=d.getDate();
         s = year+"-"+(mon<10?('0'+mon):mon)+"-"+(day<10?('0'+day):day);
         return s;
    }

    // var start = {
    //     elem: '#startTime',
    //     format: 'YYYY-MM-DD',
    //     max: laydate.now(), //最大日期
    //     choose: function(datas){
    //          end.min = datas; //开始日选好后，重置结束日的最小日期
    //          end.start = datas //将结束日的初始值设定为开始日
    //     }
    // };
    // var end = {
    //     elem: '#endTime',
    //     format: 'YYYY-MM-DD',
    //     max: laydate.now(),//最大日期
    // };
    // laydate(start);
    // laydate(end);

    // $("#startTime").val(getBeforeDate(7));
    // $("#endTime").val(getBeforeDate(0));

    plist_widelyFinish($("#searcharea").val());

    $("#empty").click(function(){
         $("#searcharea").val("");
         // $("#startTime").val("");
         // $("#endTime").val("");
    });

    $("#seach").click(function(){
        // var  startTime=$("#startTime").val();
        // var  endTime=$("#endTime").val();


        // if(startTime==""||endTime==""){
        //     layer.msg("请选择查询时间",{icon:8});
        //    return false;
        // }
        // if(startTime>endTime){
        //     layer.msg("起始时间不能超过终止时间",{icon:8});
        //    return false;
        // }
        plist_widelyFinish($("#searcharea").val());
    });

    </script>
</html>