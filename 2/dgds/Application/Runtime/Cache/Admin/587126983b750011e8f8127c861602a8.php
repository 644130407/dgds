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
            <title>用户信息修改</title>
            <script src="/dgds_6.18/2/dgds/dgds/Application/Assets/Admin/js/jquery-1.11.3.min.js" type="text/javascript"></script>
            <script language="javascript">
                function checkname() {
                    var div = document.getElementById("div4");
                    div.innerHTML = "";
                    var name1 = document.form1.text4.value;
                    if (name1 == "") {
                        div.innerHTML = "姓名不能为空！";
                        document.form1.text4.focus();
                        return false;
                    }
                    if (name1.length < 4 || name1.length > 16) {
                        div.innerHTML = "姓名输入的长度4-16个字符！";
                        document.form1.text4.select();
                        return false;
                    }
                    var charname1 = name1.toLowerCase();
                    for (var i = 0; i < name1.length; i++) {
                        var charname = charname1.charAt(i);
                        if (!(charname >= 0 && charname <= 9) && (!(charname >= 'a' && charname <= 'z')) && (charname != '_')) {
                            div.innerHTML = "姓名包含非法字母，只能包含字母，数字，和下划线";
                            document.form1.text4.select();
                            return false;
                        }
                    }
                    return true;

                }

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
                    if (checkname() && checkpassword() && checkrepassword()) {
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

                    <form name="form1" method="post" action="<?php echo U('Admin/adminInfoUpdate');?>" onsubmit="return check()">
                        <tr>
                            <td>
                                ID：
                            </td>
                            <td>
                                <input class="input-text radius size-M" id="text7" type="hidden" name="id" onblur="check()" value="<?php echo ($user["id"]); ?>" >
                                <div id="div7" style="display:inline">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                用户名：
                            </td>
                            <td>
                                <input class="input-text radius size-M" id="text0" type="text" name="username" value="<?php echo ($user["username"]); ?>" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                旧密码：
                            </td>
                            <td>
                                <input class="input-text radius size-M" id="text1" type="password" name="oldpassword" onblur="check()">

                                <div id="div1" style="display:inline">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                新密码：
                            </td>
                            <td>
                                <input class="input-text radius size-M" id="text2" type="password" name="password" onblur="check()">
                                <div id="div2" style="display:inline">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                确认密码：
                            </td>
                            <td>
                                <input class="input-text radius size-M" id="text3" type="password" name="password2" onblur="check()">
                                <div id="div3" style="display:inline">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                真实姓名：
                            </td>
                            <td>
                                <input class="input-text radius size-M" id="text4" type="text" name="realname" onblur="check()" value="<?php echo ($user["realname"]); ?>">
                                <div id="div4" style="display:inline">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                性别：
                            </td>
                            <td>
                                <input class="input-text radius size-M" id="text5" type="text" name="gender" onblur="check()" value="<?php echo ($user["gender"]); ?>">
                                <div id="div5" style="display:inline">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                联系方式：
                            </td>
                            <td>
                                <input class="input-text radius size-M" id="text6" type="text" name="phone" onblur="check()" value="<?php echo ($user["phone"]); ?>">
                                <div id="div6" style="display:inline">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                部门：
                            </td>
                            <td>
                                <input class="input-text radius size-M" id="text8" type="text" name="department" onblur="check()"  value="<?php echo ($user["department"]); ?>">
                                <div id="div8" style="display:inline">
                                </div>
                            </td>
                        </tr>
                        <!--                <tr>
                                            <td> 验证码</td>
                                            <td><input type="text" name="code" id="code"></td>
                                        </tr>
                                        <tr><td></td>
                                            <td><img src="<?php echo U('Home'.'/Index/getVerify');?>" 
                                                    onclick="this.src ='<?php echo U('Home'.'/Index/getVerify');?>'+ '/' + Math.random()"/>
                                            </td>
                        
                                        </tr>-->
                        <div class="text-c">
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" value="修改信息" class="btn btn-primary radius" > <input type="reset" value="重置" class="btn btn-warning radius" >
                                </td>
                            </tr>
                        </div>
                    </form>

                </table>
            </div>
        </body>
    </html>