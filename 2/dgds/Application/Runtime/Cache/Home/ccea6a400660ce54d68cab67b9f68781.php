<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>登陆</title>
    </head>
    <body>

        <div>
            <form action="<?php echo U('Home'.'/Index/userLogin');?>" method="post" id="form">

                <table>
                    <tr>
                        <td>用户名</td>
                        <td><input value="" name="username" type="text" id="username"></td>
                    </tr>
                    <tr>
                        <td>密码</td>
                        <td><input  value="" name="password" type="password" id="password"></td>
                    </tr>
 <!--                    <tr>
                        <td> 验证码</td>
                        <td><input type="text" name="code" id="code"></td>
                    </tr>
                   <tr><td></td>
                        <td><img src="<?php echo U('Home'.'/Index/getVerify');?>" 
                                 onclick="this.src = '<?php echo U('Home'.'/Index/getVerify');?>' + '/' + Math.random()"/>
                        </td>
                    </tr>-->
                </table>
                <button class="button" id="submit" type="submit">登录</button>
            </form>
            <a href="<?php echo U('Home'.'/Index/register');?>"><button class="button" id="button" type="button" >注册</button></a>
        </div>

    </body>
</html>