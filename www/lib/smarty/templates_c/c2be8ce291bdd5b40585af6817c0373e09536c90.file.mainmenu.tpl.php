<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:02:34
         compiled from "/data/newznab/www/views/templates/frontend/mainmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57682633850fb422af2f5c9-44633648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2be8ce291bdd5b40585af6817c0373e09536c90' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/mainmenu.tpl',
      1 => 1295986432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57682633850fb422af2f5c9-44633648',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include '/data/newznab/www/lib/smarty/plugins/modifier.replace.php';
?><?php if (count($_smarty_tpl->getVariable('menulist')->value)>0){?> 
<li class="menu_main">
	<h2>Menu</h2> 
	
	<ul>
			<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menulist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
?>
			<?php $_smarty_tpl->tpl_vars["var"] = new Smarty_variable($_smarty_tpl->tpl_vars['menu']->value['menueval'], null, null);?><?php $_template = new Smarty_Internal_Template('eval:'.($_smarty_tpl->getVariable('var')->value).",", $_smarty_tpl->smarty, $_smarty_tpl);$_smarty_tpl->assign('menuevalresult',$_template->getRenderedTemplate()); ?><?php if (smarty_modifier_replace($_smarty_tpl->getVariable('menuevalresult')->value,",","1")=="1"){?><li onclick="document.location='<?php echo $_smarty_tpl->tpl_vars['menu']->value['href'];?>
';"><a title="<?php echo $_smarty_tpl->tpl_vars['menu']->value['tooltip'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
</a></li><?php }?>
			<?php }} ?>
	</ul>
</li>
<?php }?>