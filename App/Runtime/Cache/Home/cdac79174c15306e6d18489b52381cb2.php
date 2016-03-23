<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <title>日思夜享::企业登录平台</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/wisdom/Public/static/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/wisdom/Public/Home/Default/css/home.css"/>
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/css/jquery.bigautocomplete.css" />
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
    <body>
        <div class="login">
            <div class="login_top">
                <div class="login_top_logo">
                    <div class="logo"><img src="/wisdom/Public/Home/Default/images/logopic.png"/></div>
                    <div class="logo_txt">杭州日思夜享科技有限公司</div>
                </div>
                <div class="login_top_url">APP下载&nbsp;&nbsp;&nbsp;&nbsp;使用说明&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;<a><i class="fa fa-qq"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a><i class="fa fa-weixin"></i></a></div>
            </div>
            <div class="login_body" style="background-color:#0fa3c7;">
                <div class="kong"></div>
                <!--登录窗口-->
                <div class="login_body_center" style="display: block;">
                    <div class="banner"><img src="/wisdom/Public/Home/Default/images/banner.png" width="460" height="440"></div>
                    <div class="line_1"><img src="/wisdom/Public/Home/Default/images/banner_line.png" width="2" height="460"></div>
                    <div class="form">
                        <div style="height: 50px;"></div>
                        <div class="form_logo"><img src="/wisdom/Public/Home/Default/images/login_logo.png">用户登录</div>
                        <div style="height: 50px;"></div>
                        <div class="form_input">
                            <div class="form_input_div">
                                <div class="input_icon"><span class="fa fa-mobile fa-lg"></span></div>
                                <div class="input_input"><input type="text" placeholder="手机号" name="login_mobile"></div>
                            </div>
                            <div style="height: 15px;"></div>
                            <div class="form_input_div">
                                <div class="input_icon"><span class="fa fa-unlock-alt fa-lg"></span></div>
                                <div class="input_input"><input type="password" placeholder="登录密码" name="login_password"></div>
                            </div>
                            <div style="height: 10px;"></div>
                            <div class="form_input_txt">
                                <div class="txt"><input type="checkbox" id="no_forget" checked><label for="no_forget" style="cursor: pointer">记住我</label></div>
                                <div class="txt"><a onclick="show_reg()">注册</a></div>
                                <div class="txt"><a id="forgetpw" onclick="show_forgetpw()">忘记密码</a></div>
                            </div>
                            <div style="height: 30px;"></div>
                            <div class="input_bnt"><input type="button" value="立即登录" onclick="login()" style="cursor: pointer;"></div>
                        </div>
                        <div class="form_btn"></div>
                    </div>
                </div>
                <!--注册用户-->
                <div class="login_body_center_reg" style="display: none;">
                    <div class="reg_title">注册小宝帐号</div>
                    <div style="height: 20px;"></div>
                    <div class="form_input">
                        <div class="form_input_div">
                            <div class="input_icon"><span class="fa fa-group fa-lg"></span></div>
                            <div class="input_input"><input type="text" placeholder="公司名称" id="register_companyName" name="register_companyName"><input type="hidden"  id="register_companyId"  value=""/></div>
                        </div>
                        <div style="height: 11px;"></div>
                        <div class="form_input_div">
                            <div class="input_icon"><span class="fa fa-mobile fa-lg"></span></div>
                            <div class="input_input"><input type="text" placeholder="手机号" id="login_mobile" name="register_mobile"></div>
                        </div>
                        <div style="height: 11px;"></div>
                        <div class="form_input_div">
                            <div class="input_icon"><span class="fa fa-unlock-alt fa-lg"></span></div>
                            <div class="input_input"><input type="password" placeholder="请输入密码" name="register_password"></div>
                        </div>
                        <div style="height: 11px;"></div>
                        <div class="form_input_div">
                            <div class="input_icon"><span class="fa fa-unlock-alt fa-lg"></span></div>
                            <div class="input_input"><input type="password" placeholder="请确认密码" name="register_password2"></div>
                        </div><div style="height: 11px;"></div>
                        <div class="form_input_div">
                            <div class="input_icon"><span class="fa fa-key fa-lg"></span></div>
                            <div class="input_input"><input type="password" placeholder="请输入手机验证码" name="register_code" style="width:150px;"></div>
                            <div class="getCode"><span class="fa fa-code-fork"> 获取验证码</span></div>
                        </div>
                        <div style="height: 30px;"></div>
                        <div class="input_bnt">
                            <input type="button" value="立即注册" id="back_to_login" style="cursor: pointer;">
                            <input type="button" value="返回登录" onclick="show_login()" style="cursor: pointer;margin-left: 15px;float:right">
                        </div>
                    </div>

                </div>
               <!--忘记密码--->
                <div class="login_body_center_reg" style="display: none;" id="findpsw">
                    <div class="reg_title">找回密码</div>
                    <div style="height: 20px;"></div>
                    <div class="form_input">
                        <div style="height: 15px;"></div>
                        <div class="form_input_div">
                            <div class="input_icon"><span class="fa fa-mobile fa-lg"></span></div>
                            <div class="input_input"><input type="text" placeholder="手机号" id="give_mobile" name="give_mobile"></div>
                        </div>
                         <div style="height: 15px;"></div>
                         <div class="form_input_div">
                            <div class="input_icon"><span class="fa fa-key fa-lg"></span></div>
                            <div class="input_input"><input type="password" placeholder="请输入手机验证码" name="give_password" style="width:150px;"></div>
                            <div class="getCode"><span class="fa fa-code-fork"> 获取验证码</span></div>
                        </div>
                        <div style="height: 15px;"></div>
                        <div class="input_bnt">
                            <input type="button" value="下一步" onclick="psw_next()" style="cursor: pointer;width:298px">
                        </div>
                    </div>
                </div>
               <!-- 忘记密码下一步-->
                 <div class="login_body_center_reg" style="display: none;" id="compsw">
                    <div class="reg_title">找回密码</div>
                    <div style="height: 20px;"></div>
                    <div class="form_input">
                       <div style="height: 15px;"></div>
                        <div class="form_input_div">
                            <div class="input_icon"><span class="fa fa-unlock-alt fa-lg"></span></div>
                            <div class="input_input"><input type="password" placeholder="请输入新密码" name="give_password"></div>
                        </div>
                        <div style="height: 15px;"></div>
                        <div class="form_input_div">
                            <div class="input_icon"><span class="fa fa-unlock-alt fa-lg"></span></div>
                            <div class="input_input"><input type="password" placeholder="请重新输入密码" name="give_password2"></div>
                        </div>
                        <div style="height: 15px;"></div>
                        <div class="input_bnt">
                            <input type="button" value="完成" onclick="mod_complete()" style="cursor: pointer;width:298px">
                        </div>
                    </div>

                </div>
            </div>
            <div class="login_foot">
                <span>运营支持：杭州日思夜享科技有限公司</span>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                <span>技术支持：杭州利伊享数据科技有限公司</span>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                <span>Copyright <i class="fa fa-copyright"></i> 2015 All rights reserved.&nbsp;&nbsp;&nbsp;&nbsp;浙ICP备15010709号</span>
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


 
 
 
    <script>
        //自适应高度
        window.onload=function(){
            var H = $(window).height();
            var top = 0;
            if(H>730){
                top = (H-730)/2;
            }
            $('.login').css('top',top+'px');
        };
        //改变大小时自适应高度
        window.onresize=function(){
            var H = $(window).height();
            var top = 0;
            if(H>730){
                top = (H-730)/2;
            }
            $('.login').css('top',top+'px');
        };

        //打开注册界面
        function show_reg (){
            //alert(1);
            $('.login_body_center').css('display','none');
            $('.login_body_center_reg').css('display','block');
            $("#compsw").css('display','none');
            $('#findpsw').css('display','none');
        }
        //打开登录界面
        function show_login(){
            $('.login_body_center').css('display','block');
            $('.login_body_center_reg').css('display','none');
        }
        //忘记密码
        function  show_forgetpw(){
            $('.login_body_center').css('display','none');
            $('#findpsw').css('display','block');
        }
        //忘记密码下一步
        function psw_next(){
            $('#findpsw').css('display','none');
            $("#compsw").css('display','block');
        }
        //忘记密码完成
        function  mod_complete(){
            $("#compsw").css('display','none');
            $('.login_body_center').css('display','block');
        }
        Cookie.eraseCookie('bigMenuIndex',"0");
        Cookie.eraseCookie('smallMenuIndex','0');

            //用户注册
            $('#back_to_login').click(function(){
                var  register_companyName=$.trim($('input[name=register_companyName]').val());
                var  register_companyId=$.trim($('#register_companyId').val());
                var  register_mobile =$.trim($('input[name=register_mobile]').val());
                var  register_password =$.trim($('input[name=register_password]').val());
                var  register_password2=$.trim($('input[name=register_password2]').val());
                var  register_code=$.trim($('input[name=register_code]').val());
                console.log(register_companyName+"=="+register_companyId+"==="+register_mobile+"==="+register_password+"===="+register_password2+"==="+register_code);
                if(register_companyName===""){
                    layer.msg('输入的企业名称不能为空',{icon: 8});
                     $('#register_companyName').focus();
                     return false;
                }
                
                if(register_mobile===""||!(/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/).test(register_mobile)){
                     layer.msg('请检查你注册的手机号码是否正确',{icon: 8});
                     $('#register_mobile').focus();
                     return false;
                }
                if(register_password===""){
                    layer.msg('注册密码不能为空',{icon: 8});
                    $('#register_password').focus();
                    return false;
                }
                if(register_password!==register_password2){
                    layer.msg("输入的两个密码不相同",{icon:8});
                    return false;
                }
                if(register_code===""){
                    layer.msg('验证码不能为空',{icon: 8});
                    $('#register_code').focus();
                    return false;
                }
                
                 //验证码验证
                var loadi=layer.load(0);
                 //先验证输入的验证码是否正确
                $.get(APP+"/Api/Info/conf","command=codeauth&code="+register_code+"&voicephone="+register_mobile,function(val){
                    if(val.error_code=="success"){
                        if(register_companyId===""){
                           var data="command=webregcompany&companyname="+register_companyName+"&phone="+register_mobile+"&password="+register_password;
                           console.log(data);
                          $.post("<?php echo U('Api/Info/conf');?>",data,function(re){
                               layer.close(loadi);
                               if(re.error_code==="success"){
                                   layer.msg("注册成功，请登录",{icon: 9});
                                   location.href="<?php echo U('index');?>";
                                   return false;
                               }  
                              if(re.error_code==="webregcompany_error"){
                                  layer.msg(re.error_text,{icon:8});
                                  return false;
                              }
                              if(re.error_code==="webregcompany_sys_error"){
                                  layer.msg(re.error_text, {icon:8});
                                  return false;
                              }
                           },'json'); 
                        }else{
                             var data="command=zsreguser&companyid="+register_companyId+"&phone="+register_mobile+"&password="+register_password;
                             //console.log(data);
                             $.post("<?php echo U('Api/Info/conf');?>",data,function(v){
                                 layer.close(loadi);
                                 if(v.error_code==="success"){
                                     layer.msg("注册成功,请登录",{icon:9});
                                     location.href="<?php echo U('index');?>";
                                     return false;
                                 }
                                 if(v.error_code==="user_exist"){
                                     layer.msg(v.error_text+",请点击登录",{icon:8});
                                     //清除注册列表的内容从新填写
                                     $('.input_input  input').each(function(){
                                         $(this).val("");
                                         $('#back_to_login').val("注册");
                                         
                                     });
                                     
                                     return false;
                                 }
                             },'json');
                        }
                   }else{
                       layer.close(loadi);
                       layer.msg("验证失败,请重新输入验证码",{icon:8});
                       $("#register_code").focus().val("");
                       return false;
                   } 
               
              },"json");
            });
            
            //登录
            function  login(){
                //获取输入字段
                var  login_mobile=$('input[name=login_mobile]').val();
                var  login_password=$('input[name=login_password]').val();
//                var  login_code=$("input[name=login_code]").val();
               //判断输入的合法性
               console.log(login_mobile);
               if(login_mobile===""||!(/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/).test(login_mobile)){
                   layer.msg('请检查你输入的手机号码是否正确',{icon: 8});
                   $('input[name=login_mobile]').focus();
                   return false;
               }
               if(login_password===""){
                   layer.msg('登陆密码不能为空',{icon: 8});
                   $('input[name=login_password]').focus();
                   return false;
               }
               
//               if(login_code===""){
//                   layer.msg("验证码不能为空",{icon:8});
//                   $("input[name=login_code]").focus();
//                   return false;
//               }
                //console.log(login_mobile+","+login_password);
                 var loadi2=layer.load(0);
                //先验证输入的验证码是否正确
//                $.get(APP+"/Api/Info/conf","command=codeauth&code="+login_code+"&voicephone="+login_mobile,function(val){
//                   if(val.error_code=="success"){
                       //登陆认证 
                      
                 var data="{'command':'login','phone':login_mobile,'password':login_password}";
                  $.post(APP+"/Api/Info/conf",eval('('+data+')'),function(val){

                     layer.close(loadi2);
                     if(val.error_code==='success'){
                         var companyList=val.list;
                         console.log(companyList.length);
                         if(companyList.length===1){
                             //存储用户信息
                             var companyID=companyList[0].companyId;
                             //console.log(companyList[0].companyId);
                             //console.log("-==--=-=-="+val);
                             var data1="{'command':'userlogin','phone':login_mobile,'companyid':companyID}";
                             $.post(APP+"/Api/Info/conf",eval('('+data1+')'),function(val1){
                                 if(val1.error_code==="success"){
                                     layer.msg("登陆成功",{icon:9});
                                     location.href=APP+"/Home/Business/index";
                                 }else{
                                     layer.msg("登陆失败",{icon:8});
                                 }
                             },"json");
                             
                         }else{
                            //弹出层,选择企业
                            var content="<ul class='companyList'>";
                             console.log(companyList);
                            $.each(companyList,function(i,v){
                                content+="<li><input type='radio' name='companyRadio'  value="+v.companyId+"><span  name='companyName'>"+v.companyName+"</span></li>";
                            });
                             content+="</ul>";
                             content+="<div style='text-align:center;margin-top:50px;color:#fff;background-color:#14bce1;width:80px;height:30px;padding-top:10px;cursor:pointer;border-radius:5px'  onclick='login_company_confirm("+login_mobile+")'>确定</div>"
                             layer.open({
                                type:1,
                                title:'请选择公司名称',
                                skin:'layui-layer-rim',
                                area:['420px','250px'],
                                fix:true,
                                move: false,
                                offset:'100px',
                                content:content
                             });
                             
                              
                         }
                       
                     }
                      if(val.error_code==='userorpw_error'){
                          layer.msg(val.error_text,{icon:8});
                          return false;
                      }
                      if(val.error_code==='login_sys_error'){
                          layer.msg(val.error_text,{icon:8});
                          return false;
                      }
                      if(val.error_code==='user_no_exist'){
                          layer.msg(val.error_text+"或密码错误",{icon:8});
                          return false;
                      }
                 },'json');
                       
                       
//                   }else{
//                       layer.msg("验证失败,请重新输入验证码");
//                       $("#login_code").focus().val("");
//                       return false;
//                   } 
//                   
//                    
//                },"json");
                
                 
            }
             
             //确定企业登录信息
                  function   login_company_confirm(login_mobile){
                     var companyId=$('input[name=companyRadio]:checked').val();
                      if(companyId==null){
                          layer.msg("请选择公司",{icon:8});
                      }else{
                         console.log(companyId); 
                          var data="{'command':'userlogin','phone':login_mobile,'companyid':companyId}";
                              //加载用户信息和企业信息 
                              //layer.close();
                            console.log(eval('('+data+')')); 
                              $.post(APP+"/Api/Info/conf",eval('('+data+')'),function(val){ 
                                 //console.log(val+"===================");
                                   if(val.error_code==='success'){
                                       location.href=APP+"/Home/Business/index";
                                       layer.msg('登陆成功',{icon:9});
                                       var ssoToken=val.ssoToken;
                                       var candpList=val.list;
                                       console.log(ssoToken+","+candpList);
                                       return false;
                                       
                                   }
                                   if(val.error_code==='userlogin_error'){
                                       layer.msg(val.error_text,{icon:8});
                                       return false;
                                   }
                                   if(val.error_code==='userlogin_sys_error'){
                                       layer.msg(val.error_text,{icon:8});
                                       return flase;
                                   }
                              },"json");
                             
                      }
            
                  }
            //注册公司检索
            
              $("#register_companyName").bigAutocomplete({width:258,
                url:"<?php echo U('Taskadmin/Fun/searchCname');?>",
                callback:function(data){
                   $('#register_companyId').val(data.result);
                }
            });
            
           
           
           //键盘事件
             document.onkeydown=function(event){
                var e = event || window.event || arguments.callee.caller.arguments[0];      
                if(e && e.keyCode==13){ // enter 键
                 login();
            }
        }; 
            
            var count=60;
            var curCount;//当前剩余秒数
                //验证码
            var code=""; 
            var codeButton="";

            
            //发送手机验证
            function  sendCode(mobile,code_button,mobilename){
                curCount=count;
                codeButton=code_button;
                //alert(mobilename);
                 var login_mobile1=mobile.trim();
                    //alert(login_mobile1);
                    if(login_mobile1===""||!(/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/).test(login_mobile1)){
                      layer.msg('请检查你输入的手机号码是否正确或号码不能为空',{icon: 8});
                      $('input[name='+mobilename+']').focus();
                       return false;
                     }else{
                         $("#"+code_button).css("background-color");
                         $("#"+code_button).css("background-color","red");
                         $("#"+code_button).prop("disabled",true); 
                         $("#"+code_button).text(curCount+"秒后重新获取");
                         //启动计时器,1秒执行一次
                         
                         InterValObj=window.setInterval(SetRemainTime,1000);
                         $.ajax({
                             type:"post",
                             dataType:"json",
                             url:APP+"/Api/Info/conf",
                             data:"command=voicecode&voicephone="+login_mobile1,
                             success: function (msg){ }
                         });
                     }
                
            }
            
            //timer处理函数
             function  SetRemainTime(){
                 //alert(code_button);
                 //console.log(curCount);
                 if(curCount==0){
                     window.clearInterval(InterValObj);//停止计时器
                     $("#"+codeButton).removeProp("disabled");//启动按钮
                     $("#"+codeButton).css("background-color");
                     $("#"+codeButton).css("background-color","#f38401");
                     $("#"+codeButton).text("重新获取验证码");
                     code="";
                 }else{
                     curCount--;
                     $("#"+codeButton).text(curCount+"秒内输入验证码");
                 }
             }
        
    </script>
</html>