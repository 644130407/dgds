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
            <title>文章列表页</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <div class="pd-20">
                <div>
                    <table class="table table-border table-bordered table-striped">
                        <tr>
                            <th> ID</th>
                            <th>标题</th>
                            <th>所属分类</th>
                            <th>作者</th>
                            <th>发布时间</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($article)): foreach($article as $key=>$v): ?><tr>
                                <td width="5%"><?php echo ($v["id"]); ?></td>
                                <td><?php echo ($v["lable"]); ?></td>
                                <td width="10%">
                                <?php switch($v["column"]): case "1": ?>三严三实活动专栏<?php break;?>
                                    <?php case "2": ?>绩效考核工作专栏<?php break;?>
                                    <?php case "3": ?>廉政文化建设专栏<?php break;?>
                                    <?php case "4": ?>网上调查评测专栏<?php break;?>
                                    <?php case "5": ?>预留<?php break;?>
                                    <?php default: ?>没有分类<?php endswitch;?>
                                </td>
                                <td width="5%"><?php echo ($v["writer"]); ?></td>
                                <td width="12%"><?php echo ($v["time"]); ?></td>
                                <td width="5%"><?php if(($v["state"] == 0)): ?>未审核
                                <?php elseif($v["state"] == 1): ?>已上线<?php endif; ?></td>
                            <td width="40%">

                                <a href="<?php echo u('Admin'.'/Article/carticlechange',array('id'=>$v['id']));?>" class="btn btn-primary">修改</a> 
                                <a href="<?php echo u('Admin'.'/Articlelist/cdel',array('id'=>$v['id']));?>" class="btn btn-danger radius">删除</a>
                                <a href="<?php echo u('Admin'.'/Articlelist/cshowdetail',array('id'=>$v['id']));?>" class="btn btn-secondary radius">查看详情</a>
                                <a href="<?php echo u('Admin'.'/Articlelist/cagree',array('id'=>$v['id']));?>" class="btn btn-success radius">审核通过并上线</a>

                            </td>
                            </tr><?php endforeach; endif; ?>
                        <tr><?php echo ($page); ?></tr>
                    </table>

                </div>
            </div>
        </body>
    </html>