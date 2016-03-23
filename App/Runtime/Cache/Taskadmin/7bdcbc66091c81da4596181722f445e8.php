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
        <li onclick="location.href = APP+'/Taskadmin/Review/index?access=200'"><span class="icon-group"></span>&nbsp;&nbsp;&nbsp;&nbsp;任务审核</li>
        <li onclick="location.href = APP+'/Taskadmin/Sales/index?access=300'"><span class="icon-group"></span>&nbsp;&nbsp;&nbsp;&nbsp;业务员管理</li>
        <li onclick="location.href = APP+'/Taskadmin/Company/index?access=400'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;企业管理</li>
        <li onclick="location.href = APP+'/Taskadmin/Ad/index?access=500'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;活动与广告</li>
        <li onclick="location.href = APP+'/Taskadmin/Withdraw/index?access=600'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;提现管理</li>
        <li onclick="location.href = APP+'/Taskadmin/Salesreport/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;报表中心</li>
        <li onclick="location.href = APP+'/Taskadmin/DealerPro/index?access=800'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;招商进度管理</li>
        <li onclick="location.href = APP+'/Taskadmin/Shop/index?access=900'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;产品列表管理</li>
        <li onclick="location.href = APP+'/Taskadmin/ShopRecord/index?access=1000'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;消费记录管理</li>
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
                        <li value="1" class='selected' id="messages"><a href="/wisdom/index.php/Taskadmin/Salesreport/index" style="text-decoration:none;">活跃度报表</a></li>
                        <li value="2" class='' style="width:200px;"><a href="/wisdom/index.php/Taskadmin/Salesreport/shareNum" style="text-decoration:none;">推广赚日金币总数</a></li>
                        <li value="3" class='' style="width:200px;"><a href="/wisdom/index.php/Taskadmin/Salesreport/widelyShareNum" style="text-decoration:none;">随手赚日金币总数</a></li>
                        <li value="4" class='' style="width:200px;"><a href="/wisdom/index.php/Taskadmin/Salesreport/allTaskShare" style="text-decoration:none;">全部任务日分享数</a></li>
                        <li value="5" class='' style="width:200px;"><a href="/wisdom/index.php/Taskadmin/Salesreport/widelyFinish" style="text-decoration:none;">随手赚完成情况统计</a></li>
                    </ul>
                    <div class="action_chart">
                        <input id="startTime"  name="startTime"  class=" laydate-icon"   placeholder="起始时间"/>
                        至
                        <input id="endTime"  name="endTime" placeholder="终止时间"  class=" laydate-icon" />

                        <div class="tabwidth" id="empty">清空</div>
                        <div class="tabwidth" id="seach">搜索</div>
                        <input type="hidden" id="sTime" name="sTime" value="">
                        <input type="hidden" id="eTime" name="eTime" value="">
                    </div>


                </div>

                <div class="chartlist">
                    <div class="taskchart" style="height: 460px;">
                        <div class="taskchart_b" style="height: 460px;">
                            <div class="taskhead"><span style="margin-left:20px;">用户数</span></div>
                            <div class="tchart" id="A1">
                                <canvas id="myChart"  style="width: 100%;height: 400px;"></canvas>
                            </div>
                        </div>

                        <div class="taskchart_b" style="height: 460px;">
                            <div class="taskhead"><span style="margin-left:20px;">实名认证数</span></div>
                            <div class="tchart" id="A2">
                                <canvas id="myCertifiedChart"  style="width: 100%;height: 400px;"></canvas>
                            </div>
                        </div>

                        <div class="taskchart_b" style="height: 460px;">
                            <div class="taskhead"><span style="margin-left:20px;">登录数</span></div>
                            <div class="tchart" id="A3">
                                <canvas id="myLoginChart"  style="width: 100%;height: 400px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="taskchart">
                        <div class="taskchart_b">
                            <div class="taskhead"><span style="margin-left:20px;">任务数</span></div>
                            <div class="tasktab">
                                <ul>
                                    <li onclick="checkTask(0);" class="tabli_li"><div class="tasktitle tabcolor_0">全部</div></li>
                                    <li onclick="checkTask(1);" class="tabli_li"><div class="tasktitle tabcolor_1">推广赚</div></li>
                                    <li onclick="checkTask(2);" class="tabli_li"><div class="tasktitle tabcolor_2">随手赚</div></li>
                                    <li onclick="checkTask(3);" class="tabli_li"><div class="tasktitle tabcolor_3">招商赚</div></li>
                                </ul>
                            </div>
                            <div class="tchart" id="A4">
                                <canvas id="myAllTaskChart"  style="width: 100%;height: 400px;"></canvas>
                            </div>
                        </div>

                        <div class="taskchart_b">
                            <div class="taskhead"><span style="margin-left:20px;">日任务接单数</span></div>
                            <div class="tasktab">
                                <ul>
                                    <li onclick="checkReceiveTask(0);" class="tabli_li"><div class="tasktitle tabcolor_0">全部</div></li>
                                    <li onclick="checkReceiveTask(1);" class="tabli_li"><div class="tasktitle tabcolor_1">推广赚</div></li>
                                    <li onclick="checkReceiveTask(2);" class="tabli_li"><div class="tasktitle tabcolor_2">随手赚</div></li>
                                    <li onclick="checkReceiveTask(3);" class="tabli_li"><div class="tasktitle tabcolor_3">招商赚</div></li>
                                </ul>
                            </div>
                            <div class="tchart" id="A5">
                                <canvas id="myAllTaskReceiveChart" style="width: 100%;height: 400px;"></canvas>
                            </div>
                        </div>

                        <div class="taskchart_b">
                            <div class="taskhead"><span style="margin-left:20px;">日任务完成单数</span></div>
                            <div class="tasktab">
                                <ul>
                                    <li onclick="checkEndTask(0);" class="tabli_li"><div class="tasktitle tabcolor_0">全部</div></li>
                                    <li onclick="checkEndTask(1);" class="tabli_li"><div class="tasktitle tabcolor_1">推广赚</div></li>
                                    <li onclick="checkEndTask(2);" class="tabli_li"><div class="tasktitle tabcolor_2">随手赚</div></li>
                                    <li onclick="checkEndTask(3);" class="tabli_li"><div class="tasktitle tabcolor_3">招商赚</div></li>
                                </ul>
                            </div>
                            <div class="tchart" id="A6">
                                <canvas id="myAllTaskEndChart" style="width: 100%;height: 400px;"></canvas>
                            </div>
                        </div>
                    </div>
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

    <script src="http://s11.cnzz.com/z_stat.php?id=1256375228&web_id=1256375228" language="JavaScript"></script>
    <script type="text/javascript" src="/wisdom/Public/static/chartJs/Chart.js"></script>
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

    var rn;
    var start = {
        elem: '#startTime',
        format: 'YYYY-MM-DD',
        max: laydate.now(), //最大日期
        choose: function(datas){
             end.min = datas; //开始日选好后，重置结束日的最小日期
             end.start = datas //将结束日的初始值设定为开始日
        }
    };
    var end = {
        elem: '#endTime',
        format: 'YYYY-MM-DD',
        max: laydate.now(),//最大日期
    };
    laydate(start);
    laydate(end);

    var loadi = layer.load(0);
    $("#startTime").val(getBeforeDate(7));
    $("#endTime").val(getBeforeDate(0));
    var key1= new Array();
    var value1= new Array();

    var key2= new Array();
    var value2= new Array();

    var key3= new Array();
    var value3= new Array();

    var key4= new Array();
    var value4= new Array();

    var key5= new Array();
    var value5= new Array();

    var key6= new Array();
    var value6= new Array();
    $.post(APP+"/Api/Web/liveness",
            "startTime="+$("#startTime").val()+"&endTime="+$("#endTime").val(),
            function(data){
                layer.close(loadi);
                var userCount = data.userCount;
                var certifiedCount = data.certifiedCount;
                var loginResult = data.loginResult;
                var allTaskResult = data.taskResult;
                var allTaskReceiveResult = data.allTaskReceiveResult;
                var allTaskEndResult = data.allTaskEndResult;

                for (var i = 0; i < userCount.length; i++) {

                    key1[i] = userCount[i][0]["time"];
                    value1[i] = userCount[i][0]["total"];

                };

                var data = {
                    labels : key1,
                    datasets : [
                        {
                            fillColor : "rgba(0,134,139,0.5)",
                            strokeColor : "rgba(0,134,139,1)",
                            pointColor : "rgba(0,134,139,1)",
                            pointStrokeColor : "#fff",
                            data : value1
                        }
                    ]
                }

                var ctx = document.getElementById("myChart").getContext("2d");
                new Chart(ctx).Line(data);

                for (var j = 0; j < certifiedCount.length; j++) {

                    key2[j] = certifiedCount[j][0]["time"];
                    value2[j] = certifiedCount[j][0]["total"];

                };

                var data1 = {
                    labels : key2,
                    datasets : [
                        {
                            fillColor : "rgba(127,255,212,0.5)",
                            strokeColor : "rgba(127,255,212,1)",
                            pointColor : "rgba(127,255,212,1)",
                            pointStrokeColor : "#fff",
                            data : value2
                        }
                    ]
                }

                var ctx = document.getElementById("myCertifiedChart").getContext("2d");
                var myNewCertifiedChart = new Chart(ctx).PolarArea(data1);
                new Chart(ctx).Line(data1,"Line");

                for (var k = 0; k < loginResult.length; k++) {

                    key3[k] = loginResult[k][0]["time"];
                    value3[k] = loginResult[k][0]["total"];
                };

                var data2 = {
                    labels : key3,
                    datasets : [
                        {
                            fillColor : "rgba(123,104,238,0.5)",
                            strokeColor : "rgba(123,104,238,1)",
                            pointColor : "rgba(123,104,238,1)",
                            pointStrokeColor : "#fff",
                            data : value3
                        }
                    ]
                }

                var ctx = document.getElementById("myLoginChart").getContext("2d");
                var myNewLoginChart = new Chart(ctx).PolarArea(data2);
                new Chart(ctx).Line(data2,"Line");

                $("#AllTask").show();

                for (var l = 0; l < allTaskResult.length; l++) {

                    key4[l] = allTaskResult[l][0]["time"];
                    value4[l] = allTaskResult[l][0]["total"];
                };

                var data3 = {
                    labels : key4,
                    datasets : [
                        {
                            fillColor : "rgba(238,130,238,0.5)",
                            strokeColor : "rgba(238,130,238,1)",
                            pointColor : "rgba(238,130,238,1)",
                            pointStrokeColor : "#fff",
                            data : value4
                        }
                    ]
                }

                //Get the context of the canvas element we want to select
                var ctx = document.getElementById("myAllTaskChart").getContext("2d");
                var myNewLoginChart = new Chart(ctx).PolarArea(data3);
                new Chart(ctx).Line(data3,"Line");

                $("#AllTaskReceive").show();
                for (var o = 0; o < allTaskReceiveResult.length; o++) {

                    key5[o] = allTaskReceiveResult[o]["time"];
                    value5[o] = allTaskReceiveResult[o]["sum"];
                };

                var data6 = {
                    labels : key5,
                    datasets : [
                        {
                            fillColor : "rgba(30,144,255,0.5)",
                            strokeColor : "rgba(30,144,255,1)",
                            pointColor : "rgba(30,144,255,1)",
                            pointStrokeColor : "#fff",
                            data : value5
                        }
                    ]
                }

                //Get the context of the canvas element we want to select
                var ctx = document.getElementById("myAllTaskReceiveChart").getContext("2d");

                var myNewLoginChart = new Chart(ctx).PolarArea(data6);
                new Chart(ctx).Line(data6,"Line");

                $("#AllTaskEnd").show();
                for (var q = 0; q < allTaskEndResult.length; q++) {

                    key6[q] = allTaskEndResult[q]["time"];
                    value6[q] = allTaskEndResult[q]["sum"];
                };

                var data6 = {
                    labels : key6,
                    datasets : [
                        {
                            fillColor : "rgba(151,187,205,0.5)",
                            strokeColor : "rgba(151,187,205,1)",
                            pointColor : "rgba(151,187,205,1)",
                            pointStrokeColor : "#fff",
                            data : value6
                        }
                    ]
                }

                //Get the context of the canvas element we want to select
                var ctx = document.getElementById("myAllTaskEndChart").getContext("2d");
                var myNewLoginChart = new Chart(ctx).PolarArea(data6);
                new Chart(ctx).Line(data6,"Line");
    },"json"); 


    $("#empty").click(function(){
         $("#status").val("0");
         $("#startTime").val("");
         $("#endTime").val("");
    });

    $("#seach").click(function(){
        var loadi = layer.load(0);
        rn = parseInt(Math.random()*1000);
        $("#A1").empty();
        $("#A1").append("<canvas id='myChart"+rn+"' style='width: 100%;height: 400px;'></canvas>");

        $("#A2").empty();
        $("#A2").append("<canvas id='myCertifiedChart"+rn+"' style='width: 100%;height: 400px;'></canvas>");

        $("#A3").empty();
        $("#A3").append("<canvas id='myLoginChart"+rn+"' style='width: 100%;height: 400px;'></canvas>");

        $("#A4").empty();
        $("#A4").append("<canvas id='myAllTaskChart"+rn+"' style='width: 100%;height: 400px;'></canvas>");

        $("#A5").empty();
        $("#A5").append("<canvas id='myAllTaskReceiveChart"+rn+"' style='width: 100%;height: 400px;'></canvas>");

        $("#A6").empty();
        $("#A6").append("<canvas id='myAllTaskEndChart"+rn+"' style='width: 100%;height: 400px;'></canvas>");


        var  startTime=$("#startTime").val();
        var  endTime=$("#endTime").val();


        if(startTime==""||endTime==""){
            layer.msg("请选择查询时间",{icon:8});
           return false;
        }
        if(startTime>endTime){
            layer.msg("起始时间不能超过终止时间",{icon:8});
           return false;
        }

        var key= new Array();
        var value= new Array();

        var certifiedKey= new Array();
        var certifiedValue= new Array();

        var loginKey= new Array();
        var loginValue= new Array();

        var allTaskKey= new Array();
        var allTaskValue= new Array();

        var allTaskReceiveKey= new Array();
        var allTaskReceiveValue= new Array();

        var allTaskEndKey= new Array();
        var allTaskEndValue= new Array();

        $.post(APP+"/Api/Web/liveness",
        "startTime="+startTime+"&endTime="+endTime,
        function(data){
            layer.close(loadi);
console.log(data);
            //True
            // var userCount = data.userCount;
            // var certifiedCount = data.certifiedCount;

            //False
            var userCount = data.userCount;
            var certifiedCount = data.certifiedCount;

            var loginResult = data.loginResult;
            var allTaskResult = data.taskResult;
            var allTaskReceiveResult = data.allTaskReceiveResult;
            var allTaskEndResult = data.allTaskEndResult;

            for (var i = 0; i < userCount.length; i++) {

                key[i] = userCount[i][0]["time"];
                value[i] = userCount[i][0]["total"];

            };

            var data = {
                labels : key,
                datasets : [
                    {
                        fillColor : "rgba(0,134,139,0.5)",
                        strokeColor : "rgba(0,134,139,1)",
                        pointColor : "rgba(0,134,139,1)",
                        pointStrokeColor : "#fff",
                        data : value
                    }
                ]
            }

            //Get the context of the canvas element we want to select
            var ctx = document.getElementById("myChart"+rn).getContext("2d");
            //new Chart(ctx).clearChart();
            new Chart(ctx).Line(data);
            //new Chart(ctx).Line(data,"Line");

            for (var j = 0; j < certifiedCount.length; j++) {

                certifiedKey[j] = certifiedCount[j][0]["time"];
                certifiedValue[j] = certifiedCount[j][0]["total"];

            };

            var data1 = {
                labels : certifiedKey,
                datasets : [
                    {
                        fillColor : "rgba(127,255,212,0.5)",
                        strokeColor : "rgba(127,255,212,1)",
                        pointColor : "rgba(127,255,212,1)",
                        pointStrokeColor : "#fff",
                        data : certifiedValue
                    }
                ]
            }

            //Get the context of the canvas element we want to select
            var ctx = document.getElementById("myCertifiedChart"+rn).getContext("2d");
            var myNewCertifiedChart = new Chart(ctx).PolarArea(data1);
            new Chart(ctx).Line(data1,"Line");

            for (var k = 0; k < loginResult.length; k++) {

                loginKey[k] = loginResult[k][0]["time"];
                loginValue[k] = loginResult[k][0]["total"];
            };

            var data2 = {
                labels : loginKey,
                datasets : [
                    {
                        fillColor : "rgba(123,104,238,0.5)",
                        strokeColor : "rgba(123,104,238,1)",
                        pointColor : "rgba(123,104,238,1)",
                        pointStrokeColor : "#fff",
                        data : loginValue
                    }
                ]
            }

            //Get the context of the canvas element we want to select
            var ctx = document.getElementById("myLoginChart"+rn).getContext("2d");
            var myNewLoginChart = new Chart(ctx).PolarArea(data2);
            new Chart(ctx).Line(data2,"Line");

            $("#AllTask").show();

            for (var l = 0; l < allTaskResult.length; l++) {

                allTaskKey[l] = allTaskResult[l][0]["time"];
                allTaskValue[l] = allTaskResult[l][0]["total"];
            };

            var data3 = {
                labels : allTaskKey,
                datasets : [
                    {
                        fillColor : "rgba(238,130,238,0.5)",
                        strokeColor : "rgba(238,130,238,1)",
                        pointColor : "rgba(238,130,238,1)",
                        pointStrokeColor : "#fff",
                        data : allTaskValue
                    }
                ]
            }

            //Get the context of the canvas element we want to select
            var ctx = document.getElementById("myAllTaskChart"+rn).getContext("2d");
            var myNewLoginChart = new Chart(ctx).PolarArea(data3);
            new Chart(ctx).Line(data3,"Line");

            $("#AllTaskReceive").show();
            for (var o = 0; o < allTaskReceiveResult.length; o++) {

                allTaskReceiveKey[o] = allTaskReceiveResult[o]["time"];
                allTaskReceiveValue[o] = allTaskReceiveResult[o]["sum"];
            };

            var data6 = {
                labels : allTaskReceiveKey,
                datasets : [
                    {
                        fillColor : "rgba(30,144,255,0.5)",
                        strokeColor : "rgba(30,144,255,1)",
                        pointColor : "rgba(30,144,255,1)",
                        pointStrokeColor : "#fff",
                        data : allTaskReceiveValue
                    }
                ]
            }

            //Get the context of the canvas element we want to select
            var ctx = document.getElementById("myAllTaskReceiveChart"+rn).getContext("2d");

            var myNewLoginChart = new Chart(ctx).PolarArea(data6);
            new Chart(ctx).Line(data6,"Line");

            $("#AllTaskEnd").show();
            for (var q = 0; q < allTaskEndResult.length; q++) {

                allTaskEndKey[q] = allTaskEndResult[q]["time"];
                allTaskEndValue[q] = allTaskEndResult[q]["sum"];
            };

            var data6 = {
                labels : allTaskEndKey,
                datasets : [
                    {
                        fillColor : "rgba(151,187,205,0.5)",
                        strokeColor : "rgba(151,187,205,1)",
                        pointColor : "rgba(151,187,205,1)",
                        pointStrokeColor : "#fff",
                        data : allTaskEndValue
                    }
                ]
            }

            //Get the context of the canvas element we want to select
            var ctx = document.getElementById("myAllTaskEndChart"+rn).getContext("2d");
            var myNewLoginChart = new Chart(ctx).PolarArea(data6);
            new Chart(ctx).Line(data6,"Line");

        },"json");    

    });

    //任务折线图
    function checkTask(type){
        rn = parseInt(Math.random()*1000);
        $("#A4").empty();
        $("#A4").append("<canvas id='myAllTaskChart"+rn+"' style='width: 100%;height: 400px;'></canvas>");

        var loadi = layer.load(0);
        var  startTime=$("#startTime").val();
        var  endTime=$("#endTime").val();
        var sumKey= new Array();
        var sumValue= new Array();

        $.post(APP+"/Api/web/checkTask",
            "startTime="+startTime+"&endTime="+endTime+"&type="+type,
            function(data){
                layer.close(loadi);
                var totalSum = data.totalSum;

                for (var m = 0; m < totalSum.length; m++) {

                    sumKey[m] = totalSum[m][0]["time"];
                    sumValue[m] = totalSum[m][0]["total"];
                };

                var data4 = {
                    labels : sumKey,
                    datasets : [
                        {
                            fillColor : "rgba(238,130,238,0.5)",
                            strokeColor : "rgba(238,130,238,1)",
                            pointColor : "rgba(238,130,238,1)",
                            pointStrokeColor : "#fff",
                            data : sumValue
                        }
                    ]
                }

                //Get the context of the canvas element we want to select
                var ctx = document.getElementById("myAllTaskChart"+rn).getContext("2d");
                var myNewLoginChart = new Chart(ctx).PolarArea(data4);
                new Chart(ctx).Line(data4,"Line");
        },"json");
    }

    //任务接单数折线图
    function checkReceiveTask(type){
        rn = parseInt(Math.random()*1000);
        $("#A5").empty();
        $("#A5").append("<canvas id='myAllTaskReceiveChart"+rn+"' style='width: 100%;height: 400px;'></canvas>");
        var loadi = layer.load(0);
        var  startTime=$("#startTime").val();
        var  endTime=$("#endTime").val();
        var sumReceiveKey= new Array();
        var sumReceiveValue= new Array();

        $.post(APP+"/Api/web/checkReceiveTask",
            "startTime="+startTime+"&endTime="+endTime+"&type="+type,
            function(data){
                layer.close(loadi);
                var receiveResult = data.receiveResult;

                for (var m = 0; m < receiveResult.length; m++) {

                    sumReceiveKey[m] = receiveResult[m]["time"];
                    sumReceiveValue[m] = receiveResult[m]["sum"];
                };
   

                var data5 = {
                    labels : sumReceiveKey,
                    datasets : [
                        {
                            fillColor : "rgba(30,144,255,0.5)",
                            strokeColor : "rgba(30,144,255,1)",
                            pointColor : "rgba(30,144,255,1)",
                            pointStrokeColor : "#fff",
                            data : sumReceiveValue
                        }
                    ]
                }

                //Get the context of the canvas element we want to select
                var ctx = document.getElementById("myAllTaskReceiveChart"+rn).getContext("2d");
                var myNewLoginChart = new Chart(ctx).PolarArea(data5);
                new Chart(ctx).Line(data5,"Line");

        },"json");
    }

    //任务完成数折线图
    function checkEndTask(type){
        rn = parseInt(Math.random()*1000);
        $("#A6").empty();
        $("#A6").append("<canvas id='myAllTaskEndChart"+rn+"' style='width: 100%;height: 400px;'></canvas>");

        var loadi = layer.load(0);
        var  startTime=$("#startTime").val();
        var  endTime=$("#endTime").val();
        var sumEndKey= new Array();
        var sumEndValue= new Array();

        $.post(APP+"/Api/web/checkEndTask",
            "startTime="+startTime+"&endTime="+endTime+"&type="+type,
            function(data){
                layer.close(loadi);
                var EndResult = data.EndResult;

                for (var n = 0; n < EndResult.length; n++) {

                    sumEndKey[n] = EndResult[n]["time"];
                    sumEndValue[n] = EndResult[n]["sum"];
                };


                var data7 = {
                    labels : sumEndKey,
                    datasets : [
                        {
                            fillColor : "rgba(151,187,205,0.5)",
                            strokeColor : "rgba(151,187,205,1)",
                            pointColor : "rgba(151,187,205,1)",
                            pointStrokeColor : "#fff",
                            data : sumEndValue
                        }
                    ]
                }

                //Get the context of the canvas element we want to select
                var ctx = document.getElementById("myAllTaskEndChart"+rn).getContext("2d");
                var myNewLoginChart = new Chart(ctx).PolarArea(data7);
                new Chart(ctx).Line(data7,"Line");
        },"json");
    }

    </script>
</html>