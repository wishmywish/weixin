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
#push_one{
    position: absolute;
    top: 10px;
}
#push_two{
    position: absolute;
    top: 430px;
    background-color: #fff;
}

html, body {
    margin: 0 auto;
    font-size: 12px;
    font-family: Arial, Helvetica, sans-serif,微软雅黑,宋体;
     background: #FFF; 
    padding: 0;
    height: 100%;
}
</style>
    <body>
        <div class="add_menu">
    <ul class="add_tab">
        <?php if(is_array($tab)): $i = 0; $__LIST__ = $tab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($classtype == $vo["f_typeid"] ): ?><li value="<?php echo ($vo["f_typeid"]); ?>" class="selected"><?php echo ($vo["f_typename"]); ?></li>
            <?php else: ?>
                <li value="<?php echo ($vo["f_typeid"]); ?>"><a href="<?php echo U($vo['f_note']);?>"><?php echo ($vo["f_typename"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>

        <div class="add">
            <div class="add_business">

                <div class="page_next" id="push_one">

                    <div class="big_line">
                        <div  class="line_input">
                                <span>任务图标：</span> 
                            <?php if ($reModi['tubiao']) {?>
                            <!--  {$reModi['one']['f_name']['f_filepath']}<?php echo ($reModi["one"]["f_name"]["f_filename"]); ?> -->
                            <div id="showPic">
                                <img src="/wisdom/Public/upfile/<?php echo ($reModi["tubiao"]["f_filepath"]); echo ($reModi["tubiao"]["f_filename"]); ?>" width="50" height="50">
                            </div>
                            <?php }?>
                        </div>
                        
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>发布单位：</span> <input type="text" id="companyName" placeholder="录入发布单位" value="<?php echo ($reModi["company"]["companyName"]); ?>" readonly><input type="hidden" id="companyId" name="companyId" value="<?php echo ($reModi["one"]["f_companyid"]); ?>">
                        </div>
                        
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>任务标题：</span> <input type="text" id="title" name="title" placeholder="请输入任务标题" value="<?php echo ($reModi["f_title"]); ?>" readonly>
                        </div>
                       
                    </div>
                    
                    
                    <div class="line">
                        <div class="line_input">
                            <span>任务时间：</span> 
                            <input id="startdate" class="laydate-icon" style="width: 120px;" value="<?php echo ($reModi["f_begindate"]); ?>" disabled>
                            <input id="enddate" class="laydate-icon" style="width: 120px;" value="<?php echo ($reModi["f_enddate"]); ?>" disabled>
                        </div>
                       
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>任务联系：</span> <input type="text" id="linkman" name="linkman" placeholder="业务联系人" value="<?php echo ($reModi["f_linkman"]); ?>" readonly>
                        </div>
                       
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>联系电话：</span> <input type="text" id="linkphone" name="linkphone" placeholder="联系电话" value="<?php echo ($reModi["f_linkphone"]); ?>" readonly>
                        </div>
                    </div>


                    <div class="line" >
                        <div class="line_input">
                            <span>任务详情描述：</span><br>
                            <textarea  value="" name="pro_taskDescription"  id="pro_taskDescription" style="width:550px;height:100px;"disabled="disabled" readonly="readonly"><?php echo ($reModi["f_description"]); ?></textarea>
                        </div>
                    </div>
                    
                </div>

                <div class="page_next" id="push_two">
                    <div class="line">
                        <div class="line_input">
                            <span>任务品牌：</span> <input type="text" id="mtbrand" name="mtbrand" placeholder="招商品牌" value="<?php echo ($reModi["f_ppconditions"]); ?>" style="margin-left:60px;" readonly>
                        </div>
                    </div>
                    
                    <div class="line">
                        <div class="line_input">
                            <span>任务总数：</span>
                            <input type="text" id="pro_taskBrand"  name="pro_taskBrand" value="<?php echo ($reModi["f_totalcopies"]); ?>"  class="taskAdd_conventionDataInput"  readonly style="margin-left:60px;">&nbsp 份
                        </div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>单次奖励佣金：</span>
                            <input type="text" id="pro_taskProduct"  name="pro_taskProduct" value="<?php echo ($reModi["f_eachcoin"]); ?>"  class="taskAdd_conventionDataInput"  readonly style="margin-left:35px;">&nbsp 元
                        </div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>平台单次服务佣金：</span>
                        <input type="text" id="pro_saleCommission"  name="pro_saleCommission" value="<?php echo ($reModi["f_eachcoin"]); ?>"  class="taskAdd_conventionDataInput"  disabled="true" style="margin-left:10px;">&nbsp 元
                        </div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>总佣金：</span>
                        <input type="text" id="pro_totalFee"  name="pro_totalFee" value=""  class="taskAdd_conventionDataInput"  disabled="true" style="margin-left:70px;" >&nbsp 元
                        </div>
                    </div>

                    <div class="line" style="height: 450px;">
                        <div class="line_input">
                            <span>任务需求：</span><br>
                            <div class="editor" style="height: 100%;width: 610px;float: left;">
                                <script type="text/plain" id="editor1" style="width:600px;height:350px;" name="editor1"></script>
                            </div>
                        </div>
                    </div>

                    <div class="line_one"></div>
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
            
            sublevel_out();//子窗口退出
            
            getTasktype();
            
            //公司自动补全
            $("#companyName").bigAutocomplete({width:300,
                url:"<?php echo U('Taskadmin/Fun/searchCname');?>",
                callback:function(data){
                    $('#companyId').val(data.result);
                }
            });
        });
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
     
     UM.getEditor('editor1').setContent('<?php echo ($reModi["f_taskrequirements"]); ?>');
     UM.getEditor('editor1').setDisabled('fullscreen');

     $(function(){
      var totalprice1=0;     
      var taskbrand=$('#pro_taskProduct').val()===""?0:$('#pro_taskBrand').val();
      var taskproduct=$('#pro_taskProduct').val()===""?0:$('#pro_taskProduct').val();
      $('#pro_saleCommission').val(taskproduct);
      totalprice1=2*Number(taskproduct)*Number(taskbrand);
      $('#pro_saleCommission').html(taskproduct);
      $('#pro_totalFee').val(totalprice1);
      console.log(taskbrand+","+taskproduct+","+totalprice1);
     });

  </script>
</html>