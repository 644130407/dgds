<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>用户信息</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <table>
            <tr>
                <td>
                    用户名：
                </td>
                <td>
                    <?php echo ($user["username"]); ?>
                </td>
                <!--            <?php if(is_array($user)): foreach($user as $key=>$v): echo ($v["department"]); endforeach; endif; ?>-->
            </tr>
            <tr>
                <td>
                    真实姓名：
                </td>
                <td>
                    <?php echo ($user['realname']); ?>
                </td>
            </tr>
            <tr>
                <td>
                    性别：
                </td>
                <td>
                    <?php echo ($user['gender']); ?>
                </td>
            </tr>
            <tr>
                <td>
                    联系方式：
                </td>
                <td>
                    <?php echo ($user['phone']); ?>
                </td>
            </tr>
            <tr>
                <td>
                    电子邮件地址：
                </td>
                <td>
                    <?php echo ($user['email']); ?>
                </td>
            </tr>

            <tr>
                <td>
                    部门：
                </td>
                <td>
                    <?php echo ($user['department']); ?>
                </td>
            </tr>

            <tr align="center">
                <td align="center">
                    
                    <a href="<?php echo U('Home'.'/User/info_update');?>"><button class="button" id="button" type="button" >修改信息</button></a>
                    <a href="<?php echo U('Home'.'/Index/userCancel');?>"><button class="button" id="submit" type="submit">注销</button></a>
                    <a href="<?php echo U('Home'.'/Index/Index');?>">回到主页</a>
                </td>
            </tr>
        </table>
    </body>
</html>