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
            <title>滚动栏修改</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <div class="pd-20">
                <div>
                    <h1>修改滚动</h1>

                    <table class="table table-border table-bordered">

                        <tr>
                            <th>标题</th>
                            <th>内容</th>
                            <th>链接</th>
                            <th>操作</th>
                        </tr>

                        <?php if(is_array($role)): foreach($role as $key=>$v): ?><tr>
                                <td><?php echo ($v["lable"]); ?></td>
                                <td><?php echo ($v["content"]); ?></td>
                                <td><?php echo ($v["link"]); ?></td>
                                <td><a href="<?php echo U('Admin'.'/Rolewin/del',array('id'=>$v['id']));?>" class="btn btn-danger radius">删除</a></td>
                            </tr><?php endforeach; endif; ?>
                        您想修改的：
                        <form action="<?php echo U('Admin'.'/Rolewin/add');?>" method="post">
                            <tr>
                                <td> <input class="input-text radius size-M" value="" name="lable"></td>
                                <td> <input class="input-text radius size-M" value="" name="content"></td>
                                <td> <input class="input-text radius size-M" value="" name="link"></td>
                                <td><button class="input-text radius size-M" id="submit" type="submit">确定修改</button></td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </body>
    </html>