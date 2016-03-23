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
.taskAdd_template_questionList {
  width: 100%;
  min-height: 200px;
}
.taskAdd_template_questionList1 {
  margin: 0 0 0 20px;
  min-height: 100px;
}
.taskAdd_template_question {
  width: 80%;
  min-height: 40px;
  line-height: 40px;
  float: left;
}
.taskAdd_conventionDataInput {
  width: 300px;
  min-height: 30px;
  border: 1px #CACACA solid;
}
.taskAdd_btn {
  width: 30px;
  height: 30px;
  background-color: #14bce1;
  color: #fff;
  margin-left: 15px;
  border: 1px #14bce1 solid;
  font-weight: bold;
  font-size: 20px;
  cursor: pointer;
  margin-top: 10px;
}
.taskAdd_template_answer {
  width: 100%;
  min-height: 100px;
  float: left;
  margin-left: -3px;
  margin-top: 20px;
}
.taskAdd_template_answerInput {
  width: 160px;
  margin-left: 10px;
  margin-top: 10px;
}
.taskAdd_template_answer select {
  width: 60px;
  height: 33px;
}
.taskAdd_answer_input {
  border: none;
  color: red;
  font-size: 12px;
  background-color: #fff;
  margin-left: 10px;
  margin-top: 10px;
  line-height: 30px;
  cursor: pointer;
}
.taskAdd_conventDataList ul {
  float: left;
  margin-top: 10px;
  min-height: 30px;
}
.taskAdd_conventDataList li {
  margin-right: 20px;
  float: left;
}
#taskOption{
  display: inline-block;
  max-width: 100%;
  float: left;
  margin-top: 5px;
  font-weight: normal;
}

html, body {
    margin: 0 auto;
    font-size: 12px;
    font-family: Arial, Helvetica, sans-serif,微软雅黑,宋体;
     background: #FFF; 
    padding: 0;
    height: 100%;
}
#widely_one{

    position: absolute;
    top: 10px;
    background-color: #fff;
}
#widely_two{
    position: absolute;
    top: 450px;
    background-color: #fff;
}
#widely_three{
    position: absolute;
    top: 1065px;
    background-color: #fff;
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
                <div class="page_next" id="widely_one">
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
                            <span>发布单位：</span> <input type="text" id="companyName" placeholder="录入发布单位" value="<?php echo ($reModi["company"]["companyName"]); ?>" readonly><input type="hidden" id="companyId" name="companyId"  value="<?php echo ($reModi["one"]["f_companyid"]); ?>">
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
                    
                    <div class="line">
                        <div class="line_input">
                            <span>所属类别：</span>
                            <select disabled>
                                <option <?php if(($tasktypeid) == "2"): ?>selected<?php endif; ?>>调研类</option>
                                <option <?php if(($tasktypeid) == "4"): ?>selected<?php endif; ?>>调研类</option>
                                <option <?php if(($tasktypeid) == "5"): ?>selected<?php endif; ?>>体验类</option>
                                <option <?php if(($tasktypeid) == "6"): ?>selected<?php endif; ?>>巡检类</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="line" >
                        <div class="line_input">
                            <span>任务详情描述：</span><br>
                            <textarea  value="" name="pro_taskDescription"  id="pro_taskDescription" style="width:550px;height:80px;" disabled="disabled" readonly="readonly"><?php echo ($reModi["f_description"]); ?></textarea>
                        </div>
                    </div>

                </div>

                <div class="page_next" id="widely_two" >
                    <input type="hidden" id="taskId" name="taskId" value="<?php echo ($reModi["f_tid"]); ?>">

                    <div class="line">
                        <div class="line_input">
                            <span>任务总数：</span>
                            <input type="text" id="conven_taskBrand"  name="conven_taskBrand"  value="<?php echo ((isset($reModi["f_totalcopies"]) && ($reModi["f_totalcopies"] !== ""))?($reModi["f_totalcopies"]):0); ?>" class="taskAdd_conventionDataInput" oninput="calcu2();" style="margin-left:59px;" disabled="true">&nbsp 份
                        </div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>单次奖励金币：</span>
                            <input type="text" id="conven_taskProduct"  name="conven_taskProduct"  value="<?php echo ($reModi["f_eachcoin"]); ?>" class="taskAdd_conventionDataInput" oninput="calcu2();" style="margin-left:35px;" disabled="true">&nbsp 元
                        </div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                        <span>平台单次服务佣金：</span>
                        <input type="text" id="conven_saleCommission"  name="conven_saleCommission"  value="<?php echo ($reModi["f_eachcoin"]); ?>" class="taskAdd_conventionDataInput" placeholder="自动计算" disabled="true" style="margin-left:11px;">&nbsp 元
                        </div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                        <span>总佣金：</span>
                        <input type="text" id="conven_totalFee"  name="conven_totalFee"  value="" class="taskAdd_conventionDataInput" placeholder="自动算出，四舍五入" disabled="true" style="margin-left:71px;">&nbsp 元
                        </div>
                    </div>

                     <ul class="taskAdd_conventionDataUl">
                         <li class="taskAdd_conventionDataLi"><label  for="taskDegree" id="taskOption">任务难易程度：</label></li>
                         <li style="  margin: 5px 0 5px 125px;">
                             <input type="radio"  name="taskDegree"  value="1" disabled <?php if(($reModi["f_harder"]) == "1"): ?>checked<?php endif; ?> /><span  style="margin-right:10px">简单</span>
                             <input type="radio"  name="taskDegree"  value="2" disabled <?php if(($reModi["f_harder"]) == "2"): ?>checked<?php endif; ?>/><span  style="margin-right:10px">中等</span>
                             <input type="radio"  name="taskDegree"   value="3" disabled <?php if(($reModi["f_harder"]) == "3"): ?>checked<?php endif; ?>/><span style="margin-right:10px">挑战</span>
                         </li>
                    </ul>

                    <div class="line" style="height: 450px;">
                        <div class="line_input">
                            <span>任务需求：</span><br>
                            <div class="editor" style="height: 100%;width: 580px;float: left;">
                                <script type="text/plain" id="editor2" style="width:580px;height:350px;" name="editor2"></script>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="page_next" id="widely_three" >
                    <input type="hidden" id="detailCount" value="<?php echo ($reModi["detailCount"]); ?>" />
                    <div id="modi_quest">
                    <div  class="taskAdd_template_questionList" id="quest">

                        <?php if ($reModi['detail']) { ?>
                          <?php if(is_array($reModi["detail"])): $k = 0; $__LIST__ = $reModi["detail"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="taskAdd_template_questionList1" id='question_list_<?php echo ($k-1); ?>'>
                                <div class="taskAdd_template_question">
                                    问：<input type="text" name='conventionDataInput'  class="taskAdd_conventionDataInput" style="width:500px" value="<?php echo ($vo["f_problemtatile"]); ?>" readonly/>
                                </div>
                                <div  class="taskAdd_template_answer">
                                    答：<select class="template_answer_selected" name="template_answer" id="template_answer_selected_<?php echo ($k-1); ?>" disabled>
                                          <option  value="0" <?php if(($vo["f_type"]) == "0"): ?>selected<?php endif; ?>>请选择</option>
                                          <option  value="1" <?php if(($vo["f_type"]) == "1"): ?>selected<?php endif; ?>>单选</option>
                                          <option  value="2" <?php if(($vo["f_type"]) == "2"): ?>selected<?php endif; ?>>多选</option>
                                          <option  value="3" <?php if(($vo["f_type"]) == "3"): ?>selected<?php endif; ?>>文本</option>
                                          <option  value="4" <?php if(($vo["f_type"]) == "4"): ?>selected<?php endif; ?>>图片</option>
                                        </select>
                                        <?php if ($vo['f_type']==1 || $vo['f_type']==2) {?>
                                          <?php if(is_array($vo["answer"])): $i = 0; $__LIST__ = $vo["answer"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$answer): $mod = ($i % 2 );++$i;?><input type="text" class="taskAdd_conventionDataInput  taskAdd_template_answerInput" value="<?php echo ($answer); ?>" readonly><?php endforeach; endif; else: echo "" ;endif; ?>
                                        <?php }?>
                                 </div> 
                                 <input type="hidden" id="f_stdindex<?php echo ($k-1); ?>" name="f_stdindex" value="<?php echo ($vo["f_stdindex"]); ?>">
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        <?php }else{ ?>
                          <div class="taskAdd_template_questionList1" id='question_list_0'>
                              <div class="taskAdd_template_question">
                                  问：<input type="text" name='conventionDataInput'  class="taskAdd_conventionDataInput" style="width:500px" readonly/>
                              </div>
                              <div  class="taskAdd_template_answer">
                                  答：<select class="template_answer_selected" name="template_answer" id="template_answer_selected_0" disabled>
                                        <option  value="0">请选择</option>
                                        <option  value="1">单选</option>
                                        <option  value="2">多选</option>
                                        <option  value="3">文本</option>
                                        <option  value="4">图片</option>
                                      </select>
                               </div>
                          </div>
                        <?php }?>

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

    <script src="http://s11.cnzz.com/z_stat.php?id=1256375228&web_id=1256375228" language="JavaScript"></script>
    <script>
        
        $(function(){
            sublevel_out();//子窗口退出
            getTasktype();
            $("#upfile").wrap("<form id='uplogo' action='<?php echo U('Api/Upfile/upF/type/2');?>' method='post' enctype='multipart/form-data'></form>");
            //$("#upfile_ban").wrap("<form id='uplogo_ban' action='<?php echo U('Api/Upfile/upF/type/2');?>' method='post' enctype='multipart/form-data'></form>");
            
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
     var ue=UM.getEditor('editor2',{
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
     
     UM.getEditor('editor2').setContent('<?php echo ($reModi["f_taskrequirements"]); ?>');
     UM.getEditor('editor2').setDisabled('fullscreen');
     $(function(){
      var totalprice1=0;     
      var taskbrand=$('#conven_taskProduct').val()===""?0:$('#conven_taskBrand').val();
      var taskproduct=$('#conven_taskProduct').val()===""?0:$('#conven_taskProduct').val();
      $('#conven_saleCommission').val(taskproduct);
      totalprice1=2*Number(taskproduct)*Number(taskbrand);
      $('#conven_saleCommission').html(taskproduct);
      $('#conven_totalFee').val(totalprice1);
      console.log(taskbrand+","+taskproduct+","+totalprice1);
     });
    </script>
</html>