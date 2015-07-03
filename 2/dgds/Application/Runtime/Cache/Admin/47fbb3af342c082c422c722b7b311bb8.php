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
            <title>c查看文章详情</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <div class="pd-20">
                <div class="bk-gray">
                    <h3>修改</h3>

                    <div class="bk-gray radius">
                        <form  action="<?php echo U('Admin'.'/Article/change');?>" method="post">
                            <table class="table table-border table-bordered radius">
                                <?php if(is_array($article)): foreach($article as $key=>$v): ?><input type='hidden' value="<?php echo ($v["id"]); ?>" name="id">
                                    <tr>
                                        <th>项目</th>
                                        <th>修改</th>
                                    </tr>
                                    <tr> <td>标题：</td><td><?php echo ($v["lable"]); ?></td></tr>

                                    <tr><td> 时间：</td><td><?php echo (date('y-m-d H:i',$v["time"])); ?></td></tr>

                                    <tr><td> 内容:</td><td><?php echo ($v["content"]); ?></td></tr><?php endforeach; endif; ?>
                                <tr>
                                <?php if(is_array($aupdown)): foreach($aupdown as $key=>$vo): ?><td width="10%"><a href="<?php echo U('Admin'.'/Articlelist/up',array('id'=>$vo['id'],'up'=>$vo['up']));?>">点赞数：<?php echo ($vo["up"]); ?></a></td>
                                    <td width="10%"><a href="<?php echo U('Admin'.'/Articlelist/down',array('id'=>$vo['id'],'down'=>$vo['down']));?>">踩数：<?php echo ($vo["down"]); ?></a></td><?php endforeach; endif; ?>

                                </tr>



                            </table></form>
                    </div>




                </div><!-- /.row -->
            </div>
        </body>
    </html>