<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="/2/dgds/Application/Admin/View/assets/css/bootstrap.min.css" rel="stylesheet" />
        <title>文章列表页</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
             <div><a href="<?php echo U('Admin'.'/Index/index');?>">返回主页</a></div>
            <table class="table table-bordered table-hover definewidth m10">
                <tr>
                    <th> ID</th>
                    <th>type id</th>
                    <th>名称</th>
                    <th>操作</th>
                </tr>
                <?php if(is_array($type)): foreach($type as $key=>$v): ?><tr>
                        <td><?php echo ($v["id"]); ?></td>
                        <td><?php echo ($v["tid"]); ?></td>
                        <td><?php echo ($v["tname"]); ?></td>
                        <td>

                            <a href="<?php echo u('Admin'.'/Type/change',array('id'=>$v['id']));?>" class="btn btn-primary">修改</a>
                            [<a href="<?php echo u('Admin'.'/Type/del',array('id'=>$v['id']));?>">删除（仅测试使用）</a>]


                        </td>
                    </tr><?php endforeach; endif; ?>
                <form action="<?php echo u('Admin'.'/Type/add',array('id'=>$v['id']));?>" method="post">
                    <tr>
                        <td> </td>
                        <td> <input class="form-control" value="" name="tid"></td>
                        <td><input class="form-control" value="" name="tname"></td>
                        <td><button class="btn btn-primary" id="submit" type="submit">增加</button></td>
                    </tr>
                </form>
            </table>



        </div>
    </body>
</html>