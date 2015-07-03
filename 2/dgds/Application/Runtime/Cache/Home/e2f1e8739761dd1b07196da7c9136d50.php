<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>用户注册</title>
        <script src="/dgds_6.18/2/dgds/Application/Assets/Admin/js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script language="javascript">
            function checkname() {
                var div = document.getElementById("div1");
                div.innerHTML = "";
                var name1 = document.form1.text1.value;
                if (name1 == "") {
                    div.innerHTML = "姓名不能为空！";
                    document.form1.text1.focus();
                    return false;
                }
                if (name1.length < 4 || name1.length > 16) {
                    div.innerHTML = "姓名输入的长度4-16个字符！";
                    document.form1.text1.select();
                    return false;
                }
                var charname1 = name1.toLowerCase();
                for (var i = 0; i < name1.length; i++) {
                    var charname = charname1.charAt(i);
                    if (!(charname >= 0 && charname <= 9) && (!(charname >= 'a' && charname <= 'z')) && (charname != '_')) {
                        div.innerHTML = "姓名包含非法字母，只能包含字母，数字，和下划线";
                        document.form1.text1.select();
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

            function checkEmail() {
                var div = document.getElementById("div7");
                div.innerHTML = "";
                var email = document.form1.text7.value;
                var sw = email.indexOf("@", 0);
                var sw1 = email.indexOf(".", 0);
                var tt = sw1 - sw;
                if (email.length == 0) {
                    div.innerHTML = "电子邮件不能位空";
                    document.form1.text7.focus();
                    return false;
                }
                if (email.indexOf("@", 0) == -1) {
                    div.innerHTML = "电子邮件格式不正确，必须包含@符号！";
                    document.form1.text7.select();
                    return false;
                }
                if (email.indexOf(".", 0) == -1) {
                    div.innerHTML = "电子邮件格式不正确，必须包含.符号!";
                    document.form1.text7.select();
                    return false;
                }
                if (tt == 1) {
                    div.innerHTML = "邮件格式不对。@和.不可以挨着！";
                    document.form1.text7.select();
                    return false;
                }
                if (sw > sw1) {
                    div.innerHTML = "电子邮件格式不正确，@符号必须在.之前";
                    document.form1.text7.select();
                    return false;
                }
                else {
                    return true;
                }

                return ture;
            }

            function check() {
                if (checkname() && checkpassword() && checkrepassword() && checkEmail()) {
                    return true;
                }
                else {
                    return false;
                }
            }
        </script>
        <script>
            $(function () {
                $('#username_label').hide();
                $('#username').change(function () {
                    $.ajax({
                        url: '/dgds_6.18/2/dgds/Application/Home/User/checkUsername',
                        data: {
                            name: $('username').val(),
                        },
                        dateType: 'json',
                        type: 'post',
                        success: function (msg) {
                            if (msg) {
                                $('#username_label').show();
                            } else {
                                $('#username_label').hide();
                            }
                        }
                    });
                })
            }
            );
        </script>
    </head>
    <body>
        <form name="form1" method="post" action="<?php echo U('Home'.'/Index/userCreate');?>" onsubmit="return check()">
            <table>
                <tr>
                    <td>
                        用户名：
                    </td>
                    <td>
                        <input id="text1" type="text" name="username" onblur="check()">
                        <label id="username_label">用户名存在</label>
                        <div id="div1" style="display:inline">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        密码：
                    </td>
                    <td>
                        <input id="text2" type="password" name="password" onblur="check()">
                        <div id="div2" style="display:inline">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        确认密码：
                    </td>
                    <td>
                        <input id="text3" type="password" name="password2" onblur="check()">
                        <div id="div3" style="display:inline">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        真实姓名：
                    </td>
                    <td>
                        <input id="text4" type="text" name="realname" onblur="check()">
                        <div id="div4" style="display:inline">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        性别：
                    </td>
                    <td>
                        <input id="text5" type="text" name="gender" onblur="check()">
                        <div id="div5" style="display:inline">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        联系方式：
                    </td>
                    <td>
                        <input id="text6" type="text" name="phone" onblur="check()">
                        <div id="div6" style="display:inline">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        电子邮件地址：
                    </td>
                    <td>
                        <input id="text7" type="text" name="email" onblur="check()">
                        <div id="div7" style="display:inline">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        部门：
                    </td>
                    <td>
                        <input id="text8" type="text" name="department" onblur="check()">
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
                
                <tr align="center">
                    <td align="center">
                        <input type="submit" value="提交" name="text9"><input type="reset" value="重置" name="text10">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>