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
      <p><?php echo $title;?></p>
    </div>
    <div class="detail">
        <table cellpadding="10" cellspacing="0" border="1" bordercolor="#CC9900" class="presale_table">
        <tr>
            <td width="15%">编号：</td>
              <td width="35%"><?php echo $num;?></td>
              <td width="23%">发证日期：</td>
              <td width="27%"><?php echo $date;?></td>
          </tr>
        <tr>
            <td width="15%">预售项目：</td>
              <td width="35%"><?php echo $name;?></td>
              <td width="23%">建设用地规划许可证：</td>
              <td width="27%"></td>
          </tr>
        <tr>
            <td>项目座落：</td>
              <td><?php echo $address;?></td>
              <td>建设工程规划许可证：</td>
              <td></td>
          </tr>
        <tr>
            <td>建筑面积：</td>
              <td colspan="3"><?php echo $mianji;?></td>

          </tr>
        <tr>
            <td>房屋套数：</td>
              <td colspan="3"><?php echo $number;?></td>

          </tr>
        <tr>
            <td>项目结构：</td>
              <td><?php echo $xmjiegou;?></td>
              <td>土地使用权证：</td>
              <td></td>
          </tr>
        <tr>
            <td>项目栋数：</td>
              <td><?php echo $xmnum;?></td>
              <td>施工许可证：</td>
              <td></td>
          </tr>
        <tr>
            <td>工程总投资：</td>
              <td></td>
              <td>工程形象进度：</td>
              <td></td>
          </tr>
        <tr>
            <td>开工日期：</td>
              <td><?php echo $startdate;?></td>
              <td>竣工交付日期：</td>
              <td><?php echo $overdate;?></td>
          </tr>
        <tr>
            <td>开发商信息：</td>
              <td><?php echo $information;?></td>
              <td>销售代理公司：</td>
              <td><?php echo $dailigs;?></td>
          </tr>
          <tr><td colspan="4">预售许可证扫描件</td></tr>
          <?php if( is_array($shaomiao)) : foreach ($shaomiao as $key => $value) { ?>
          <tr>
            <td colspan="4" align="center"><img src="<?php echo $value['url'];?>" width="650" alt="<?php echo $value['alt'];?>" /></td>
          </tr>
        <?php } endif; ?>
      </table>
    </div>
  </div>
  <!--right end-->
</div>
<?php include template("content","footer-common"); ?>