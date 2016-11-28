<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<?php
if(isset($title))
  echo "<title>".htmlspecialchars($title)."</title>";
else
  echo "<title>".$this->config->item('site_title')."</title>";   

if(isset($keywords))
  echo meta('keywords', htmlspecialchars($keywords));
if(isset($description))
  echo meta('description', htmlspecialchars($description));

echo link_tag('static/css/bootstrap.min.css');
echo link_tag('static/css/style.css?v=1.0');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">
<meta name="HandheldFriendly" content="true">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" style="font-size:13px">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="pan-s"><a href="http://plus.haiwind.com">首页</a></li>
          <li><a href="/spider-list" >最新收录</a></li>
          <li><a href="http://www.haiwind.com">开发博客</a></li>
          <li><a id="fulls" href="#">开启全屏</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
