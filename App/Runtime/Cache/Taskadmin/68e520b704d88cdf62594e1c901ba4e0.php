<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>合同报表</title>
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
        <li onclick="location.href = APP+'/Taskadmin/Review/index'"><span class="icon-group"></span>&nbsp;&nbsp;&nbsp;&nbsp;任务审核</li>
        <li onclick="location.href = APP+'/Taskadmin/Sales/index'"><span class="icon-group"></span>&nbsp;&nbsp;&nbsp;&nbsp;业务员管理</li>
        <li onclick="location.href = APP+'/Taskadmin/Company/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;企业管理</li>
        <li onclick="location.href = APP+'/Taskadmin/Ad/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;活动与广告</li>
        <li onclick="location.href = APP+'/Taskadmin/Withdraw/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;提现管理</li>
        <li onclick="location.href = APP+'/Taskadmin/Salesreport/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;报表中心</li>
        <li onclick="location.href = APP+'/Taskadmin/DealerPro/index'"><span class="icon-globe"></span>&nbsp;&nbsp;&nbsp;&nbsp;招商进度管理</li>
    </ul>
</div>
            <div class="adminRight" >
                <div class="righttop"></div>
                <div class="breadlist">首页 / 合同报表</div>

                <div class="tabli">
                    <ul id="tabli_Ad" style="">
                        <li value="1"  id="messages" ><a href="/wisdom/index.php/Taskadmin/Salesreport/index" style="text-decoration:none;font-size:16px;">活跃度报表</a></li>
                        <li value="3" class='selected' id="activities" ><a href="/wisdom/index.php/Taskadmin/Salesreport/contract" style="text-decoration:none;font-size:16px;">合同报表</a></li>
                    </ul>
                </div>

                <div class="tab">
                    <div class='selecttab'>

                        <div class='tabwidth'>
                        查询时间：<input id="startTime"  name="startTime"  class=" laydate-icon"   placeholder="起始时间"/>
                                    至
                                 <input id="endTime"  name="endTime" placeholder="终止时间"  class=" laydate-icon" />
                        </div>

                        <div class='tabwidth'>项目类型：
<!--                             <select  name="status" id="status" style="width:200px;">
                                <option  value="0" selected>请选择</option>
                                <option  value="1">用户情况</option>
                                <option  value="2">任务情况</option>
                                <option  value="3">日任务接单数情况</option>
                                <option  value="4">日任务完成单数情况</option>
                            </select> -->
                        </div>  

                        <div>
                            <div class='tabwidth' id='seach'><span>搜素</span></div>
                            <div class='tabwidth' id='empty'><span>清空</span></div>
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

    <script>
    $(function(){      
        //获取列表信息
        //plist_AllCompany();
    });
       var start = {
            elem: '#startTime',
            format: 'YYYY-MM-DD',
            max: '2099-06-16', //最大日期
            choose: function(datas){
                 end.min = datas; //开始日选好后，重置结束日的最小日期
                 end.start = datas //将结束日的初始值设定为开始日
            }
        };
       var end = {
            elem: '#endTime',
            format: 'YYYY-MM-DD',
        };
        laydate(start);
        laydate(end);

        $("#empty").click(function(){
             $("#status").val("0");
             $("#startTime").val("");
             $("#endTime").val("");
        });

        $("#seach").click(function(){
            var  startTime=$("#startTime").val();
            var  endTime=$("#endTime").val();
            var  status=$("#status").val();
            if(startTime==""||endTime==""){
                layer.msg("请选择查询时间",{icon:8});
               return false;
            }
            if(startTime>endTime){
                layer.msg("起始时间不能超过终止时间",{icon:8});
               return false;
            }
            if(status==0){
                layer.msg("请选择项目",{icon:8});
               return false;
            }

            // $.     
        });

    </script>
</html>