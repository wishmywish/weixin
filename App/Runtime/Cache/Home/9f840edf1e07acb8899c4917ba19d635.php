<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>智慧招商::审核管理</title>
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
                <div class="logo"><img style="height: 30px;margin-top: 8px;" src="/wisdom/Public/upfile/logo/logo.png" ></div>
                <div class="company_name"><?PHP echo cookie("companyName")?></div>

                <!--<div class="search">-->
                    <!--<div class='input_input'><input type="text" name="search_text" id="search_text"></div>-->
                    <!--<div class="input_icon"><span class="fa fa-search fa-lg"></span></div>-->
                <!--</div>-->

                <div class="personal_info">
                    <div  style="width:100%;"><div class="pro_img"><img style="height: 35px;" src="/wisdom/Public/Home/Default/images/user2.jpg"></div><div><?php echo empty(cookie("nickName"))?cookie("mobile"):cookie("nickName"); ?><b class="caret"></b></div></div>
                    <div class="personal_info_set">
                       <ul>
<!--                        <li>帮助</li>-->
                       
                        <?php if( !in_array("e1",$access_array) ){ echo "<!--"; } ?><li onclick="location.href = APP+'/Admin/Group/index'">企业设置</li>
                                                                               <?php if( !in_array("e1",$access_array) ){ echo "-->"; } ?></li>
                        <li onclick="location.href = APP+'/Home/Business/index'">返回首页
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
<!--<div style="width: 100%;height: 2px;clear:both;"></div>-->
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
            <li id="0" class="org_box org_box_select"><span class="org_bot_cor"></span>手动筛选</li>
            <li id="1" class="org_box"><span ></span>已中标</li>
        </ul>
    </div>
    <div class="rev_main_right">
       
        <div id="a0" >
            <div class="top1">
                 <span>首页</span> > <span>审核管理</span> > <span>手动筛选</span>
            </div>
            <div class="searchDiv" >
                    <ul>
                        <li>
                          <div>
                              <span>任务标题</span>
                              <select class="border_mer"  style="margin-left:7px" id="business_Manual_select"  onchange="dealerchoose(this.value,3,'business_manualScreen_list','business_manualScreen_page',3)">
                                 
                              </select>                                                             	

                           </div>
                         
                        </li>

                        <li style="margin-left:385px">
                            <?php if(in_array("a1",$access_array)){ echo '<span class="btn2" style="margin-left:200px"  onclick="dealerdid()" >中标</span>'; } ?>
                        </li>
                    </ul>
            </div>
            <div class="table_mer">
                  <ul>
                    <li class="title_mer " style="width:5%;"><input style="vertical-align:middle" type="checkbox" role="checkbox" name="all_manualScreen"  id="manualScreen_grid"  onclick="all_checkLine(this,'manualScreen_grid');"/></li>
                    <li class="title_mer " style="width:5%;">序号</li>
                    <li class="title_mer " style="width:20%;">经销商名称</li>
                    <li class="title_mer " style="width:20%;">联系人</li>
                    <li class="title_mer " style="width:15%;">职位</li>
                    <li class="title_mer " style="width:15%;">联系电话</li>
                    <li class="title_mer " style="width:20%;">业务员</li>
                </ul>
            </div>
            <div style="width:100%;min-height:500px;margin-bottom:20px">
             <div  id="business_manualScreen_list">
            </div>
            </div>
            <div  style='width:100%;margin-top:30px;min-height:30px'>
                <div  id="business_manualScreen_page"  class="pagebar" style="color:#696969;margin-top:30px;border-top:1px dotted #EAEAEA"></div>
            </div>
        </div>
        <div id="a1" style="display: none;">
            <div class="top1">
                <span>首页</span> > <span>审核管理</span> > <span>已中标</span>
            </div>
            <div class="searchDiv">
                    <ul>
                        <li>
                            <span>任务标题</span>
                            <select class="border_mer" style="margin-left:7px"  id="business_Manual_select2"  onchange="dealerchoose(this.value,1,'business_success_list','business_success_page',1)">
                            </select>
                        </li>
                    </ul>
            </div>
            <div style='min-height:500px;width:100%;margin-bottom:30px'>
               <div id="business_success_list">
         
               </div>
            </div>
            <div style='width:100%;margin-top:-20px;float:left'>
                <div  id="business_success_page"  class="pagebar" style="color:#696969;margin-top:30px;border-top:1px dotted #EAEAEA"></div>
            </div>
           </div>

    </div>
    </div>
</div>
</div>
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
    $('#bigmenu li').click(function(){
//        $("#business_success_page").empty();
        var lilen = $('#bigmenu li').length;
        $('#bigmenu li').removeClass('org_box org_box_select');
        $('#bigmenu li span').removeClass('org_bot_cor');
        $('#bigmenu li').attr('class','org_box'); 
        //$(this).children().addClass('org_bot_cor');
        $(this).attr('class','org_box  org_box_select');
        $(this).children('span').attr('class','org_bot_cor');
        for(var i=0;i<lilen;i++){
            $('#a'+i).hide();
            if($(this).index()==i){
                $('#a'+i).show(); 
            }
        }
    });
   var cid=Cookie.readCookie("LYX_companyId");
    //添加任务标题
    gettrackMaketitle(cid,3,"business_Manual_select");
    gettrackMaketitle(cid,3,"business_Manual_select2");
   //手动筛选数据的加载
   //提交给厂家的经销商数据加载
   function  dealerchoose(taskid,status,datalist,datapage,type){
      if(taskid==0){
          layer.msg("请选择需要查询的任务标题",{icon:8});
          $("#"+datalist).empty();
          $("#"+datapage).empty();
          Cookie.eraseCookie("businesstaskID");
          Cookie.createCookie("businesstaskID",0);
          return false;
      }
      Cookie.eraseCookie("businesstaskID");
      Cookie.createCookie("businesstaskID",taskid);

      $('input[name=all_manualScreen]').removeAttr('checked');
       buslistData(APP+"/Api/Web/get_business_dealer","taskid="+taskid+"&dealer_status="+status+"&type="+type,"post","json",type,datapage,datalist);
       $(function(){
            $(document).on('click','#'+datapage+' span a',function(){
                var tid1=Cookie.readCookie("businesstaskID");  
                var rel = $(this).attr("rel"); 
           buslistData(APP+"/Api/Web/get_business_dealer","taskid="+tid1+"&page="+rel+"&dealer_status="+status+"&type="+type,"post","json",type,datapage,datalist);
          });
        });  
   }
   
   function  buslistData(url,data,type,datatype,typeid,page1,datalist){
       var load="";

       $.ajax({
//           async:false,
           type:type,
           url:url,
           data:data,
           dataType:datatype,
           beforeSend:function(){
              load=layer.load(0);
           },
           success:function(rel){
            total = rel.total; //总记录数
            pageSize = rel.pageSize; //每页显示条数
            page = rel.page; //当前页
            totalPage = rel.totalPage; //总页数

            if(rel.list!=null){
                if(typeid==1){ //中标后

                   business_success_list(rel.list,datalist);
                 }
                if(typeid==3){ //即将审核中标
                   business_manualScreen_list(rel.list,datalist);

                }
            }else{
                   $('#'+datalist).empty();
                   var list="<ul style='text-align:center;color:red'><li>暂无数据！</li></ul>";
                   $('#'+datalist).append(list);    
            }
           },
           complete:function(){
               layer.close(load);
               getPageBar1(page1);
           },
       });
   }
   
   //中标列表
    function   business_success_list(list,datalist){
        var lt="";
        $("#"+datalist).empty();
        $.each(list,function(i,v){
              lt+="<div class='allDiv'>";
              lt+="<div class='downDiv'>";
              lt+="<ul class='titlSp'>"+v.dealerlist.f_companynameone+"</ul>";
              lt+="<?php if( !in_array("a2",$access_array) ){ echo "<!--"; } ?><div class='btn1' id='proCheck' onclick='proCheck("+v.dealerlist.f_dealerid+")'>招商进度管理</div><?php if( !in_array("a3",$access_array) ){ echo "-->"; } ?>";
              lt+="<ul>";
              lt+="<li>主营产品：<span>"+v.dealerlist.f_mainindustry+"</span></li>";
              lt+="<li>年营业额：<span>"+v.dealerlist.f_yearturnover+"</span></li>";
              lt+="<li>网点数量：<span>"+v.dealerlist.f_latticepointqty+"</span></li>";
              lt+="<li>经营区域：<span>"+v.dealerlist.f_area+"</span></li>";
              lt+="</ul>";
              lt+="</div>";
              lt+="<hr class='line'/>";
              lt+="<div  class='downDiv'>";
              lt+="<ul class='titlSp'>业务员：<span>"+v.truename+"</span></ul>";
//              lt+="<div class='btn3'>信息咨询<span class='count'>8</span></div>";
              lt+="<ul>";
              lt+="<li>联系方式:<span>"+v.mobile+"</span></li>";
              lt+="<li>身份证号码：<span>"+v.idcard+"</span></li>";
//            lt+="<li class='btn3' title='咨询信息' onclick='advireply("+v.dealerlist.f_dealerid+","+v.dealerlist.f_userid+","+cid+")'><i class='fa fa-comment-o fa-2x'></i><span class='count'>8</span></li>";

              lt+= "<?php if( !in_array("a2",$access_array) ){ echo "<!--"; } ?><li class='btn3' title='咨询信息' onclick='advireply("+v.dealerlist.f_dealerid+","+v.dealerlist.f_userid+","+cid+")'><i class='fa fa-comment-o fa-2x chat'></i><span class='count'>"+ v.unReadMessage +"</span></li><?php if( !in_array("a1",$access_array) ){ echo "-->"; } ?>";

              lt+="</ul>";
              lt+="</div></div>";
         });
        $("#"+datalist).append(lt);

    }
   //审核经销商列表
    function   business_manualScreen_list(list,datalist){
        var lt="";
        $("#"+datalist).empty();
        $.each(list,function(i,v){
             lt+="<ul>";
             lt+="<li class='title_mer' style='width:5%;'><input style='vertical-align:middle' type='checkbox'  name='manualScreen_grid' id='manualScreen_grid_"+v.f_dealerid+"'  role='checkbox'  value='"+v.f_dealerid+"'/></li>";
             lt+="<li class='title_mer' style='width:5%;'>"+(pageSize*(page-1)+i+1)+"</li>"; 
             lt+="<li id='layerr2' class='title_mer' style='width:20%;color:#14BCE0;cursor:pointer' onclick='showdelaerdetail("+v.f_dealerid+")'><u>"+v.f_companynameone+"</u></li>";            
             lt+="<li class='title_mer' style='width:20%;'>"+v.f_contactsname+"</li>";                 
             lt+="<li class='title_mer' style='width:15%;'>"+v.f_titleone+"</li>";
             lt+="<li class='title_mer' style='width:15%;'>"+v.f_phoneone+"</li>";
             lt+="<li class='title_mer' style='width:20%;color:#f38401'  onclick='showbusman("+v.f_userid+")'><u style='cursor: pointer'>查看详情</u></li>";
             lt+="</ul>";
        }); 
        $("#"+datalist).append(lt);
    }
   //中标操作
   function  dealerdid(){
        var taskId = $('#business_Manual_select').val();    //任务id
        var checked=$('input[name="manualScreen_grid"]:checked');   //所选供应商
                var tid=Cookie.readCookie("businesstaskID");
                var checklist=[];
                checked.each(function(){
                    checklist.push($(this).val());
                });
                if(tid==0){
                    layer.msg("请选择任务或暂时没任务",{icon:8});
                }else if(checklist=="" || checklist==null){
                    layer.msg("请选择中标对象",{icon:8});
                }else{
                    layer.confirm('确定中标?',{
                        btn:['确定','取消'],
                        shade:false
                    },function(){
                        layer.closeAll();
                        $.post(APP+'/Api/Web/dealerselected','checklist='+checklist+'&taskId='+taskId,function(val){
                            if(val.error_code=='true'){
                                $('input[name="all_manualScreen"]:checked').removeAttr('checked');
                                $('input[name="manualScreen_grid"]:checked').removeAttr('checked');
                                rel=$("#trackAudit_earnpagebar span a").attr("rel");
                                layer.msg('中标成功,点击已审核查看',{icon:9});

                                for(var $i=0;$i<checklist.length;$i++){
                                    $("#manualScreen_grid_"+checklist[$i]).parent().siblings().parent().remove();
                                 }
                                if($("#business_manualScreen_list ul").length==0){
                                      dealerchoose(tid,3,'business_manualScreen_list','business_manualScreen_page',3);
                                }
                                      dealerchoose(tid,3,'business_manualScreen_list','business_manualScreen_page',3);
                                      dealerchoose($("#business_Manual_select2>option:eq(0)").val(),1,'business_success_list','business_success_page',1);
                                      $("#business_Manual_select2").val($("#business_Manual_select2>option:eq(0)").val());
                           
                        }
                    },"json");
                    },function(){
                       layer.msg('请在核实后再中标',{shift:6});
                       $('input[name="all_manualScreen"]:checked').removeAttr('checked');
                       $('input[name="manualScreen_grid"]:checked').removeAttr('checked');
                    });     
                    
                }  
       
   }
   //经销商详情
   function  showdelaerdetail(dealerid){
       $.post(APP+"/Api/Web/getdetaldealer2","dealerid="+dealerid,function(re){

              layer.open({ 
    type: 1,
    shade: false,
    title: false, //不显示标题
    //area: ['500px','500px'], //宽高
    content:'\
        <div id="downDiv">\n\
               <ul class="downDiv">公司名称：<span>'+re.list.f_companynameone+'</span></ul>\n\
               <ul class="downDiv">详细地址：<span>'+re.list.f_address1+'</span></ul>\n\
            <div class="downDiv1"> \n\
                <ul>\n\
                    <li>主营产品：<span>'+re.list.f_mainindustry+'</span></li>\n\
                    <li>年营业额：<span>'+re.list.f_yearturnover+'</span></li>\n\
                    <li>经营区域：<span>'+re.list.f_area+'</span></li>\n\
                    <li>网点数量：<span>'+re.list.f_latticepointqty+'</span></li>\n\
                    <li>平均流动资金：<span>'+re.list.f_floatingcapital+'</span></li>\n\
                </ul>\n\
            </div>\n\
            <div class="downDiv1">\n\
                <ul>\n\
                    <li>代理品牌：<span>'+re.list.f_famousbrandname+'</span></li>\n\
                    <li>公司规模：<span>'+re.list.f_salesqty+'</span></li>\n\
                    <li>主要渠道：<span>'+re.list.f_channeltype+'</span></li>\n\
                    <li>物流车数：<span>'+re.list.f_carsqty+'辆</span></li>\n\
                    <li>特别优势：<span>'+re.list.f_advantage+'</span></li>\n\
                </ul>\n\
            </div>\n\
        </div>'
      
    
       });
        },"json");
   }
  
  //经销商下的业务员
  function   showbusman(userid){

      $.post(APP+"/Api/Web/getUser","userid="+userid,function(rel){
         sex=rel.list.sex=="0"?"女":"男";
         layer.open({
         type: 1,
         shade: false,
         title: false, //不显示标题
         content:'\
         <div id="downDiv">\n\
               <ul class="downDiv">业务员：<span>'+rel.list.trueName+'</span></ul>\n\
            <div class="downDiv1">\
                <ul>\n\
                    <li>性别：<span>'+sex+'</span></li>\n\
                    <li>联系方式：<span>'+rel.list.mobile+'</span></li>\n\
                    <li>地址：<span>'+rel.list.homeAddress+'</span></li>\n\
                    <li>身份证号：<span>'+rel.list.idCard+'</span></li>\n\
                </ul>\n\
            </div>\n\
           </div>'
      }); 
      },"json");
                        
  }    
   //业务洽谈
   function advireply(dealerid,salesmanid,companyid){
       $("#business_success_list .count").text("0");
       layer.open({
              title:'',
              type:2,
              area:['650px','500px;'],
              content: APP+'/Home/Business/talk?dealerid='+dealerid+'&salesmanid='+salesmanid+'&companyid='+companyid
          });
   }

   function proCheck(id)
   {
       layer.open({
              title:'招商进度管理',
              type:2,
              area:['1000px','600px;'],
              content: APP+'/Home/Business/proCheck?dealerid='+id
       });
   }
      
</script>
</body>
</html>