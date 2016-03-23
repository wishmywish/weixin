<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>招商APP管理平台::提现管理</title>
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
    <div class="adminRight">
        <div class="righttop">
    <div class="showright"><span id="user_setting" class="fa fa-user">个人设置</span> <span id="user_out" class="fa fa-sign-out">退出登录</span></div>
</div>
        <div class="breadlist">首页 / 消费记录管理</div>
        <div class="tabli">
            <ul id="tabli_ShopRecord">
                <li value="0" class='selected'>待确认</li>
                <li value="1">已收货</li>
            </ul>
            <ul class="action">
                <li id="pay" value="0">确认收货</li>
            </ul>
        </div>
        <div class="list">
            <ul>
                <li style='width:5%;'><input id="allcheck" type='checkbox' value='0'></li>
                <li style='width:25%;'>商品名称</li>
                <li style='width:20%;'>消费人</li>
                <li style='width:15%;'>消费金额</li>
                <li style='width:15%;'>商品状态</li>
                <li style='width:20%;'>时间</li>
            </ul>
            <div class='listinfo'>
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

    <script src="http://s11.cnzz.com/z_stat.php?id=1256375228&web_id=1256375228" language="JavaScript"></script>
<script>
    $(function(){
        //获取列表信息
        plist_shopRecord(0);

        //全选
        $('#allcheck').click(function(){
            //alert(this.checked);
            if(this.checked){
                $("input[name='withdrawid']").attr("checked", true);
            }else{
                $("input[name='withdrawid']").attr("checked", false);
            }
        });

        $("#pay").click(function(){
            var checkedlist = "";
            // var phonelist = "";
            var phoneidlist = "";

            $("input[name='shoprecordid']:checked").each(function(){
                if(checkedlist===""){
                    checkedlist = $(this).val();
                    // phonelist = "phone"+$(this).val();
                    // phonelist = $("#"+phonelist+"").val();
                }else{
                    checkedlist += "|"+$(this).val();
                    // phonelist = "phone"+$(this).val();
                    // console.log(phonelist);
                    // console.log($("#"+phonelist+"").val());
                    // phonelist += "|"+$("#"+phonelist+"").val();
                }
            });

            if(checkedlist===""){
                layer.msg("选择要确认的记录",{"icon":8});
                return false;
            }else{
                $.post(APP + "/Api/Web/getNoteConfirm", "checkedlist=" + checkedlist+"&phoneidlist="+phoneidlist, function (v) {
                    //console.log(v.result);
                    if (v.result === '000000') {

                        var strs= new Array(); //定义一数组 
                        strs=checkedlist.split("|"); //字符分割 
                        for (i=0;i<strs.length ;i++ ) 
                        { 
                            var phonelist = "phone"+strs[i];
                            phoneidlist = $("#"+phonelist+"").val();
                            $.post("<?php echo U('Api/Info/conf');?>","command=voicecode&voicephone="+phoneidlist,function(v){
                                // layer.msg('产品已确认收货，且短信发送至第'+i+'位的手机！', {'icon': 8});
                            },'json');
                        }
                        location.reload();
                    } else {
                        layer.msg('操作失败', {'icon': 8});
                        return false;
                    }
                }, 'json');
            }
        });

    });
</script>
</html>