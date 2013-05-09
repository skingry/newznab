<?php /* Smarty version Smarty-3.0.6, created on 2013-01-30 18:33:57
         compiled from "/data/newznab/www/views/templates/admin/release-files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1018369555109d815e4def5-48578799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9cd205fd2b4d3af958a3cf45c7a9a67a18a60d5' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/release-files.tpl',
      1 => 1294472460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1018369555109d815e4def5-48578799',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_fsize_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.fsize_format.php';
if (!is_callable('smarty_modifier_date_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.date_format.php';
?> 
<h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1>

<h2>For <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('rel')->value['searchname'],'htmlall');?>
</h2>

<table style="width:100%;" class="data Sortable">

	<tr>
		<th>#</th>
		<th>filename</th>
		<th>size</th>
		<th>date</th>
	</tr>

	<?php  $_smarty_tpl->tpl_vars['binary'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('binaries')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['binary']->key => $_smarty_tpl->tpl_vars['binary']->value){
?>
	<tr>
		<td width="20" title="<?php echo $_smarty_tpl->tpl_vars['binary']->value['relpart'];?>
/<?php echo $_smarty_tpl->tpl_vars['binary']->value['reltotalpart'];?>
"><?php echo $_smarty_tpl->tpl_vars['binary']->value['relpart'];?>
</td>
		<td title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['binary']->value['name'],'htmlall');?>
"><?php echo $_smarty_tpl->tpl_vars['binary']->value['filename'];?>
</td>
		<td class="less"><?php echo smarty_modifier_fsize_format($_smarty_tpl->tpl_vars['binary']->value['size'],"MB");?>
</td>
		<td class="less" title="<?php echo $_smarty_tpl->tpl_vars['binary']->value['date'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['binary']->value['date']);?>
</td>
	</tr>
	<?php }} ?>

</table>	