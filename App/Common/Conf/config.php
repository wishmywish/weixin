<?php
return array(
    //'配置项'=>'配置值'
    'DEFAULT_MODULE'     => 'Home', //默认模块
    'URL_MODEL'          => '1', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session
    'DEFAULT_CHARSET'       =>  'utf-8', // 默认输出编码
    'DEFAULT_TIMEZONE'      =>  'Asia/Shanghai',  // 默认时区
    'DEFAULT_AJAX_RETURN'   =>  'JSON',  // 默认AJAX 数据返回格式,可选JSON XML ...
    'COOKIE_EXPIRE'         =>  604800,    // Cookie有效期,七天
    'SESSION_PREFIX'        =>  'SPD_', // session 前缀  招商APP管理平台
    'COOKIE_PREFIX'         =>  'SPD_',      // Cookie前缀 招商APP管理平台
    'URL_CASE_INSENSITIVE'  =>  true,  //URL不区分大小写
    'SHOW_ERROR_MSG'        =>  false, // 显示错误信息
    'LOG_EXCEPTION_RECORD'  =>  true,// 是否记录异常信息日志
    'WeiXinApi'                =>  'http://intest.51lick.cn/',//API

    //定义路径
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public/static',
        '__UPFILE__' => __ROOT__ . '/Public/upfile',
        '__IMG__'    => __ROOT__ . '/Public/MODULE_NAME/DEFAULT_THEME/images',
        '__CSS__'    => __ROOT__ . '/Public/MODULE_NAME/DEFAULT_THEME/css',
        '__JS__'     => __ROOT__ . '/Public/MODULE_NAME/DEFAULT_THEME/js',
    ),
);