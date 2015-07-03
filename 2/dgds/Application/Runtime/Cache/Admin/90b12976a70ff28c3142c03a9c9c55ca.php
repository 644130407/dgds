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
            <title>专栏页</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <div class="pd-20">
                <div>
                    <div><a href="<?php echo U('Admin'.'/Index/index');?>">返回主页</a></div>
                    <table class="table table-border table-bordered">
                        <tr>
                            <th> ID</th>
                            <th>名称</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($column)): foreach($column as $key=>$v): ?><tr>
                                <td><?php echo ($v["id"]); ?></td>
                                <td><?php echo ($v["column"]); ?></td>
                                <td>

                                    <a href="<?php echo u('Admin'.'/column/change',array('id'=>$v['id']));?>" class="btn btn-primary">修改</a>


                                </td>
                            </tr><?php endforeach; endif; ?>

                    </table>


                </div>
            </div>
        </body>
    </html>