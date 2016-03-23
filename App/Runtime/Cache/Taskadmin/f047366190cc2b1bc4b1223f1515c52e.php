<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>[title]</title>
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
.cause_note label{
    padding-left:45px;
}
.cause_note span{
    padding-left:45px;
}
</style>
    <body>
        <?php if(($reModi["result"]) != "000000"): ?><div class='listinfo'>
                <ul>
                    <li style='width:100%; text-align:center; line-height:500px;'>没有符合要求的信息</li>
                </ul>
            </div>

        <?php else: ?>
            <div class="cause">
                <div class="title">::卸载情况::</div>
                <div class="cause_note">
                    <label for="uninstall">是否已经卸载<span>是(<?php echo ($reModi["isUninstallNum"]); ?>)(总数:<?php echo ($reModi["isUninstall"]); ?>)</span><span>否(<?php echo ($reModi["noUninstallNum"]); ?>)(总数:<?php echo ($reModi["noUninstall"]); ?>)</span></label>
                </div>
            </div>
            <div class="cause">
                <div class="title">::了解渠道::</div>
                <div class="cause_note" >
                    <label for="ditch_1">朋友推荐(<?php echo ($reModi["ditchNum1"]); ?>)(总数:<?php echo ($reModi["ditch1"]); ?>)</label>
                    <label for="ditch_2">微信朋友圈(<?php echo ($reModi["ditchNum2"]); ?>)(总数:<?php echo ($reModi["ditch2"]); ?>)</label>
                    <label for="ditch_3">大型会议(<?php echo ($reModi["ditchNum3"]); ?>)(总数:<?php echo ($reModi["ditch3"]); ?>)</label>
                    <label for="ditch_4">合作商家(<?php echo ($reModi["ditchNum4"]); ?>)(总数:<?php echo ($reModi["ditch4"]); ?>)</label>
                    <label for="ditch_5">招聘网站(<?php echo ($reModi["ditchNum5"]); ?>)(总数:<?php echo ($reModi["ditch5"]); ?>)</label>
                    <label for="ditch_6">网上随便搜索(<?php echo ($reModi["ditchNum6"]); ?>)(总数:<?php echo ($reModi["ditch6"]); ?>)</label>
                    <label for="ditch_7">不记得(<?php echo ($reModi["ditchNum7"]); ?>)(总数:<?php echo ($reModi["ditch7"]); ?>)</label>
                    <label for="ditch_8">其他(<?php echo ($reModi["ditchNum8"]); ?>)(总数:<?php echo ($reModi["ditch8"]); ?>)</label>
                </div>
            </div>
            <div class="cause">
                <div class="title">::所属行业::</div>
                <div class="cause_note">
                    <label >未选择(<?php echo ($reModi["industryNum33"]); ?>)(总数:<?php echo ($reModi["industry33"]); ?>)</label>
                    <label >食品(<?php echo ($reModi["industryNum1"]); ?>)(总数:<?php echo ($reModi["industry1"]); ?>)</label>
                    <label>酒业(<?php echo ($reModi["industryNum2"]); ?>)(总数:<?php echo ($reModi["industry2"]); ?>)</label>
                    <label>餐饮(<?php echo ($reModi["industryNum3"]); ?>)(总数:<?php echo ($reModi["industry3"]); ?>)</label>
                    <label>汽车用品(<?php echo ($reModi["industryNum4"]); ?>)(总数:<?php echo ($reModi["industry4"]); ?>)</label>
                    <label>计算机(<?php echo ($reModi["industryNum5"]); ?>)(总数:<?php echo ($reModi["industry5"]); ?>)</label>
                    <label>广告(<?php echo ($reModi["industryNum6"]); ?>)(总数:<?php echo ($reModi["industry6"]); ?>)</label>
                    <label>教育(<?php echo ($reModi["industryNum7"]); ?>)(总数:<?php echo ($reModi["industry7"]); ?>)</label>
                    <label>服装(<?php echo ($reModi["industryNum8"]); ?>)(总数:<?php echo ($reModi["industry8"]); ?>)</label>
                    <label >保险(<?php echo ($reModi["industryNum9"]); ?>)(总数:<?php echo ($reModi["industry9"]); ?>)</label>
                    <label>美容(<?php echo ($reModi["industryNum10"]); ?>)(总数:<?php echo ($reModi["industry10"]); ?>)</label>
                    <label>媒体(<?php echo ($reModi["industryNum11"]); ?>)(总数:<?php echo ($reModi["industry11"]); ?>)</label>
                    <label>零售(<?php echo ($reModi["industryNum12"]); ?>)(总数:<?php echo ($reModi["industry12"]); ?>)</label>
                    <label>农业(<?php echo ($reModi["industryNum13"]); ?>)(总数:<?php echo ($reModi["industry13"]); ?>)</label>
                    <label>旅游(<?php echo ($reModi["industryNum14"]); ?>)(总数:<?php echo ($reModi["industry14"]); ?>)</label>
                    <label>医疗服务(<?php echo ($reModi["industryNum15"]); ?>)(总数:<?php echo ($reModi["industry15"]); ?>)</label>
                    <label>银行(<?php echo ($reModi["industryNum16"]); ?>)(总数:<?php echo ($reModi["industry16"]); ?>)</label>
                    <label >金融(<?php echo ($reModi["industryNum17"]); ?>)(总数:<?php echo ($reModi["industry17"]); ?>)</label>
                    <label>机械制造(<?php echo ($reModi["industryNum18"]); ?>)(总数:<?php echo ($reModi["industry18"]); ?>)</label>
                    <label>建筑(<?php echo ($reModi["industryNum19"]); ?>)(总数:<?php echo ($reModi["industry19"]); ?>)</label>
                    <label>会计(<?php echo ($reModi["industryNum20"]); ?>)(总数:<?php echo ($reModi["industry20"]); ?>)</label>
                    <label>服务(<?php echo ($reModi["industryNum21"]); ?>)(总数:<?php echo ($reModi["industry21"]); ?>)</label>
                    <label>艺术(<?php echo ($reModi["industryNum22"]); ?>)(总数:<?php echo ($reModi["industry22"]); ?>)</label>
                    <label>设计(<?php echo ($reModi["industryNum23"]); ?>)(总数:<?php echo ($reModi["industry23"]); ?>)</label>
                    <label >保健(<?php echo ($reModi["industryNum24"]); ?>)(总数:<?php echo ($reModi["industry24"]); ?>)</label>
                    <label>能源(<?php echo ($reModi["industryNum25"]); ?>)(总数:<?php echo ($reModi["industry25"]); ?>)</label>
                    <label>电讯(<?php echo ($reModi["industryNum26"]); ?>)(总数:<?php echo ($reModi["industry26"]); ?>)</label>
                    <label>司机(<?php echo ($reModi["industryNum27"]); ?>)(总数:<?php echo ($reModi["industry27"]); ?>)</label>
                    <label>律师(<?php echo ($reModi["industryNum28"]); ?>)(总数:<?php echo ($reModi["industry28"]); ?>)</label>
                    <label>出版(<?php echo ($reModi["industryNum29"]); ?>)(总数:<?php echo ($reModi["industry29"]); ?>)</label>
                    <label>公益组织(<?php echo ($reModi["industryNum30"]); ?>)(总数:<?php echo ($reModi["industry30"]); ?>)</label>
                    <label>互联网(<?php echo ($reModi["industryNum31"]); ?>)(总数:<?php echo ($reModi["industry31"]); ?>)</label>                    
                    <label>其他(<?php echo ($reModi["industryNum32"]); ?>)(总数:<?php echo ($reModi["industry32"]); ?>)</label>                    

                </div>
            </div>
            <div class="cause">
                <div class="title">::从事岗位::</div>
                <div class="cause_note">
                    <label for="job_1">企业主(<?php echo ($reModi["jobNum1"]); ?>)(总数:<?php echo ($reModi["job1"]); ?>)</label>
                    <label for="job_2">业务员(<?php echo ($reModi["jobNum2"]); ?>)(总数:<?php echo ($reModi["job2"]); ?>)</label>
                    <label for="job_3">其他(<?php echo ($reModi["jobNum3"]); ?>)(总数:<?php echo ($reModi["job3"]); ?>)</label>
                </div>
            </div>
            <div class="cause">
                <div class="title">::参与任务::</div>
                <div class="cause_note">
                    <label for="task">是否参与过任务<span>是(<?php echo ($reModi["isTaskNum"]); ?>)(总数:<?php echo ($reModi["isTask"]); ?>)</span><span>否(<?php echo ($reModi["noTaskNum"]); ?>)(总数:<?php echo ($reModi["noTask"]); ?>)</span></label>
                </div>
            </div>
            <div class="cause">
                <div class="title">::所在区域::</div>
                <div class="cause_note">
                    <label >未选择(<?php echo ($reModi["areaNum35"]); ?>)(总数:<?php echo ($reModi["area35"]); ?>)</label>
                    <label >北京市(<?php echo ($reModi["areaNum1"]); ?>)(总数:<?php echo ($reModi["area1"]); ?>)</label>
                    <label>天津市(<?php echo ($reModi["areaNum2"]); ?>)(总数:<?php echo ($reModi["area2"]); ?>)</label>
                    <label>上海市(<?php echo ($reModi["areaNum3"]); ?>)(总数:<?php echo ($reModi["area3"]); ?>)</label>
                    <label>重庆市(<?php echo ($reModi["areaNum4"]); ?>)(总数:<?php echo ($reModi["area4"]); ?>)</label>
                    <label>河北省(<?php echo ($reModi["areaNum5"]); ?>)(总数:<?php echo ($reModi["area5"]); ?>)</label>
                    <label>河南省(<?php echo ($reModi["areaNum6"]); ?>)(总数:<?php echo ($reModi["area6"]); ?>)</label>
                    <label>云南省(<?php echo ($reModi["areaNum7"]); ?>)(总数:<?php echo ($reModi["area7"]); ?>)</label>
                    <label>辽宁省(<?php echo ($reModi["areaNum8"]); ?>)(总数:<?php echo ($reModi["area8"]); ?>)</label>
                    <label >黑龙江(<?php echo ($reModi["areaNum9"]); ?>)(总数:<?php echo ($reModi["area9"]); ?>)</label>
                    <label>湖南省(<?php echo ($reModi["areaNum10"]); ?>)(总数:<?php echo ($reModi["area10"]); ?>)</label>
                    <label>安徽省(<?php echo ($reModi["areaNum11"]); ?>)(总数:<?php echo ($reModi["area11"]); ?>)</label>
                    <label>山东省(<?php echo ($reModi["areaNum12"]); ?>)(总数:<?php echo ($reModi["area12"]); ?>)</label>
                    <label>新疆维吾尔(<?php echo ($reModi["areaNum13"]); ?>)(总数:<?php echo ($reModi["area13"]); ?>)</label>
                    <label>江苏省(<?php echo ($reModi["areaNum14"]); ?>)(总数:<?php echo ($reModi["area14"]); ?>)</label>
                    <label>浙江省(<?php echo ($reModi["areaNum15"]); ?>)(总数:<?php echo ($reModi["area15"]); ?>)</label>
                    <label>江西省(<?php echo ($reModi["areaNum16"]); ?>)(总数:<?php echo ($reModi["area16"]); ?>)</label>
                    <label >湖北省(<?php echo ($reModi["areaNum17"]); ?>)(总数:<?php echo ($reModi["area17"]); ?>)</label>
                    <label>广西壮族(<?php echo ($reModi["areaNum18"]); ?>)(总数:<?php echo ($reModi["area18"]); ?>)</label>
                    <label>甘肃省(<?php echo ($reModi["areaNum19"]); ?>)(总数:<?php echo ($reModi["area19"]); ?>)</label>
                    <label>山西省(<?php echo ($reModi["areaNum20"]); ?>)(总数:<?php echo ($reModi["area20"]); ?>)</label>
                    <label>内蒙古(<?php echo ($reModi["areaNum22"]); ?>)(总数:<?php echo ($reModi["area21"]); ?>)</label>
                    <label>陕西省(<?php echo ($reModi["areaNum22"]); ?>)(总数:<?php echo ($reModi["area22"]); ?>)</label>
                    <label>吉林省(<?php echo ($reModi["areaNum23"]); ?>)(总数:<?php echo ($reModi["area23"]); ?>)</label>
                    <label>福建省(<?php echo ($reModi["areaNum24"]); ?>)(总数:<?php echo ($reModi["area24"]); ?>)</label>
                    <label >贵州省(<?php echo ($reModi["areaNum25"]); ?>)(总数:<?php echo ($reModi["area25"]); ?>)</label>
                    <label>广东省(<?php echo ($reModi["areaNum26"]); ?>)(总数:<?php echo ($reModi["area26"]); ?>)</label>
                    <label>青海省(<?php echo ($reModi["areaNum27"]); ?>)(总数:<?php echo ($reModi["area27"]); ?>)</label>
                    <label>西藏(<?php echo ($reModi["areaNum28"]); ?>)(总数:<?php echo ($reModi["area28"]); ?>)</label>
                    <label>四川省(<?php echo ($reModi["areaNum29"]); ?>)(总数:<?php echo ($reModi["area29"]); ?>)</label>
                    <label>宁夏回族(<?php echo ($reModi["areaNum30"]); ?>)(总数:<?php echo ($reModi["area3"]); ?>)</label>
                    <label>海南省(<?php echo ($reModi["areaNum32"]); ?>)(总数:<?php echo ($reModi["area31"]); ?>)</label>
                    <label>台湾省(<?php echo ($reModi["areaNum32"]); ?>)(总数:<?php echo ($reModi["area32"]); ?>)</label>                    
                    <label>香港特别行政区(<?php echo ($reModi["areaNum33"]); ?>)(总数:<?php echo ($reModi["area33"]); ?>)</label>  
                    <label>澳门特别行政区(<?php echo ($reModi["areaNum34"]); ?>)(总数:<?php echo ($reModi["area34"]); ?>)</label>  
                </div>
            </div><?php endif; ?>
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

</html>