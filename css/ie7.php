<?php
header('Content-type: text/css');
include("../include/config.php");
$imageurl = $config['imageurl'];
?>
body{width:expression(document.documentElement.clientWidth < 955 ? "955px":"auto")}body.inner{width:expression(document.documentElement.clientWidth < 742 ? "742px":"auto")}.main-area{padding-bottom:expression(document.getElementById("footer").offsetHeight+"px")}#footer{position:relative;margin-top:expression(- this.offsetHeight+"px")}.featured-label{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-featured-label.png',sizingmethod='crop')}.promotion .box .t{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-promotion-box-t.png',sizingmethod='crop')}.promotion .box .b{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-promotion-box-b.png',sizingmethod='crop')}.promotion .box .image-box a span{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-opacity01.png',sizingmethod='scale')}.promotion .box .image-box a:hover span{filter:none}.featured .box .t{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-featured-box-t.png',sizingmethod='crop')}.featured .box .b{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-featured-box-b.png',sizingmethod='crop')}ul.sell-buy a.sell{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/ico-sell.png',sizingmethod='crop')}ul.sell-buy a.buy{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/ico-buy.png',sizingmethod='crop')}.looking .t{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-looking-t.png',sizingmethod='crop')}.looking .b{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-looking-b.png',sizingmethod='crop')}.side-nav .t{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-side-nav-t.png',sizingmethod='crop')}.side-nav .b{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-side-nav-b.png',sizingmethod='crop')}.suggest .t{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-suggest-t.png',sizingmethod='crop')}.suggest .b{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-suggest-b.png',sizingmethod='crop')}.section .t{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-featured-box-t.png',sizingmethod='crop')}.section .b{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-featured-box-b.png',sizingmethod='crop')}.sidebar .share .t{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-share-t.png',sizingmethod='crop')}.sidebar .share-page .t,.sidebar .ideas-box t{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-share-t02.png',sizingmethod='crop')}.sidebar .share .b{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-share-b.png',sizingmethod='crop')}.alert .t{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-alert-t.png',sizingmethod='scale')}.alert .b{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-alert-b.png',sizingmethod='crop')}.add-nav .t{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-add-nav-t.png',sizingmethod='crop')}.add-nav .b{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-add-nav-b.png',sizingmethod='crop')}.order-table tbody tr{z-index:expression( runtimeStyle.zIndex = 1,this == parentNode.firstChild ? (className+= " first-child"):0 )}.entry-wrapper .b{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-login-popup-b.png',sizingmethod='crop')}.entry-wrapper .t{background:none;filter:progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $imageurl; ?>/bg-login-popup-t.png',sizingmethod='crop')}.promotion .box h2 a,.featured h2 a{text-decoration:underline !important;background:none!important}.logo-placer{position:absolute!important}ul.control{top:57px !important}.featured h2{margin:0 0 3px}.welcomebox h1,.welcomebox h2{letter-spacing:-0.03em}.topmenu{float:right}.inner #header .menu-holder .holder{width:680px}.inner #header .menu-holder .holder .menu-l{clear:none;display:inline}.inner #header .menu-holder .holder .wide{width:620px}.inner #header .menu-holder .holder .narrow{width:640px}.inner #header .menu-holder .holder .guest{width:340px}.iwill p{margin:0 0 -6px 62px;padding:5px 0 3px 10px;color:#232323}.iwill input.text{width:360px}.side-nav ul li.active{background:url(<?php echo $imageurl; ?>/bg-category-active.png) no-repeat 0 2px}.status-checking{top:95px}.status-ok{top:94px}.join .ie7{min-height:100px}.progress-indicator-icon-join,.progress-indicator-icon-login{margin-top:15px}.join .row01,.join .row02,.join .row03{width:300px}.join input.button{float:right;margin:10px 20px 0}.captcha{float:right;padding-right:0px;width:155px}.join .lastrow{width:320px}.join label.style1{width:120px;margin:0 0 0 30px;clear:none}.join .status-error{width:300px}.join .validation-error,.join .validation-error h2,.join .validation-error ul{width:300px;clear:right}.loing .validation-error{width:300px}.how-it-works-wrapper .columns{height:470px}.wide .topmenu{float:left}.narrow .topmenu{float:left;width:400px}.guest .topmenu{float:left;width:600px}.guest .topmenu ul li a{display:block;padding:10px 8px 0 0;text-decoration:none;font-weight:bold;font-size:0.9em;letter-spacing:-0.04em}.order-now-holder{position:relative;margin-left:50px}/* Gig Category Tags .category-tags{margin:0 auto 10px;overflow:auto;width:610px;text-align:center}.category-tags div{margin:0!important;display:inline}a.tag{background:#86dbfb;text-decoration:none;font-size:13px;font-weight:bold;color:#fff!important;line-height:17px;padding-bottom:1px;margin:2px!important}a.tag:hover{background:#1fa0d1!important}a.tag.selected{background:#1fa0d1!important}*/.message .tip{position:relative;background:url(<?php echo $imageurl; ?>/msg-tips.png) no-repeat!important;width:20px;height:20px;top:-30px;right:0px}.order-flow .tip{background-position:0 -40px!important}.tip.green{background-position:2px 0px!important}.tip.rspnd{background-position:url(<?php echo $imageurl; ?>/rspnd.png);background-position:0 -60px!important}div.message-form-control{margin-left:5px!important}.index td.gross{text-align:right!important}.index td.gross div{text-align:right;float:right;width:47px;line-height:22px}.topmenu ul li ul li a{padding-top:2px!important;padding-bottom:2px!important}.in-element{padding-top:10px!important}.index td.status div{font-size:9px;vertical-align:middle;text-transform:uppercase;font-weight:bold;letter-spacing:-1px;cursor:help;color:#fff}ul.filters a span{background:#fff;border:1px solid #ddd!important;color:#888;cursor:pointer!important}.index td.gig div{overflow:hidden;word-wrap:break-word;margin-right:10px;line-height:22px;cursor:pointer!important}.index thead td{font-size:10px;text-transform:uppercase;line-height:33px;background-position:8px 8px!important;color:#758f8f;font-weight:bold;text-align:left!important;border-bottom:1px solid #eee}.attach-files{margin:10px 0!important;padding:0 0 10px 10px!important}.message-form-control{position:relative;clear:left;min-height:30px;padding-left:12px!important;float:left;width:95%}.message-form-control span{cursor:pointer!important}.message-form-control .upload-panel{padding:0!important;margin:0!important}.suggest-form select{float:right!important;margin-top:2px}.index td.gig.new{background:#fffbff url(<?php echo $imageurl; ?>/new.png) no-repeat 97% 50%!important};.metadata h3 p{position:absolute;right:0;line-height:14px!important}tr.entry td{background:#fafafa!important;border-bottom:1px solid #eaeaea!important}tr.entry.unread .unread-message{margin-top:4px}.unread-message span{padding:0!important}div.files ul li a,.files-added span{background:#fff url(<?php echo $imageurl; ?>/page_white_text.png) no-repeat 3px 3px;padding:2px 4px 2px 22px;text-decoration:none!important;font-size:12px;word-wrap:break-word!important;display:block;line-height:20px;float:left;color:#777;height:20px}.metadata h3 span.right{line-height:12px}.order-finish{clear:both}.order-finish textarea{border:1px solid #ddd!important}.post-order-rating{margin-bottom:10px}.post-order-rating p{overflow:hidden}.post-order-rating input{float:left}.order-flow{margin-bottom:10px}td.status div{letter-spacing:0px!important}.in_progress div{border:none;color:#fff;border:1px solid #96b7cb!important}.cancelled div,.cancelled_by_mutual_agreement div,.seller_cancelled div{color:#888;border:1px solid #888!important}.payapl_reversal div,.admin_cancelled div,.buyer_cancelled div{color:#f77673;border:1px solid #f77673!important}.completed div{color:#35b982;border:1px solid #35b982!important}.status.upcoming div{border:none;color:#fff!important;background:#a0cc8a}.clearing div{background:#e2f8e0;color:#3a5!important;border:none}.clearing div u{text-decoration:none;color:#3a5}.status.payment div{background:#888;border:none;color:#fff!important}.late_delivery div{background:#f44!important;color:#fff!important;border:none!important}.gig-meta.preview-pane .gig-order-now{width:200px}.image-box object{z-index:1!important}span.featured-gig{z-index:1000!important}.featured-label-inner{position:absolute;right:-10px}span.featured-gig{top:-3px;right:-26px;padding:10px!important;z-index:1000!important}.gig-edit-options li.options-toggle li.selected-edit a{border:0px solid red!important}.bubble-upload object{top:9px!important}.loginwrapper .right{float:right;width:40%}.loginwrapper .left{float:left;width:40%}.loginwrapper .captcha span{float:left}.loginwrapper .captcha input.style2{margin-top:4px}