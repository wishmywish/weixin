<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="../../../Public/static/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../../../Public/static/jquery.form.js"></script>
<script type="text/javascript" src="../../../Public/static/layer/layer.js"></script>
<script>
    var APP = "/wisdom/index.php";//当前应用（入口文件）地址,例:/根目录/index.php
</script>
<title>个人设置</title>
</head>
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

                   <input type="hidden" id="userid" value="<?php echo ($reModi["id"]); ?>">

                   <div class="line">
                        <div class="line_input">
                           <span>用户名:</span> &nbsp; <input type="text" id="username" placeholder="用户名" value="<?php echo ($reModi["username"]); ?>" disabled>
                        </div>
                    </div><br>

                    <div class="line">
                        <div class="line_input">
                           <span>旧密码：</span> &nbsp;<input type="password" id="oldPassword" placeholder="用户旧密码" value="">
                           <span style="font-size:6px;">（若不填写，则默认没有修改密码，即密码为原先密码）</span>
                        </div>
                    </div><br>

                    <div class="line">
                        <div class="line_input">
                           <span>新密码：</span> &nbsp;<input type="password" id="newPassword" placeholder="用户新密码" value="">
                        </div>
                    </div><br>

                    <div class="line">
                        <div class="line_input">
                           <span>真实姓名：</span> <input type="text" id="realname" placeholder="真实姓名" value="<?php echo ($reModi["realname"]); ?>" disabled>
                        </div>
                    </div><br>

                    <div class="line">
                        <div class="line_input">
                           <span>所属角色：</span> 
                           <select id="user_accessname" disabled>
                            <?php if(is_array($result)): $k = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><option  value="<?php if ($reModi['list']['accessid'] == $vo['id']) { echo $reModi['list']['accessid'];}else{echo $vo['id'];} ?>" <?php if ($reModi['list']['accessid'] == $vo['id']) { echo 'selected';} ?>  >
                                    <?php echo ($vo["accessname"]); ?>
                                </option><?php endforeach; endif; else: echo "" ;endif; ?>
                           </select>
                        </div>
                    </div>

                    <input name="hi" type="button" value="确定" onClick="modiUer()" style="margin: 15px 0 0 300px;"> 
                    <div class="line_one"></div>
                </div>

            </div>
        </div>
    </body>
    <script>
        function modiUer(){
            var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
            var userid=$("#userid").val();
            var username=$("#username").val();
            var realname=$("#realname").val();
            var accessid=$("#user_accessname").val();

            if($("#oldPassword").val()==""){
                $.post(APP+"/Api/Web/modiAdminUser",
                    "username="+username+"&realname="+realname+"&accessid="+accessid+"&userid="+userid,
                    function(data){
                        parent.location.reload();
                        parent.layer.close(index);
                },"json");
            }else{
                if($("#newPassword").val()==""){
                    layer.msg('请填写新密码', {icon: 8});
                    $("#newPassword").focus();
                    return false;
                }else{
                    $.post(APP + "/Api/Web/confirmPassword", "oldPassword=" + $("#oldPassword").val()+"&userid="+userid, function (v) {
                        if (v.result === '000000') {
                            $.post(APP+"/Api/Web/modiAdminUser",
                                "username="+username+"&realname="+realname+"&accessid="+accessid+"&userid="+userid+"&newPassword="+$("#newPassword").val(),
                                function(data){
                                    parent.location.reload();
                                    parent.layer.close(index);
                            },"json");
                        } else {
                            layer.msg('旧密码不正确，请重新输入！', {'icon': 8});
                            return false;
                        }
                    }, 'json');


                }
            }
        }
    </script>
</html>