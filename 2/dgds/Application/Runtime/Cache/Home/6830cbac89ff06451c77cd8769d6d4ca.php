<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>登陆</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href="/1/dgds/Public/public/css/base.css" rel="stylesheet" type="text/css">
        <link href="/1/dgds/Public/public/css/login.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div class="login">
            <form action="<?php echo U('Home'.'/User/login');?>" method="post" id="form">
                <div class="logo"></div>
                <div class="login_form">
                    <div class="user">
                        <input class="text_value" value="" name="username" type="text" id="username">
                        <input class="text_value" value="" name="password" type="password" id="password">
                    </div>
                    <button class="button" id="submit" type="submit">登录</button>
                    <a href="<?php echo U('Home'.'/User/register');?>"><button class="button" id="button" type="button" >注册</button></a>
                </div>
                <div id="tip"></div>
                <div class="foot">
                </div>
            </form>
        </div>

    </body>
</html>