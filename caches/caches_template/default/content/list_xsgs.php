<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=7" />
  <meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
  <meta name="description" content="<?php echo $SEO['description'];?>"/>
  <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
  <link href="<?php echo CSS_PATH;?>all.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo CSS_PATH;?>jquery.simplyscroll.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
</head>
<body>
  <?php include template("content","header_common"); ?>
  <!--信息公开整块-->
  <div class="w1000 t10 clearfix">
    <!--left-->
    <div class="w210 left">
   <p class="title_blue">现预售公示</p>
      <ul class="list_zwgk">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=33a21f6a6a3b0bbf11ebe4cae2f04210&action=category&siteid=%24siteid&catid=219&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'catid'=>'219','limit'=>'10',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </ul>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <p class="title_blue">信息公开</p>
    <ul class="list_zwgk">
     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b460522d7df27a7a7804be6b853e32e0&action=category&siteid=%24siteid&catid=11&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'catid'=>'11','limit'=>'10',));}?>
     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
     <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
     <?php $n++;}unset($n); ?>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
   </ul>
 </div>
 <!--left end-->
 <!--right-->
 <div class="right w770">
  <div class="detail_title">
    <p><?php echo $CATEGORYS[$catid]['catname'];?></p>
  </div>
  <div class="detail1">
   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=83e86dbe8e634be99f241427bdc4f45f&action=lists&catid=%24catid&num=20&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
   <ul class="listnews">
    <li>
      <span class="data_w1 title">公司名称</span>
      <span class="data_w6 title">发证日期</span>
    </li>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <?php if($n%2==0) { ?> 
    <li class="bg">
      <?php } else { ?>
      <li>
        <?php } ?>
        <a href="<?php echo $r['url'];?>" class="data_w1"><?php echo $r['title'];?></a>
        <span class="data_w6"><?php echo $r['date'];?></span>
      </li>
      <?php $n++;}unset($n); ?>
    </ul>
<div class="page_navi">
<ul id="pagenum"><?php echo $pages;?></ul>
</div>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    
  </div>
</div>
<!--right end-->
</div>
<!--ad-->
<!--ad end-->
<!--cr-->
<?php include template("content","footer-common"); ?>
</body>
</html>
