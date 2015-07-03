<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>查找</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="<?php echo U('Home'.'/Search/search');?>" method="post" id="form">
            <div>
                <div>
                    <input class="text_value" value="" name="find" type="text" id="search">
                </div>
                <button class="button" id="submit" type="submit">搜索</button>
            </div>
        </form>
    </body>
</html>