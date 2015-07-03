<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
        <title>用户信息</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav class="breadcrumb"><i class="iconfont">&#xf012b;</i> 首页<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
        <div class="pd-20">
            <table class="table table-bordered table-striped">
                <thead class="text-c">
                    <tr>
                        <th width="40%">名称</th>
                        <th>详情</th>
                    </tr>
                </thead>
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
                        部门：
                    </td>
                    <td>
                        <?php echo ($user['department']); ?>
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
                        权限：
                    </td>
                    <td>
                        <?php echo ($user['jurisdiction']); ?>
                    </td>
                </tr>







            </table><br>

            <div class="text-c">
                <a href="<?php echo U('Admin'.'/Admin/admin_info_update');?>"><button class="btn btn-primary radius" id="button" type="button" >修改信息</button></a>
                <a href="<?php echo U('Admin'.'/Index/logout');?>"><button class="btn btn-danger radius" id="submit" type="submit">注销</button></a>
            </div>
        </div>
    </body>

    <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/jquery.min.js"></script> 
    <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/layer1.8/layer.min.js"></script> 
    <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/laypage/laypage.js"></script> 
    <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/My97DatePicker/WdatePicker.js"></script> 
    <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/jquery.dataTables.min.js"></script> 
    <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/js/H-ui.js"></script> 
    <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/js/H-ui.admin.js"></script> 
    <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/js/H-ui.admin.doc.js"></script> 
    <script type="text/javascript">

        $('.table-sort').dataTable({
            "lengthMenu": false, //显示数量选择 
            "bFilter": false, //过滤功能
            "bPaginate": false, //翻页信息
            "bInfo": false, //数量信息
            "aaSorting": [[1, "desc"]], //默认第几个排序
            "bStateSave": true, //状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable": false, "aTargets": [0, 6]}// 制定列不参与排序
            ]
        });
    </script> 
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));
                < /script
                < /html>