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
echo link_tag('static/css/result_style.css?v=1.0');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">
<meta name="HandheldFriendly" content="true">
</head>
<body>
