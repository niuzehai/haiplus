<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
load_template('public/header',array(
  'title'        => $this->config->item('site_title').'，'.$this->config->item('sub_title'),
  'keywords'     => $this->config->item('key_words'),
  'description'  => $this->config->item('site_description')
));
?>
<style type="text/css">
#tagscloud{width:250px;height:260px;position:relative;font-size:12px;color:#333;margin:20px auto 0;text-align:center;}
#tagscloud a{position:absolute;top:0px;left:0px;color:#333;font-family:Arial;text-decoration:none;margin:0 10px 15px 0;line-height:18px;text-align:center;font-size:12px;padding:1px 5px;display:inline-block;border-radius:3px;}
#tagscloud a.tagc1{background:#666;color:#fff;}
#tagscloud a.tagc2{background:#F16E50;color:#fff;}
#tagscloud a.tagc5{background:#006633;color:#fff;}
#tagscloud a:hover{color:#fff;background:#0099ff;}
.f{font-family:"微软雅黑", Arial, sans-serif;margin-right:20px;}
</style>
<br/><br />
<div id="main-container" class="container" style="margin-top:80px; margin-bottom:30px;">
  <center>
    <?php echo img(array('src'=>'static/img/logo_home.png','alt'=>'logo'))?>
  </center>
  <br /><br />
  <div class="row">
    <div class="col-md-6 col-md-offset-3">   
      <div class="input-group col-xs-12">
         <?php load_template('public/search-form','type=all'); ?>
      </div>
    </div>
  </div>
</div>
<center>
  <?php if($fetched>=0):?>
    <span class="f">今日已收录数据：<b><?php echo $fetched ?></span>
  <?php else:?>
    <span class="f">昨日收录：<b><?php echo $yesday_fetched ?></span>
  <?php endif;?>
  <span class="f">本站共收录数据：<b><?php echo $all_fetched ?></span>
</center>
<?php load_template('public/js'); ?>
<script type="text/javascript" color="51,133,255" opacity='1'src="//cdn.bootcss.com/canvas-nest.js/1.0.0/canvas-nest.min.js"></script>
<div style="display:none"><?php load_template('public/analytics'); ?></div>
</body>
</html>

 