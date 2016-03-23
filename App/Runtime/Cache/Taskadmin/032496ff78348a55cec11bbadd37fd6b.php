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
.access,.power1,.power2,.power3,.power4,.power5,.power6,.power7,.power8,.power9{
    border: 1px #ecf0f5 solid;
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
                <div class="page_input">

                    <div class="line">
                        <div class="line_input">
                            <span>角色名：</span> &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="accessName" placeholder="角色名" value="">
                        </div>
                    </div>
                    <div class="access">

                        <div class="power1">
                            <div class="power_input1">
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="task1" name="task1"  value="100" onclick="access_show(1,this);"><label for="task1">任务管理</label>
                                <div class="power_input1_access" style="display: none;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" id="power11" name="power11"  value="a" ><label for="power11">添加</label>
                                    <input type="checkbox" id="power21" name="power11"  value="b" ><label for="power21">修改</label>
                                    <input type="checkbox" id="power31" name="power11"  value="c" ><label for="power31">删除</label>
                                    <input type="checkbox" id="power41" name="power11"  value="d" ><label for="power41">客服审核</label>
                                    <input type="checkbox" id="power51" name="power11"  value="e" ><label for="power51">驳回</label>
                                    <input type="checkbox" id="power61" name="power11"  value="f" ><label for="power61">延时</label>
                                    <input type="checkbox" id="power71" name="power11"  value="g" ><label for="power71">更新</label>
                                    <input type="checkbox" id="power81" name="power11"  value="h" ><label for="power81">财务审核</label>
                                    <input type="checkbox" id="power91" name="power11"  value="i" ><label for="power91">下架</label>
                                </div>
                            </div>
                        </div>

                        <div class="power2">
                            <div class="power_input2">
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="task2" name="task2"  value="200" onclick="access_show(2,this);"><label for="task2">任务审核</label>
                                <div class="power_input2_access" style="display: none;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" id="power12" name="power12"  value="a" ><label for="power12">审核</label>
                                </div>
                            </div>
                        </div>

                        <div class="power3">
                            <div class="power_input3">
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="task3" name="task3"  value="300" ><label for="task3">业务员管理</label>
                            </div>
                        </div>

                        <div class="power4">
                            <div class="power_input4">
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="task4" name="task4"  value="400" onclick="access_show(4,this);"><label for="task4">企业管理</label>
                                <div class="power_input4_access" style="display: none;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" id="power14" name="power14"  value="a" ><label for="power14">审核</label>
                                    <input type="checkbox" id="power24" name="power14"  value="b" ><label for="power24">驳回</label>
                                    <input type="checkbox" id="power34" name="power14"  value="c" ><label for="power34">导入企业</label>
                                </div>
                            </div>
                        </div>

                        <div class="power5">
                            <div class="power_input5">
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="task5" name="task5"  value="500" onclick="access_show(5,this);"><label for="task5">活动与广告</label>
                                <div class="power_input5_access" style="display: none;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" id="power15" name="power15"  value="a" ><label for="power15">添加</label>
                                    <input type="checkbox" id="power25" name="power15"  value="b" ><label for="power25">删除</label>
                                    <input type="checkbox" id="power35" name="power15"  value="c" ><label for="power35">修改</label>
                                </div>
                            </div>
                        </div>

                        <div class="power6">
                            <div class="power_input6">
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="task6" name="task6"  value="600" onclick="access_show(6,this);"><label for="task6">提现管理</label>
                                <div class="power_input6_access" style="display: none;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" id="power16" name="power16"  value="a" ><label for="power16">一键付款</label>
                                </div>
                            </div>
                        </div>

                        <div class="power7">
                            <div class="power_input7">
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="task7" name="task7"  value="800" onclick="access_show(7,this);"><label for="task7">招商进度管理</label>
                                <div class="power_input7_access" style="display: none;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" id="power17" name="power17"  value="a" ><label for="power17">查看进程</label>
                                    <input type="checkbox" id="power27" name="power17"  value="b" ><label for="power27">到账确认</label>
                                    <input type="checkbox" id="power37" name="power17"  value="c" ><label for="power37">佣金结算</label>
                                    <input type="checkbox" id="power47" name="power17"  value="d" ><label for="power47">货款结算</label>
                                </div>
                            </div>
                        </div>

                        <div class="power8">
                            <div class="power_input8">
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="task8" name="task8"  value="900" onclick="access_show(8,this);"><label for="task8">产品列表管理</label>
                                <div class="power_input8_access" style="display: none;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" id="power18" name="power18"  value="a" ><label for="power18">添加分类</label>
                                    <input type="checkbox" id="power28" name="power18"  value="b" ><label for="power28">添加产品</label>
                                    <input type="checkbox" id="power38" name="power18"  value="c" ><label for="power38">修改产品</label>
                                    <input type="checkbox" id="power48" name="power18"  value="d" ><label for="power48">产品下架</label>
                                    <input type="checkbox" id="power58" name="power18"  value="e" ><label for="power58">产品上架</label>
                                    <input type="checkbox" id="power18" name="power18"  value="f" ><label for="power68">修改分类</label>
                                    <input type="checkbox" id="power18" name="power18"  value="g" ><label for="power78">删除分类</label>
                                </div>
                            </div>
                        </div>

                        <div class="power9">
                            <div class="power_input9">
                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="task9" name="task9"  value="1000" onclick="access_show(9,this);"><label for="task9">消费记录管理</label>
                                <div class="power_input9_access" style="display: none;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" id="power19" name="power19"  value="a" ><label for="power19">确认收货</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <input type="hidden" id="num"  value="<?php echo ($count); ?>">
                    
                    <div class="next_btn" style="margin-bottom: 115px;">
                        <a class="btn btn-default" href="#" role="button" id="btn_add_access" style="margin-top: 10px;">确定</a>
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

    <script>
    function access_show(num,obj){
        if(obj.checked){
            //选中状态
          $(".power_input"+num+"_access").show();
        }else{
            //未选中状态
          $(".power_input"+num+"_access").hide();
        }
    }
    </script>

</html>