<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <LINK rel="Bookmark" href="/dgds_6.18/2/dgds/Application/Admin/Public/favicon.ico" >
        <LINK rel="Shortcut Icon" href="/dgds_6.18/2/dgds/Application/Admin/Public/favicon.ico" />
        <!--[if lt IE 9]>
        <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/html5.js"></script>
        <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/respond.min.js"></script>
        <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/PIE_IE678.js"></script>
        <![endif]-->
        <link href="/dgds_6.18/2/dgds/Application/Admin/Public/css/H-ui.min.css" rel="stylesheet" type="text/css" />
        <link href="/dgds_6.18/2/dgds/Application/Admin/Public/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
        <link href="/dgds_6.18/2/dgds/Application/Admin/Public/css/style.css" rel="stylesheet" type="text/css" />
        <link href="/dgds_6.18/2/dgds/Application/Admin/Public/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
        <link href="/dgds_6.18/2/dgds/Application/Admin/Public/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!--[if IE 7]>
        <link href="/dgds_6.18/2/dgds/Application/Admin/Public/lib/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
        <![endif]-->
        <!--[if IE 6]>
        <script type="/dgds_6.18/2/dgds/Application/Admin/Public/text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
        <script>DD_belatedPNG.fix('*');</script>
        <![endif]-->
        <title>滨海新区第三税务局后台管理</title>

    </head>
    <body>
        <header class="Hui-header cl"> <a class="Hui-logo l" title="H-ui.admin v2.2" href="/">滨海新区第三税务局后台管理</a> <a class="Hui-logo-m l" href="/" title="H-ui.admin"></a> <span class="Hui-subtitle l">V1.0</span> <span class="Hui-userbox"><span class="c-white">管理员：<?php echo (session('username')); ?></span> <a class="btn btn-danger radius ml-10" href="<?php echo U('Index/logout');?>" title="退出"><i class="icon-off"></i> 退出</a></span> <a aria-hidden="false" class="Hui-nav-toggle" href="#"></a> </header>
        <aside class="Hui-aside">
            <input runat="server" id="divScrollValue" type="hidden" value="" />
            <div class="menu_dropdown bk_2">
                <dl id="menu-user">
                    <dt><i class="icon-user"></i>前台用户中心<i class="iconfont menu_dropdown-arrow">&#xf02a9;</i></dt>
                    <dd>
                        <ul>
                            <li><a _href="<?php echo U('Userlist/index');?>" href="javascript:;">前台用户管理</a></li>


                        </ul>
                    </dd>
                </dl>
                <dl id="menu-comments">
                    <dt><i class="icon-comments"></i>后台管理员管理<i class="iconfont menu_dropdown-arrow">&#xf02a9;</i></dt>
                    <dd>
                        <ul>

                            <li><a _href="<?php echo U('Admin/admin_info_update');?>" href="javascript:;">管理员信息修改页面</a></li>
                            <li><a _href="<?php echo U('Adminlist/index');?>" href="javascript:void(0)">后台管理员管理</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl id="menu-article">
                    <dt><i class="icon-edit"></i>添加文章<i class="iconfont menu_dropdown-arrow">&#xf02a9;</i></dt>
                    <dd>
                        <ul>
                            <li><a _href="<?php echo U('Admin'.'/Article/index');?>" href="javascript:void(0)">添加新闻</a></li>
                            <li><a _href="<?php echo U('Admin'.'/Article/column');?>" href="javascript:void(0)">添加专栏新闻</a></li>
                            <li><a _href="<?php echo U('Admin'.'/Window/index');?>" href="javascript:void(0)">飞窗消息</a></li>
                            <li><a _href="<?php echo U('Admin'.'/Rolewin/index');?>" href="javascript:void(0)">滚动消息</a></li>
                            <li><a _href="<?php echo U('Admin'.'/Picnews/index');?>" href="javascript:void(0)">图片新闻</a></li>
                            <li><a _href="<?php echo U('Admin'.'/Videonews/index');?>" href="javascript:void(0)">视频新闻</a></li>
                            
                        </ul>
                    </dd>
                </dl>
                <dl id="menu-picture">
                    <dt><i class="icon-picture"></i>文章与专栏管理<i class="iconfont menu_dropdown-arrow">&#xf02a9;</i></dt>
                    <dd>
                        <ul>
                            <li><a _href="<?php echo U('Admin'.'/Articlelist/index');?>" href="javascript:void(0)">新闻管理</a></li>
                            <li><a _href="<?php echo U('Admin'.'/Articlelist/cindex');?>" href="javascript:void(0)">专栏文章管理</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl id="menu-product">
                    <dt><i class="icon-beaker"></i> 其他<i class="iconfont menu_dropdown-arrow">&#xf02a9;</i></dt>
                    <dd>
                        <ul>
                            <li><a _href="<?php echo U('Admin'.'/Column/index');?>" href="javascript:void(0)">专栏管理</a></li>
                            <li><a _href="<?php echo U('Admin'.'/File/index');?>" href="javascript:void(0)">主页滚动图片</a></li>
                            <li><a _href="#" href="javascript:void(0)">修改前台颜色</a></li>
                            
                        </ul>
                    </dd>
                </dl>



            </div>
        </aside>
        <div class="dislpayArrow"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
        <section class="Hui-article-box">
            <div id="Hui-tabNav" class="Hui-tabNav">
                <div class="Hui-tabNav-wp">
                    <ul id="min_title_list" class="acrossTab cl">
                        <li class="active"><span title="我的桌面" data-href="<?php echo U('Admin/admin_info');?>">我的桌面</span><em></em></li>
                    </ul>
                </div>
                <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="icon-step-backward"></i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="icon-step-forward"></i></a></div>
            </div>
            <div id="iframe_box" class="Hui-article">
                <div class="show_iframe">
                    <div style="display:none" class="loading"></div>
                    <iframe scrolling="yes" frameborder="0" src="<?php echo U('Admin/admin_info');?>"></iframe>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/jquery.min.js"></script> 
        <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/Validform_v5.3.2.js"></script> 
        <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/layer1.8/layer.min.js"></script> 
        <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/js/H-ui.js"></script> 
        <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/js/H-ui.admin.js"></script> 
        <script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/js/H-ui.admin.doc.js"></script> 
        <script>
            var _hmt = _hmt || [];
            (function () {
                var hm = document.createElement("script");
                hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
            var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));
        </script>
    </body>
</html>