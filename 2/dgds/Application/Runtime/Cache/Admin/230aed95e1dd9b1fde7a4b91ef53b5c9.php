<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>后台权限登录</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
           
                <p>测试：只有三级管理员才能看到此链接</p>
                <p><a href="<?php echo U('Admin/index');?>"><button type="submit">确定</button></a></p>
            
        </div>
    </body>
</html>