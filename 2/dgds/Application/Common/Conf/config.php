<?php

return array(
    //'配置项'=>'配置值'
    //'TMPL_ENGINE_TYPE' => 'smarty', // 模板引擎
    'MODULE_ALLOW_LIST' => array('Home', 'Admin'), //允许模块组,可增,以逗号为隔
    'DEFAULT_MODULE' => 'Home', // 配置你原来的默认分组
    'Show_Page_Trace' => true,// 调试工具
    //数据库配置信息
    'DB_TYPE' => 'Mysql', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'dgds', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => '', // 密码
    'DB_PREFIX' => 'nkbh_', // 数据库表前缀 
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'TMPL_PARSE_STRING'=>array(
        '__PIC__'=>__ROOT__.'/Public/'.'Uploads'
    )
    
);
