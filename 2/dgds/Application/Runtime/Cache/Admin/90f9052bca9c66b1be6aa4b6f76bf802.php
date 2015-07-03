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

            <script type="text/javascript">
                window.UEDITOR_HOME_URL = '/dgds_6.18/2/dgds/Data/Ueditor/';
                window.onload = function () {
                    window.UEDITOR_CONFIG.initialFrameHeight = 100;
                    window.UEDITOR_CONFIG.initialFrameWidth = 1000;
                    //window.UEDITOR_CONFIG.imageUrl="<?php echo U(GROUP_NAME.'/Blog/upload');?>";//更改图片的Action控制器1.4.2以下
                    //window.UEDITOR_CONFIG.imagePath='/dgds_6.18/2/dgds/Upload/';//更改图片的地址
                    UE.getEditor('contents');
                }
            </script>

            <script type="text/javascript" src='/dgds_6.18/2/dgds/Data/Ueditor/ueditor.config.js'></script>
            <script type="text/javascript" src='/dgds_6.18/2/dgds/Data/Ueditor/ueditor.all.min.js'></script>
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <script type="text/javascript">
                var editor;
                function submitEditor() {
                    //此处以非空为例
                    if (ue.hasContents()) {
                        ue.sync();       //同步内容
                        document.MyForm.submit();
                    }
                }
            </script>
            <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.min.js"></script>
            <![endif]-->
        </head>

        <body>

            <div class="pd-20">
                <div class="bk-gray">
                    <h1>增加文章</h1>

                    <form action="<?php echo U('Admin'.'/Article/carticleadd');?>" method="post">
                        <table class="table table-border table-bordered radius">

                            <tr>
                                <th>项目</th>
                                <th>修改</th>
                            </tr>
                            <tr> <td>输入标题：</td><td><input value="" name="title" class="input-text radius size-M"></td></tr>

                            <tr><td> 输入时间：</td><td><input type="date"  value="" name="time" class="input-text radius size-M"></td></tr>

                            <tr> <td>输入专栏名：</td><td>
                                    <select class="select" size="1" name="column">

                                        <option value="" selected>类别</option>
                                        <?php if(is_array($column)): foreach($column as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" name="column"><?php echo ($v["column"]); ?></option><?php endforeach; endif; ?>
                                    </select></td></tr>

                            <tr> <td>专栏小分类：</td><td>
                                    <select class="select" size="1" name="ctype">

                                        <option value="" selected>类别</option>
                                        <?php if(is_array($ctype)): foreach($ctype as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" name="ctype"><?php echo ($v["tname"]); ?></option><?php endforeach; endif; ?>
                                    </select></td></tr>

                            <tr><td> 输入内容</td><td><textarea id="contents" name="content"><?php echo ($v["content"]); ?></textarea></td></tr>





                            <td><button class="btn btn-primary" id="submit" type="submit">增加</button></td>


                        </table></form>
                </div>






            </div>


        </body>
    </html>