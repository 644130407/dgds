<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>这是主页</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="<?php echo U('Admin'.'/Index/seach');?>" method="post">
            <input type="text" name="date"/>
            <button type="submit">submit</button>
        </form>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>1));?>">分局简介</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>2));?>">科所设置</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>3));?>">联系方式</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>4));?>">办公室</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>5));?>">人事科</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>6));?>">监察科</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>7));?>">税管科</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>8));?>">稽查科</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>9));?>">计会科</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>10));?>">评估科</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>11));?>">信息科</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>12));?>">征收一所</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>13));?>">征收二所</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>14));?>">管理一所</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>15));?>">管理二所</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>16));?>">管理三所</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>17));?>">管理四所</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>18));?>">管理五所</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>19));?>">临港所</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>20));?>">学习资料</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>21));?>">学习视频</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>22));?>">廉政建设</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>23));?>">规章制度</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>24));?>">党团工会</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>25));?>">党建工作</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>26));?>">共青团建设</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>27));?>">工会活动</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>28));?>">生活常识</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>29));?>">心灵鸡汤</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>30));?>">电子书库</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('type'=>31));?>">下载空间</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('column'=>1));?>">三严三实活动专栏</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('column '=>2));?>">绩效考核工作专栏</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('column'=>3));?>">廉政文化建设专栏</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index',array('column '=>4));?>">网上调查评测专栏</a></div>
        <div><a href="">预留</a></div>

        ——————————————————————————————————————————————————
        ————————————————————————————————————————————————————————<br>
        <div><a href="<?php echo U('Admin'.'/Article/index');?>">新增文章</a></div>
        <div><a href="<?php echo U('Admin'.'/Type/index');?>">新增分类</a></div>
        <div><a href="<?php echo U('Admin'.'/Column/index');?>">专栏管理</a></div>
        <div><a href="<?php echo U('Admin'.'/Articlelist/index');?>">全部文章</a></div>
        <div><a href="<?php echo U('Admin'.'/Window/index');?>">飞窗消息</a></div>
         <div><a href="<?php echo U('Admin'.'/File/index');?>">upload</a></div>
         <div><a href="<?php echo U('Admin'.'/Picnews/index');?>">图片新闻</a></div>
         <div><a href="<?php echo U('Admin'.'/Videonews/index');?>">视频新闻</a></div>
    </body>
</html>