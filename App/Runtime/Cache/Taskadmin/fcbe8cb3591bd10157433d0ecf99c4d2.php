<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title></title>
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
html, body {
    margin: 0 auto;
    font-size: 12px;
    font-family: Arial, Helvetica, sans-serif,微软雅黑,宋体;
    background: #FFF; 
    height: 100%;
    width: 100%;
    padding: 15px;
}
</style>
    <body>

        <?php if(($tree) != ""): ?><span>所属分类：</span>
            <select id="shopClassSelect">
                <option  value="-1" >选择分类</option>
                <?php if(is_array($tree)): $k = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><option  value="<?php echo ($vo["f_id"]); ?>" <?php if ($reModi['list']['f_id'] == $vo['f_id']) { echo 'selected';} ?> >
                        <?php if(($vo["lv"]) == "1"): ?>├─<?php endif; ?>

                        <?php if(($vo["lv"]) == "2"): ?>├───<?php endif; ?>

                        <?php if(($vo["lv"]) == "3"): ?>├─────<?php endif; ?>

                        <?php if(($vo["lv"]) == "4"): ?>├───────<?php endif; ?>

                        <?php if(($vo["lv"]) == "5"): ?>├─────────<?php endif; ?>

                        <?php if(($vo["lv"]) == "6"): ?>├───────────<?php endif; ?>

                        <?php if(($vo["lv"]) == "7"): ?>├─────────────<?php endif; ?>

                        <?php if(($vo["lv"]) == "8"): ?>├───────────────<?php endif; ?>

                        <?php if(($vo["lv"]) == "9"): ?>├─────────────────<?php endif; ?>
                        <?php echo ($vo["f_classname"]); ?>
                    </option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        <?php else: ?>
            <span>所属分类：</span>
            <select id="shopClassSelect">
                <option  value="0" >顶级分类</option>
            </select><?php endif; ?>
        <br><br>

        <div class="upfile">
            <span>产品图片：</span> <button id="btn_up" class="btn btn-default" onclick="$('#upfile').click();">上传</button>
            <div style="display: none;">
                <input type="file" id="upfile" name="upfile" accept="image/jpeg,image/gif,image/png">
            </div>
            <input type="hidden" id="fileid" name="fileid" value="<?php echo ($reModi["list"]["fileid"]); ?>">
        </div><br>
        <div class="progress_up" id='progress_up'><div class="bar" id='bar'></div></div>
        <div class="show_img" id='show_img'></div>

        <?php if ($reModi['list']['f_filepath']) {?>
        <!--  {$reModi['one']['f_name']['f_filepath']}<?php echo ($reModi["one"]["f_name"]["f_filename"]); ?> -->
        <div id="showPic">
            <img src="/wisdom/Public/upfile/<?php echo ($reModi["list"]["f_filepath"]); echo ($reModi["list"]["f_filename"]); ?>" width="50" height="50">
        </div>
        <?php }?>

        <span>产品名称：</span></span> <input type="text" id="title" name="title" placeholder="请输入分类名称" value="<?php echo ($reModi["list"]["f_shopname"]); ?>"><br><br>

        <span>产品简介：</span><br>
        <textarea  value="" name="shopDescription"  id="shopDescription" style="width:550px;height:100px;"><?php echo ($reModi["list"]["f_description"]); ?></textarea><br><br>

        <span>产品总数：</span>
        <input type="text" id="shopNum"  name="shopNum" value="<?php echo ($reModi["list"]["f_shopsum"]); ?>"  class="taskAdd_conventionDataInput">&nbsp; 份<br><br>

        <span>产品单价：</span>
        <input type="text" id="shopPrice"  name="shopPrice" value="<?php echo ($reModi["list"]["f_price"]); ?>"  class="taskAdd_conventionDataInput">&nbsp; 元<br><br>

        <span>参与活动：</span>
        <input type="radio" name="activity" value="0" <?php if(($reModi["list"]["f_activename"]) == "0"): ?>checked<?php endif; if(($reModi["list"]["f_activename"]) == ""): ?>checked<?php endif; ?>>正常价格
        <input type="radio" name="activity" value="1"<?php if(($reModi["list"]["f_activename"]) == "1"): ?>checked<?php endif; ?>>优惠价格<br><br>

        <span>产品详情描述：</span>
        <div class="editor" style="height: 100%;width: 610px;">
            <script type="text/plain" id="editor1" style="width:600px;height:350px;" name="editor1"></script>
        </div>
         <input type="hidden" id="f_sid" name="f_sid" value="<?php echo ($reModi["list"]["f_sid"]); ?>">
        <a class="btn btn-default" href="#" role="button" id="addShopBtn" style="margin:-121px 0px 0px 425px;">确定</a>
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
            $("#upfile").wrap("<form id='uplogo' action='<?php echo U('Api/Upfile/upF/type/2');?>' method='post' enctype='multipart/form-data'></form>");
    </script>
    <script type="text/javascript">
     //实例化编译器
     var ue=UM.getEditor('editor1',{
         toolbar: ['source bold italic underline insertorderedlist insertunorderedlist forecolor emotion image video fontsize link unlink'],
         UMEDITOR_HOME_URL:"/wisdom/Public/static/um/",
         autoClearinitialContent: true,
         elementPathEnabled: false,
         autoFloatEnabled: false,
        // textarea: 'content'
     });
     //通过getContent和setContent方法可以设置和读取编译器的内容
     //读取配置
     // var lang=ue.getOpt('lang');默认返回：zh-cn
     
     //加载三级联动
     
//     _init_area();
//     getArea(<?php echo ((isset($reModi["one"]["f_tid"]) && ($reModi["one"]["f_tid"] !== ""))?($reModi["one"]["f_tid"]):0); ?>);
//     getPro(<?php echo ((isset($reModi["one"]["f_tid"]) && ($reModi["one"]["f_tid"] !== ""))?($reModi["one"]["f_tid"]):0); ?>);
     
     UM.getEditor('editor1').setContent('<?php echo ($reModi["list"]["f_note"]); ?>');
  </script>
</html>