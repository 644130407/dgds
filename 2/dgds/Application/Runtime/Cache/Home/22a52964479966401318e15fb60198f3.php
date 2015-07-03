<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻详情</title>
<script src="/dgds_6.18/2/dgds/Application/Home/Public/js/jquery-1.11.2.js" type="text/javascript"></script>
<script src="/dgds_6.18/2/dgds/Application/Home/Public/js/index.js" type="text/javascript"></script>
<script language="JavaScript" type="text/javascript" src="/dgds_6.18/2/dgds/Application/Home/Public/js/getToday.js"></script>
        <script language="JavaScript" type="text/javascript" src="/dgds_6.18/2/dgds/Application/Home/Public/js/getCNdate.js"></script>
        
        
        <!--[if IE 6]>
        <script src="/dgds_6.18/2/dgds/Application/Home/Public/js/html5media-master/dist/api/1.1.4/html5media.min.js"></script>
        <![endif]-->
<link rel="stylesheet" type="text/css" href="/dgds_6.18/2/dgds/Application/Home/Public/css/blue_style.css">


</head>

<body>

<div class="box">

<div class="banner">
<!--登录注册开始-->
       <div class="login">

<!--                    <form action="<?php echo U('Home'.'/Index/userLogin');?>" method="post" id="form" class="login form">-->
                        <span class="txt1">
                            <!--日期，农历-->
                            <script type="text/javascript">showCal2();</script>
                            <script type="text/javascript">showCal();</script></span>

                        <span class="txt2">用户名：<input type="text" name="username" /></span>
                        <span class="txt2">密码：<input type="password" name="password" /></span>
                        <span class="txt3"><input type="submit" name="login" value="登录"/></span>
                        <a href="<?php echo U('Home'.'/Index/register');?>"><span class="txt3"><input type="button" name="reg" value="注册"/></a></span>
                    <!--</form>-->

                     <span class="txt4" style="margin-left: 10px;display:inline-block" ><form action="<?php echo U('Search/asearch');?>" method="post" style="float:left"><input type="text" name="search" style="width: 120px;" /><input type="submit" name="login" value="搜索" style="width: 50px;height: 23px"/></form></span>


                </div>
<!--登录注册结束-->

</div>
<!--导航菜单开始-->
          <div class="nav">
                <ul id="nav">
                    <li><a href="<?php echo U('Index/index');?>">首页</a></li> 
                    <li  onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="#">分局概况</a>
                        <ul id="hidden">
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>1));?>">分局简介</a></li> 
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>2));?>">科所设置</a></li> 
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>3));?>">联系方式</a></li> 
                        </ul>
                    </li> 
                    <li   onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="#">科室之窗</a>
                        <ul id="hidden">
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>4));?>">办公室</a></li> 
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>5));?>">人事科</a></li> 
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>6));?>">监察科</a></li> 
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>7));?>">税管科</a></li>
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>8));?>">稽查科</a></li>
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>9));?>">计会科</a></li>
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>10));?>">评估科</a></li>
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>11));?>">信息科</a></li>
                        </ul>
                    </li> 
                    <li   onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="#">走进税务所</a>
                        <ul id="hidden">
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>12));?>">征收一所</a></li> 
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>13));?>">征收二所</a></li> 
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>14));?>">管理一所</a></li> 
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>15));?>">管理二所</a></li>
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>16));?>">管理三所</a></li>
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>17));?>">管理四所</a></li>
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>18));?>">管理五所</a></li>
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>19));?>">临港所</a></li>
                        </ul>
                    </li> 
                    <li   onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="#">学习培训</a>
                        <ul id="hidden">
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>20));?>">学习资料</a></li> 
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>21));?>">学习视频</a></li> 
                        </ul>
                    </li>
                    <li  onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="<?php echo U('Articlelist/index',array('type'=>22));?>">廉政建设</a></li> 
                    <li  onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="<?php echo U('Articlelist/index',array('type'=>23));?>">规章制度</a></li> 
                    <li   onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="<?php echo U('Articlelist/index',array('type'=>24));?>">党团工会</a>
                        <ul id="hidden">
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>25));?>">党建工作</a></li> 
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>26));?>">共青团建设</a></li> 
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>27));?>">工会活动</a></li> 
                        </ul>
                    </li> 
                    <li   onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="#">生活园地</a>
                        <ul id="hidden">
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>28));?>">生活常识</a></li> 
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>29));?>">心灵鸡汤</a></li> 
                            <li><a href="<?php echo U('Articlelist/index',array('type'=>30));?>">电子书库</a></li> 
                        </ul>
                    </li> 
                    <li  onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="<?php echo U('Articlelist/index',array('type'=>31));?>">下载空间</a></li> 
                </ul> 
            </div>
<!--导航菜单结束-->
<!--主要内容开始-->
 <div class="detail_three">
 <p class="detail_main_left_p1" style="background-color:#FFF;width:95%;margin:0px;padding-left:5%;height:40px;line-height:40px;">当前位置：<a href="<?php echo U('Index/index');?>">首页</a>>>><a href="#">正文</a></p>
 <div class="detail_three_left">
 
 <div class="detail_three_left_head">
 <?php if(is_array($article)): foreach($article as $key=>$v): ?><h1><?php echo ($v["lable"]); ?></h1>
 <span id="tianjia_time">添加时间：</span><span><?php echo (date('y-m-d H:i',$v["time"])); ?></span>
 </div>
 <div class="detail_three_left_content">
 
 <?php echo ($v["content"]); ?>
 </div>
 </div><?php endforeach; endif; ?>
  <div class="detail_three_right">
  <div class="detail_three_right_news">
<span>最新新闻</span>
</div>
<ul>
<?php if(is_array($alist)): foreach($alist as $key=>$v): ?><li><a href="<?php echo U('Index/detil',array('id'=>$v['id']));?>"><?php echo ($v["lable"]); ?></a></li><?php endforeach; endif; ?>
</ul>
  
   <div class="detail_three_right_news" style="margin-top:10px;">
<span>本站推荐</span>
</div>
<ul>
<?php if(is_array($alist)): foreach($alist as $key=>$v): ?><li><a href="<?php echo U('Index/detil',array('id'=>$v['id']));?>"><?php echo ($v["lable"]); ?></a></li><?php endforeach; endif; ?>
</ul>
  
  </div>
 </div>
<!--主要内容结束-->
<div class="footer">
<div class="footer0"></div>
        <div class="footer1">
            <a href="#">网站地图</a>&nbsp|
            <a href="#">免责声明</a> |
            <a href="#">设为首页</a> |
            <a href="#">加入收藏</a> |
            <a href="#">联系我们</a> |
            <a href="#">老板网站入口</a>
        </div>
            <div class="footer2">版权所有：天津地税局</div>
</div>
</div>
</body>
</html>