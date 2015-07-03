<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<html>
    <head>
        <!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="renderer" content="webkit|ie-comp|ie-stand">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
            <meta http-equiv="Cache-Control" content="no-siteapp" />
            <!--[if lt IE 9]>
            <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/html5.js"></script>
            <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/respond.min.js"></script>
            <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/PIE_IE678.js"></script>
            <![endif]-->
            <link href="/dgds_6.18/2/dgds/Application/Admin/Public/css/H-ui.min.css" rel="stylesheet" type="text/css" />
            <link href="/dgds_6.18/2/dgds/Application/Admin/Public/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
            <link href="/dgds_6.18/2/dgds/Application/Admin/Public/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
            <!--[if IE 7]>
            <link href="lib/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
            <![endif]-->
            <link href="/dgds_6.18/2/dgds/Application/Admin/Public/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
            <!--[if IE 6]>
            <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
            <script>DD_belatedPNG.fix('*');</script>
            <![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>管理员信息修改</title>
        <script src="../../../Assets/Admin/js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script language="javascript">
          
            function checkpassword() {
                var div = document.getElementById("div2");
                div.innerHTML = "";
                var password = document.form1.text2.value;
                if (password == "") {
                    div.innerHTML = "密码不位空！";
                    document.form1.text2.focus();
                    return false;
                }
                if (password.length < 4 || password.length > 12) {
                    div.innerHTML = "密码长度4-12位";
                    document.form1.text2.select();
                    return false;
                }
                return true;
            }

            function checkrepassword() {
                var div = document.getElementById("div3");
                div.innerHTML = "";
                var password = document.form1.text2.value;
                var repass = document.form1.text3.value;
                if (repass == "") {
                    div.innerHTML = "密码不位空！";
                    document.form1.text3.focus();
                    return false;
                }
                if (password != repass) {
                    div.innerHTML = "输入密码和确认密码长度不一致";
                    document.form1.text3.select();
                    return false;
                }
                return true;
            }


            function check() {
                if (checkpassword() && checkrepassword()) {
                    return true;
                }
                else {
                    return false;
                }
            }
        </script>

    </head>
    <body>
    
       <div class="pd-20">
            <table class="table table-border table-bordered">
                <?php if(is_array($user)): foreach($user as $key=>$user): ?><form name="form1" method="post" action="<?php echo U('Adminlist/infoUpdate');?>" onsubmit="return check()">
                <tr>
                    <td>ID:</td>
                    <td><input  value="<?php echo ($user["id"]); ?>" name="id" type="hidden" class="input-text radius size-M"></td>
                </tr>
                <tr>
                    <td>
                        用户名：
                    </td>
                    <td>
                        <input id="text0" type="text" name="username" value="<?php echo ($user["username"]); ?>" disabled class="input-text radius size-M">
                    </td>
                </tr>
              
                <tr>
                    <td>
                        新密码：
                    </td>
                    <td>
                        <input id="text2" type="password" name="password" onblur="check()" class="input-text radius size-M">
                        <div id="div2" style="display:inline">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        确认密码：
                    </td>
                    <td>
                        <input id="text3" type="password" name="password2" onblur="check()" class="input-text radius size-M">
                        <div id="div3" style="display:inline">
                        </div>
                    </td>
              
                <!--                <tr>
                                    <td> 验证码</td>
                                    <td><input type="text" name="code" id="code"></td>
                                </tr>
                                <tr><td></td>
                                    <td><img src="<?php echo U('Home'.'/Index/getVerify');?>" 
                                            onclick="this.src ='<?php echo U('Home'.'/Index/getVerify');?>'+ '/' + Math.random()"/>
                                    </td>
                
                                </tr>-->
                <tr align="center">
                    <td align="center">
                        <input type="submit" value="修改信息"  class="btn btn-primary radius">
                    </td>
                    <td>
                        <a href="<?php echo U('Adminlist/index');?>" class="btn btn-warning radius" >返回用户列表</a>
                    </td>
                </tr>
                    </form><?php endforeach; endif; ?>
            </table>
       </div>

    </body>
</html>