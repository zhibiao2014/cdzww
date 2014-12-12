<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--logo-->
<div class="logo clearfix w1000">
	<a href="<?php echo siteurl($siteid);?>"><img src="<?php echo IMG_PATH;?>img/logo.jpg" width="230" height="76" /></a>
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0b8731cfbd31624a05f89da2a1f023d5&action=category&siteid=%24siteid&catid=57&num=5&order=id+ESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'catid'=>'57','order'=>'id ESC','limit'=>'5',));}?>
  <p>
	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	<?php if($n != 1 ) { ?> ·&nbsp;<?php } ?><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
  <?php $n++;}unset($n); ?>
  </p>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<!--logo end-->
<!--nav-->
<div class="nav">
	<div class="w1000">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=76951d2eb79db3f7dee2e2f472cde06c&action=category&siteid=%24siteid&catid=205&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'catid'=>'205','limit'=>'5',));}?>
   	  <ul class="left">
        	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        	<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
        	<?php $n++;}unset($n); ?>
      </ul>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      <ul class="right black000">
     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cf8a725b79193bcf703112412048ca52&action=category&siteid=%24siteid&catid=207&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'catid'=>'207','limit'=>'5',));}?>
        	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        	<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
        	<?php $n++;}unset($n); ?>
      </ul>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </div>
</div>
<!--nav end-->

<!--nav-->
<div class="nav1">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9c75b279681002a52f517ce6b859ced5&action=category&siteid=%24siteid&catid=20&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'catid'=>'20','limit'=>'25',));}?>
        <ul>
            <li class="block1">&nbsp;</li>
            <li>房管局科室：</li>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php if($n !=1 ) { ?>
            <li>|</li>
            <?php } ?>
            <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<!--nav1 end-->
<!--show_img-->
<div class="w1000">
<img src="<?php echo IMG_PATH;?>img/show.jpg" width="1000" height="260" /> 
</div>
<!--show_img end-->