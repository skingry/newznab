<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:02:35
         compiled from "/data/newznab/www/views/templates/frontend/usefullinksmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66312520550fb422b0fde12-76486102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8dcc418754157b3f2ffca4efbb90ceb6efc547f' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/usefullinksmenu.tpl',
      1 => 1294472460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66312520550fb422b0fde12-76486102',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<li class="menu_useful"> 
		<h2>Useful Links</h2> 
		<ul>
		<li onclick=""><a title="Contact Us" href="<?php echo @WWW_TOP;?>
/contact-us">Contact Us</a></li>
		<li onclick="document.location='<?php echo @WWW_TOP;?>
/sitemap'"><a title="Site Map" href="<?php echo @WWW_TOP;?>
/sitemap">Site Map</a></li>
		<?php if ($_smarty_tpl->getVariable('loggedin')->value=="true"){?>
		<li onclick="document.location='<?php echo @WWW_TOP;?>
/rss'"><a title="<?php echo $_smarty_tpl->getVariable('site')->value->title;?>
 Rss Feeds" href="<?php echo @WWW_TOP;?>
/rss">Rss Feeds</a></li>
		<li onclick="document.location='<?php echo @WWW_TOP;?>
/apihelp'"><a title="<?php echo $_smarty_tpl->getVariable('site')->value->title;?>
 Api" href="<?php echo @WWW_TOP;?>
/apihelp">Api</a></li>
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('usefulcontentlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
?>
			<li onclick="document.location='<?php echo @WWW_TOP;?>
/content/<?php echo $_smarty_tpl->getVariable('content')->value->id;?>
<?php echo $_smarty_tpl->getVariable('content')->value->url;?>
'"><a title="<?php echo $_smarty_tpl->getVariable('content')->value->title;?>
" href="<?php echo @WWW_TOP;?>
/content/<?php echo $_smarty_tpl->getVariable('content')->value->id;?>
<?php echo $_smarty_tpl->getVariable('content')->value->url;?>
"><?php echo $_smarty_tpl->getVariable('content')->value->title;?>
</a></li>
		<?php }} ?>
		</ul>
</li>