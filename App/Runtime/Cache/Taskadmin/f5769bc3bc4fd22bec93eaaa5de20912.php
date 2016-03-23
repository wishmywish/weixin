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
        <?php if(($reModi["result"]) != "000000"): ?><div class="add_menu">
    <ul class="add_tab">
        <?php if(is_array($tab)): $i = 0; $__LIST__ = $tab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($classtype == $vo["f_typeid"] ): ?><li value="<?php echo ($vo["f_typeid"]); ?>" class="selected"><?php echo ($vo["f_typename"]); ?></li>
            <?php else: ?>
                <li value="<?php echo ($vo["f_typeid"]); ?>"><a href="<?php echo U($vo['f_note']);?>"><?php echo ($vo["f_typename"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div><?php endif; ?>
        <div class="add">
            <div class="add_business">
                <div class="page_strat">
                    <div id="tip_one" class="span_tip_red">创建任务</div>
                    <div id="tip_two" class="span_tip_ccc">基本信息</div>
                    <div id="tip_three" class="span_tip_ccc">产品及区域</div>
                    <div id="tip_four" class="span_tip_ccc">任务详情</div>
                    <div id="tip_five" class="span_tip_ccc">上传附件</div>
                </div>
                <div class="page_next" id="one">
                    <div class="big_line">
                        <div  class="line_input">
                            <div class="upfile">
                                <span>任务图标：</span> <button id="btn_up upPic" class="btn btn-default" onclick="$('#upfile').click();">上传</button>
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
                        <div class="line_note">*1：1比例，大小50K以内</div>
                    </div>
                    <div class="big_line">
                        <div  class="line_input">
                            <div class="upfile">
                                <span>任务广告：</span> <button id="btn_ban" class="btn btn-default" onclick="$('#upfile_ban').click();">上传</button>
                                <div style="display: none;">
                                    <input type="file" id="upfile_ban" name="upfile" accept="image/jpeg,image/gif,image/png">
                                </div>
                                <input type="hidden" id="fileid_ban" name="fileid_ban" value="<?php echo ($reModi["one"]["f_fileid_ban"]); ?>">
                            </div>
                            <div class="show_progress_no" id='show_progress_no_ban'>0%</div>
                            <div class="progress_up" id='progress_up_ban'><div class="bar" id='bar_ban'></div></div>
                            <div class="show_img" id='show_img_ban'></div>
                            <?php if ($reModi['one']['f_ban']) {?>
                            <!-- {$reModi['one']['f_name']['f_filepath']}<?php echo ($reModi["one"]["f_name"]["f_filename"]); ?> -->
                            <div id="showBan">
                                <img src="/wisdom/Public/upfile/<?php echo ($reModi["one"]["f_ban"]["f_filepath"]); echo ($reModi["one"]["f_ban"]["f_filename"]); ?>" width="50" height="50">
                            </div>
                            <?php }?>
                        </div>
                        <div class="line_note">*3：1比例，大小50K以内</div>
                    </div>
                    <div class="line">
                        <div class="line_input">
                            <span>发布单位：</span> <input type="text" id="companyName" placeholder="录入发布单位" value="<?php echo ($reModi["one"]["companyName"]); ?>"><input type="hidden" id="companyId" name="companyId" value="<?php echo ($reModi["one"]["f_companyid"]); ?>">
                        </div>
                        <div class="line_note">*输入时自动检索，没用请先开户</div>
                    </div>
                    <div class="line">
                        <div class="line_input">
                            <span>任务标题：</span> <input type="text" id="title" name="title" value="<?php echo ($reModi["one"]["f_title"]); ?>" placeholder="请输入任务标题">
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

                    <div class="line" >
                        <div class="line_input">
                            <span>任务详情描述：</span>
                            <textarea  value="" name="pro_taskDescription"  id="pro_taskDescription" style="width:550px;height:100px;"><?php echo ($reModi["one"]["f_description"]); ?></textarea>
                        </div>
                    </div>

                    <input type="hidden" id="tasktypeid" name="tasktypeid" value="3">
                    <input type="hidden" id="taskid" name="taskid" value="<?php echo ((isset($reModi["one"]["f_tid"]) && ($reModi["one"]["f_tid"] !== ""))?($reModi["one"]["f_tid"]):0); ?>">
                    <input type="hidden" id="task_one_count" value="">
                    <div class="next_btn" style="margin-bottom: 115px;">
                        <a class="btn btn-default" href="#" role="button" id="task_one" style="margin-top: 115px;">下一步</a>
                    </div>
                    <div class="line_one"></div>
                </div>
                
                <!--下一步-->
                <div class="page_next" id="two" style="display:none">
                    <div class="line">
                        <div class="line_input">
                            <span>任务品牌：</span> <input type="text" id="mtbrand" placeholder="招商品牌" value="<?php echo ($reModi["two"]["f_mtbrand"]); ?>">
                        </div>
                        <div class="line_note">*</div>
                    </div>
                    <div class="line">
                        <div class="line_input">
                            <span>任务产品：</span> <input type="text" id="mtgoods" placeholder="招商产品，多个用英文逗号分开" value="<?php echo ($reModi["two"]["f_mtgoods"]); ?>">
                        </div>
                        <div class="line_note">*</div>
                    </div>
                    <div class="line">
                        <div class="line_input">
                            <span>总首批款：</span> <input type="text" id="payment" placeholder="首批发货款" value="<?php echo ($reModi["two"]["f_unitfirstamount"]); ?>" style="width: 70px;" oninput="psum();">
                            <input type="text" id="bond" placeholder="保证金" style="width: 60px;" oninput="psum();" value="<?php echo ($reModi["two"]["f_unitcashdeposit"]); ?>">
                            <input type="text" id="franchise" placeholder="加盟费" style="width: 60px;" oninput="psum();" value="<?php echo ($reModi["two"]["f_unitfranchisefee"]); ?>">
                            <input type="text" id="otherprice" placeholder="其他费用" style="width: 60px;" oninput="psum();" value="<?php echo ($reModi["two"]["f_unitotheramount"]); ?>">
                            <span>合计：<span id="pricesum_txt" style="color:red;"><?php echo ($reModi["two"]["f_unittotalamount"]); ?></span>元<input type="hidden" id="pricesum" value="<?php echo ($reModi["two"]["f_unittotalamount"]); ?>"></span>
                        </div>
                        <div class="line_note">*</div>
                    </div>
                    <div class="line">
                        <div class="line_input">
                            <span>任务佣金：</span> <input type="text" id="agents_commission" placeholder="业务员佣金" style="width: 90px;" oninput="a_comm();" value="<?php echo ($reModi["two"]["f_unitcommission"]); ?>">
                            <span>成功招商一个的总佣金：<span id="commission_txt" style="color:red;"><?php echo ((isset($reModi["two"]["f_unitpreownedgold"]) && ($reModi["two"]["f_unitpreownedgold"] !== ""))?($reModi["two"]["f_unitpreownedgold"]):0); ?></span>元<input type="hidden" id="commission" value="<?php echo ((isset($reModi["two"]["f_unitpreownedgold"]) && ($reModi["two"]["f_unitpreownedgold"] !== ""))?($reModi["two"]["f_unitpreownedgold"]):0); ?>">，其中业务员佣金(任务佣金)：<span id="agents_commission_txt" style="color:red;"><?php echo ((isset($reModi["two"]["f_unitcommission"]) && ($reModi["two"]["f_unitcommission"] !== ""))?($reModi["two"]["f_unitcommission"]):0); ?></span>元</span>
                        </div>
                        <div class="line_note">*</div>
                    </div>
                    <div class="line">
                        <div class="line_input">

                            <span>所属行业：</span>
                            <select id="big">
                                <option value="0" <?php if(($reModi["two"]["f_parentid"]) == ""): ?>selected<?php endif; ?>>选择行业大类</option>
                                <option value="1" <?php if(($reModi["two"]["f_parentid"]) == "1"): ?>selected<?php endif; ?>>快消品</option>
                                <option value="3" <?php if(($reModi["two"]["f_parentid"]) == "3"): ?>selected<?php endif; ?>>高科技</option>
                            </select>
                            <select id="tradeid">
                                <option value="0" <?php if(($reModi["two"]["f_tradeid"]) == ""): ?>selected<?php endif; ?>>选择行业小类</option>
                                <option value="2" <?php if(($reModi["two"]["f_tradeid"]) == "2"): ?>selected<?php endif; ?>>快消品</option>
                                <option value="4" <?php if(($reModi["two"]["f_tradeid"]) == "4"): ?>selected<?php endif; ?>>高科技</option>
                            </select>
                            
                        </div>
                        <div class="line_note">*</div>
                    </div>
                    <input type="hidden" id="indexid" name="indexid" value="<?php echo ((isset($reModi["two"]["f_indexid"]) && ($reModi["two"]["f_indexid"] !== ""))?($reModi["two"]["f_indexid"]):0); ?>">
                    <input type="hidden" id="task_two_count" value="">
                    <div class="next_btn">
                        <a class="btn btn-default" href="#" role="button" id="return_one">上一步</a>
                        <a class="btn btn-default" href="#" role="button" id="task_two">下一步</a>
                    </div>
                    <div class="line_one"></div>
                </div>
                
                <!--下一步-->
                <div class="page_next" id="three" style="display:none">
                    <div class="line">
                        <div class="line_input">
                            <span>招商情况：</span>
                            <select id="s_province" name="s_province" style="height: 25px;"></select>
                            <select id="s_city" name="s_city" style="height: 25px;"></select>
                            <select id="s_county" name="s_county" style="height: 25px;"></select>
                            <input type="text" id="business_sum" placeholder="招商数量" style="width: 60px;">
                            <a class="btn btn-primary btn-sm" href="#" role="button" id="add_area">新增</a>
                            <input type="hidden" id="area_stats" value="0">
                            <input type="hidden" id="business_total" value="0">
                        </div>
                        <div class="line_note">*</div>
                    </div>
                    <div id="area_list"></div>
                    
                    <!--<div class="line">-->
                        <!--<div class="line_input">-->
                            <!--<span>产品说明：</span>-->
                            <!--<input type="text" id="goodsname" placeholder="产品名称" style="width: 100px;">-->
                            <!--<input type="text" id="modle" placeholder="产品规格" style="width: 100px;">-->
                            <!--<input type="text" id="unit" placeholder="计量单位" style="width: 60px;">-->
                            <!--<input type="text" id="agencyprice" placeholder="经销价" style="width: 60px;">-->
                            <!--<input type="text" id="sellingprice" placeholder="分销价" style="width: 60px;">-->
                            <!--<input type="text" id="saleprice" placeholder="零售价" style="width: 60px;">-->
                            <!--<a class="btn btn-primary btn-sm" href="#" role="button" id="add_pro">+</a>-->
                            <!--<input type="hidden" id="pro_stats" value="0">-->
                        <!--</div>-->
                        <!--<div class="line_note">*</div>-->
                    <!--</div>-->
                    <!--<div id="pro_list"></div>-->
                    
                    <div class="next_btn">
                        <a class="btn btn-default" href="#" role="button" id="return_two">上一步</a>
                        <a class="btn btn-default" href="#" role="button" id="task_three">下一步</a>
                    </div>
                    <div class="line_one"></div>
                </div>
                
                <!--下一步display:none-->
                <div class="page_next" id="four" style="display:none">
                    <!--<div class="line">-->
                        <!--<div class="line_input">-->
                            <!--<span>品牌的定位：</span>-->
                            <!--<input type="text" id="brandlocation" placeholder="" value="<?php echo ($reModi["four"]["f_brandlocation"]); ?>">-->
                        <!--</div>-->
                        <!--<div class="line_note">*30个字</div>-->
                    <!--</div>-->
                    <!--<div class="line">-->
                        <!--<div class="line_input">-->
                            <!--<span>品牌广告语：</span>-->
                            <!--<input type="text" id="slogan" placeholder="" value="<?php echo ($reModi["four"]["f_slogan"]); ?>">-->
                        <!--</div>-->
                        <!--<div class="line_note">*30个字</div>-->
                    <!--</div>-->
                    <!--<div class="line">-->
                        <!--<div class="line_input">-->
                            <!--<span>产品的卖点：</span>-->
                            <!--<input type="text" id="sellingpoint" placeholder="" value="<?php echo ($reModi["four"]["f_sellingpoint"]); ?>">-->
                        <!--</div>-->
                        <!--<div class="line_note">*30个字</div>-->
                    <!--</div>-->
                    <!--<div class="line">-->
                        <!--<div class="line_input">-->
                            <!--<span>目标消费者：</span>-->
                            <!--<input type="text" id="targetgroup" placeholder="" value="<?php echo ($reModi["four"]["f_targetgroup"]); ?>">-->
                        <!--</div>-->
                        <!--<div class="line_note">*30个字</div>-->
                    <!--</div>-->
                    <!--<div class="line">-->
                        <!--<div class="line_input">-->
                            <!--<span>经销商要求：</span>-->
                            <!--<input type="text" id="distributorsrequir" placeholder="" value="<?php echo ($reModi["four"]["f_distributorsrequir"]); ?>">-->
                        <!--</div>-->
                        <!--<div class="line_note">*30个字</div>-->
                    <!--</div>-->
                    <!--<div class="line">-->
                        <!--<div class="line_input">-->
                            <!--<span>主销售网点：</span>-->
                            <!--<input type="text" id="retailoutlets" placeholder="" value="<?php echo ($reModi["four"]["f_retailoutlets"]); ?>">-->
                        <!--</div>-->
                        <!--<div class="line_note">*30个字</div>-->
                    <!--</div>-->
                    <!--<div class="line">-->
                        <!--<div class="line_input">-->
                            <!--<span>主推广宣传：</span>-->
                            <!--<input type="text" id="channelpolicy" placeholder="" value="<?php echo ($reModi["four"]["f_channelpolicy"]); ?>">-->
                        <!--</div>-->
                        <!--<div class="line_note">*30个字</div>-->
                    <!--</div>-->
                    <div class="line" style="height: 450px;">
                        <div class="line_input">
                            <span>招商详情描述：</span>
                            <div class="editor" style="height: 100%;width: 610px;float: left;">
                                <script type="text/plain" id="editor" style="width:600px;height:350px;"></script>
                            </div>
                        </div>
                        <div class="line_note">*插入的图片宽度小于720，不要手动缩小</div>
                    </div>
                    
                    <input type="hidden" id="tindexid" name="tindexid" value="<?php echo ((isset($reModi["four"]["f_indexid"]) && ($reModi["four"]["f_indexid"] !== ""))?($reModi["four"]["f_indexid"]):0); ?>">
                    <input type="hidden" id="task_four_count" value="">
                    <div class="next_btn">
                        <a class="btn btn-default" href="#" role="button" id="return_three">上一步</a>
                        <a class="btn btn-default" href="#" role="button" id="task_four">下一步</a>
                    </div>
                    <div class="line_one"></div>
                </div>
                
                <!--下一步-->
                <div class="page_next" id="five" style="display:none;">
                    <div class="big_line">
                        <div class="line_input">
                            <div class="upfile_pack">
                                <span>商标注册证或授权使用证书：</span> <button id="btn_up_pack"  class="btn btn-default" onclick="$('#upfile_pack').click();">上传</button>
                                <div style="display: none;">
                                    <input type="file" id="upfile_pack" name="upfile" >
                                </div>
                                <input type="hidden" id="fileid_pack" name="fileid_pack" value="<?php echo ($reModi["five"]["f_fileid1"]); ?>">
                            </div>
                            <div style="margin-left:85px;" class="show_progress_no" id="show_progress_no_pack">0%</div>
                            <div class="progress_up" id="progress_up_pack"><div class="bar" id="bar_pack"></div></div>
                            <div class="show_img" id="show_img_pack"></div>
                        </div>
                        <div class="line_note">*必须提供(rar)</div>
                    </div>
                    <br><br>
                    <div class="big_line">
                        <div class="line_input">
                            <div class="upfile_pack">
                                <span>经销商合同：</span> <br><button id="btn_up_propaganda"  class="btn btn-default" onclick="$('#upfile_propaganda').click();">上传</button>
                                <div style="display: none;">
                                    <input type="file" id="upfile_propaganda" name="upfile" >
                                </div>
                                <input type="hidden" id="fileid_propaganda" name="fileid_propaganda" value="<?php echo ($reModi["five"]["f_fileid2"]); ?>">
                            </div>
                            <div class="show_progress_no" id="show_progress_no_propaganda">0%</div>
                            <div class="progress_up" id="progress_up_propaganda"><div class="bar" id="bar_propaganda"></div></div>
                            <div class="show_img" id="show_img_propaganda"></div>
                        </div>
                        <div class="line_note">*必须提供(doc,docx,pdf)</div>
                    </div>
                    <br><br>
                    <div class="big_line">
                        <div class="line_input">
                            <div class="upfile_pack">
                                <span>产品和宣传资料图片：</span><br> <button id="btn_up_certificate"  class="btn btn-default" onclick="$('#upfile_certificate').click();">上传</button>
                                <div style="display: none;">
                                    <input type="file" id="upfile_certificate" name="upfile" >
                                </div>
                                <input type="hidden" id="fileid_certificate" name="fileid_certificate" value="<?php echo ($reModi["five"]["f_fileid3"]); ?>">
                            </div>
                            <div style="margin-left:20px;" class="show_progress_no" id="show_progress_no_certificate">0%</div>
                            <div class="progress_up" id="progress_up_certificate"><div class="bar" id="bar_certificate"></div></div>
                            <div class="show_img" id="show_img_certificate"></div>
                        </div>
                        <div class="line_note">*必须提供(rar)</div>
                    </div>
                    <br><br>
                    <div class="big_line">
                        <div class="line_input">
                            <div class="upfile_pack">
                                <span>产品价格表：</span> <br><button id="btn_up_policy" class="btn btn-default" onclick="$('#upfile_policy').click();">上传</button>
                                <div style="display: none;">
                                    <input type="file" id="upfile_policy" name="upfile" >
                                </div>
                                <input type="hidden" id="fileid_policy" name="fileid_policy" value="<?php echo ($reModi["five"]["f_fileid4"]); ?>">
                            </div>
                            <div class="show_progress_no" id="show_progress_no_policy">0%</div>
                            <div class="progress_up" id="progress_up_policy"><div class="bar" id="bar_policy"></div></div>
                            <div class="show_img" id="show_img_policy"></div>
                        </div>
                        <div class="line_note">*必须提供(doc,docx,xls,xlsx,pdf)，含出厂价、批发价、零售价</div>
                    </div>
                    <br><br>
                    <div class="big_line">
                        <div class="line_input">
                            <div class="upfile_pack">
                                <span>销售市场支持政策：</span><br> <button id="btn_up_price"  class="btn btn-default" onclick="$('#upfile_price').click();">上传</button>
                                <div style="display: none;">
                                    <input type="file" id="upfile_price" name="upfile" >
                                </div>
                                <input type="hidden" id="fileid_price" name="fileid_price" value="<?php echo ($reModi["five"]["f_fileid5"]); ?>">
                            </div>
                            <div style="margin-left:10px;" class="show_progress_no" id="show_progress_no_price">0%</div>
                            <div class="progress_up" id="progress_up_price"><div class="bar" id="bar_price"></div></div>
                            <div class="show_img" id="show_img_price"></div>
                        </div>
                        <div class="line_note">*必须提供(doc,docx,xls,xlsx,pdf)</div>
                    </div>
                    <br><br>
                    <div class="big_line">
                        <div class="line_input">
                            <div class="upfile_pack">
                                <span>标志LOGO设计图：</span><br> <button id="btn_up_other"  class="btn btn-default" onclick="$('#upfile_other').click();">上传</button>
                                <div style="display: none;">
                                    <input type="file" id="upfile_other" name="upfile" >
                                </div>
                                <input type="hidden" id="fileid_other" name="fileid_other" value="<?php echo ($reModi["five"]["f_fileid6"]); ?>">
                            </div>
                            <div  style="margin-left:10px;" class="show_progress_no" id="show_progress_no_other">0%</div>
                            <div class="progress_up" id="progress_up_other"><div class="bar" id="bar_other"></div></div>
                            <div class="show_img" id="show_img_other"></div>
                        </div>
                        <div class="line_note">*建议提供(ai,cdr)，只能上传矢量图</div>
                    </div>
                    <br><br>
                    <div class="big_line">
                        <div class="line_input">
                            <div class="upfile_pack">
                                <span>卫生许可证图片：</span> <br><button id="btn_up_weishen"  class="btn btn-default" onclick="$('#upfile_weishen').click();">上传</button>
                                <div style="display: none;">
                                    <input type="file" id="upfile_weishen" name="upfile" >
                                </div>
                                <input type="hidden" id="fileid_weishen" name="fileid_weishen" value="<?php echo ($reModi["five"]["f_fileid7"]); ?>">
                            </div>
                            <div class="show_progress_no" id="show_progress_no_weishen">0%</div>
                            <div class="progress_up" id="progress_up_weishen"><div class="bar" id="bar_weishen"></div></div>
                            <div class="show_img" id="show_img_weishen"></div>
                        </div>
                        <div class="line_note">*建议提供(gif,jpg,png)</div>
                    </div>
                    <br>
                    <input type="hidden" id="findexid" name="findexid" value="<?php echo ((isset($reModi["five"]["f_indexid"]) && ($reModi["five"]["f_indexid"] !== ""))?($reModi["five"]["f_indexid"]):0); ?>">
                    <div class="next_btn">
                        <a class="btn btn-default" href="#" role="button" id="return_four">上一步</a>
                        <a class="btn btn-default" href="#" role="button" id="task_five">完成</a>
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
        sublevel_out();//子窗口退出
        
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
        //alert($('#four').is(":hidden"));
        _init_area();
        getArea(<?php echo ((isset($reModi["one"]["f_tid"]) && ($reModi["one"]["f_tid"] !== ""))?($reModi["one"]["f_tid"]):0); ?>);
        getPro(<?php echo ((isset($reModi["one"]["f_tid"]) && ($reModi["one"]["f_tid"] !== ""))?($reModi["one"]["f_tid"]):0); ?>);

        //if($('#four').css('display')!="none"){
            //alert(1);
        //UM.addListener("ready", function () {
            // editor准备好之后才可以使用
            UM.getEditor('editor').setContent('<?php echo ($reModi["four"]["f_note"]); ?>');
        //});

        //}
        $(function(){
            // getBigTrade();
            $("#upfile").wrap("<form id='uplogo' action='<?php echo U('Api/Upfile/upF/type/2/size/51200');?>' method='post' enctype='multipart/form-data'></form>");

            $("#upfile_ban").wrap("<form id='uplogo_ban' action='<?php echo U('Api/Upfile/upF/type/2/size/102400');?>' method='post' enctype='multipart/form-data'></form>");
            $("#upfile_pack").wrap("<form id='upfile_up' action='<?php echo U('Api/Upfile/upF/type/2/exts/rar');?>' method='post' enctype='multipart/form-data'></form>");
            $("#upfile_propaganda").wrap("<form id='upfile_up_propaganda' action='<?php echo U('Api/Upfile/upF/type/2/exts/doc,docx,pdf');?>' method='post' enctype='multipart/form-data'></form>");
            $("#upfile_certificate").wrap("<form id='upfile_up_certificate' action='<?php echo U('Api/Upfile/upF/type/2/exts/rar,zip');?>' method='post' enctype='multipart/form-data'></form>");
            $("#upfile_policy").wrap("<form id='upfile_up_policy' action='<?php echo U('Api/Upfile/upF/type/2/exts/doc,docx,xls,xlsx,pdf');?>' method='post' enctype='multipart/form-data'></form>");
            $("#upfile_price").wrap("<form id='upfile_up_price' action='<?php echo U('Api/Upfile/upF/type/2/exts/doc,docx,xls,xlsx,pdf');?>' method='post' enctype='multipart/form-data'></form>");
            $("#upfile_other").wrap("<form id='upfile_up_other' action='<?php echo U('Api/Upfile/upF/type/2/exts/ai,cdr');?>' method='post' enctype='multipart/form-data'></form>");
            $("#upfile_weishen").wrap("<form id='upfile_up_weishen' action='<?php echo U('Api/Upfile/upF/type/2/exts/gif,jpg,png');?>' method='post' enctype='multipart/form-data'></form>");
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
</html>