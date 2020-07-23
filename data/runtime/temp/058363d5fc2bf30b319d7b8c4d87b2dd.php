<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:46:"./template/mobile/lists_guestbook_thtgjsgs.htm";i:1591146978;s:59:"D:\phpStudy\PHPTutorial\WWW\bjzh\template\mobile\header.htm";i:1589869124;s:59:"D:\phpStudy\PHPTutorial\WWW\bjzh\template\mobile\footer.htm";i:1589870522;}*/ ?>
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
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/bootstrap.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/common.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/animate.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/css.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/media.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/foot.css","","",""); echo $__VALUE__; ?>
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/css/style.css" />

<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery-1.11.3.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/slick.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/common.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/wow.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.js","","",""); echo $__VALUE__; ?>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/js/jixie.js" ></script>
<!--[if lt IE 9]>
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/html5shiv.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/respond.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/selectivizr-min.js","","",""); echo $__VALUE__; ?>
  <![endif]-->
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
	<div class="head-box">
	  <div class="fh"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/fh.png" onClick="javascript:window.history.go(-1)" alt="返回"> </div>
	  <h2><?php echo gettoptype($eyou['field']['typeid'],'typename'); ?></h2>
	  <ul class="nva-btn" id="nva-box">
	    <li></li>
	    <li></li>
	    <li></li>
	  </ul>
	</div>
	<!-- 多语言 -->
        <div style="width: 100%; height: 30px; ">
            <div style="line-height: 2px;">
                <?php  $tagLanguage = new \think\template\taglib\eyou\TagLanguage; $_result = $tagLanguage->getLanguage("list", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
                <img src="<?php echo $field['logo']; ?>" alt="<?php echo $field['title']; ?>"/>
                <a style="font-size: 12px;line-height: 30px;" href="<?php echo $field['url']; ?>"><?php echo $field['title']; ?></a>
                <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
            </div>
        </div>

    <div class="clearfix"></div>
	<!--导航-->
<div class="nva-box" id="nva">
  <form  method="get" action="<?php  $tagSearchurl = new \think\template\taglib\eyou\TagSearchurl; $__VALUE__ = $tagSearchurl->getSearchurl(); echo $__VALUE__?>">
    <input type="hidden" name="channel" value="" />
    <input type="hidden" name="typeid" value="" />
    <input type="text" id="keywords" name="keywords" placeholder="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:4:"sys7";}'); echo $__VALUE__; ?>" />
    <input type="submit" id="" value="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:4:"sys7";}'); echo $__VALUE__; ?>" />
    <div class="clearfix"></div>
  </form>
  <ul class="nva-list">
    <li><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:4:"sys1";}'); echo $__VALUE__; ?></a></li>
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
    <li><a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a><?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?><span></span><?php endif; ?></li>
    <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
    <dl>
      <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <dd><a href="<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a></dd>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
    </dl>
    <?php endif; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
  </ul>
</div>

<div class="">

  <div class="w-container w-main">
    <div class="w-section">
      <div class="row" >
        <div class="row-mask" ></div>
        <div class="wrap-content-in">
          <div class="li-div">
            <div class="w-title w-title1"  style="">
              <div class="w-title-in">
                <div class="w-title-inner">
                  <div class="title-h-in">
                    <h2 class="color_main color_h" style="">钛环/钛管计算公式：单位：mm</h2>
                    <span class="color_vice color_span" style=""><?php echo gettoptype($eyou['field']['typeid'],'englist_name'); ?></span>
                    <div class="simpline bg_simpline"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>	  
          <div class="li-div col-li-div">
            <div class="col-table">
              <table class="div-table div-table-first" width="100%" cellspacing="0"  cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td class="td-w" width="14.83739837398374%"><div class="div-padding">
                        <div class="li-div">
                          <div class="w-space space-b noChoose"  style="height:40px;">
                            <div class="stretch-b"></div>
                          </div>
                        </div>
                      </div></td>
                    <td class="td-w" width="72.81029802027757%"><div class="div-padding">
                        <div class="li-div">
                          <div class="w-form"   style=""> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagGuestbookform = new \think\template\taglib\eyou\TagGuestbookform; $_result = $tagGuestbookform->getGuestbookform($typeid, "default"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $mod = ($e % 2 );$i= intval($key) + 1;?>
                            <form method="POST"  enctype="multipart/form-data" action="" id="myform">
                              <div class="li-div" >
                                <div class="w-form-section  clearfix" style="">
                                  <div class="w-form-shartText">
                                    <label class="w-label-form"> <span>件数</span> <span class="star_note">*</span> </label>
                                    <div class="" style="">
                                      <input class="w-text-form" style="width:100%" type="number"  name="" id="number" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="li-div" >
                                <div class="w-form-section  clearfix" style="">
                                  <div class="w-form-tel">
                                    <label class="w-label-form"> <span>外径</span> <span class="star_note">*</span> </label>
                                    <div class="" style="">
                                      <input class="w-text-form" style="width:100%" type="number"  name="" id="outdiameter" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="li-div" >
                                <div class="w-form-section  clearfix" style="">
                                  <div class="w-form-Email">
                                    <label class="w-label-form"> <span>壁厚</span> <span class="star_note">*</span> </label>
                                    <div class="" style="">
                                      <input class="w-text-form" style="width:100%" type="number"  name="" id="thickness"/>
                                    </div>
                                  </div>
                                </div>
                              </div>
							  <div class="li-div" >
							    <div class="w-form-section  clearfix" style="">
							      <div class="w-form-Email">
							        <label class="w-label-form"> <span>长度</span> <span class="star_note">*</span> </label>
							        <div class="" style="">
							          <input class="w-text-form" style="width:100%" type="number"  name="" id="length"/>
							        </div>
							      </div>
							    </div>
							  </div>
							  
							  <div class="w-form-submit">
							    <div class="w-buttom" style="text-align: center;">
							      <div class="btn-default-w g-form-components count_btn" onclick="checkForm();"> <span class="btn-inner">计算</span> </div>
							    </div>
							  </div>
							  
							  <div class="li-div" >
							    <div class="w-form-section  clearfix" style="">
							      <div class="w-form-Email">
							        <label class="w-label-form"> <span>重量(kg)</span> <span class="star_note">*</span> </label>
							        <div class="" style="">
							          <input id="weight"  class="w-text-form" style="width:100%" type="number"  name="" id="weight"/>
							        </div>
							      </div>
							    </div>
							  </div>
                           
                            
                              <?php echo $field['hidden']; ?>
                            </form>
                            <script type="text/javascript">
                            function checkForm()
                            {
                              if(document.getElementById('number').value.length == 0)
                              {
                                alert('请输入您的件数');
                                return false;
                              }
                              if(document.getElementById('length').value.length == 0)
                              {
                                alert('请输入您的长度');
                                return false;
                              }
							  if(document.getElementById('outdiameter').value.length == 0)
							  {
							    alert('请输入您的外径');
							    return false;
							  }
							  if(document.getElementById('thickness').value.length == 0)
							  {
							    alert('请输入您的壁厚');
							    return false;
							  }      
                            }
							
							  $(".count_btn").click(function(){
							    var number      = $("#number").val();
							    var length   = $("#length").val();
							    var outdiameter   = $("#outdiameter").val();
							    var thickness = $("#thickness").val();
                                                            var result = number*(outdiameter-thickness)*thickness*3.14*4.51*length*(1/1000000);
							    $("#weight").val(result.toFixed(8));
							  });
							
                          </script> 
                            <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; ?> </div>
                        </div>
                      </div></td>
                    <td class="td-w" width="13.08808117378049%"><div class="div-padding">
                        <div class="li-div" >
                          <div class="w-space space-b noChoose"  style="height:40px;">
                            <div class="stretch-b"></div>
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
    </div>
  </div>
  <ul class="dib">
  <li> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/nva-1.png">
    <p><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:4:"sys1";}'); echo $__VALUE__; ?></p>
    </a> </li>
  <li> <a href="tel:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_17"); echo $__VALUE__; ?>"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/nva-2.png">
    <p><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:7:"dianhua";}'); echo $__VALUE__; ?></p>
    </a> </li>
  <li> <a href="sms:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_17"); echo $__VALUE__; ?>"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/nva-3.png">
    <p><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"zixun";}'); echo $__VALUE__; ?></p>
    </a> </li>
   <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "5"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
  <li> <a href="<?php echo $field['typeurl']; ?>"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_m"); echo $__VALUE__; ?>/skin/img/nva-4.png">
    <p><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:7:"daohang";}'); echo $__VALUE__; ?></p>
    </a> </li>
   <?php endif; else: echo htmlspecialchars_decode("");endif; ?>  
  <div class="clearfix"></div>
</ul>
   <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_wap"); echo $__VALUE__; ?>
  <!-- 应用插件标签 start -->
   <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?>
  <!-- 应用插件标签 end --> </div>
<div class="topTel" onclick="$('body,html').animate({scrollTop: 0}, 500);"><i class="fa fa-arrow-up"></i></div>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.global.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.form.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/lightbox.min.js"></script> 
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.custom.js"></script>
</body>
</html>