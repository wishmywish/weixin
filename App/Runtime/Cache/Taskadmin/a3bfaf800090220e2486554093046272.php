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
.line_input1{
    margin-top: 20px;
}
</style>
    <body>

            <div class="add">

                <div class="line_input1">
                    <span>选择类型：</span>
                    <select name="type" id="type" style="width:285px">
                        <option value="" selected="selected">选择类型</option>
                        <option value="1">广告</option>
                        <option value="3">活动</option>
                    </select>
                </div>

                <div class="line_input1">
                    <span>活动标题：</span> <input type="text" id="title" name="title" style="width:285px" value=""  placeholder="活动标题">
                </div>
                
                <div class="line_input1">
                   <span>活动时间：</span> 
                    <input id="startdate" class="laydate-icon" style="width: 285px;" placeholder="起始时间"  value=""/>  至
                    <input id="enddate" class="laydate-icon" style="width: 285px;" placeholder="终止时间"  value=""/>
                    
                    <!-- <span  class="business_taskAdd_spanText">*最多不超过180天</span> -->
                   
                </div>

                <div class="line_input1">
                    <span>分享地址：</span> <input type="text" id="shareUrl" name="shareUrl" style="width:285px" value="http://"  placeholder="分享地址">
                </div>

                <div class="line_input1">
                    <span>是否URL显示：</span> <input type="checkbox" id="isUrl" name="isUrl"  value="0">
                </div>

                <div class="line_input1">
                    <span>分享描述：</span><br>
                    <textarea  value="" name="adDescription"  id="adDescription" style="width:550px;height:100px;"></textarea>
                </div>

                <div class="line_input1">
                    <span>首页显示：</span> 

                    <select name="isShow" id="isShow" style="width:85px">
                        <!-- <option value="" selected="selected">是否首页显示</option> -->
                        <option value="1">是</option>
                        <option value="0" selected="selected">否</option>
                    </select>

                </div>

                <div class="show_img" id='show_img' style="float: right;margin-right: 675px;margin-top: -10px;"></div>
                <div  class="line_input1">
                    <div class="upfile">
                        <span>活动图片：</span> <button id="btn_up" class="btn btn-default" style="height: 32px;width: 88px;margin-top: 3px;" onclick="$('#upfile').click();">上传</button>
                        <div style="display: none;">
                            <input type="file" id="upfile" name="upfile" accept="image/jpeg,image/gif,image/png">
                        </div>
                        <input type="hidden" id="fileid" name="fileid" value="<?php echo ($reModi["one"]["f_fileid"]); ?>">
                    </div>
                </div>

                <div class="line_input1">
                    <span>活动说明：</span>
                    <div class="editor" style="height: 100%;width: 100%;">
                        <script type="text/plain" id="editor" style="width:100%;height:350px;"></script>
                    </div>
                </div>

                <button  class="adConfirm btn btn-default" id="adConfirm" style="height:31px;width:90px;float:right;margin-top: 8px;margin-bottom: 8px;">确定</button> 

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
        //加截UM
       var um = UM.getEditor('editor',{
          toolbar: ['source bold italic underline insertorderedlist insertunorderedlist forecolor emotion image video fontsize link unlink']
          ,UMEDITOR_HOME_URL:"/wisdom/Public/static/um/"
            ,autoClearinitialContent: true
            //,wordCount: false
            ,elementPathEnabled: false
            ,autoFloatEnabled: false
            ,textarea: 'content'
            //,imageUrl: "<?php echo U('Api/Upfile/upfile');?>"
            //,imagePath: "/wisdom/Public/upfile"
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

        $('#isUrl').click(function(){
            if($(this).is(':checked')){
                $(this).val(1);
            }else{
                $(this).val(0);
            }
        });

        $("#upfile").wrap("<form id='uplogo' action='<?php echo U('Api/Upfile/upF/type/2');?>' method='post' enctype='multipart/form-data'></form>");

        $('#adConfirm').on('click',function(){
            var index = parent.layer.getFrameIndex(window.name); //获取窗口索引

            var type=$("#type option:selected").val();
            var title = $('#title').val() ;
            var startdate = $('#startdate').val() ;
            var enddate = $('#enddate').val() ;
            var shareUrl = $('#shareUrl').val() ;
            var isUrl = $('#isUrl').val() ;
            var isShow=$("#isShow option:selected").val();
            var content = UM.getEditor('editor').getContent() ;
            var fileid = $("#fileid").val() ;
            var adDescription = $('#adDescription').val();

            if (type == '') {
                layer.msg("请选择类型",{'icon':8});
            };

            $.post(APP+"/Api/web/addActivity",
            "type="+type+"&title="+title+"&startdate="+startdate+"&enddate="+enddate+"&shareUrl="+shareUrl+"&isUrl="+isUrl+"&isShow="+isShow+"&content="+content+"&fileid="+fileid+"&adDescription="+adDescription,
            function(data){
               parent.location.reload();
               parent.layer.close(index); 
            },"json");
        });
</script>
</html>