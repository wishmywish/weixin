<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>统计报表</title>
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
                <div class="breadlist">首页 /  统计报表</div>
                <div class="tabli">
                    <ul id="tabli">
                        <li value="1" class='<?php if(($classtype) == "1"): ?>selected<?php endif; ?>' id="messages" ><a href="/wisdom/index.php/Taskadmin/Report/index" style="text-decoration:none;color:black;">统计报表</a></li>
                        <li value="2" class='<?php if(($classtype) == "2"): ?>selected<?php endif; ?>'><a href="<?php echo U('Taskadmin/Sales/index1');?>" style="color:black;text-decoration: none;">全部业务员</a><span id="all"></span></li>
                        <li value="3" class='<?php if(($classtype) == "3"): ?>selected<?php endif; ?>'><a href="<?php echo U('Taskadmin/Sales/realName1');?>" style="color:black;text-decoration: none;">已实名认证</a><span id="name"></span></li>
                        <li value="4" class='<?php if(($classtype) == "4"): ?>selected<?php endif; ?>'><a href="<?php echo U('Taskadmin/Sales/cardBind');?>" style="color:black;text-decoration: none;">已银行卡绑定</a><span id="card"></span></li>
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
                    <div class="taskchart" style="height: 920px;">
                        <div class="taskchart_b" style="width: 100%;height: 460px;">
                            <div class="taskhead"><span style="margin-left:20px;">用户数</span></div>
                            <div class="tchart" id="A1">
                                <canvas id="myChart"  style="width: 100%;height: 400px;"></canvas>
                            </div>
                        </div>

                        <div class="taskchart_b" style="width: 100%;height: 460px;">
                            <div class="taskhead"><span style="margin-left:20px;">实名认证数</span></div>
                            <div class="tchart" id="A2">
                                <canvas id="myCertifiedChart"  style="width: 100%;height: 400px;"></canvas>
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
    $.post(APP+"/Api/Web/reportDetail",
            "startTime="+$("#startTime").val()+"&endTime="+$("#endTime").val(),
            function(data){
                layer.close(loadi);
                var userCount = data.userCount;
                var certifiedCount = data.certifiedCount;

                for (var i = 0; i < userCount.length; i++) {

                    key1[i] = userCount[i]["regTime"];
                    value1[i] = userCount[i]["allCount"];

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

                    key2[j] = certifiedCount[j]["regTime"];
                    value2[j] = certifiedCount[j]["allCount"];

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

        $.post(APP+"/Api/Web/reportDetail",
        "startTime="+startTime+"&endTime="+endTime,
        function(data){
            layer.close(loadi);
            var userCount = data.userCount;
            var certifiedCount = data.certifiedCount;

            for (var i = 0; i < userCount.length; i++) {

                key[i] = userCount[i]["regTime"];
                value[i] = userCount[i]["allCount"];

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

            var ctx = document.getElementById("myChart"+rn).getContext("2d");
            new Chart(ctx).Line(data);

            for (var j = 0; j < certifiedCount.length; j++) {

                certifiedKey[j] = certifiedCount[j]["regTime"];
                certifiedValue[j] = certifiedCount[j]["allCount"];

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

            var ctx = document.getElementById("myCertifiedChart"+rn).getContext("2d");
            var myNewCertifiedChart = new Chart(ctx).PolarArea(data1);
            new Chart(ctx).Line(data1,"Line");

        },"json");    

    });


    </script>
</html>