<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:30:"./template/pc/view_product.htm";i:1587447718;s:55:"D:\phpStudy\PHPTutorial\WWW\bjzh\template\pc\header.htm";i:1591000128;s:55:"D:\phpStudy\PHPTutorial\WWW\bjzh\template\pc\footer.htm";i:1591079483;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="yes" name="apple-touch-fullscreen">
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<meta content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no, width=device-width" name="viewport" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/font-awesome.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/global.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/widget.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/variouscomponents.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/images.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/theme.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/color_0.css">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.min.js"></script>
<!--[if !IE]><!-->
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/base.js"></script>
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/lightbox.min.css" rel="stylesheet">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.superslide.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/common.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/theme.js"></script>
<!-- feib -->
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/layer.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/language.js"></script>
<!-- plugins -->
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.formsvalidation.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.nodecommon.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/extend.js"></script>
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animate.min.css">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/animate.min.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/components.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.menu_style.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.init.js"></script>
<script type="text/javascript">
$(function(){
    dataAnimate();
    (function($,lanno){
        if(lanno === "" || lanno === "default"){
            return '';
        }
        $(".w-languege").each(function(){
            $(this).find("a").each(function(){
                if($(this).data("lanno") === lanno){
                    $(this).addClass("cur");
                }else{
                    if($(this).hasClass("cur")){
                        $(this).removeClass("cur");
                    }
                }
            });
        });
    })(jQuery,"cn");
});
</script>
</head>
<body>
<div class="body"> <!-- <div class="top" style="background: #173262;height: 38px;line-height: 38px;overflow: hidden;">
    <div class="g_cw clearfix" style="    width: 1220px;padding: 0 10px;margin: 0 auto;">
          <p class="left" style="    float: left;color: #fff;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_7"); echo $__VALUE__; ?></p>
          <p class="right" style="float: right;color: #fff;">咨询热线：<b><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; ?></b></p>
        </div>
  </div> -->
<div class="w-container w-header navbar-fixed-top" style="background-color: #b1030a;">
  <div class="row clearfix">
    <div class="mobile-nav-toggle"><i class="fa fa-navicon fa-2x"></i></div>
    <div class="nav_right_mask"></div>
    <div class="col-logo">
      <div class="w-logo">
        <h1 style="display:none;"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/"></a></h1>
        <a  href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/"  class="w-logo-img"  > <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>"/> </a> </div>
    </div>
    <div class="col-right clearfix">
      <div class="w-nav g-active-add">
        <div class="w-nav-in">
          <ul class="nav_inner clearfix" id="g-web-ul-menu" style="display:none;">
            <li  class=""><a href = "<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/" >网站首页</a><i class="nav_simpline_cur"></i></li><!--<?php if(CONTROLLER_NAME == 'Index'): ?>active<?php endif; ?>-->
            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 20; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
            <li  class="<?php echo $field['currentstyle']; ?>">
              <div class="li-parent-div li-parentOne-div"><a href = "<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?><i class="fa fa-plus"></i><?php endif; ?> </a></div>
              <i class="nav_simpline_cur"></i> <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
              <div class="submenu">
                <div class="back-div"><i class="fa fa-angle-left"></i><span>返回</span></div>
                <ul>
                  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 20; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,20, true) : $field['children']->slice(0,20, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$mod = ($e % 2 );$i= intval($key) + 1;?>
                  <li><a href = "<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a></li>
                  <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
                </ul>
              </div>
              <?php endif; ?> </li>
            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
            <div class="nav_moveBox"></div>
          </ul>
        </div>
      </div>
      <div class="topLogBox">
        <div class="topLogBox-in">
          <div class="col-com"> </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <section class="w-container bannerBox ">
    <div class="banner"> <img src="<?php if(!(empty($eyou['field']['banner']) || (($eyou['field']['banner'] instanceof \think\Collection || $eyou['field']['banner'] instanceof \think\Paginator ) && $eyou['field']['banner']->isEmpty()))): ?><?php echo $eyou['field']['banner']; else: ?><?php echo gettoptype($eyou['field']['typeid'],'banner'); endif; ?>
" alt="banner" title="" style=""  /> <a href="javascript:void(0);" ><span style="display:none;">none</span></a> </div>
  </section>
  <div class="w-container w-main">
    <div class="row">
      <div class="wrap-content-in w-system w-productcom">
        <div class="w-system-in">
          <div class="product-detail-wrap">
            <div class="w-com-content">
              <div class="w-breadcrumbs"> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", "crumb"); echo $__VALUE__; ?> </div>
              <div class="product-detail-top1">
                
                <!--<div class="rotatePicbox-tel">
                  <div class="imgSlideMain clearfix">
                    <div id="imgSlide2" data-role="slide" class="imgSlide">
                      <ul>
                        <?php if(is_array($eyou['field']['image_list']) || $eyou['field']['image_list'] instanceof \think\Collection || $eyou['field']['image_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['image_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $mod = ($e % 2 );$i= intval($key) + 1;?>
                        <li><a href="javascript:void(0);"><img class="g-cover" src="<?php echo $field['image_url']; ?>"></a></li>
                        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
                      </ul>
                    </div>
                    <div class="navSlideBox">
                      <ul class="navSlide">
                        <ul>
                          <?php if(is_array($eyou['field']['image_list']) || $eyou['field']['image_list'] instanceof \think\Collection || $eyou['field']['image_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['image_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $mod = ($e % 2 );$i= intval($key) + 1;?>
                          <li class="i_point <?php if($i == '1'): ?>active<?php endif; ?>"><?php echo $i; ?></li>
                          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
                        </ul>
                      </ul>
                    </div>
                  </div>
                  <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/c_wap.js"></script> 
                  <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/c_wap2.js"></script> 
                  <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/slide.js"></script> 
                  <script>
        setTimeout(function () {
            imgSlideInit('#imgSlide2', 1000)
        }, 600);
    </script> 
                </div>-->
                <div class="product-detail-info" style="margin-left: 0;">
                  <div class="product-detail-info-in">
                    <div class="prd_detInfo_con">
                      <div class="product-title" style="text-align: center;">
                        <h2> <?php echo $eyou['field']['title']; ?> </h2>
                      </div>
                      <div class="product-short-sum" style="text-align: center;"><?php echo $eyou['field']['seo_description']; ?></div>
                      <!--<div class="product-grayBox clearfix">
                        <div class="product-prices"> <?php if(is_array($eyou['field']['attr_list']) || $eyou['field']['attr_list'] instanceof \think\Collection || $eyou['field']['attr_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['attr_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $mod = ($e % 2 );$i= intval($key) + 1;?>
                          <div class="price-sale"> <?php echo $field['attr_name']; ?>： <span class="num"> ￥<span class="bigsize g-promotion"><?php echo $field['attr_value']; ?></span> </span> </div>
                          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?> </div>
                        <div class="collect_share clearfix"> </div>
                      </div>-->
                    </div>
                    <div class="prd_detInfo_con">
                      <div class="product-properies-groups"> </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="product-maincon">
                <div class="product-maincon-in">
                  <style>
    .info_tab .cur_tab a{
        cursor:auto;
    }
</style>
                  <div class="info_tab">
                    <div class="info_tab_in">
                      <ul class="clearfix">
                        <li class="cur_tab" data-tab="29707"><a href="javascript:void(0)">产品详细</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-descons">
                    <div class="descon_item" id="Tabitem29707">
                      <div class="wp-products-detail-desc" style="padding:0px;"><?php echo $eyou['field']['content']; ?></div>
                      <p><br/>
                      </p>
                    </div>
                  </div>
                  <div class="news-others">
                    <div class="pre-next" >
                      <div class="news-prev"><?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("pre");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( empty($__LIST__) ) : echo htmlspecialchars_decode("&lt;a&gt;上一篇：暂无&lt;/a&gt;");else: $field = $__LIST__;$field["title"] = text_msubstr($field["title"], 0, 100, false);?> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"> 上一篇：<?php echo $field['title']; ?> </a> <?php endif; else: echo htmlspecialchars_decode("&lt;a&gt;上一篇：暂无&lt;/a&gt;");endif; ?></div>
                      <div class="news-next"><?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("next");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( empty($__LIST__) ) : echo htmlspecialchars_decode("&lt;a&gt;下一篇：暂无&lt;/a&gt;");else: $field = $__LIST__;$field["title"] = text_msubstr($field["title"], 0, 100, false);?> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"> 下一篇：<?php echo $field['title']; ?> </a> <?php endif; else: echo htmlspecialchars_decode("&lt;a&gt;下一篇：暂无&lt;/a&gt;");endif; ?></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="prddetail_foot_fixed" >
                <div class="prddetail_foot clearfix" style="width:100%;"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--<div class="w-container w-footer">
  <div class="w-footer-section " >
    <div class="w-footer-in" >
      <div class="foot-mask" ></div>
      <div class="w-foot-content">
        <div class="li-div">
          <div class="w-text"  style="">
            <div align="center"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?> </br>
              <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?></div>
          </div>
        </div>
      </div>
      
    </div>
  </div>-->
  <!--联系我们-->
  <div class="w-container w-main">
   <!--   <div class="w-foot-content" style="background: #ccc;">
        <div class="li-div">
          <div class="w-text"  style="">
        <div align="center"><span>友情链接： </span> 
          <?php  $tagFlink = new \think\template\taglib\eyou\TagFlink; $_result = $tagFlink->getFlink("text", "0,24"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 45, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?><a href="<?php echo $field['url']; ?>" <?php echo $field['target']; ?>><?php echo $field['title']; ?> </a><?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?> 
        </div>
        </div>
        </div>
        </div> -->
    <div class="w-section pdTop-default pdBottom-default" style="background:#b1030a;;"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "5"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <div class="row" >
        <div class="row-mask" ></div>
        <div class="wrap-content-in  pdTop-large pdBottom-large">
          <!--<div class="li-div">
            <div class="not-animated w-text" data-animate="" style="">
              <div style="text-align:center; color:#fff;">
                <p style="font-size:130%;"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></p>
                <p style="line-height:1.8;"><?php  $__VALUE__ = isset($channelartlist["seo_description"]) ? $channelartlist["seo_description"] : "变量名不存在"; echo $__VALUE__; ?></p>
              </div>
            </div>
          </div>-->
          <!--<div class="li-div">
            <div class="w-space space-b noChoose"  style="height:70px;">
              <div class="stretch-b"></div>
            </div>
          </div>-->
          <div class="li-div col-li-div">
            <div class="col-table">
              <table class="div-table div-table-first" width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    
                    <td class="td-w" width="89.466122014735774%"><div class="div-padding">
                        <div class="li-div">
                          <div class="not-animated w-text" data-animate="" style="">
                            <div style="color:#fff;">
                              <h3 style="font-size:110%;margin:0px 0px 10px 0px;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></h3> <!--margin:30px 0 40px; --> 
                              <p style="line-height:1.5; font-size:90%;">联系人：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?> &nbsp;&nbsp;电话：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?><br/>
                                邮箱：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_3"); echo $__VALUE__; ?>&nbsp;&nbsp;地址：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?><br/>
                                热线电话：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; ?>（二十四小时在线，你的建议或意见使我们前进的动力）<br/>
                              <?php echo htmlspecialchars_decode($global['web_copyright']); ?>--SEO技术支持：<a href="http://www.0917bjms.com/">麦思科技</a> &nbsp;&nbsp;
              <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?></p>
                            </div>
                          </div>
                        </div>
                      </div></td>
                      <td class="td-w" width="10.5040650406504%"><div class="div-padding">
                        <div class="li-div">
                          <div class="not-animated w-map" data-animate="" style="">
                            <div class="map">
                            <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_6"); echo $__VALUE__; ?>" width="100%"  height=" 100px">
                            </div>
                          </div>
                        </div>
                      </div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?> </div>
  </div>
  
  
  <div class="w-service-fixed">
    <div class="service-item bg_s_default color_s_default aHoverbg_deepen aHovercolor_deepen service-item-top"> <i class="fa fa-caret-up"></i>
      <div class="top" onclick="$('body,html').animate({scrollTop: 0}, 'normal');">TOP</div>
    </div>
    <script type="text/javascript">
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 20) {
                    $('.w-service-fixed .service-item-top').show();
                } else {
                    $('.w-service-fixed .service-item-top').hide();
                }
            });
        });
    </script> 
  </div>
</div>
<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $__VALUE__; ?> 
<!-- 应用插件标签 start --> 
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?> 
<!-- 应用插件标签 end --> </div>
<div class="topTel" onclick="$('body,html').animate({scrollTop: 0}, 500);"><i class="fa fa-arrow-up"></i></div>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.global.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.form.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/lightbox.min.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.product_detail.js"></script>
</body>
</html>