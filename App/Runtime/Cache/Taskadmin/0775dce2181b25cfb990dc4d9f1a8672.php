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
                <div class="page_strat">
                    <div id="tip_one" class="span_tip_red">创建任务</div>
                    <div id="tip_two" class="span_tip_ccc">基本信息</div>
                </div>

                <div class="page_next" id="push_one">

                    <div class="big_line">
                        <div  class="line_input">
                            <div class="upfile">
                                <span>任务图标：</span> <button id="btn_up" class="btn btn-default" onclick="$('#upfile').click();">上传</button>
                                <div style="display: none;">
                                    <input type="file" id="upfile" name="upfile" accept="image/jpeg,image/gif,image/png">
                                </div>
                                <input type="hidden" id="fileid" name="fileid" value="<?php echo ($reModi["one"]["f_fileid"]); ?>">
                            </div>
                            <div class="show_progress_no" id='show_progress_no'>0%</div>
                            <div class="progress_up" id='progress_up'><div class="bar" id='bar'></div></div>
                            <div class="show_img" id='show_img'></div>
                            <?php if ($reModi['one']['f_name']) {?>
                            <!--  {$reModi['one']['f_name']['f_filepath']}<?php echo ($reModi["one"]["f_name"]["f_filename"]); ?> -->
                            <div id="showPic">
                                <img src="/wisdom/Public/upfile/<?php echo ($reModi["one"]["f_name"]["f_filepath"]); echo ($reModi["one"]["f_name"]["f_filename"]); ?>" width="50" height="50">
                            </div>
                            <?php }?>
                        </div>
                        <div class="line_note">*3:1比例，大小50K以内</div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>发布单位：</span> <input type="text" id="companyName" placeholder="录入发布单位" value="<?php echo ($reModi["one"]["companyName"]); ?>"><input type="hidden" id="companyId" name="companyId" value="<?php echo ($reModi["one"]["f_companyid"]); ?>">
                        </div>
                        <div class="line_note">*输入时自动检索，没用请先开户</div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>任务标题：</span> <input type="text" id="title" name="title" placeholder="请输入任务标题" value="<?php echo ($reModi["one"]["f_title"]); ?>">
                        </div>
                        <div class="line_note">*任务的标题，显示在客户端</div>
                    </div>
                    
                    
                    <div class="line">
                        <div class="line_input">
                            <span>任务时间：</span> 
                            <input id="startdate" class="laydate-icon" style="width: 120px;" value="<?php echo ($reModi["one"]["f_begindate"]); ?>">
                            <input id="enddate" class="laydate-icon" style="width: 120px;" value="<?php echo ($reModi["one"]["f_enddate"]); ?>">
                        </div>
                        <div class="line_note">*最多不超过180天</div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>任务联系：</span> <input type="text" id="linkman" name="linkman" placeholder="业务联系人" value="<?php echo ($reModi["one"]["f_linkman"]); ?>">
                        </div>
                        <div class="line_note">*企业联系人</div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>联系电话：</span> <input type="text" id="linkphone" name="linkphone" placeholder="联系电话" value="<?php echo ($reModi["one"]["f_linkphone"]); ?>">
                        </div>
                        <div class="line_note">*企业联系人的电话</div>
                    </div>


                    <div class="line">
                        <div class="line_input">
                            <span>任务详情描述：</span>
                            <textarea  value="" name="pro_taskDescription"  id="pro_taskDescription" style="width:550px;height:100px;"><?php echo ($reModi["one"]["f_description"]); ?></textarea>
                        </div>
                    </div>
                    
                    <input type="hidden" id="tasktypeid" name="tasktypeid" value="1">
                    <div class="next_btn" style="margin-bottom: 115px;"><a class="btn btn-default" href="#" role="button" id="btn_push_one" style="margin-top: 115px;">下一步</a></div>
                    <div class="line_one"></div>
                </div>


                <div class="page_next" id="push_two" style='display: none;'>
                    <div class="line">
                        <div class="line_input">
                            <span>任务品牌：</span> <input type="text" id="mtbrand" name="mtbrand" placeholder="招商品牌" value="<?php echo ($reModi["pro"]["f_ppconditions"]); ?>" style="margin-left:60px;">
                        </div>
                        <div class="line_note">*</div>
                    </div>
                    
                    <input type="hidden" id="taskId" name="taskId" value="<?php echo ($reModi["one"]["f_tid"]); ?>">
                    <input type="hidden" id="indexid" name="indexid" value="<?php echo ($reModi["pro"]["f_indexid"]); ?>">
                    <div class="line">
                        <div class="line_input">
                            <span>任务总数：</span>
                            <input type="text" id="pro_taskBrand"  name="pro_taskBrand" value="<?php echo ($reModi["pro"]["f_totalcopies"]); ?>"  class="taskAdd_conventionDataInput" oninput="calcu();" style="margin-left:60px;">&nbsp 份
                        </div>
                        <div class="line_note">*</div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>单次奖励佣金：</span>
                            <input type="text" id="pro_taskProduct"  name="pro_taskProduct" value="<?php echo ($reModi["pro"]["f_eachcoin"]); ?>"  class="taskAdd_conventionDataInput" oninput="calcu();" style="margin-left:35px;">&nbsp 元
                        </div>
                        <div class="line_note">*(1元=10金币)&nbsp&nbsp 系统自动配奖励3个银票</div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>平台单次服务佣金：</span>
                        <input type="text" id="pro_saleCommission"  name="pro_saleCommission" value="<?php echo ($reModi["pro"]["f_eachcoin"]); ?>"  class="taskAdd_conventionDataInput"  disabled="true" style="margin-left:10px;">&nbsp 元
                        </div>
                        <div class="line_note">*自动计算</div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>总佣金：</span>
                        <input type="text" id="pro_totalFee"  name="pro_totalFee" value=""  class="taskAdd_conventionDataInput"  disabled="true" style="margin-left:70px;" >&nbsp 元
                        </div>
                        <div class="line_note">*自动算出，四舍五入</div>
                    </div>

                    <div class="line">
                        <div class="line_input">
                            <span>热门标签：</span>
                        <input type="text" id="pro_industry"  name="pro_industry"  value="" class="taskAdd_conventionDataInput" style="margin-left:57px;">
                        </div>
                        <div class="line_note">*多个标签可用“，”隔开</div>
                    </div>

                    <div class="line" style="height: 450px;">
                        <div class="line_input">
                            <span>任务需求：</span>
                            <div class="editor" style="height: 100%;width: 610px;float: left;">
                                <script type="text/plain" id="editor1" style="width:600px;height:350px;" name="editor1"></script>
                            </div>
                        </div>
                    </div>


                    <input type="hidden" id="indexid" name="indexid" value="<?php echo ((isset($reModi["two"]["f_indexid"]) && ($reModi["two"]["f_indexid"] !== ""))?($reModi["two"]["f_indexid"]):0); ?>">
                    <div class="next_btn">
                        <a class="btn btn-default" href="#" role="button" id="return_push_one" >上一步</a>
                        <a class="btn btn-default" href="#" role="button" id="btn_push_two">完成</a></div>
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
            $("#upfile").wrap("<form id='uplogo' action='<?php echo U('Api/Upfile/upF/type/2/size/51200');?>' method='post' enctype='multipart/form-data'></form>");
            //$("#upfile_ban").wrap("<form id='uplogo_ban' action='<?php echo U('Api/Upfile/upF/type/2');?>' method='post' enctype='multipart/form-data'></form>");
            
            //公司自动补全
            $("#companyName").bigAutocomplete({width:300,
                url:"<?php echo U('Taskadmin/Fun/searchCname');?>",
                callback:function(data){
                    $('#companyId').val(data.result);
                }
            });
            

        var start = {
            elem: '#startdate',
            format: 'YYYY-MM-DD',
            min: laydate.now(), //设定最小日期为当前日期
            max: '2099-06-16', //最大日期
            //istime: true,
            istoday: false,
            choose: function(datas){
                 end.min = datas; //开始日选好后，重置结束日的最小日期
                 end.start = datas //将结束日的初始值设定为开始日
            }
        };
        var end = {
            elem: '#enddate',
            format: 'YYYY-MM-DD',
            min: laydate.now(),
            max: laydate.now(+180),
            //istime: true,
            istoday: false,
            choose: function(datas){
                start.max = datas; //结束日选好后，重置开始日的最大日期
            }
        };
        laydate(start);
        laydate(end);
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
     //通过getContent和setContent方法可以设置和读取编译器的内容
     //读取配置
     // var lang=ue.getOpt('lang');默认返回：zh-cn
     
     //加载三级联动
     
//     _init_area();
//     getArea(<?php echo ((isset($reModi["one"]["f_tid"]) && ($reModi["one"]["f_tid"] !== ""))?($reModi["one"]["f_tid"]):0); ?>);
//     getPro(<?php echo ((isset($reModi["one"]["f_tid"]) && ($reModi["one"]["f_tid"] !== ""))?($reModi["one"]["f_tid"]):0); ?>);
     
     UM.getEditor('editor1').setContent('<?php echo ($reModi["pro"]["f_taskrequirements"]); ?>');
  </script>
</html>