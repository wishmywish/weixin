<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>经销商管理</title>
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
table.altrowstable {
    font-family: verdana,arial,sans-serif;
    font-size:11px;
    color:#333333;
    border-width: 1px;
    border-color: #a9c6c9;
    border-collapse: collapse;
}
table.altrowstable th {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #a9c6c9;
}
table.altrowstable td {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #a9c6c9;
}
.oddrowcolor{
    background-color:#d4e3e5;
}
.evenrowcolor{
    background-color:#c3dde0;
}
</style>
<script type="text/javascript">
function altRows(id){
    if(document.getElementsByTagName){  
        
        var table = document.getElementById(id);  
        var rows = table.getElementsByTagName("tr"); 
         
        for(i = 0; i < rows.length; i++){          
            if(i % 2 == 0){
                rows[i].className = "evenrowcolor";
            }else{
                rows[i].className = "oddrowcolor";
            }      
        }
    }
}

window.onload=function(){
    altRows('alternatecolor');
}
</script>
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
    <div class="adminRight">
        <div class="righttop">
    <div class="showright"><span id="user_setting" class="fa fa-user">个人设置</span> <span id="user_out" class="fa fa-sign-out">退出登录</span></div>
</div>
        <div class="breadlist">首页 / 经销商管理</div>
        <div class="tabli">
            <ul id="tabli">
                <li value="0" class=""><a href="/wisdom/index.php/Taskadmin/Dealer/index" style="text-decoration:none;color:black;">经销商列表</a></li>
                <li value="1" class='selected' id="messages" ><a href="/wisdom/index.php/Taskadmin/Dealer/linkReport" style="text-decoration:none;color:black;">联系报表</a></li>
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

        <table class="altrowstable" id="alternatecolor" style="width:100%;height:800px;">
            <tr>
                <th>联系情况</th><th id="total">全部数据占比</th><th id="dealTotal">处理后数据占比</th>
            </tr>
            <tr>
                <td>未联系</td><td id="noContact"></td><td id="dealNoContact"></td>
            </tr>
            <tr>
                <td>已接通</td><td id="contact"></td><td id="dealContact"></td>
            </tr>
            </tr>
            <tr>
                <td>关机</td><td id="shut"></td><td id="dealShut"></td>
            </tr>
            <tr>
                <td>不愿回访</td><td  id="reject11"></td><td id="dealReject"></td>
            </tr>
            <tr>
                <td>空号</td><td id="dead"></td><td id="dealDead"></td>
            </tr>
            <tr>
                <td>没人接</td><td id="noAnswer"></td><td id="dealNoAnswer"></td>
            </tr>
            <tr>
                <td>同事</td><td id="friend"></td><td id="dealFriend"></td>
            </tr>
        </table>
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
    $.post(APP+"/Api/Web/linkReport",
            "startTime="+$("#startTime").val()+"&endTime="+$("#endTime").val(),
            function(data){
                layer.close(loadi);
                $('#total').append("<span style='padding-left:15px;color:blue;'>(总数:"+data.list.total+")</span>");
                $('#dealTotal').append("<span style='padding-left:15px;color:blue;'>(总数:"+data.list.dealTotal+")</span>");

                $('#noContact').html(data.list.noContact+"(总数:"+data.list.noContactNum+")");
                $('#contact').html(data.list.contact+"(总数:"+data.list.contactNum+")");
                if (data.list.contact != '0%') {
                    $('#contact').append("<span style='float:right;color:blue;cursor:pointer;' onclick=dealDetail(1,'"+$("#startTime").val()+"','"+$("#endTime").val()+"')>查看详情</span>");
                };
                $('#shut').html(data.list.shut+"(总数:"+data.list.shutNum+")");
                $('#reject11').html(data.list.reject+"(总数:"+data.list.rejectNum+")");
                $('#dead').html(data.list.dead+"(总数:"+data.list.deadNum+")");
                $('#noAnswer').html(data.list.noAnswer+"(总数:"+data.list.noAnswerNum+")");
                $('#friend').html(data.list.friend+"(总数:"+data.list.friendNum+")");
                $('#dealNoContact').html(data.list.dealNoContact+"(总数:"+data.list.dealNoContactNum+")");
                $('#dealContact').html(data.list.dealContact+"(总数:"+data.list.dealContactNum+")");
                if (data.list.dealContact != '0%') {
                    $('#dealContact').append("<span style='float:right;color:blue;cursor:pointer;' onclick=dealDetail(2,'"+$("#startTime").val()+"','"+$("#endTime").val()+"')>查看详情</span>");
                };
                $('#dealShut').html(data.list.dealShut+"(总数:"+data.list.dealShutNum+")");
                $('#dealReject').html(data.list.dealReject+"(总数:"+data.list.dealRejectNum+")");
                $('#dealDead').html(data.list.dealDead+"(总数:"+data.list.dealDeadNum+")");
                $('#dealNoAnswer').html(data.list.dealNoAnswer+"(总数:"+data.list.dealNoAnswerNum+")");
                $('#dealFriend').html(data.list.dealFriend+"(总数:"+data.list.dealFriendNum+")");
    },"json"); 

    $("#empty").click(function(){
         $("#startTime").val("");
         $("#endTime").val("");
    });

    $("#seach").click(function(){
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

        var loadi = layer.load(0);
        $.post(APP+"/Api/Web/linkReport",
            "startTime="+$("#startTime").val()+"&endTime="+$("#endTime").val(),
            function(data){
                layer.close(loadi);
                $('#total').empty();
                $('#dealTotal').empty();
                $('#total').append("全部数据占比<span style='padding-left:15px;color:blue;'>(总数:"+data.list.total+")</span>");
                $('#dealTotal').append("处理后数据占比<span style='padding-left:15px;color:blue;'>(总数:"+data.list.dealTotal+")</span>");

                $('#noContact').html(data.list.noContact+"(总数:"+data.list.noContactNum+")");
                $('#contact').html(data.list.contact+"(总数:"+data.list.contactNum+")");
                if (data.list.contact != '0%') {
                    $('#contact').append("<span style='float:right;color:blue;cursor:pointer;' onclick=dealDetail(1,'"+$("#startTime").val()+"','"+$("#endTime").val()+"')>查看详情</span>");
                };
                $('#shut').html(data.list.shut+"(总数:"+data.list.shutNum+")");
                $('#reject11').html(data.list.reject+"(总数:"+data.list.rejectNum+")");
                $('#dead').html(data.list.dead+"(总数:"+data.list.deadNum+")");
                $('#noAnswer').html(data.list.noAnswer+"(总数:"+data.list.noAnswerNum+")");
                $('#friend').html(data.list.friend+"(总数:"+data.list.friendNum+")");
                $('#dealNoContact').html(data.list.dealNoContact+"(总数:"+data.list.dealNoContactNum+")");
                $('#dealContact').html(data.list.dealContact+"(总数:"+data.list.dealContactNum+")");
                if (data.list.dealContact != '0%') {
                    $('#dealContact').append("<span style='float:right;color:blue;cursor:pointer;' onclick=dealDetail(2,'"+$("#startTime").val()+"','"+$("#endTime").val()+"')>查看详情</span>");
                };
                $('#dealShut').html(data.list.dealShut+"(总数:"+data.list.dealShutNum+")");
                $('#dealReject').html(data.list.dealReject+"(总数:"+data.list.dealRejectNum+")");
                $('#dealDead').html(data.list.dealDead+"(总数:"+data.list.dealDeadNum+")");
                $('#dealNoAnswer').html(data.list.dealNoAnswer+"(总数:"+data.list.dealNoAnswerNum+")");
                $('#dealFriend').html(data.list.dealFriend+"(总数:"+data.list.dealFriendNum+")");
        },"json");  

    });

</script>
</html>