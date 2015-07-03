<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
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
<link href="/dgds_6.18/2/dgds/Application/Admin/Public/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/dgds_6.18/2/dgds/Application/Admin/Public/css/style.css" rel="stylesheet" type="text/css" />
<link href="/dgds_6.18/2/dgds/Application/Admin/Public/lib/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link href="/dgds_6.18/2/dgds/Application/Admin/Public/lib/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href="/dgds_6.18/2/dgds/Application/Admin/Public/lib/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台登录</title>
<meta name="keywords" content="当当图书">
<meta name="description" content="当当">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal" action="<?php echo U('Index/index');?>" method="post">
      <div class="row cl">
        <label class="form-label col-3"><i class="iconfont">&#xf00ec;</i></label>
        <div class="formControls col-8">
          <input id="" name="username" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-3"><i class="iconfont">&#xf00c9;</i></label>
        <div class="formControls col-8">
          <input id="" name="password" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
      
      <div class="row">
        <div class="formControls col-8 col-offset-3">
          <label for="online">
            <input type="checkbox" name="online" id="online" value="">
            使我保持登录状态</label>
        </div>
      </div>
      <div class="row">
        <div class="formControls col-8 col-offset-3">
          <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright wt @2015</div>
<script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/lib/jquery.min.js"></script> 
<script type="text/javascript" src="/dgds_6.18/2/dgds/Application/Admin/Public/js/H-ui.js"></script> 
<script>
var _hmt = _hmt || [];
(function() {
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