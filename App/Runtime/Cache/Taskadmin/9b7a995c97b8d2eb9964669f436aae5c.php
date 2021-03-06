<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>业务员报表</title>
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
            <div class="adminRight">
                <div class="righttop"></div>
                <div class="breadlist">首页 / 业务员报表</div>
                <div class="tab">
                    <div class='selecttab'>
                        <div class='tabwidth'>
                        注册时间：<input id="startTime"  name="startTime"  class=" laydate-icon"   placeholder="起始时间"/>
                                    至
                                 <input id="endTime"  name="endTime" placeholder="终止时间"  class=" laydate-icon" />
                        </div>
                        <div class='tabwidth'>状态：<select  name="status" id="status">
                                        <option  value="0" selected>请选择</option>
                                        <option  value="1">正常</option>
                                        <option  value="2">停用</option>
                                      </select></div>  
                        <div class='tabwidth'>实名认证：<select  name="realauth" id="realauth">
                                        <option  value="0" selected>请选择</option>
                                        <option  value="1">是</option>
                                        <option  value="2">否</option>
                                      </select>
                        </div>
                        <div class='tabwidth'>所在行业:
                               <input type="text" id='industry'>
                               <div class="fa fa-search fa-lg" style='color:#ccc'></div>
<!--                               <div style='display:none'>dbfldsjj</div>-->
                        </div>
                     
                        <div class='tabwidth'>所属区域：<input type='text' id='area' />
                            <div class="fa fa-search fa-lg" style='color:#ccc'></div>
                         </div>
                        <div>
                        <div class='tabwidth' id='seach'><span>搜素</span></div>
                        <div class='tabwidth' id='empty'><span>清空</span></div>
                        </div>
                    </div>  
                </div>
                    
                </div>

                <div class="list">
                    <ul>    
                            <li style='width:15%;'>序号</li>
                            <li style='width:10%;'>手机号</li>
                            <li style='width:15%;'>昵称(实名)</li>
                            <li style='width:10%;'>注册时间</li>
                            <li style='width:10%;'>是否实名</li>
                            <li style='width:15%;'>所属行业</li>
                            <li style='width:15%;'>所属区域</li>
                            <li style='width:10%;'>状态</li>
                    </ul>
                    <div class='listinfo'>
                        <ul>
                            <li style='width:100%;'>请先选择任务</li>
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
    $(function(){      
        //获取列表信息
        //plist_AllCompany();
    });
       var start = {
            elem: '#startTime',
            format: 'YYYY-MM-DD',
            max: '2099-06-16', //最大日期
        };
       var end = {
            elem: '#endTime',
            format: 'YYYY-MM-DD',
        };
        laydate(start);
        laydate(end);
        $("#empty").click(function(){
             $("#area").val("");
             $("#industry").val("");
             $("#status").val("0");
             $("#realauth").val("0");
             $("#startTime").val("");
             $("#endTime").val("");
        });
        $("#seach").click(function(){
            var  startTime=$("#startTime").val();
            var  endTime=$("#endTime").val();
            var  status=$("#status").val();
            var  industry=$("#industry").val();
            var  area=$("#area").val();
            var  realauth=$("#realauth").val();
            if(startTime==""||endTime==""){
                layer.msg("请选择注册时间",{icon:8});
               // return false;
            }
            if(startTime>endTime){
                layer.msg("起始时间不能超过终止时间",{icon:8});
               // return false;
            }
            if(status==0){
                layer.msg("请选择状态",{icon:8});
               // return false;
            }
            if(industry==0||industry==""){
                layer.msg("请选择所在行业",{icon:8});
                //return false;
            }
            if(area==0||area==""){
                layer.msg("请选择所在区域",{icon:8});
                //return false;
            }
            if(realauth==0){
                layer.msg("请选择实名认证",{icon:8});
                //return false;
            }
            
            
        });
    </script>
</html>