<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>                                                        
<meta http-equiv="Cache-Control" content="no-transform" />
<link rel="alternate" media="handheld" href="#" />
<link href="/wisdom/Public/static/css/font-awesome.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/wisdom/Public/Home/Default/css/dealer.css" />
<title>经销商详情完善</title>
<script>
    var ROOT = "/wisdom";//网站根目录地址,例:/根目录
    var APP = "/wisdom/index.php";//当前应用（入口文件）地址,例:/根目录/index.php
    var APP_NAME = "__APP_NAME__";//网站应用根目录,例:/根目录/应用目录
    var IMG = "/wisdom/Public/Home/Default/images";
    var STATIC = "/wisdom/Public/static";
    var UPFILE = "/wisdom/Public/upfile";
    var THEME = "/wisdom/Public/Home/Default";
 </script>
</head>

<style type="text/css">
#center { 
text-align:center;
margin-left:auto; 
margin-right:auto;
}
.m_line{margin-top: 40px;}

</style>
<body>
    <br>
        <div id="center">
        <i class='fa fa-flag' style='    font-size: 40px;color: #77DDFF;'></i><span style="    margin: 50px 0 0 -37px;position: absolute;"><a href="/wisdom/index.php/Home/Business/proCheck?dealerid=<?php echo ($dealerid); ?>" style="text-decoration:none;color:black;cursor:pointer;">中标</a></span><i class="fa fa-arrow-right" style='    font-size: 20px;    padding-left: 10px;'></i>

        <i class='fa fa-flag' style="font-size: 40px;color:<?php if(($comContract) == ""): ?>gray<?php else: ?>#77DDFF<?php endif; ?>;"></i><span style="    margin: 50px 0 0 -37px;position: absolute;"><a onclick="isContract(<?php echo ($dealerid); ?>);" style="text-decoration:none;color:black;cursor:pointer;">合同</a></span><i class="fa fa-arrow-right" style='    font-size: 20px;    padding-left: 10px;'></i>

        <i class='fa fa-flag' style="font-size: 40px;color: <?php if(($comRemit) == ""): ?>gray<?php else: ?>#77DDFF<?php endif; ?>;"></i><span style="    margin: 50px 0 0 -37px;position: absolute;"><a onclick="isRemit(<?php echo ($dealerid); ?>);" style="text-decoration:none;color:black;cursor:pointer;">打款</a></span><i class="fa fa-arrow-right" style='    font-size: 20px;    padding-left: 10px;'></i>

        <i class='fa fa-flag' style="font-size: 40px;color:  <?php if(($finishDispatch) == ""): ?>gray<?php else: ?>#77DDFF<?php endif; ?>;"></i><span style="    margin: 50px 0 0 -37px;position: absolute;"><a onclick="isDispatch(<?php echo ($dealerid); ?>);" style="text-decoration:none;color:black;cursor:pointer;">发货</a></span><i class="fa fa-arrow-right" style='    font-size: 20px;    padding-left: 10px;'></i>

        <i class='fa fa-flag' style="font-size: 40px;color:  <?php if(($receive) == ""): ?>gray<?php else: ?>#77DDFF<?php endif; ?>;"></i><span style="    margin: 50px 0 0 -37px;position: absolute;"><a onclick="isReceive(<?php echo ($dealerid); ?>);" style="text-decoration:none;color:black;cursor:pointer;">收货</a></span><i class="fa fa-arrow-right" style='    font-size: 20px;    padding-left: 10px;'></i>

        <i class='fa fa-flag' style="font-size: 40px;color:  <?php if(($square) == ""): ?>gray<?php else: ?>#77DDFF<?php endif; ?>;"></i><span style="    margin: 50px 0 0 -37px;position: absolute;"><a onclick="isSettlement(<?php echo ($dealerid); ?>);" style="text-decoration:none;color:black;cursor:pointer;">结算</a></span>

    </div>

    <div>
        <hr class="m_line"></hr>   
    </div>

    <div  style="min-height:400px;">

        <span style="text-align: center;height: 20px;font-weight: bold;margin: auto;">经销商已经打款，请尽快发货并进行发货确认。</span>

        <div class="upContract">
              <p class="first" style="color:#000;">上传发货单:</p>
              <div class="upfile">
              <button class="btn" onclick="$('#profileImg').click();">上传发货单</button>
              <button class="btn" id="comDispath" onclick="comDispath();">请确认上传</button>
              <span id="delContract" class="btn"></span>
              <div style="display: none;">
                    <input type="file" id="profileImg" name="upfile" accept="image/jpeg,image/gif,image/png">
              </div>
              <input type="hidden" id="profile1" name="profile1" value="<?php echo ($reModi["one"]["f_fileid"]); ?>">
              <input type="hidden" id="dealerId" name="dealerId" value="<?php echo ($dealerid); ?>">
              </div><br>
              <div class="show_img" id='show_proimg1'></div>
              <div class="show_img_contract"></div>
        </div> 

    </div>
</body>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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


 
 
 
<script type="text/javascript">

        $("#profileImg").wrap("<form id='up_prologo' action='<?php echo U('Api/Upfile/upF/type/2');?>' method='post' enctype='multipart/form-data'></form>");

</script>
</html>