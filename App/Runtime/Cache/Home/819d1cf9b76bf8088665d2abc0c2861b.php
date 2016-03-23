<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>智慧推广::跟踪审核</title>
        <style>
            /*列出所有图标*/
            /*菜单红条*/
            .menu_line_red{background:url(/wisdom/Public/Home/Default/images/bg.png) repeat-x -0px -10px;}
            /*菜单蓝条*/
            .menu_line_blue{background:url(/wisdom/Public/Home/Default/images/bg.png) repeat-x -0px -15px;}
        </style>
        <script>
            var ROOT = "/wisdom";//网站根目录地址,例:/根目录
            var APP = "/wisdom/index.php";//当前应用（入口文件）地址,例:/根目录/index.php
            var APP_NAME = "__APP_NAME__";//网站应用根目录,例:/根目录/应用目录
            var IMG = "/wisdom/Public/Home/Default/images";
            var STATIC = "/wisdom/Public/static";
            var UPFILE = "/wisdom/Public/upfile";
            var THEME = "/wisdom/Public/Home/Default";
            var bigMenuIndex = 0; //大类LI下标
            var smallMenuIndex = 0;//小类LI下标
        </script>
        <script src="/wisdom/Public/static/js/jquery.JPlaceholder.js"></script>
        <script type="text/javascript" src="/wisdom/Public/static/jquery-1.11.2.min.js"></script>
        <!--cookie插件-->
        <script type="text/javascript" src="/wisdom/Public/static/cookie.js"></script>

        <script type="text/javascript" src="/wisdom/Public/Home/Default/js/fun.js"></script>
        
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/Home/Default/css/home.css" />
        
        <!--自动补全插件-->
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/css/jquery.bigautocomplete.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/um/themes/default/css/umeditor.css" />
        <link rel="stylesheet" type="text/css" href="/wisdom/Public/static/um/themes/default/css/umeditor.min.css" />
        <script type="text/javascript" src="/wisdom/Public/static/layer/layer.js"></script>

    </head>
    <body>
        <div class="head">
            <div class="head_center">
                <div class="logo"><img src="/wisdom/Public/upfile/logo/logo.png" width="50" height="50"></div>
                <div class="company_name"><?PHP echo cookie("companyName")?></div>
                <div class="search">
                    <div class='input_input'><input type="text" name="search_text" id="search_text"></div>
                    <div class="input_icon"><span class="fa fa-search fa-lg"></span></div>
                </div>
                <div class="personal_info">
                    <div  style="width:100%;"><div class="pro_img"></div><div><?php echo cookie("mobile")?><b class="caret"></b></div></div> 
                    <div class="personal_info_set">
                       <ul>
<!--                        <li>帮助</li>-->
                       
                        <li onclick="location.href = APP+'/Admin/Group/index'">企业设置</li>
                        <li onclick="location.href = APP+'/Home/Business/index'">返回首页</li>
                        <li id="back_system">退出</li>
                       </ul>
                    </div>
                 
                </div>
<!--                <div class="back_system"  id="back_system">退出</div>-->
            </div>
        </div>
        <script>
            $("#back_system").click(function(){
                var loadi=layer.load(0);
                $.get("<?php echo U('Api/outLogin');?>",function(){
                    Cookie.eraseCookie("bigMenuIndex");
                    Cookie.eraseCookie("smallMenuIndex");
                    layer.close(loadi);
                    layer.msg("成功退出系统",{icon:9})
                    location.href=APP+"/Home/Index/index";
                }); 
            });
            $(".personal_info").mouseover(function(event) {
                $(".personal_info_set").show();
            });
            $(".personal_info").mouseout(function(event){
                $(".personal_info_set").hide();
            });
            


        </script>
<div class="menu">
    <div class="menu_big">
        <div class="menu_big_list">
            <ul id="menu_big_list_button">
                <?php if(is_array($bigclass)): $i = 0; $__LIST__ = $bigclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li value="<?php echo ($vo["f_sys_column_url"]); ?>" id="<?php echo ($vo["f_sys_column_cid"]); ?>" contextmenu="<?php echo ($vo["f_sys_column_urltype"]); ?>"><?php echo ($vo["f_sys_column_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <div class="menu_small">
        <div class="menu_small_list">
            <ul id="menu_small_list_button">
                <?php if(is_array($smallclass)): $i = 0; $__LIST__ = $smallclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><li value="<?php echo ($vos["f_sys_column_url"]); ?>" dir="<?php echo ($vos["f_sys_column_target"]); ?>" id="<?php echo ($vos["f_sys_column_cid"]); ?>" contextmenu="<?php echo ($vos["f_sys_column_urltype"]); ?>"><?php echo ($vos["f_sys_column_name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="menu_bg_line">
            <ul id="menu_small_tab_line">
                <?php if(is_array($smallclass)): $i = 0; $__LIST__ = $smallclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><li></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
<div style="width: 100%;height: 2px;clear:both;"></div>
<script>
    //默认加载
    $(function(){
        if(Cookie.readCookie('bigMenuIndex')===null){
            Cookie.createCookie('bigMenuIndex',0,1);
            Cookie.createCookie('smallMenuIndex',0,1);
        }
        //alert(Cookie.readCookie('bigMenuIndex'));
        $('#menu_big_list_button li').eq(Cookie.readCookie('bigMenuIndex')).attr('class','selected');
        $('#menu_small_list_button li').eq(Cookie.readCookie('smallMenuIndex')).attr('class','selected');
        $('#menu_small_tab_line li').eq(Cookie.readCookie('smallMenuIndex')).attr('class','menu_tab_bg_line');
    });
    
    $('#menu_small_list_button li').mouseover(function(){
        var ind = parseInt($(this).index());
       
        if(ind!==parseInt(Cookie.readCookie('smallMenuIndex'))){
            $('#menu_small_tab_line li').eq(ind).attr('class','menu_tab_bg_line');
            $('#menu_small_tab_line li').eq(Cookie.readCookie('smallMenuIndex')).removeClass('menu_tab_bg_line');
            
            $('#menu_small_list_button li').eq(ind).attr('class','selected');
            $('#menu_small_list_button li').eq(Cookie.readCookie('smallMenuIndex')).removeClass('selected');
        }
    });
    $('#menu_small_list_button li').mouseout(function(){
        var ind = $(this).index();
        $('#menu_small_tab_line li').eq(ind).removeClass('menu_tab_bg_line');
        $('#menu_small_tab_line li').eq(Cookie.readCookie('smallMenuIndex')).attr('class','menu_tab_bg_line');
        
        $('#menu_small_list_button li').eq(ind).removeClass('selected');
        $('#menu_small_list_button li').eq(Cookie.readCookie('smallMenuIndex')).attr('class','selected');
    });
    
    //点击大类
    $('#menu_big_list_button').on('click','li',function(){
        var url_0 = $(this).attr('value');
        var key = $(this).attr('contextmenu');
        Cookie.createCookie('bigMenuIndex',$(this).index(),1);
        Cookie.createCookie('smallMenuIndex',0,1);
        $('#menu_big_list_button li').removeClass('selected');
        $(this).attr('class','selected');
        if(key==='1'){
            location.href = APP+"/"+url_0;
        }else{
            location.href = url_0;
        }
    });
    
    //点击小类
    $('#menu_small_list_button').on('click','li',function(){
        var url_0 = $(this).attr('value');
        var key = $(this).attr('contextmenu');
        var target_1 = $(this).attr('dir');
        //alert(target_1);
        Cookie.createCookie('smallMenuIndex',$(this).index(),1);
        $('#menu_small_list_button li').removeClass('selected');
        $(this).attr('class','selected');
        if(key==='1'){
            location.href = APP+"/"+url_0;
        }else if(key==='2'){
            if(target_1==="oms"){
                //alert($('#oms').attr('src'));
                //target_1.location.href = url_0;
                $('#oms').attr('src',url_0);
            }else{
                location.href = url_0;
            }
        }
    });

    
</script>
<div class="index">
    <div id="rev_menu_left" class="class_menu_left">
        <ul id="bigmenu">
            <li id="0" class="org_box org_box_select"><span class="org_bot_cor"></span>推广赚</li>
            <li id="1" class="org_box"><span ></span>随手赚</li>
        </ul>
    </div>
    <div class="rev_main_right">
        <div id="a0">
            <div class="top1">
                 <span>首页</span> > <span>跟踪审核</span> > <span>推广赚</span>
            </div>
            <div class="searchDiv">
                 <ul>
                        <li  style="width:400px;">
                           <span>任务标题 ：</span>
                            <select class="border_mer" style="width:200px" id="track_list_title_make" onchange="trackmake_choosetype(this.value)">               
                            </select> 
                        </li>
                        
                </ul>
                <ul id='trackmake_total' style='color:#f38401;font-weight:bold'></ul>
            </div>
            <div class="table_mer">
                <ul>
                    <li class="title_mer " style="width:5%;">序号</li>
                    <li class="title_mer " style="width:10%;">业务员</li>
                    <li class="title_mer " style="width:12%;">新浪微博</li>
                    <li class="title_mer " style="width:12%;">腾讯微博</li>
                    <li class="title_mer " style="width:12%;">QQ空间</li>
                    <li class="title_mer " style="width:13%;">微信好友</li> 
                    <li class="title_mer " style="width:13%;">微信朋友圈</li> 
                    <li class="title_mer " style="width:13%;">微信收藏</li>
                    <li class="title_mer" style="width:10%;">QQ</li>
                </ul>
            </div>
             <div id="trackAudit_make"></div>
             <div id="trackAudit_makepagebar" class="pagebar" style="color:#696969;margin-top:30px">
             
             </div>  
            
        </div>
        <div id="a1" style="display: none;">
            <div class="top1">
                 <span>首页</span> > <span>跟踪审核</span> > <span>随手赚</span>
            </div>
            
            <div class="searchDiv">
                    <ul>
                        <li  style="width:400px;">
                           <span>任务标题 ：</span>
                            <select class="border_mer" style="width:200px" id="track_list_title_earn" onchange="trackeran_choosetype(this.value)">               
                            </select> 
                        </li>
                        <li  style="width:60px;">
                            <!--<span class="btn2" id="readyThrough">审核通过</span>-->                            
                            <?php if(in_array("c1",$access_array)){ echo '<span class="btn2" id="readyThrough">审核通过</span> '; } ?>
                        </li>
                        <li  style="width:100px;">
                            <!--<span class="btn2"  id="hasAudit" >已审核</span>-->
                            <?php if(in_array("c2",$access_array)){ echo '<span class="btn2"  id="hasAudit" >已审核</span> '; } ?>
                        </li>
                        <li  style="width:100px;">
                            <!--<span class="btn2" id="pendverf" >待审核</span>-->
                            <?php if(in_array("c3",$access_array)){ echo '<span class="btn2" id="pendverf" >待审核</span>'; } ?>
                        </li>
                    </ul>
<!--                onclick="readyThrough()-->
            </div>
            <div class="table_mer">
                    <ul>
                    <li class="title_mer " style="width:10%"><input style="vertical-align:middle" type="checkbox"  name="all_trackAudit_earn"  onclick="all_checkLine(this,'trackAudit_earn_grid')"/></li>
                    <li class="title_mer " style="width:10%;">序号</li>
                    <li class="title_mer " style="width:20%;">任务类型</li>
                    <li class="title_mer"  style="width:10%">业务员</li>
                    <li class="title_mer"  style="width:10%">提交时间</li>
                    <li class="title_mer"  style="width:15%">任务状态</li>
                    <li class="title_mer " style="width:25%;">任务详情查看</li>   
                    </ul>
                 
            </div>
           
            <div id="trackAudit_earn">
            
            </div>
              
            <div id="trackAudit_earnpagebar" class="pagebar" style="color:#696969;margin-top:30px">
             
            </div>
        </div>
      
        </div>
    </div>
</div>
</div>
<script>
    $("#hasAudit").on("click",function(){
        var id=$("#track_list_title_earn").val();
        console.log(id);
        trackeran_choosetype(id,3);
    });
    
    $("#pendverf").on("click",function(){
        var id2=$("#track_list_title_earn").val();
        console.log(id2);
        trackeran_choosetype(id2,1);
    });
    $('#bigmenu li').click(function(){
        var lilen = $('#bigmenu li').length;
        $('#bigmenu li').removeClass('org_box org_box_select');
        $('#bigmenu li span').removeClass('org_bot_cor');
        $('#bigmenu li').attr('class','org_box'); 
        $(this).attr('class','org_box  org_box_select');
        $(this).children('span').attr('class','org_bot_cor');
        for(var i=0;i<lilen;i++){
            $('#a'+i).hide();
            if($(this).index()===i){
                $('#a'+i).show();
    
            }
        }
    });
               
 
    //跟踪审核 随手赚
    var cid=Cookie.readCookie("LYX_companyId");
    
    gettrackMaketitle(cid,1,"track_list_title_make");
    //根据任务标题选择
     $('input[name=all_trackAudit_earn]').removeAttr('checked');
     $.post(APP+"/Api/Web/gettasktitle","companyid="+cid+"&tasktypeid=2",function(val){
         $("#track_list_title_earn").empty();
         if(val.list!=0){
           var list="<option  value='0' selected >选择任务标题</option>";
          
            $.each(val.list,function(i,v){
             list += "<option value='"+v.f_tid+"'>"+v.f_title+"</option>";
            });
           $("#track_list_title_earn").append(list);
         }
         if(val.list==0){
             
             var list="<option  value='0' selected >暂无可选任务</option>";
             $("#track_list_title_earn").append(list);
         }
     },"json");           
                     
  
   function trackeran_choosetype(titleID){
      var utask_status=arguments[1]?arguments[1]:1;
      //alert(utask_status);
      if(titleID==0){
          layer.msg("请选择需要查询的任务标题",{icon:8});
          $("#trackAudit_earn").empty();
          $("#trackAudit_earnpagebar").empty();
          Cookie.eraseCookie("trackearnID");
          Cookie.createCookie("trackearnID",0);
          return false;
      }
      Cookie.eraseCookie("trackearnID");
      Cookie.createCookie("trackearnID",titleID);
      $('input[name=all_trackAudit_earn]').removeAttr('checked');
      listData(APP+"/Api/Web/get_track_earn","companyid="+cid+"&taskid="+titleID+"&utask_status="+utask_status,"post","json",2);
       $(function(){
            $(document).on('click','#trackAudit_earnpagebar span a',function(){
                var tid1=Cookie.readCookie("trackearnID"); 
                 //alert(tid1+"=2"); 
                 var rel = $(this).attr("rel"); 
              listData(APP+"/Api/Web/get_track_earn","companyid="+cid+"&taskid="+tid1+"&page="+rel+"&utask_status="+utask_status,"get","json",2);
          });
        });     
 }  
        
   function   check_trackearn_surevylist(tid,submituserid){
               //alert(tid+","+submituserid);
              $.post(APP+"/Api/Web/trackearn_answer","tid="+tid+"&submituserid="+submituserid,function(val){
                  var content="";
                  var arr=new Array();
                  var arr1=new Array();
                  content+="<div style='margin:20px 20px 20px 20px;min-height:500px;'>";
                  $.each(val.list,function(i,n){
                      var answer=n.f_answer;
                      var option=n.f_options; 
                      content+="</br><span style='color:#14bce1'>问 :</span><span style='color:#f38401'>"+n.f_problemtatile+"</span>";
                      
                      if(n.f_type=="1"){ //拆分选项
                        content+="<span style='color:#14bce1'>(单选)</span></br><span style='color:red'>答：</span>";
                        arr=option.split('|');
                        for(var i=0;i<arr.length;i++){
                           if((answer-1)==i){
                              content+="<input type='checkbox' checked  disabled/><span style='color:green'>"+arr[i]+"</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                           }
                              content+="<input type='checkbox' disabled/>"+arr[i]+"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; 
                        }
                          content+="</br>";
                      }else if(n.f_type=="2"){
                          //多选
                          content+="<span style='color:#14bce1'>(多选)</span></br><span style='color:red'>答：</span>";
                          arr=option.split('|');
                          arr1=answer.split(',');
                          console.log(arr1);
                          for(var i=0;i<arr1.length;i++){
                              for(var j=0;j<arr.length;j++){
                                   if((arr1[i]-1)==j){
                                       content+="<input type='checkbox' checked  disabled/><span style='color:green'>"+arr[j]+"</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";    
                                   }
                                    
                              }
                           
                                content+="<input type='checkbox' disabled/>"+arr[i]+"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";   
                         }
                           
                            content+="</br>";
                      }else if(n.f_type=="3"){
                          //文本
                      }else{
                          //图片
                      }
                  });
                   content+="</div>";
                   layer.open({
                                type:1,
                                title:'报告详情',
                                skin:'layui-layer-rim',
                                area:['500px'],
                                content:content
                     });
              },'json');
          }    
            
            //随手审核
    $('#readyThrough').on('click',function(){
                var checked=$('input[name="trackAudit_earn_grid"]:checked');
                console.log(checked);
                var tid=Cookie.readCookie("trackearnID");
                //alert(tid);
                var checklist=[];
               // var checked1=[];
                checked.each(function(){
                    //alert($(this).val());
                    checklist.push($(this).val());
                });
                if(tid==0){
                    layer.msg("请选择任务或暂时没任务",{icon:8});
                    //return false;
                }else if(checklist=="" || checklist==null){
                    layer.msg("请选择审核对象",{icon:8});
                }else{
                    layer.confirm('确定审核?',{
                        btn:['确定','取消'],
                        shade:false
                    },function(){
                        layer.closeAll();
                        $.post(APP+'/Api/Web/trackearn_shenhe','checklist='+checklist+'&tid='+tid,function(val){
                            if(val.error_code=='true'){
                                //alert("==============");
                                $('input[name="all_trackAudit_earn"]:checked').removeAttr('checked');
                                $('input[name="trackAudit_earn_grid"]:checked').removeAttr('checked');
                                rel=$("#trackAudit_earnpagebar span a").attr("rel");
                                layer.msg('审核成功,点击已审核查看',{icon:9});
                                 for(var $i=0;$i<checklist.length;$i++){
                                    $("#trackAudit_earn_grid_"+checklist[$i]).parent().siblings().parent().remove();
                                }
                                if($("#trackAudit_earn ul").length==0){
                                     trackeran_choosetype(tid,1);
                            }
                            if(val.error_code=='false'){
                                layer.msg("已审核",{icon:8});
                                $('input[name="all_trackAudit_earn"]:checked').removeAttr('checked');
                                $('input[name="trackAudit_earn_grid"]:checked').removeAttr('checked');
                            }
                        }
                    },"json");
                    },function(){
                       layer.msg('请在核实后再审核',{shift:6});
                       $('input[name="all_trackAudit_earn"]:checked').removeAttr('checked');
                       $('input[name="trackAudit_earn_grid"]:checked').removeAttr('checked');
                    });     
                    
                }    
            });
            
       
 //推广赚
  function   trackmake_choosetype(titleID){
       if(titleID==0){
          layer.msg("请选择需要查询的任务标题",{icon:8});
          $("#trackAudit_make").empty();
          $("#trackAudit_makepagebar").empty();
          $("#trackmake_total").empty(); 
          return false;
      }
      Cookie.eraseCookie("trackmakeID");
      Cookie.createCookie("trackmakeID",titleID);
       //$('input[name=all_trackAudit_earn]').removeAttr('checked');
       listData(APP+"/Api/Web/get_track_make","taskid="+titleID+"","post","json",1);
       $(function(){
            $(document).on('click','#trackAudit_makepagebar span a',function(){
                 var tid2=Cookie.readCookie("trackmakeID"); 
                 //alert(tid1+"=2"); 
                 var rel = $(this).attr("rel"); 
                // alert(rel);
              listData(APP+"/Api/Web/get_track_make","taskid="+tid2+"&page="+rel,"get","json",1);
          });
        });
        var tid3=Cookie.readCookie("trackmakeID");
        $("#trackmake_total").empty();
        $.post(APP+"/Api/Web/get_track_makeTotal","taskid="+tid3,function(rel){
          var wechat=0; var  WechatFavorite=0;var WechatMoments=0; var QZone=0;
          var QQ=0;var SinaWeibo=0; var TencentWeibo=0; 
           var list2="";
           console.log(rel+"===");
           console.log(rel.listtotal.length+"&&&&");
           var n=rel.listtotal;
          for(var i in n){ 
             if(n[i]['f_platform']==="Wechat"){
                 wechat=n[i]['num'];
  }
              if(n[i]['f_platform']==="WechatFavorite"){
                  WechatFavorite=n[i]['num'];
               }
              if(n[i]['f_platform']==="WechatMoments"){
                WechatMoments=n[i]['num'];
             }
              if(n[i]['f_platform']==="QZone"){
                QZone=n[i]['num'];
            }
             if(n[i]['f_platform']==="QQ"){
                 QQ=n[i]['num'];
            }
             if(n[i]['f_platform']==="SinaWeibo"){
                 SinaWeibo=n[i]['num'];
            }
             if(n[i]['f_platform']==="TencentWeibo"){
                 TencentWeibo=n[i]['num'];
             }
                 
        }
           list2+="<li style='width:50px'><img  src='/wisdom/Public/Home/Default/images/SinaWeibo.png' style='margin-right:5px'/> <span>"+SinaWeibo+"</span></li>";
           list2+="<li style='width:50px'><img  src='/wisdom/Public/Home/Default/images/TencentWeibo.png' style='margin-right:5px'/> <span>"+TencentWeibo+"</span></li>";
           list2+="<li style='width:50px'><img  src='/wisdom/Public/Home/Default/images/QZone.png' style='margin-right:5px'/> <span>"+QZone+"</span></li>";
           list2+="<li style='width:50px'><img  src='/wisdom/Public/Home/Default/images/wechat.png' style='margin-right:5px'/> <span>"+wechat+"</span></li>";
           list2+="<li style='width:50px'><img  src='/wisdom/Public/Home/Default/images/WechatFavorite.png' style='margin-right:5px'/><span>"+WechatFavorite+"</span></li>";
           list2+="<li style='width:50px'><img  src='/wisdom/Public/Home/Default/images/WechatMoments.png' style='margin-right:5px'/><span>"+WechatMoments+"</span></li>";
           list2+="<li style='width:50px' ><img  src='/wisdom/Public/Home/Default/images/QQ_1.png' style='margin-right:5px'/><span>"+QQ+"</span></li>"; 
         $("#trackmake_total").append(list2);
  },"json");
  }
</script>
</body>
</html>