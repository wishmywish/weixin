<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>智慧运营平台::工作管理</title>
        <style>
            /*列出所有图标*/
            /*菜单红条*/
            .menu_line_red{background:url(/wisdom/Public/Home/Default/images/bg.png) repeat-x -0px -10px;}
            /*菜单蓝条*/
            .menu_line_blue{background:url(/wisdom/Public/Home/Default/images/bg.png) repeat-x -0px -15px;}
        </style>
        <script>
            var ROOT = "/wisdom";//网站根目录地址,例:/根目录
            var APP = "/wisdom/index.php";//当前应用（入口文件）地址,例:/根目录/index.php
            var APP_NAME = "__APP_NAME__";//网站应用根目录,例:/根目录/应用目录
            var IMG = "/wisdom/Public/Home/Default/images";
            var STATIC = "/wisdom/Public/static";
            var UPFILE = "/wisdom/Public/upfile";
            var THEME = "/wisdom/Public/Home/Default";
            var bigMenuIndex = 0; //大类LI下标
            var smallMenuIndex = 0;//小类LI下标
        </script>
        <script src="/wisdom/Public/static/js/jquery.JPlaceholder.js"></script>
        <script type="text/javascript" src="/wisdom/Public/static/jquery-1.11.2.min.js"></script>
        <!--cookie插件-->
        <script type="text/javascript" src="/wisdom/Public/static/cookie.js"></script>

        <script type="text/javascript" src="/wisdom/Public/Home/Default/js/fun.js"></script>
        
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/Home/Default/css/home.css" />
        
        <!--自动补全插件-->
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/css/jquery.bigautocomplete.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/um/themes/default/css/umeditor.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/um/themes/default/css/umeditor.min.css" />
        <script type="text/javascript" src="/wisdom/Public/static/layer/layer.js"></script>

    </head>
    <body>
        <div class="head">
            <div class="head_center">
                <div class="logo"><img style="height: 30px;margin-top: 8px;" src="/wisdom/Public/upfile/logo/logo.png" ></div>
                <div class="company_name"><?PHP echo cookie("companyName")?></div>

                <!--<div class="search">-->
                    <!--<div class='input_input'><input type="text" name="search_text" id="search_text"></div>-->
                    <!--<div class="input_icon"><span class="fa fa-search fa-lg"></span></div>-->
                <!--</div>-->

                <div class="personal_info">
                    <div  style="width:100%;"><div class="pro_img"><img style="height: 35px;" src="/wisdom/Public/Home/Default/images/user2.jpg"></div><div><?php echo empty(cookie("nickName"))?cookie("mobile"):cookie("nickName"); ?><b class="caret"></b></div></div>
                    <div class="personal_info_set">
                       <ul>
<!--                        <li>帮助</li>-->
                       
                        <?php if( !in_array("e1",$access_array) ){ echo "<!--"; } ?><li onclick="location.href = APP+'/Admin/Group/index'">企业设置</li>
                                                                               <?php if( !in_array("e1",$access_array) ){ echo "-->"; } ?></li>
                        <li onclick="location.href = APP+'/Home/Business/index'">返回首页
                        <li id="back_system">退出</li>
                       </ul>
                    </div>
                 
                </div>
<!--                <div class="back_system"  id="back_system">退出</div>-->
            </div>
        </div>
        <script>
            $("#back_system").click(function(){
                var loadi=layer.load(0);
                $.get("<?php echo U('Api/outLogin');?>",function(){
                    Cookie.eraseCookie("bigMenuIndex");
                    Cookie.eraseCookie("smallMenuIndex");
                    layer.close(loadi);
                    layer.msg("成功退出系统",{icon:9})
                    location.href=APP+"/Home/Index/index";
                }); 
            });
            $(".personal_info").mouseover(function(event) {
                $(".personal_info_set").show();
            });
            $(".personal_info").mouseout(function(event){
                $(".personal_info_set").hide();
            });
            


        </script>
<div class="menu">
    <div class="menu_big">
        <div class="menu_big_list">
            <ul id="menu_big_list_button">
                <?php if(is_array($bigclass)): $i = 0; $__LIST__ = $bigclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li value="<?php echo ($vo["f_sys_column_url"]); ?>" id="<?php echo ($vo["f_sys_column_cid"]); ?>" contextmenu="<?php echo ($vo["f_sys_column_urltype"]); ?>"><?php echo ($vo["f_sys_column_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <div class="menu_small">
        <div class="menu_small_list">
            <ul id="menu_small_list_button">
                <?php if(is_array($smallclass)): $i = 0; $__LIST__ = $smallclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><li value="<?php echo ($vos["f_sys_column_url"]); ?>" dir="<?php echo ($vos["f_sys_column_target"]); ?>" id="<?php echo ($vos["f_sys_column_cid"]); ?>" contextmenu="<?php echo ($vos["f_sys_column_urltype"]); ?>"><?php echo ($vos["f_sys_column_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="menu_bg_line">
            <ul id="menu_small_tab_line">
                <?php if(is_array($smallclass)): $i = 0; $__LIST__ = $smallclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><li></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
<!--<div style="width: 100%;height: 2px;clear:both;"></div>-->
<script>
    //默认加载
    $(function(){
        if(Cookie.readCookie('bigMenuIndex')===null){
            Cookie.createCookie('bigMenuIndex',0,1);
            Cookie.createCookie('smallMenuIndex',0,1);
        }
        //alert(Cookie.readCookie('bigMenuIndex'));
        $('#menu_big_list_button li').eq(Cookie.readCookie('bigMenuIndex')).attr('class','selected');
        $('#menu_small_list_button li').eq(Cookie.readCookie('smallMenuIndex')).attr('class','selected');
        $('#menu_small_tab_line li').eq(Cookie.readCookie('smallMenuIndex')).attr('class','menu_tab_bg_line');
    });
    
    $('#menu_small_list_button li').mouseover(function(){
        var ind = parseInt($(this).index());
       
        if(ind!==parseInt(Cookie.readCookie('smallMenuIndex'))){
            $('#menu_small_tab_line li').eq(ind).attr('class','menu_tab_bg_line');
            $('#menu_small_tab_line li').eq(Cookie.readCookie('smallMenuIndex')).removeClass('menu_tab_bg_line');
            
            $('#menu_small_list_button li').eq(ind).attr('class','selected');
            $('#menu_small_list_button li').eq(Cookie.readCookie('smallMenuIndex')).removeClass('selected');
        }
    });
    $('#menu_small_list_button li').mouseout(function(){
        var ind = $(this).index();
        $('#menu_small_tab_line li').eq(ind).removeClass('menu_tab_bg_line');
        $('#menu_small_tab_line li').eq(Cookie.readCookie('smallMenuIndex')).attr('class','menu_tab_bg_line');
        
        $('#menu_small_list_button li').eq(ind).removeClass('selected');
        $('#menu_small_list_button li').eq(Cookie.readCookie('smallMenuIndex')).attr('class','selected');
    });
    
    //点击大类
    $('#menu_big_list_button').on('click','li',function(){
        var url_0 = $(this).attr('value');
        var key = $(this).attr('contextmenu');
        Cookie.createCookie('bigMenuIndex',$(this).index(),1);
        Cookie.createCookie('smallMenuIndex',0,1);
        $('#menu_big_list_button li').removeClass('selected');
        $(this).attr('class','selected');
        if(key==='1'){
            location.href = APP+"/"+url_0;
        }else{
            location.href = url_0;
        }
    });
    
    //点击小类
    $('#menu_small_list_button').on('click','li',function(){
        var url_0 = $(this).attr('value');
        var key = $(this).attr('contextmenu');
        var target_1 = $(this).attr('dir');
        //alert(target_1);
        Cookie.createCookie('smallMenuIndex',$(this).index(),1);
        $('#menu_small_list_button li').removeClass('selected');
        $(this).attr('class','selected');
        if(key==='1'){
            location.href = APP+"/"+url_0;
        }else if(key==='2'){
            if(target_1==="oms"){
                //alert($('#oms').attr('src'));
                //target_1.location.href = url_0;
                $('#oms').attr('src',url_0);
            }else{
                location.href = url_0;
            }
        }
    });

    
</script>
<div class="index">
    <div class="index_left">
        <!--个人信息-->
        <div class="index_left_pro" style="height: 131px;">
            <div class="pro_img">
                <img style="height: 50px;" src="/wisdom/Public/Home/Default/images/user2.jpg">
            </div>
            <div class="pro_info">
                <ul>
                    <li style="line-height: 25px; font-size: 16px; font-weight: bold;padding-bottom: 5px;">
                        <?php echo empty(cookie("nickName"))?session("mobile"):cookie("nickName"); ?>
                    </li>
                    <!--<li style="margin-left: 0px; line-height: 35px;">岗位</li>-->
                    <!--<li>职责</li>-->
                </ul>
            </div>
        </div>
        <!--快捷导航-->
        <div class="index_left_url">
            <div class="left_url">我发起的</div>
            <div class="left_url">@我的</div>
            <div class="left_url">待处理的</div>
            <div class="left_url">已处理的</div>
        </div>

        <!--任务记录-->
        <div class="index_left_count">
            <div class="index_left_count_1" style="float: left;"><p style="margin-top: 10px;">超期任务</p><p style="font-size: 25px;">0</p></div>
            <div class="index_left_count_1" style="float: right;"><p style="margin-top: 10px;">未完成任务</p><p style="font-size: 25px;">0</p></div>
            <div class="index_left_count_2"><p style="padding-top:  10px;">待处理流程</p><p style="font-size: 25px;">0</p></div>
        </div>
        <!--积分榜-->
        <div class="index_left_scoreboard">
            <div class="index_left_scoreboard_title">
                <div class="index_left_scoreboard_title_ico"><i class="fa fa-trophy fa-fw fa-lg rg"></i></div>
                <div class="index_left_scoreboard_title_name">积分榜</div>
            </div>
            <div class="index_left_scoreboard_list">
                <?PHP for($i=0;$i<6;$i++){?>
                <ul>
                    <li style="width: 45px;font-size: 25px;font-weight: bold;text-align: right;padding-right: 15px;"><?PHP echo $i+1?></li>
                    <li style="width: 85px;border-bottom: 1px solid #e6e6e6;padding-left: 15px;">罗青钦</li>
                    <li style="width: 23px;border-bottom: 1px solid #e6e6e6;color:#f6736b;">4</li>
                </ul>
                <?PHP }?>
            </div>
        </div>
    </div>
    <div class="index_center">
        <!--输入框-->
        <div class="index_from">
            <div class="index_from_button">
                <ul>
                    <li class="active">
                        <span class="fa-stack fa-lg">
                            <i  style="color: #fff;" class="fa fa-circle-o fa-stack-2x"></i>
                            <i class="fa  fa-comments fa-2x  fa-fw fa-stack-1x "></i>
                        </span>
                        <span>&nbsp;消息</span>
                    </li>
                    <li>
                        <span class="fa-stack fa-lg">
                            <i  style="color: #fff;" class="fa fa-circle-o fa-stack-2x"></i>
                            <i class="fa fa-tasks fa-fw fa-2x fa-stack-1x"></i>
                        </span>
                        <span>&nbsp;任务</span>
                    </li>
                    <li>
                        <span class="fa-stack fa-lg">
                            <i  style="color: #fff;" class="fa fa-circle-o fa-stack-2x"></i>
                            <i class="fa fa-edit fa-fw fa-2x fa-stack-1x"></i>
                        </span>
                        <span>&nbsp;日志</span>
                    </li>
                    <li>
                        <span class="fa-stack fa-lg">
                            <i  class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-rmb fa-fw fa-2x fa-stack-1x fa-inverse"></i>
                        </span>
                        <span>&nbsp;报销</span>
                    </li>
                    <li>
                        <span class="fa-stack fa-lg">
                            <i  style="color: #fff;" class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-clock-o fa-fw fa-2x fa-stack-1x"></i>
                        </span>
                        <span>&nbsp;请假</span>
                    </li>
                    <li>
                        <span class="fa-stack fa-lg">
                            <i  style="color: #fff;" class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-plane fa-fw fa-2x fa-stack-1x"></i>
                        </span>
                        <span>&nbsp;出差</span>
                    </li>
                    <li>
                        <span class="fa-stack fa-lg">
                            <i  class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-usd fa-fw fa-lg fa-stack-1x fa-inverse"></i>
                        </span>
                        <span>&nbsp;费用</span>
                    </li>
                </ul>
            </div>
            <div id="contentList">
                <!-- 消息-->
                <div id="contentList1" class="index_from_text_mesg" style="display: block">
                    <div class="index_from_text">
                        <textarea name="" placeholder="请输入消息内容"></textarea>
                    </div>
                    <div class="index_bottom_button">
                        <ul>
                            <li style="margin-left: 60px;" class="fa fa-paperclip fa-fw fa-lg"></li>
                            <li class="fa fa-at fa-fw fa-lg"></li>
                    <span style="margin-left: 324px;width: 380px;height: 25px;line-height: 25px;display: block;color: #898989">发送到：
                        <input  style="height: 25px;margin-right: 16px;width: 230px;" type="search" placeholder="    请选择范围">
                        <span style="position: absolute;margin-left: -43px;margin-top: 6px;" class="fa fa-search fa-lg"></span>
                        <button style="width: 50px;height: 25px;background: #14bce1;border: none;color: #fff;" type="button">发送</button>
                    </span>
                        </ul>
                    </div>
                </div>
                <!--任务-->
                <div id="contentList2" class="index_from_text_task" style="display: none">
                    <div class="index_from_text">
                        <textarea name="" placeholder="请输入任务内容"></textarea>
                    </div>
                    <div style="margin-top: 24px;margin-bottom: 3px;">
                        <ul>
                            <span>任务执行人</span>
                            <input style="width: 83%;padding-left: 15px;line-height: 25px;height:25px;font-size: 12px;border: 1px solid #eaeaea;" type="text" placeholder="+任务执行人">
                        </ul>
                        <ul>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;起始时间</span>
                            <input id="startDate2" class="laydate-icon" value="" placeholder="起始时间" style="width: 155px;margin-right:28px;padding-left: 15px;height:25px;">
                            <span>终止时间</span>
                            <input id="endDate2" class="laydate-icon" value="" placeholder="终止时间" style="width: 155px;padding-left: 15px;margin-right: 32px;height: 25px;">
                            <input type="checkbox">
                            <span style="text-align: center">&nbsp;&nbsp;全天</span>
                        </ul>
                        <ul>
                            <span style="color: #14bce1;" id="options">&nbsp;&nbsp;&nbsp;&nbsp;高级选项&nbsp;&nbsp;<i style="cursor: pointer;" class="fa fa-sort-desc fa-fw fa-2x" onclick="unfold()"></i></span>

                        </ul>
                        <div id="upflod">
                            <ul>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;提醒</span>
                                <select style="width: 150px;height: 25px;color: #898989;padding-left: 15px;">
                                    <option>无</option>
                                    <option>有</option>
                                </select>
                            </ul>
                            <ul>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;关联项目</span>
                                <input type="search" placeholder=" 请选择范围" class="link">
                                <span class="fa fa-search fa-lg" style="position: absolute;margin-left: -43px;margin-top: 8px;color: #898989;"></span>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;关联客户</span>
                                <input type="search" placeholder=" 请选择范围" class="link">
                                <span class="fa fa-search fa-lg" style="position: absolute;margin-left: -43px;margin-top: 8px;color: #898989;"></span>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;关联商机</span>
                                <input type="search" placeholder=" 请选择范围" class="link">
                                <span class="fa fa-search fa-lg" style="position: absolute;margin-left: -43px;margin-top: 8px;color: #898989;"></span>
                            </ul>
                            <ul>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;优先级</span>
                                <select style="width: 70px;height: 25px;color: #898989;padding-left: 15px;">
                                    <option value="">高</option>
                                    <option value="">中</option>
                                    <option value="">低</option>
                                </select>
                                <span style="margin-left: 67px;padding-right: 5px;">工期（天）</span>
                                <input style="height: 25px;" type="text">
                            </ul>
                        </div>

                    </div>

                    <div class="index_bottom_button"  style=" border-top: 1px solid #eaeaea;padding-top: 12px;">
                        <ul>
                            <li style="margin-left: 18px;" class="fa fa-paperclip fa-fw fa-lg"></li>
                            <li class="fa fa-at fa-fw fa-lg"></li>
                    <span style="margin-left: 505px;width: 200px;height: 25px;line-height: 25px;display: block;color: #898989">
                        <input type="checkbox" style="margin-right: 5px;"><span>短信通知</span>
                        <!--<input  style="height: 23px;margin-right: 16px;width: 230px;" type="search" placeholder="    请选择范围">-->
                        <!--<span style="position: absolute;margin-left: -43px;margin-top: 6px;" class="fa fa-search fa-lg"></span>-->
                        <button style="width: 50px;height: 25px;background: #14bce1;border: none;color: #fff;" type="button">发送</button>
                    </span>
                        </ul>
                    </div>
                </div>
                <!--日志-->
                <div id="contentList3" class="index_from_text_task" style="display: none">
                    <form id="form3">
                    <div class="index_from_text">
                        <textarea id="reportContent" name="reportContent" placeholder="请输入日志内容"></textarea>
                    </div>
                    <div style="margin: 24px 0 5px;">
                        <ul>
                            <!--<span>任务执行人</span>-->
                            <!--<input style="width: 83%;padding-left: 15px;line-height: 25px;font-size: 12px;border: 1px solid #eaeaea;" type="text" placeholder="+任务执行人">-->
                            <li style="margin-top:10px" >
                                <input type="radio" id="dailyRecord" name="reportType" value="1" checked="checked"/><span style="margin-right:10px">日报</span>
                                <input type="radio" id="weeklyRecord"  name="reportType" value="2" /><span  style="margin-right:10px">周报</span>
                                <input type="radio" id="monthlyRecord"  name="reportType" value="3" /><span style="margin-right:10px">月报</span>
                            </li>
                        </ul>
                        <ul id="dailydate">
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日期</span>
                            <input id="date" name="date" class="laydate-icon" value="" placeholder="请选择日期" style="width: 155px;margin-right:28px;padding-left: 15px;height: 25px;">
                        </ul>
                        <ul style="display: none;" id="weekdate">
                            <span>起始时间</span>
                            <input id="startDate3" name="startDate" class="laydate-icon" value="" placeholder="起始时间" style="width: 155px;margin-right:28px;padding-left: 15px;">
                            <span>终止时间</span>
                            <input id="endDate3" name="endDate" class="laydate-icon" value="" placeholder="终止时间" style="width: 155px;padding-left: 15px;margin-right: 32px;">
                        </ul>
                        <ul>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;发送到</span>
                            <input id="recorderName" name="recorderName" style="height: 25px;padding-left: 15px;" type="text" placeholder="+发送到" readonly="readonly" value="<?php echo ($getWorkSet_userNames); ?>"><span style="padding-left: 15px;color: #898989;cursor: pointer;" class="fa fa-plus-square fa-lg" onclick="selectRecorder();"></span>
                        </ul>
                    </div>

                    <div class="index_bottom_button"  style=" border-top: 1px solid #eaeaea;padding-top: 12px;">
                        <ul>
                            <li style="margin-left: 17px;" class="fa fa-paperclip fa-fw fa-lg" onclick="$('#upfile3').click();"></li>
                            <span style="margin-left: 585px;width: 200px;height: 25px;line-height: 25px;display: block;color: #898989">
                            <button style="width: 50px;height: 25px;background: #14bce1;border: none;color: #fff;" type="button" onclick="saveReport();">发送</button>
                            </span>
                        </ul>
                    </div>
                    <input type="hidden" id="recorder" name="recorder" value="<?php echo ($getWorkSet_userIds); ?>" />
                    <input type="hidden" id="upfile3OldName" name="upfile['oldName']" value="" />
                    <input type="hidden" id="upfile3Type" name="upfile['type']" value="" />
                    <input type="hidden" id="upfile3Size" name="upfile['size']" value="" />
                    <input type="hidden" id="upfile3ReturnUrl" name="upfile['returnUrl']" value="" />
                    </form>
                    <form style="display:none;" id="upfileForm" action="<?php echo U('Api/Upfile/upF/type/2');?>" method="post" enctype="multipart/form-data">
                        <input type="file" id="upfile3" name="upfile" />
                    </form>
                </div>
                <!--报销-->
                <div id="contentList4" class="index_from_text_task" style="display: none">
                    <div class="index_from_text">
                        <textarea name="" placeholder="请输入报销内容"></textarea>
                    </div>
                    <div style="margin: 24px 0 5px;">
                        <ul>

                                <span>&nbsp;&nbsp;&nbsp;费用类型</span>
                                <input style="width: 27%;padding-left: 15px;line-height: 25px;height:25px;margin-right:52px;font-size: 12px;border: 1px solid #eaeaea;" type="text" placeholder="选择类型">


                                <span>金额</span>
                                <input style="width:27%;padding-left: 15px;line-height: 25px;height:25px;font-size: 12px;border: 1px solid #eaeaea;" type="text" placeholder="0.00">


                        </ul>
                        <ul>
                            <span>&nbsp;&nbsp;&nbsp;审批人员</span>
                            <input style="height: 25px;padding-left: 15px;" type="text" placeholder="无"><span style="padding-left: 15px;color: #898989;cursor: pointer;" class="fa fa-plus-square fa-lg"></span>

                        </ul>


                    </div>

                    <div class="index_bottom_button"  style=" border-top: 1px solid #eaeaea;padding-top: 12px;">
                        <ul>
                            <li style="margin-left: 17px;" class="fa fa-paperclip fa-fw fa-lg"></li>
                            <span style="margin-left: 585px;width: 200px;height: 25px;line-height: 25px;display: block;color: #898989">
                            <button style="width: 50px;height: 25px;background: #14bce1;border: none;color: #fff;" type="button">发送</button>
                            </span>
                        </ul>
                    </div>
                </div>
                <!--请假-->
                <div id="contentList5" class="index_from_text_task" style="display: none">
                    <div class="index_from_text">
                        <textarea name="" placeholder="请输入请假内容"></textarea>
                    </div>
                    <div style="margin: 24px 0 5px;">
                        <ul>

                            <span>&nbsp;&nbsp;&nbsp;请假类型</span>
                            <!--<input style="width: 27%;padding-left: 15px;line-height: 25px;height:25px;margin-right:25px;font-size: 12px;border: 1px solid #eaeaea;" type="" placeholder="+任务执行人">-->
                            <select style="width: 193px;color: #898989;padding-left: 15px;line-height: 25px;height:25px;margin-right:25px;font-size: 12px;border: 1px solid #eaeaea;">
                                <option value="0">选择类型</option>
                                <option value="1">病假</option>
                                <option value="2">事假</option>
                            </select>

                            <span>请假天数</span>
                            <input style="width:27%;padding-left: 15px;line-height: 25px;height:25px;font-size: 12px;border: 1px solid #eaeaea;" type="text">


                        </ul>
                        <ul>
                            <span>&nbsp;&nbsp;&nbsp;起始时间</span>
                            <input id="startDate5" class="laydate-icon" value="" placeholder="起始时间" style="height: 25px;width: 155px;margin-right:28px;padding-left: 15px;">
                            <span>终止时间</span>
                            <input id="endDate5" class="laydate-icon" value="" placeholder="终止时间" style="height: 25px;width: 155px;padding-left: 15px;margin-right: 32px;">
                            <input type="checkbox">
                            <span style="text-align: center">&nbsp;&nbsp;全天</span>
                        </ul>
                        <ul>
                            <span>&nbsp;&nbsp;&nbsp;审批人员</span>
                            <input style="height: 25px;padding-left: 15px;" type="search" placeholder="无"><span style="padding-left: 15px;color: #898989;cursor: pointer;" class="fa fa-plus-square fa-lg"></span>

                        </ul>


                    </div>

                    <div class="index_bottom_button"  style=" border-top: 1px solid #eaeaea;padding-top: 12px;">
                        <ul>
                            <li style="margin-left: 17px;" class="fa fa-paperclip fa-fw fa-lg"></li>
                            <span style="margin-left: 585px;width: 200px;height: 25px;line-height: 25px;display: block;color: #898989">
                            <button style="width: 50px;height: 25px;background: #14bce1;border: none;color: #fff;" type="button">发送</button>
                            </span>
                        </ul>
                    </div>
                </div>
                <!--出差-->
                <div id="contentList6" class="index_from_text_task" style="display: none">
                    <div class="index_from_text">
                        <textarea name="" placeholder="请输入出差事件内容"></textarea>
                    </div>
                    <div style="margin: 24px 0 5px;">
                        <ul>

                            <span>&nbsp;&nbsp;&nbsp;出差地点</span>
                            <!--<input style="width: 27%;padding-left: 15px;line-height: 25px;height:25px;margin-right:25px;font-size: 12px;border: 1px solid #eaeaea;" type="" placeholder="+任务执行人">-->
                            <select style="width: 193px;color: #898989;padding-left: 15px;line-height: 25px;height:25px;margin-right:25px;font-size: 12px;border: 1px solid #eaeaea;">
                                <option value="0">选择类型</option>
                                <option value="1">病假</option>
                                <option value="2">事假</option>
                            </select>

                            <span>出差天数</span>
                            <input style="width:27%;padding-left: 15px;line-height: 25px;height:25px;font-size: 12px;border: 1px solid #eaeaea;" type="text">


                        </ul>
                        <ul>
                            <span>&nbsp;&nbsp;&nbsp;出发时间</span>
                            <input id="startDate6" class="laydate-icon" value="" placeholder="出发时间" style="height: 25px;width: 155px;margin-right:28px;padding-left: 15px;">
                            <span>返回时间</span>
                            <input id="endDate6" class="laydate-icon" value="" placeholder="返回时间" style="height: 25px;width: 155px;padding-left: 15px;margin-right: 32px;">
                        </ul>
                        <ul>
                            <span>&nbsp;&nbsp;&nbsp;审批人员</span>
                            <input style="height: 25px;padding-left: 15px;" type="search" placeholder="无"><span style="padding-left: 15px;color: #898989;cursor: pointer;" class="fa fa-plus-square fa-lg"></span>

                        </ul>


                    </div>

                    <div class="index_bottom_button"  style=" border-top: 1px solid #eaeaea;padding-top: 12px;">
                        <ul>
                            <li style="margin-left: 17px;" class="fa fa-paperclip fa-fw fa-lg"></li>
                            <span style="margin-left: 585px;width: 200px;height: 25px;line-height: 25px;display: block;color: #898989">
                            <button style="width: 50px;height: 25px;background: #14bce1;border: none;color: #fff;" type="button">发送</button>
                            </span>
                        </ul>
                    </div>
                </div>
                <!--费用-->
                <div id="contentList7" class="index_from_text_task" style="display: none">
                    <div class="index_from_text">
                        <textarea name="" placeholder="请输入费用内容"></textarea>
                    </div>
                    <div style="margin: 24px 0 5px;">
                        <ul>

                            <span>&nbsp;&nbsp;&nbsp;费用类型</span>
                            <input style="width: 27%;padding-left: 15px;line-height: 25px;height:25px;margin-right:52px;font-size: 12px;border: 1px solid #eaeaea;" type="text" placeholder="选择类型">


                            <span>金额</span>
                            <input style="width:27%;padding-left: 15px;line-height: 25px;height:25px;font-size: 12px;border: 1px solid #eaeaea;" type="text" placeholder="0.00">


                        </ul>
                        <ul>
                            <span>&nbsp;&nbsp;&nbsp;审批人员</span>
                            <input style="height: 25px;padding-left: 15px;" type="text" placeholder="无"><span style="padding-left: 15px;color: #898989;cursor: pointer;" class="fa fa-plus-square fa-lg"></span>

                        </ul>


                    </div>

                    <div class="index_bottom_button"  style=" border-top: 1px solid #eaeaea;padding-top: 12px;">
                        <ul>
                            <li style="margin-left: 17px;" class="fa fa-paperclip fa-fw fa-lg"></li>
                            <span style="margin-left: 585px;width: 200px;height: 25px;line-height: 25px;display: block;color: #898989">
                            <button style="width: 50px;height: 25px;background: #14bce1;border: none;color: #fff;" type="button">发送</button>
                            </span>
                        </ul>
                    </div>
                </div>
            </div>



        </div>
        <!--列表-->
        <div class="index_list">
            <div class="index_list_button">
                <ul>
                    <li style="margin-left: 28px;">全部</li>
                    <li>我发起的</li>
                    <li>@我的</li>
                    <li>待处理</li>
                    <li>已处理</li>
                </ul>
            </div>
            <?PHP for($i=0;$i<6;$i++){?>
            <div class="index_list_list">
                
                <ul>
                    <li style="margin-left: 15px;margin-right: 25px;"><img src="/wisdom/Public/Home/Default/images/touxiang.jpg" width="50" height="50" /></li>
                    <li>
                        <div class="index_list_list_name"><span>董如赞</span> <span>&nbsp;&nbsp;&nbsp;2015-01-02 00:00:00&nbsp;发起</span></div>
                        <div class="index_list_list_note">fdsafdsafdsafdsafdsafdsafdsafdsafdsafd</div>
                        <div class="index_list_list_time">17:35前更新
                            <a>
                            <span class="fa-stack fa-lg">
                                <i  class="fa fa-comment fa-stack-1x"></i>
                                <i class="fa fa-ellipsis-h fa-fw  fa-stack-1x fa-inverse"></i>
                            </span>
                            <span style="">回复</span>
                            </a>
                        </div>
                    </li>
                </ul>
                
            </div>
            <?PHP }?>
        </div>
    </div>
    <div class="index_right">
        <!--公告-->
        <div class="index_right_scoreboard">
            <div class="index_right_scoreboard_title">
                <div class="index_right_scoreboard_title_ico"><i class="fa fa-bullhorn fa-fw fa-lg rg"></i></div>
                <div class="index_right_scoreboard_title_name">公告通知</div>
            </div>
            <div class="index_right_scoreboard_list">
                <?php if(is_array($getNoticeList_list)): $i = 0; $__LIST__ = $getNoticeList_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul style="width: 185px;padding-left: 5px;height: 25px;" onclick="noticeDetail(<?php echo ($vo["messageId"]); ?>);">
                    <!--<li style="width: 15px;font-size: 14px;font-weight: bold;text-align: right;"><?php echo ($i); ?></li>-->
                    <li><?php echo ($vo["title"]); ?></li>
                </ul><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <!--快捷-->
        <div class="index_right_quick">
            <div class="index_right_link">
                <div class="index_right_nb_30" style="float: left;"><div class="">图</div></div>
                <div class="index_right_nb_24" style="float: left;">发起电话会议</div>
            </div>
            <div class="index_right_line_1"></div>
            <div class="index_right_link">
                <div class="index_right_nb_30" style="float: left;"><div class="">图</div></div>
                <div class="index_right_nb_24" style="float: left;">体验中心</div>
            </div>
            <div class="index_right_line_1"></div>
            <div class="index_right_link">
                <div class="index_right_nb_30" style="float: left;"><div class="">图</div></div>
                <div class="index_right_nb_24" style="float: left;">帮助视频</div>
            </div>
            <div class="index_right_line_1"></div>
            <div class="index_right_link">
                <div class="index_right_nb_30" style="float: left;"><div class="">图</div></div>
                <div class="index_right_nb_24" style="float: left;">业务指标设置</div>
            </div>
            <div class="index_right_line_20"></div>
            <div class="index_right_link">
                <div class="index_right_nb_30" style="float: left;"><div class="">图</div></div>
                <div class="index_right_nb_24" style="float: left;">签到报表</div>
            </div>
            <div class="index_right_line_1"></div>
            <div class="index_right_link">
                <div class="index_right_nb_30" style="float: left;"><div class="">图</div></div>
                <div class="index_right_nb_24" style="float: left;">考勤报表</div>
            </div>
            <div class="index_right_line_1"></div>
            <div class="index_right_link">
                <div class="index_right_nb_30" style="float: left;"><div class="">图</div></div>
                <div class="index_right_nb_24" style="float: left;">任务图</div>
            </div>
            <div class="index_right_line_1"></div>
            <div class="index_right_link">
                <div class="index_right_nb_30" style="float: left;"><div class="">图</div></div>
                <div class="index_right_nb_24" style="float: left;">任务统计表</div>
            </div>
            <div class="index_right_line_1"></div>
            <div class="index_right_link">
                <div class="index_right_nb_30" style="float: left;"><div class="">图</div></div>
                <div class="index_right_nb_24" style="float: left;">员工使用动态图</div>
            </div>
            <div class="index_right_line_20"></div>
            <div class="index_right_link">
                <div class="index_right_nb_30" style="float: left;"><div class="">图</div></div>
                <div class="index_right_nb_24" style="float: left;">栏目设置</div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/wisdom/Public/static/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/wisdom/Public/static/jquery.form.js"></script>
<script type="text/javascript" src="/wisdom/Public/static/js/jquery.bigautocomplete.js"></script>
<script type="text/javascript" src="/wisdom/Public/static/layer/layer.js"></script>
<script type="text/javascript" src="/wisdom/Public/static/layer/skin/layer.css"></script>
<script type="text/javascript" src="/wisdom/Public/static/laypage/laypage.js"></script>
<script type="text/javascript" src="/wisdom/Public/static/laydate/laydate.js"></script>

<script type="text/javascript" src="/wisdom/Public/static/js/area.js"></script>
<script type="text/javascript" src="/wisdom/Public/static/cookie.js"></script>
<script type="text/javascript" src="/wisdom/Public/static/js/fun.js"></script>
<script type="text/javascript" src="/wisdom/Public/Home/Default/js/fun.js"></script>
<!--ueditor编译器配置文件-->

<script type="text/javascript" src="/wisdom/Public/static/um/umeditor.config.js"></script>

<!--ueditor编译器源码文件-->
<script type="text/javascript" src="/wisdom/Public/static/um/umeditor.js"></script>

<script type="text/javascript" src="/wisdom/Public/static/um/umeditor.min.js"></script>
<script type="text/javascript" src="/wisdom/Public/static/um/umeditor.config.js"></script>
<script type="text/javascript" src="/wisdom/Public/static/um/umeditor.min.js"></script>
<script type="text/javascript" src="/wisdom/Public/static/um/lang/zh-cn/zh-cn.js"></script>


 
 
 
<script>
    $(function(){
        Cookie.eraseCookie("bigMenuIndex");
        Cookie.eraseCookie("smallMenuIndex");
        Cookie.createCookie("bigMenuIndex",0);
        Cookie.createCookie("smallMenuIndex",0);
        var start2 = {
            elem: '#startDate2',
            format: 'YYYY-MM-DD',
            min: laydate.now(), //设定最小日期为当前日期
            max: '2099-06-16', //最大日期
            //istime: true,
            istoday: false,
            choose: function(datas){
                end2.min = datas; //开始日选好后，重置结束日的最小日期
                end2.start = datas //将结束日的初始值设定为开始日
            }
        };
        var end2 = {
            elem: '#endDate2',
            format: 'YYYY-MM-DD',
            min: laydate.now(),
            max: laydate.now(+180),
            //istime: true,
            istoday: false,
            choose: function(datas){
                start2.max = datas; //结束日选好后，重置开始日的最大日期
            }
        };
        var start3 = {
            elem: '#startDate3',
            format: 'YYYY-MM-DD',
            min: '2000-01-01', //设定最小日期为当前日期
            max: laydate.now(), //最大日期
            //istime: true,
            istoday: false,
            choose: function(datas){
                end3.min = datas; //开始日选好后，重置结束日的最小日期
                end3.start = datas //将结束日的初始值设定为开始日
            }
        };
        var end3 = {
            elem: '#endDate3',
            format: 'YYYY-MM-DD',
            min: '2000-01-01',
            max: laydate.now(),
            //istime: true,
            istoday: false,
            choose: function(datas){
                start3.max = datas; //结束日选好后，重置开始日的最大日期
            }
        };
        var start5 = {
            elem: '#startDate5',
            format: 'YYYY-MM-DD',
            min: laydate.now(), //设定最小日期为当前日期
            max: '2099-06-16', //最大日期
            //istime: true,
            istoday: false,
            choose: function(datas){
                end5.min = datas; //开始日选好后，重置结束日的最小日期
                end5.start = datas //将结束日的初始值设定为开始日
            }
        };
        var end5 = {
            elem: '#endDate5',
            format: 'YYYY-MM-DD',
            min: laydate.now(),
            max: laydate.now(+180),
            //istime: true,
            istoday: false,
            choose: function(datas){
                start5.max = datas; //结束日选好后，重置开始日的最大日期
            }
        };
        var start6 = {
            elem: '#startDate6',
            format: 'YYYY-MM-DD',
            min: laydate.now(), //设定最小日期为当前日期
            max: '2099-06-16', //最大日期
            //istime: true,
            istoday: false,
            choose: function(datas){
                end6.min = datas; //开始日选好后，重置结束日的最小日期
                end6.start = datas //将结束日的初始值设定为开始日
            }
        };
        var end6 = {
            elem: '#endDate6',
            format: 'YYYY-MM-DD',
            min: laydate.now(),
            max: laydate.now(+180),
            //istime: true,
            istoday: false,
            choose: function(datas){
                start6.max = datas; //结束日选好后，重置开始日的最大日期
            }
        };
        var date = {
            elem: '#date',
            format: 'YYYY-MM-DD',
            min: '2000-01-01', //设定最小日期为当前日期
            max: '2099-06-16', //最大日期
            //istime: true,
            istoday: false
        };
        laydate(start2);
        laydate(end2);
        laydate(start3);
        laydate(end3);
        laydate(start5);
        laydate(end5);
        laydate(start6);
        laydate(end6);
        laydate(date);
    })

//    菜单轮换点击事件
    $(".index_from_button li").click(function () {
        var index = $(".index_from_button li").index($(this));
        $(this).addClass("active").siblings().removeClass("active");
        $divList = $("#contentList").children("div");
        $divList.hide();
        $divList.eq(index).show();
    });

//    日志不同类型的加载显示
    $("#dailyRecord,#monthlyRecord").click(function(){
        $("#weekdate").hide();
        $("#dailydate").show();
    });
    $("#weeklyRecord").click(function(){
        $("#dailydate").hide();
        $("#weekdate").show();
    });


    //高级选项展开
    function unfold(){
        $("#upflod").toggle();
    }

    function noticeDetail(messageId) {
        layer.open({
            type:2,
            title :['公告通知','color:#506390;font-size: 16px;height: 45px;line-height: 45px;'],
            area: ['700px', '600px'],
            shadeClose: true, //点击遮罩关闭
            content: "<?php echo U('Office/noticeDetail');?>" + "?messageId=" + messageId,
        });
    }

    function selectRecorder() {
        var recorderName = $("#recorderName").val();
        var recorder = $("#recorder").val();
        layer.open({
            type:2,
            title :['发送到','color:#506390;font-size: 16px;height: 45px;line-height: 45px;'],
            area: ['800px', '520px'],
            shadeClose: true, //点击遮罩关闭
            content: "<?php echo U('Office/selectRecorder');?>" + "?recorderName=" + recorderName + "&recorder=" + recorder,
        });
    }

    function saveReport() {
        var reportContentObj = $("#form3 #reportContent");
        if (getValLen(reportContentObj) == 0) {
            layer.msg("日志内容不能为空",{icon: 8});
            reportContentObj.focus();
            return false;
        } else if (getValLen(reportContentObj) > 1000) {
            layer.msg("日志内容最多为1000字",{icon: 8});
            reportContentObj.focus();
            return false;
        }

        if ($("#form3 #weeklyRecord:checked").length > 0) {
            var startDateObj = $("#form3 #startDate3");
            var endDateObj = $("#form3 #endDate3");
            if (getValLen(startDateObj) == 0) {
                layer.msg("起始时间不能为空",{icon: 8});
                startDateObj.focus();
                return false;
            } else if (getValLen(endDateObj) == 0) {
                layer.msg("终止时间不能为空",{icon: 8});
                endDateObj.focus();
                return false;
            }
        } else {
            var dateObj = $("#form3 #date");
            if (getValLen(dateObj) == 0) {
                layer.msg("日期不能为空",{icon: 8});
                dateObj.focus();
                return false;
            }
        }

        var recorderObj = $("#form3 #recorder");
        if (getValLen(recorderObj) == 0) {
            layer.msg("发送到不能为空",{icon: 8});
            $("#form3 #recorderName").focus();
            return false;
        }

        var loadIdx = layer.load(0);
        var formData = $("#form3").serializeArray();
        $.post("<?php echo U('Office/saveReport');?>", formData, function(data) {
            layer.close(loadIdx);
            if(data.error_code == "success") {
                layer.msg("发送成功");
                $("#form3 #reportContent").val("");
                $("#form3 #startDate3").val("");
                $("#form3 #endDate3").val("");
                $("#form3 #date").val("");
            } else{
                layer.msg("发送失败，" + data.error_text + "(" + data.error_code + ")",{icon: 8});
            }
        }, 'json');
    }

    function getValLen(obj) {
        return $.trim(obj.val()).length;
    }

    $("#upfile3").change(function(){
        fileUpload("#form3");
    });

    function fileUpload(submitkey) {
        $("#upfileForm").ajaxSubmit({
            dataType:  "json", //数据格式为json 
            success: function(data) { //成功
                if(data.error_no == "999999") {
                    layer.msg("上传失败",{icon: 8});
                } else {
                    layer.msg("上传成功");
                    $("#upfile3OldName").val(data.upfile.name);
                    $("#upfile3Type").val(data.upfile.type);
                    $("#upfile3Size").val(data.upfile.size);
                    $("#upfile3ReturnUrl").val(data.upfile.savepath + data.upfile.savename);
                }
            }, 
            error:function(xhr){ alert(1);//上传失败
                layer.msg("上传失败",{icon: 8});
            }
        });
    }
</script>
    </body>
</html>