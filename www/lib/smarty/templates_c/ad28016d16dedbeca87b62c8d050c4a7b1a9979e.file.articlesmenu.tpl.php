<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:02:35
         compiled from "/data/newznab/www/views/templates/frontend/articlesmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212389653350fb422b1aa4a4-54985810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad28016d16dedbeca87b62c8d050c4a7b1a9979e' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/articlesmenu.tpl',
      1 => 1294472460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212389653350fb422b1aa4a4-54985810',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (count($_smarty_tpl->getVariable('articlecontentlist')->value)>0){?>
<li class="menu_articles"> 
		<h2>Articles</h2> 
		<ul>
		<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('articlecontentlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
<?php }?>
