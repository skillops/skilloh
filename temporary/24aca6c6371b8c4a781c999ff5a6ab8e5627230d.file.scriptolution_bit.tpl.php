<?php /* Smarty version Smarty-3.0.7, created on 2016-08-30 08:57:51
         compiled from "C:/wamp/www/GIT/skilloh/themes\scriptolution_bit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:366957c582cfb53723-78773304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24aca6c6371b8c4a781c999ff5a6ab8e5627230d' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\scriptolution_bit.tpl',
      1 => 1472561828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '366957c582cfb53723-78773304',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_mb_truncate')) include 'C:\wamp\www\GIT\skilloh\smarty\libs\plugins\modifier.mb_truncate.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\wamp\www\GIT\skilloh\smarty\libs\plugins\modifier.truncate.php';
?>						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('posts')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                        <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),$_smarty_tpl), true);?>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 wow fadeInUp<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']%4==0){?>last<?php }?>">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 songperson z_padding0">
                            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product_top_rate">
	                            	<ul>
	                                   <?php $_smarty_tpl->assign('scriptolutionstars' , insert_scriptolution_rating_stars (array('value' => 'a', 'scriptolutionuserid' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('scriptolutionstars')->value;?>

	                                </ul>
	                            	<?php if ($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['feat']=="1"){?><span class="featured "><?php echo $_smarty_tpl->getVariable('lang526')->value;?>
</span><?php }?>
	                                <?php if ($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['toprated']=="1"){?><span class="rated"><?php echo $_smarty_tpl->getVariable('lang525')->value;?>
</span><?php }?>
	                                <?php if ($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['youtube']!=''){?><?php $_template = new Smarty_Internal_Template("scriptolution_bit_yt_small.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>
	                                <?php if ($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['days']=="0"){?><?php $_template = new Smarty_Internal_Template('scriptolution_bit_instant.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }elseif($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['days']=="1"){?><?php $_template = new Smarty_Internal_Template('scriptolution_bit_express.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>
                              	</div>  
                            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 z_padding0">	
                            		<a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
">
                            			<img src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t3/<?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p1'];?>
" alt="<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
" class="img-responsive" />
                            		</a>
                             	</div>
                             <!--<div class="price">
                             		<?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<?php }?>
                             </div>-->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 name_job">	
	                            <p>
	                            	<a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']),90,"...",'UTF-8');?>

	                            	</a>
	                            </p>
                            </div>                    
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userdata">        
                            	<?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                                                       
                                <!--<div class="userimg">
                                		<a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl);?>
">
                                			<img width="25px" height="25px" src="<?php echo $_smarty_tpl->getVariable('membersprofilepicurl')->value;?>
/thumbs/<?php echo $_smarty_tpl->getVariable('profilepicture')->value;?>
" alt="<?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
" />
                                		</a>
                                </div>-->
                                <p class="username">
                                	<span><?php echo $_smarty_tpl->getVariable('lang414')->value;?>
</span> <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']),20,"...",true);?>
</a>
                                </p>
                                <div class="otherdetails">
                                    <span class="usercount"></span>
                                    <div class="price">
                                    	<?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<sup><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
</sup><?php }else{ ?><sup><?php echo $_smarty_tpl->getVariable('lang197')->value;?>
</sup><?php echo stripslashes($_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<?php }?>
                                    </div>
                           
                                    <!--<ul>
                                    	<?php $_smarty_tpl->assign('scriptolutionstars' , insert_scriptolution_rating_stars (array('value' => 'a', 'scriptolutionuserid' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('scriptolutionstars')->value;?>

                                    </ul>-->
                                    <!--<span class="flag">
                                    		<span class="country <?php echo $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['country'];?>
" title="<?php $_smarty_tpl->assign('userc' , insert_country_code_to_country (array('value' => 'a', 'code' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['country']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('userc')->value;?>
"></span>
                                    </span>-->
                                    <div class="clear"></div>
                                </div>
                            </div>                                
                            </div>                            
                        </div>
                        <?php endfor; endif; ?>