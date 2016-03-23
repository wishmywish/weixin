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

</style>
    <body>
        <?php if(($reModi["result"]) != "000000"): ?><div class='listinfo'>
                <ul>
                    <li style='width:100%; text-align:center; line-height:500px;'>没有符合要求的信息</li>
                </ul>
            </div>

        <?php else: ?>

            <div class="tabli">
                <ul id="tabli_Ad">
                    <li value="1" class='selected' id="messages"><a href="/wisdom/index.php/Taskadmin/Company/showCompanyDetail?companyId=<?php echo ($reModi["list"]["companyId"]); ?>" style="text-decoration:none;">详细信息</a></li>
                    <li value="3" id="photos"><a href="/wisdom/index.php/Taskadmin/Company/showCompanyPhotos?companyId=<?php echo ($reModi["list"]["companyId"]); ?>" style="text-decoration:none;">企业资料</a></li>
                </ul>
            </div>

            <div class="add">
                <div class='info' style="background-color:white;">
    				<br>

                    <span>&nbsp;&nbsp;&nbsp;&nbsp;公司全称： <?php echo ($reModi["list"]["companyName"]); ?></span><br><br>
                    <span style="padding-left:12px;">所处行业： <?php echo ($reModi["list"]["industryName"]); ?></span><br><br>
                    <span style="padding-left:12px;">企业地址： <?php echo ($reModi["list"]["address"]); ?></span><br><br>
                    <span style="padding-left:12px;">电话： <?php echo ($reModi["list"]["phone"]); ?></span><br><br>
                    <span style="padding-left:12px;">传真： <?php echo ($reModi["list"]["phone"]); ?></span><br><br>
                    <span style="padding-left:12px;">邮箱： <?php echo ($reModi["list"]["f_typename"]); ?></span><br><br>
                    <span style="padding-left:12px;">网址： <?php echo ($reModi["list"]["email"]); ?></span><br><br>
                    <span style="padding-left:12px;">法人代表： <?php echo ($reModi["list"]["companyLegal"]); ?></span><br><br>
                    <span style="padding-left:12px;">主营产品： <?php echo ($reModi["list"]["mainProduct"]); ?></span><br><br>
                    <span style="padding-left:12px;">主销区域： <?php echo ($reModi["list"]["mainArea"]); ?></span><br><br>

                    <div style="float:right;  margin: -340px 250px;">
                        <span style="padding-left:12px;">年营业额： <?php echo ($reModi["list"]["turnOver"]); ?></span><br><br>
                        <span style="padding-left:12px;">现有经销商数： <?php echo ($reModi["list"]["ageCount"]); ?></span><br><br>
                        <span style="padding-left:12px;">员工人数： <?php echo ($reModi["list"]["employeeCount"]); ?></span><br><br>
                        <span style="padding-left:12px;">销售人员数： <?php echo ($reModi["list"]["salesCount"]); ?></span><br><br>
                        <span style="padding-left:12px;">现有网点数： <?php echo ($reModi["list"]["netCount"]); ?></span><br><br>
                        <span style="padding-left:12px;">有无质量管理部门： <?php if(($reModi["list"]["qualityManagDep"]) == "0"): ?>无<?php else: ?>有<?php endif; ?></span><br><br>
                        <span style="padding-left:12px;">有无技术研发部门： <?php if(($reModi["list"]["techDep"]) == "0"): ?>无<?php else: ?>有<?php endif; ?></span><br><br>
                        <span style="padding-left:12px;">有无市场策划部门： <?php if(($reModi["list"]["markDep"]) == "0"): ?>无<?php else: ?>有<?php endif; ?></span><br><br>
                        <span style="padding-left:12px;">有无售后服务部门： <?php if(($reModi["list"]["aftersaleDep"]) == "0"): ?>无<?php else: ?>有<?php endif; ?></span><br><br>
                        <span style="padding-left:12px;">状态： 
                            <?php if(($reModi["list"]["state"]) == "0"): ?>未通过<?php endif; ?>
                            <?php if(($reModi["list"]["state"]) == "1"): ?>已审核<?php endif; ?>
                            <?php if(($reModi["list"]["state"]) == "2"): ?>未开通招商<?php endif; ?>
                            <?php if(($reModi["list"]["state"]) == "3"): ?>已删除<?php endif; ?>
                            <?php if(($reModi["list"]["state"]) == "4"): ?>待审核<?php endif; ?>
                        </span><br><br>
                    </div>

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


</html>