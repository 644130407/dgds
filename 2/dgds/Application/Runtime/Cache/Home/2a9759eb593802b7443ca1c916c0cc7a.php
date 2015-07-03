<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php if(is_array($user)): foreach($user as $key=>$v): ?><div> 
            <?php echo ($v["username"]); ?>++++++++++++++++
        </div><?php endforeach; endif; ?>
</body>
</html>