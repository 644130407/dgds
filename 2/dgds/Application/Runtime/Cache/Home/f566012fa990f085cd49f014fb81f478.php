<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>搜索</title>
        <script src="/dgds_6.18/2/dgds/Application/Home/Public/js/jquery-1.11.2.js" type="text/javascript"></script>
        <script src="/dgds_6.18/2/dgds/Application/Home/Public/js/index.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="/dgds_6.18/2/dgds/Application/Home/Public/css/blue_style.css">

    </head>

    <body>
        <div class="search_box">
            <div class="search_box_top">
                <div class="search_box_top_main">
                    <form action="<?php echo U('Search/asearch');?>" method="post">
                        <input type="text" name="search" class="search_text"/>
                           <input type="submit" value="" class="search_btn" style="background: url('/dgds_6.18/2/dgds/Application/Home/Public/images/search.png') no-repeat; width: 93px;height: 37px;border:0 none;display: inline; "/>
                           <a href="<?php echo U('Index/index');?>"><img src="/dgds_6.18/2/dgds/Application/Home/Public/images/sreturn.png" style="display:inline;"/></a>
                    </form>
                </div>
            </div>
            <div class="search_box_bottom">
                <div class="search_box_bottom_left" style="text-align:center;">

                    <?php if(is_array($article)): foreach($article as $key=>$v): ?><div class="search_box_bottom_left_content">
                            <h4><a href="<?php echo U('Index/detil',array('id'=>$v['id']));?>"><?php echo ($v["lable"]); ?></a></h4>
                        </div><?php endforeach; endif; ?>

                    <div><?php echo ($page); ?></div>
                </div>
                <div class="search_box_bottom_right"></div>
            </div>
        </div>
    </body>
</html>