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
        <title>上传图片</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="pd-20">
        <div>
            <table class="table table-border table-bordered">
                <tr>
                    <th> ID</th>
                    <th>名称</th>
                    <th>缩略图</th>
                    <th>发布时间</th>
                    <th>操作</th>
                </tr>
                <?php if(is_array($pic)): foreach($pic as $key=>$v): ?><tr>
                        <td width="5%"><?php echo ($v["id"]); ?></td>
                        <td><?php echo ($v["image"]); ?></td>
                        <td width="10%"><image src="/dgds_6.18/2/dgds/Public/Uploads/<?php echo ($v["path"]); ?>/<?php echo ($v["image"]); ?>" style="width:100px;height: 100px"/></td>
                        <td width="15%"><?php echo (date('y-m-d H:i',$v["create_time"])); ?></td>
                        <td width="20%">

                            <a class="btn btn-primary" href="<?php echo u('Admin'.'/File/del',array('id'=>$v['id']));?>" >删除</a>
                            <a href="/dgds_6.18/2/dgds/Public/Uploads/<?php echo ($v["path"]); ?>/<?php echo ($v["image"]); ?>">查看详情</a>


                        </td>
                    </tr><?php endforeach; endif; ?>	


                <tr>
                <form action="<?php echo u('Admin'.'/File/upload');?>" enctype="multipart/form-data" method="post" >
                    <td>上传新图</td>
                    <td>请选择您需要修改的图片id：<input type="text"  name="id"></td>
                    <td>上传 <input type="file"  name="photo1"></td>

                    <td><button type="submit" value="upload" class="btn btn-primary">上传</button></td>
                </form>
                </tr>
            </table>
        </div>
        </div>
    </body>
</html>