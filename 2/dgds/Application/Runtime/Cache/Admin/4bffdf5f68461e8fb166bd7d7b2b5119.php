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
            <link href="/dgds_6.18/2/dgds/Application/Admin/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
            <title>后台管理员管理</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <div class="pd-20">
                <div>
                    <table class="table table-bordered table-striped">
                        <form action="<?php echo U('Userlist/seach');?>" method="post">
                            <input type="text" name="date" class="input-text radius size-M" style="width: 30%"/>
                            <button type="submit" class="btn btn-success radius">查找</button>
                        </form><br>
                    </table>
                </div>
                <div>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th> ID</th>
                            <th>用户名</th>
                            <th>真实姓名</th>
                            <th>性别</th>
                            <th>部门</th>
                            <th>电话</th>
                            <th>权限</th>
                            <th>最后一次登录IP</th>
                            <th>最后一次登录时间</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
                                <td width="5%"><?php echo ($v["id"]); ?></td>
                                <td width="10%"><?php echo ($v["username"]); ?></td>
                                <td width="10%"><?php echo ($v["realname"]); ?></td>
                                <td width="5%"><?php echo ($v["gender"]); ?></td>
                                <td width="10%"><?php echo ($v["department"]); ?></td>
                                <td width="10%"><?php echo ($v["phone"]); ?></td>
                                <td width="10%"><?php echo ($v["jurisdiction"]); ?></td>
                                <td width="10%"><?php echo ($v["ip"]); ?></td>
                                <td width="12%"><?php echo (date('y-m-d H:i',$v["time"])); ?></td>

                                <td width="15%">
                                    <a href="<?php echo u('Adminlist/update',array('id'=>$v['id']));?>" class="btn btn-primary radius">修改</a>

                                    <a href="<?php echo u('Adminlist/delet',array('id'=>$v['id']));?>" class="btn btn-danger radius">删除</a>
                                </td>
                                </td>
                            </tr><?php endforeach; endif; ?>	
                        <tr><?php echo ($page); ?></tr>
                    </table>

                </div>
            </div>
        </body>
    </html>