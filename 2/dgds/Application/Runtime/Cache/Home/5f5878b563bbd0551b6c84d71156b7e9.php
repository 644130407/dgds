<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>天津滨海新区第三地方税务局</title>
        <script src="/dgds_6.18/2/dgds/Application/Home/Public/js/jquery-1.11.2.js" type="text/javascript"></script>
        <script src="/dgds_6.18/2/dgds/Application/Home/Public/js/index.js" type="text/javascript"></script>
        <script language="JavaScript" type="text/javascript" src="/dgds_6.18/2/dgds/Application/Home/Public/js/getToday.js"></script>
        <script language="JavaScript" type="text/javascript" src="/dgds_6.18/2/dgds/Application/Home/Public/js/getCNdate.js"></script>
        <link rel="stylesheet" type="text/css" href="/dgds_6.18/2/dgds/Application/Home/Public/css/blue_style.css">


    </head>

    <body style="width: 1366px;">
        <div id="adWindow" class="adWindow">
            <p id="adWindow_btn"></p>
            <?php if(is_array($window)): foreach($window as $key=>$v): ?><a href="http://<?php echo ($v["link"]); ?>">
                    <?php echo ($v["lable"]); ?></br>
                    <?php echo ($v["content"]); ?>
                </a></br><?php endforeach; endif; ?>
        </div>
        <div class="box" style="background-color: white">

            <div class="banner">
                <!--登录注册开始-->
                <div class="login">
                    <span class="txt1"> <!--日期，农历-->
                        <script type="text/javascript">showCal2();</script>
                        <script type="text/javascript">showCal();</script></span>

                    <?php if($_SESSION["state"] == 1 ): ?><span style="position: absolute; right: 80px"> <?php echo ($_SESSION["username"]); ?></span>
                        <a style="position: absolute; right: 20px" href="<?php echo U('/Index/userCancel');?>">注销</a>
                        <?php else: ?>
                        <span class="txt1" style="display:inline-block"><form action="<?php echo U('Index/userLogin');?>" method="post" style="float:left">用户名：<input type="text" name="username" />
                                密码：<input type="password" name="password" />
                                <span class="txt3"><input type="submit" name="login" value="登录"  /></span></form></span><?php endif; ?>



                    <span class="txt4" style="margin-left: 10px;display:inline-block" ><form action="<?php echo U('Search/asearch');?>" method="post" style="float:left"><input type="text" name="search" style="width: 120px;" /><span class="txt3"><input type="submit" name="login" value="搜索" style="width: 60px;" /></span></form></span>

                    <span class="txt2"> <a href="<?php echo U('Home'.'/Index/register');?>">注册</a></span>

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
                            <?php if($_SESSION["state"] == 1 ): ?><li><a href="<?php echo U('Articlelist/index',array('type'=>28));?>">生活常识</a></li> 
                                <li><a href="<?php echo U('Articlelist/index',array('type'=>29));?>">心灵鸡汤</a></li> 
                                <li><a href="<?php echo U('Articlelist/index',array('type'=>30));?>">电子书库</a></li> 
                                <?php else: ?><li><a href="">生活常识</a></li> 
                                <li><a href="">心灵鸡汤</a></li> 
                                <li><a href="">电子书库</a></li><?php endif; ?>

                        </ul>
                    </li> 
                    <?php if($_SESSION["state"] == 1 ): ?><li  onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="<?php echo U('Articlelist/index',array('type'=>31));?>">下载空间</a></li> 
                        <?php else: ?>
                        <li  onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"><a href="">下载空间</a></li><?php endif; ?>
                </ul> 
            </div>
            <!--导航菜单结束-->
            <!--主要内容开始-->
            <div class="main_content">
                <!--新闻内容开始-->
                <div class="news_content">
                    <!--新闻内容左边部分开始-->
                    <div class="news_content_left">
                        <div class="news_img" id="selectCar_img">
                            <p class="news_img_title">
                                <span class="active"><a href="#">图片新闻</a></span>
                                <span><a href="#">视频新闻</a></span>
                            </p>
                            <div class="news_img_content" style="display:block;" id="news_img_content1">
                                <div id="fade_focus">
                                    <div class="loading">Loading...<br /><img src="/UploadPic/2009-3/200932411630437.gif" width="100" height="100" /></div>
                                    <ul>
                                        <?php if(is_array($picnew)): foreach($picnew as $key=>$v): ?><li><a href="<?php echo ($v["link"]); ?>" ><img src="/dgds_6.18/2/dgds/Public/Uploads/<?php echo ($v["path"]); ?>/<?php echo ($v["name"]); ?>" width="550" height="250" alt="<?php echo ($v["lable"]); ?>" /></a></li><?php endforeach; endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="news_img_content"  id="news_img_content1">
                                <div id="fade_focus1">
                                    <div class="loading">Loading...<br /><img src="/UploadPic/2009-3/200932411630437.gif" width="100" height="100" /></div>
                                    <ul>
                                        <?php if(is_array($videonew)): foreach($videonew as $key=>$v): ?><li><a href="<?php echo ($v["link"]); ?>" target="_blank"><img src="/dgds_6.18/2/dgds/Public/Uploads/Video/<?php echo ($v["path"]); ?>/<?php echo ($v["name"]); ?>" width="550" height="250" alt="展示图片5" /></a></li><?php endforeach; endif; ?>     
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--新闻内容左边部分结束-->
                    <!--新闻内容中间部分开始-->
                    <div class="news_content_center" style="border: 1px solid #dbdbdb">
                        <p class="news_content_center_title">
                            <span class="news_content_center_title_s1">局内新闻</span>
                            <span class="news_content_center_title_s2"><a href="<?php echo U('Articlelist/alist',array('type'=>7));?>">更多>></a></span>
                        </p>
                        <div class="junei_img"><img src="/dgds_6.18/2/dgds/Application/Home/Public/images/junei.png" /></div>
                        <ul class="u1">
                            <?php if(is_array($article)): foreach($article as $key=>$v): ?><li><a href="<?php echo U('Index/detil',array('id'=>$v['id']));?>"><?php echo ($v["lable"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                    <!--新闻内容中间部分结束-->
                    <!--新闻内容右边部分开始-->
                    <div class="news_content_right" style="border: 1px solid #dbdbdb">
                        <div class="d2">
                            <b class="d2_b">公告栏</b>/<span class="d2_s">Notice</span><a href="#">更多>></a>
                        </div>
                        <div id="box_main_right_notice_box">
                            <div id="box_main_right_notice_bbox">
                                <div id="box_main_right_notice_box1">
                                    <?php if(is_array($role)): foreach($role as $key=>$v): ?><a href="<?php echo ($v["link"]); ?>">
                                            <div id="box_main_right_notice_box1">
                                                <p ><?php echo ($v["lable"]); ?></p>
                                                <p ><?php echo ($v["content"]); ?></p>
                                            </div>
                                        </a><?php endforeach; endif; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--新闻内容右边部分结束-->
                </div>
                <!--新闻内容结束-->
                <!--六小版块区域内容开始-->
                <div class="six_box" style="margin-top: 20px">
                    <div class="six_box_left">
                        <div class="download">
                            <?php if($_SESSION["state"] == 1 ): ?><a href="<?php echo U('Articlelist/index',array('type'=>31));?>"><img src="/dgds_6.18/2/dgds/Application/Home/Public/images/xiazaiyuandi.png" /></a>
                                <?php else: ?> <img src="/dgds_6.18/2/dgds/Application/Home/Public/images/xiazaiyuandi.png" /><?php endif; ?>

                        </div>
                        <div class="zhuanlan" style="border: 1px solid #dbdbdb">
                            <div class="d3">
                                <b>专栏入口</b>/<span>Column&nbsp;entry</span>
                            </div>
                            <ul>
                                <?php if(is_array($column)): foreach($column as $key=>$v): ?><li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/vv<?php echo ($v["id"]); ?>.png) no-repeat left;"><a href="<?php echo U('Articlelist/cindex',array('column'=>$v['id']));?>"><?php echo ($v["column"]); ?></a></li><?php endforeach; endif; ?>
                            </ul>
                        </div>

                        <div class="investigation" style="border: 1px solid #dbdbdb">
                            <div class="d3">
                                <b>税务管理</b>/<span>Investigation</span>
                            </div>
                            <ul>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/v1.png) no-repeat left;"><a href="#">国家税务总局</a></li>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/v2.png) no-repeat left;"><a href="#">天津财税信息网</a></li>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/v3.png) no-repeat left;"><a href="#">天津财税信息中心</a></li>
                                <li id="fenju" onmouseover="displayfenju(this)" onmouseout="hidefenju(this)" style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/v4.png) no-repeat left;"><a href="#">地方税务分局</a>
                                    <div id="fenju_hidden">
                                        <ul>
                                            <li><a href="#">和平地税</a></li>
                                            <li><a href="#">河东地税</a></li>
                                            <li><a href="#">河西地税</a></li>
                                            <li><a href="#">何北地税</a></li>
                                            <li><a href="#">南开地税</a></li>
                                            <li><a href="#">红桥地税</a></li>
                                            <li><a href="#">东丽地税</a></li>
                                            <li><a href="#">津南地税</a></li>
                                            <li><a href="#">西青地税</a></li>
                                            <li><a href="#">北辰地税</a></li>
                                            <li><a href="#">武清地税</a></li>
                                            <li><a href="#">宝坻地税</a></li>
                                            <li><a href="#">静海地税</a></li>
                                            <li><a href="#">蓟县地税</a></li>
                                            <li><a href="#">宁河地税</a></li>
                                            <li><a href="#">滨海新区地税</a></li>
                                            <li><a href="#">滨海第一地税分局</a></li>
                                            <li><a href="#">滨海第二地税分局</a></li>
                                            <li><a href="#">滨海第三地税分局</a></li>
                                            <li><a href="#">滨海第四地税分局</a></li>
                                            <li><a href="#">滨海第五地税分局</a></li>
                                            <li><a href="#">滨海第六地税分局</a></li>
                                            <li><a href="#">地税直属局</a></li>
                                            <li><a href="#">第一稽查局</a></li>
                                            <li><a href="#">第二稽查局</a></li>
                                            <li><a href="#">纳税服务局</a></li>
                                            <li><a href="#">地税登记局</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--主要内容中间六小版块区域内容开始-->
                    <div class="six_box_center">
                        <div class="six_box_spart" style="border: 1px solid #dbdbdb">
                            <p class="six_box_spart_title">
                                <span class="six_box_spart_title_s1">征管动态</span>
                                <span class="six_box_spart_title_s2"><a href="<?php echo U('Articlelist/alist',array('type'=>1));?>">更多>></a></span>
                            </p>
                            <div class="six_img"><img src="/dgds_6.18/2/dgds/Application/Home/Public/images/six_1.png" /></div>
                            <ul class="u2">
                                <?php if(is_array($zgdt)): foreach($zgdt as $key=>$v): ?><li><a href="<?php echo U('Index/detil',array('id'=>$v['id']));?>"><?php echo ($v["lable"]); ?></a></li><?php endforeach; endif; ?>
                            </ul>
                        </div>

                        <div class="six_box_spart" style="margin-left:15px;" style="border: 1px solid #dbdbdb">
                            <p class="six_box_spart_title">
                                <span class="six_box_spart_title_s1">科所风采</span>
                                <span class="six_box_spart_title_s2"><a href="<?php echo U('Articlelist/alist',array('type'=>2));?>">更多>></a></span>
                            </p>
                            <div class="six_img"><img src="/dgds_6.18/2/dgds/Application/Home/Public/images/six_2.png" /></div>
                            <ul class="u2">
                                <?php if(is_array($ksfc)): foreach($ksfc as $key=>$v): ?><li><a href="<?php echo U('Index/detil',array('id'=>$v['id']));?>"><?php echo ($v["lable"]); ?></a></li><?php endforeach; endif; ?>
                            </ul>
                        </div>

                        <div class="six_box_spart" style="margin-top:10px;" style="border: 1px solid #dbdbdb">
                            <p class="six_box_spart_title">
                                <span class="six_box_spart_title_s1">学习培训</span>
                                <span class="six_box_spart_title_s2"><a href="<?php echo U('Articlelist/alist',array('type'=>3));?>">更多>></a></span>
                            </p>
                            <div class="six_img"><img src="/dgds_6.18/2/dgds/Application/Home/Public/images/six_3.png" /></div>
                            <ul class="u2">
                                <?php if(is_array($xxpx)): foreach($xxpx as $key=>$v): ?><li><a href="<?php echo U('Index/detil',array('id'=>$v['id']));?>"><?php echo ($v["lable"]); ?></a></li><?php endforeach; endif; ?>
                            </ul>
                        </div>

                        <div class="six_box_spart" style="margin-left:15px; margin-top:10px;" style="border: 1px solid #dbdbdb">
                            <p class="six_box_spart_title">
                                <span class="six_box_spart_title_s1">廉政建设</span>
                                <span class="six_box_spart_title_s2"><a href="<?php echo U('Articlelist/alist',array('type'=>4));?>">更多>></a></span>
                            </p>
                            <div class="six_img"><img src="/dgds_6.18/2/dgds/Application/Home/Public/images/six_4.png" /></div>
                            <ul class="u2">
                                <?php if(is_array($lzjs)): foreach($lzjs as $key=>$v): ?><li><a href="<?php echo U('Index/detil',array('id'=>$v['id']));?>"><?php echo ($v["lable"]); ?></a></li><?php endforeach; endif; ?>
                            </ul>
                        </div>

                        <div class="six_box_spart" style="margin-top:10px;" style="border: 1px solid #dbdbdb">
                            <p class="six_box_spart_title">
                                <span class="six_box_spart_title_s1">党团工会</span>
                                <span class="six_box_spart_title_s2"><a href="<?php echo U('Articlelist/alist',array('type'=>5));?>">更多>></a></span>
                            </p>
                            <div class="six_img"><img src="/dgds_6.18/2/dgds/Application/Home/Public/images/six_5.png" /></div>
                            <ul class="u2">
                                <?php if(is_array($dtgz)): foreach($dtgz as $key=>$v): ?><li><a href="<?php echo U('Index/detil',array('id'=>$v['id']));?>"><?php echo ($v["lable"]); ?></a></li><?php endforeach; endif; ?>
                            </ul>
                        </div>

                        <div class="six_box_spart" style="margin-left:15px;margin-top:10px;" style="border: 1px solid #dbdbdb">
                            <p class="six_box_spart_title">
                                <span class="six_box_spart_title_s1">生活园地</span>
                                <span class="six_box_spart_title_s2"><a href="<?php echo U('Articlelist/alist',array('type'=>6));?>">更多>></a></span>
                            </p>
                            <div class="six_img"><img src="/dgds_6.18/2/dgds/Application/Home/Public/images/six_6.png" /></div>
                            <ul class="u2">
                                <?php if($_SESSION["state"] == 1 ): if(is_array($shyd)): foreach($shyd as $key=>$v): ?><li><a href="<?php echo U('Index/detil',array('id'=>$v['id']));?>"><?php echo ($v["lable"]); ?></a></li><?php endforeach; endif; ?>
                                    <?php else: ?> 您未登录<?php endif; ?>

                            </ul>
                        </div>

                    </div>
                    <!--主要内容中间六小版块区域内容结束-->
                    <div class="six_box_right" style="border: 1px solid #dbdbdb">
                        <div class="juyou"><img src="/dgds_6.18/2/dgds/Application/Home/Public/images/juyou.png" /></div>
                        <div class="six_box_right_use">
                            <div class="d3" >
                                <b>应用专区</b>
                            </div>
                            <ul>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/1.png) no-repeat left rgb(255,255,255);"><a href="#">津税系统</a></li>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/2.png) no-repeat left rgb(255,255,255);"><a href="#">税管员平台</a></li>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/3.png) no-repeat left rgb(255,255,255);"><a href="#">一次性告知</a></li>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/4.png) no-repeat left rgb(255,255,255);"><a href="#">BIMS</a></li>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/5.png) no-repeat left rgb(255,255,255);"><a href="#">数据回访</a></li>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/6.png) no-repeat left rgb(255,255,255);"><a href="#">数据仓库</a></li>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/7.png) no-repeat left rgb(255,255,255);"><a href="#">12366</a></li>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/8.png) no-repeat left rgb(255,255,255);"><a href="#">远程教育平台</a></li>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/9.png) no-repeat left rgb(255,255,255);"><a href="#">公文处理</a></li>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/4.png) no-repeat left rgb(255,255,255);"><a href="#">津税测试</a></li>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/5.png) no-repeat left rgb(255,255,255);"><a href="#">平台测试</a></li>
                                <li style="background:url(/dgds_6.18/2/dgds/Application/Home/Public/images/6.png) no-repeat left rgb(255,255,255);"><a href="#">绩效管理系统</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--六小版块区域内容结束-->


                <!--图片展示区域开始-->
                <div class="picture" style="border: 1px solid #dbdbdb">
                    <div class="d4">
                        <b>局内风貌</b>
                    </div>
                    <div id="picture_roll">
                        <div id="picture_bbox">
                            <ul id="ul1">
                                <!--<li style="margin-left:0px;"><img src="/dgds_6.18/2/dgds/Application/Home/Public/images/1.jpg" border="0"/></li>-->
                                <?php if(is_array($pic)): foreach($pic as $key=>$v): ?><li style="margin-left:10px;"><img src="/dgds_6.18/2/dgds/Public/Uploads/<?php echo ($v["path"]); ?>/<?php echo ($v["image"]); ?>" border="0" style="width:240px;height:180px"/></li><?php endforeach; endif; ?>
                            </ul>
                            <ul id="ul2"></ul>
                        </div>
                    </div>
                </div>
                <!--图片展示区域结束-->


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