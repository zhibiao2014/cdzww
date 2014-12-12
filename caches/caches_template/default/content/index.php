<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=7" />
      <meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
      <meta name="description" content="<?php echo $SEO['description'];?>"/>
      <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
      <link href="<?php echo CSS_PATH;?>all.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo CSS_PATH;?>jquery.simplyscroll.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
      <?php include template("content","header_common"); ?>
      <!--信息公开整块-->
      <div class="w1000 t10 clearfix">
        <!--left-->
        <div class="w210 left">
          <p class="title_blue">信息公开</p>
          <ul class="list_zwgk">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7c507c26e1299b52c706b7fcfe23b80a&action=category&siteid=%24siteid&catid=11&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'catid'=>'11','limit'=>'6',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
          </ul>

          <p class="title_blue t10">组织机构</p>
          <ul class="list_xxgk">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7bcea0a25e1cb06f47df63bec7886664&action=category&siteid=%24siteid&catid=43&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'catid'=>'43','limit'=>'6',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
          </ul>

        </div>
        <!--left end-->
        <!--news-->
        <div class="left l20 w490" style="position: relative;">
          <ul class="news clearfix">
            <li>
              <img src="<?php echo IMG_PATH;?>img/zw_icon1.jpg" width="46" height="40" />
              <a href="<?php echo $CATEGORYS['12']['url'];?>">政策法规</a>
            </li>
            <li>
              <img src="<?php echo IMG_PATH;?>img/zw_icon2.jpg" width="46" height="40" />
              <a href="<?php echo $CATEGORYS['13']['url'];?>">公示公告</a>
            </li>
            <li>
              <img src="<?php echo IMG_PATH;?>img/zw_icon3.jpg" width="46" height="40" />
              <a href="<?php echo $CATEGORYS['87']['url'];?>">工作动态</a>
            </li>
            <li>
              <img src="<?php echo IMG_PATH;?>img/zw_icon4.jpg" width="46" height="40" />
              <a href="<?php echo $CATEGORYS['88']['url'];?>">机关建设</a>
            </li>
          </ul>

          <div class="scroll_img">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f94a4aab3088335bcd8694670b4bf66c&action=position&posid=12&thumb=1&order=id+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','thumb'=>'1','order'=>'id DESC','limit'=>'4',));}?> 
            <ul class="photo">
              <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
              <li>
                <a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank">
                  <img class="news_img" src="<?php echo thumb($v[thumb], 348, 232);?>" width="348" height="232" alt="<?php echo $v['title'];?>" />
                </a>
              </li>
              <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </div>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b60285d054076b4aba6af6b6a44df8b3&action=lists&catid=118&order=id+ASC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'118','order'=>'id ASC','limit'=>'7',));}?> 
          <ul class="newslist left clear_right">

            <li class="height10"></li>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <?php if($n == 1) { ?>	
            <li class="height30"><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
            <?php } else { ?> 
            <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
            <?php } ?>
            <?php $n++;}unset($n); ?>
          </ul> 
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c91a7f9b23535e454e7d4ea50cacbf83&action=lists&catid=129&order=id+ASC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'129','order'=>'id ASC','limit'=>'7',));}?>    
          <ul class="newslist l20 left">
            <li class="height10"></li>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <?php if($n == 1) { ?>    
            <li class="height30"><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
            <?php } else { ?>            	
            <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
            <?php } ?>
            <?php $n++;}unset($n); ?>
          </ul>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <!--news end-->
        <!--notice-->
        <div class="w260 right">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c893a6f5fc39b8f8f7e545163f66fe5f&action=position&posid=22&order=id+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','order'=>'id DESC','limit'=>'6',));}?>      
          <ul class="notice">                 
            <li class="title"><span class="span_title">通知</span><a href="<?php echo $CATEGORYS['13']['url'];?>" class="more">更多&gt;</a></li>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <li class="list"><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
            <?php $n++;}unset($n); ?>
            <ul>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2a0d939f369d51c58e2a11dec183f68c&action=position&posid=24&order=id+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'24','order'=>'id DESC','limit'=>'6',));}?>
              <ul class="notice">
                <li class="black"> </li>        
                <li class="title">公告<a href="<?php echo $CATEGORYS['86']['url'];?>" class="more">更多&gt;</a></li>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li class="list"><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                <?php $n++;}unset($n); ?>
              </ul>    
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>       
            </div>
            <!--notice end-->
          </div>
          <!--信息公开整块end-->
          <!--pre_sele-->
          <div class="w1000 t20 clearfix">
            <style type="text/css">
              #tabs {
                position: relative;
              }
              #tabs ul li {
                float: left;
              }
              #tabs a.more{
                position: absolute;
                top: 10px;
                left: 670px;
                display: block;
              }
              .ui-tabs-active a.a2 {
                display: inline-block;
                background-color: #FFF;
                width: 120px;
                text-align: center;
                float: left;
                height: 25px;
                margin-top: 5px;
                line-height: 25px;
                color: #003f98;
                text-decoration: none;
              }
            </style>
            <div id="tabs" class="left w720">
              <ul class="pre_sale_title">
                <li><a href="#tabs-1" class="a2"><?php echo $CATEGORYS['202']['catname'];?></a></li>
                <li><a href="#tabs-2" class="a2"><?php echo $CATEGORYS['203']['catname'];?></a></li>
              </ul>
              <div id="tabs-1">

                <a href="#" class="more">更多&gt;</a>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4f266cfb647ba9b872df376938bdf09f&action=lists&catid=202&order=id+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'202','order'=>'id DESC','limit'=>'6',));}?>
                <ul class="pre_sale">
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                  <li>
                    <span class="span1"><?php echo $r['num'];?></span>
                    <a href="<?php echo $r['url'];?>"><span class="span2"><?php echo $r['name'];?></span></a>
                    <span class="span3"><?php echo $r['address'];?></span>
                    <span class="span4"><?php echo $r['date'];?></span>
                  </li>
                  <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
              </div>

              <div id="tabs-2">
                <a href="#" class="more">更多&gt;</a>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d46f2617c12d01c3a8f7bfe626caf496&action=lists&catid=203&order=id+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'203','order'=>'id DESC','limit'=>'6',));}?>
                <ul class="pre_sale">
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                  <li>
                    <span class="span1"><?php echo $r['num'];?></span>
                    <a href="<?php echo $r['url'];?>"><span class="span2"><?php echo $r['name'];?></span></a>
                    <span class="span3"><?php echo $r['address'];?></span>
                    <span class="span4"><?php echo $r['date'];?></span>
                  </li>
                  <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
              </div>
            </div>
            <!--download-->
            <div class="right w260">
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a22b2e7eb66972aedd12f51bfcddb41a&action=position&posid=25&order=id+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'25','order'=>'id DESC','limit'=>'6',));}?>
              <ul class="notice">
                <li class="title">表格下载</li>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li class="list"><a href="<?php echo $r['url'];?>">· <?php echo $r['title'];?></a></li>
                <?php $n++;}unset($n); ?>
              </ul>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <!--download end-->
          </div>
          <!--pre_sele end-->
          <div class="w1000 t5">
            <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=11"></script>
          </div>
          <!--房地产企业查询-->
          <div class="company_title t5">
            <p>房地产企业查询</p>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59d99156004194f60317b011fe1ee007&action=category&catid=197&order=id+DESC&nmber=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'197','order'=>'id DESC','nmber'=>'4','limit'=>'20',));}?>
            <ul>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
              <?php if($n!=1) { ?>
              <li>|</li>
              <?php } ?>
              <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
              <?php $n++;}unset($n); ?>
              <li class="more"><a href="<?php echo $CATEGORYS['197']['url'];?>">更多&gt;</a></li>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </div>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f9d5455380b94a59f80a54943b14b8f5&action=position&posid=28&order=id+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'28','order'=>'id DESC','limit'=>'5',));}?>    
          <ul class="company w1000">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php if($n==5) { ?>
            <li class="li1">
              <?php } else { ?>
              <li>
                <?php } ?>

                <a href="<?php echo $r['url'];?>" class="text1"><?php echo $r['name'];?></a>
                <a href="<?php echo $r['url'];?>" class="text2"><?php echo $r['address'];?></a>
                <a href="<?php echo $r['url'];?>" class="text3"><?php echo $r['number'];?></a>
                <a href="<?php echo $r['url'];?>" class="text4"><?php echo $r['effectivedate'];?></a>
              </li>
              <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <!--房地产企业查询 end-->
            <!--service-->
            <div class="w1000 t20 clearfix">
              <div class="service_title">
                <img src="<?php echo IMG_PATH;?>img/service_icon.jpg" width="17" height="43" />
                网上办事大厅
                <a href="<?php echo $CATEGORYS['20']['url'];?>">更多&gt;</a>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=935fbdc641f39583cf5e89d0bf4eb34e&action=category&catid=20&siteid=%24siteid&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'20','siteid'=>$siteid,'limit'=>'4',));}?>
                <ul>
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                  <?php if($n!=1) { ?>
                  <li>·</li>
                  <?php } ?>
                  <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                  <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
              </div>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dd26a7649c472dd37652763a4e9a49f8&action=position&posid=23&order=id+DESC&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'23','order'=>'id DESC','limit'=>'12',));}?>
              <ul class="service">
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <?php if($n%4==0) { ?>
                <li class="mar0"><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                <?php } else { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                <?php } ?>
                <?php $n++;}unset($n); ?>
              </ul>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <!--service end-->
            <!--laws-->
            <div class="w1000 t20 clearfix">
              <div class="service_title">
                <img src="<?php echo IMG_PATH;?>img/laws_icon.jpg" width="17" height="43" />
                政策法规
                <a href="<?php echo $CATEGORYS['12']['url'];?>">更多&gt;</a>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c1056ee2a681c1edc39247d79f26d854&action=category&siteid=%24siteid&catid=12&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'catid'=>'12','limit'=>'4',));}?>
                <ul>
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                  <?php if($n!=1) { ?>
                  <li>·</li>
                  <?php } ?>
                  <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                  <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
              </div>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c89ebaaced35192c42647de65952544d&action=position&siteid=%24siteid&posid=27&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('siteid'=>$siteid,'posid'=>'27','limit'=>'8',));}?>
              <ul class="laws">
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <?php if($n%2==0) { ?>
                <li>
                  <?php } else { ?>
                  <li class="li1">
                    <?php } ?>
                    <a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
        <!--
        <li class="li1 li2"><a href="#">住房城乡建设部关于进一步规范房地产估价机构管理工作的通知</a></li>
        <li class="li2"><a href="#">关于印发《常德市房地产管理局关于提高房产项目建设品质的指导意见》的通知</a></li>-->
      </ul>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    </div>
    <!--laws end-->
    <div class="w1000 t5"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=12"></script></div>
    <div class="w1000 t5"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=13"></script></div>
   

    <div class="w1000 t5">
      <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=14"></script>
    </div>
    <!--cr-->
    <div id="links" class="clear">
      <p>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=099475d22e9eb216d42195e28b4f143d&action=type_list&typeid=60&siteid=1&linktype=0&order=listorder+DESC&num=100&return=links\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$links = $link_tag->type_list(array('typeid'=>'60','siteid'=>'1','linktype'=>'0','order'=>'listorder DESC','limit'=>'100',));}?>
        <?php $n=1;if(is_array($links)) foreach($links AS $link) { ?>
        <a href="<?php echo $link['url'];?>" target="_blank"><?php echo $link['name'];?></a> |
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </p>
    </div>
    <?php include template("content","footer-common"); ?>
    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.simplyscroll.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.slides.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery-ui.js"></script>
    <script type="text/javascript">
      function ChannelSlide(Name,Class){
        $('.scroll_img ul.photo li').sGallery({
          thumbNowClass: Class });
      }

      $(function(){
        $( "#tabs" ).tabs({event: 'mouseover'});
        $('#slides').slides({
          preload: true,
          generateNextPrev: true
        });
        new ChannelSlide(".scroll_img","on",311,260);

        $("#scroller").simplyScroll();
        $("#city_tuijie_tu").simplyScroll({customClass : ""});
    /*$(".picbig").each(function(i){
    var cur = $(this).find('.img-wrap').eq(0);
    var w = cur.width();
    var h = cur.height();
    $(this).find('.img-wrap img').LoadImage(true, w, h,'<?php echo IMG_PATH;?>msg_img/loading.gif');
  });*/
    });
    </script>
  </body>
  </html>
