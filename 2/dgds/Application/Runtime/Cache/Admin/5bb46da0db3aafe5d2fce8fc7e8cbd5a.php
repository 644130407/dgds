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
                    <h4>修改</h4>

                    <div class="bk-gray radius">
                        <form  action="<?php echo U('Admin'.'/Article/change');?>" method="post">
                            <table class="table table-border table-bordered radius">
                                <?php if(is_array($article)): foreach($article as $key=>$v): ?><input type='hidden' value="<?php echo ($v["id"]); ?>" name="id">
                                    <tr>
                                        <th>项目</th>
                                        <th>修改</th>
                                    </tr>
                                    <tr> <td>输入标题：</td><td><input value="<?php echo ($v["lable"]); ?>" name="lable" class="input-text radius size-M"></td></tr><?php endforeach; endif; ?>

                                <tr> <td>输入类别：</td>
                                    <td>
                                        <span class="select-box">
                                            <select class="select" size="1" name="type">

                                                <option value="<?php echo ($article[0]['type']); ?>" selected><?php echo ($article[0]['tname']); ?></option>

                                                <?php if(is_array($type)): foreach($type as $key=>$v): ?><option value="<?php echo ($v["tid"]); ?>"><?php echo ($v["tname"]); ?></option><?php endforeach; endif; ?>
                                            </select>
                                        </span>
                                    </td>
                                </tr>
                                <?php if(is_array($article)): foreach($article as $key=>$v): ?><tr><td> 输入时间：</td><td><input type='date' value="<?php echo ($v["time"]); ?>" name="time" class="input-text radius size-M"></td></tr>
                                    <tr><td> 输入内容</td><td><textarea id="contents" name="content"><?php echo ($v["content"]); ?></textarea></td></tr><?php endforeach; endif; ?>



                                <td><button class="btn btn-primary" id="submit" type="submit">修改</button></td>


                            </table></form>
                    </div>




                </div><!-- /.row -->


            </div>

        </body>
    </html>