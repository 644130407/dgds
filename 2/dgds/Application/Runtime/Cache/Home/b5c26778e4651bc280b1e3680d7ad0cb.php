<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>查找结果</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
     
        <table>
            <tr>
                <td>id:</td>
                <td><?php echo ($data->id); ?></td>
            </tr>
            <tr>
                <td>标题：</td>
                <td><?php echo ($data->realname); ?></td>
            </tr>
            <tr>
                <td>内容：</td>
                <td><?php echo ($data->username); ?></td>
            </tr>
        </table> 
    </body>
</html>