<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:03:38
         compiled from "/data/newznab/www/views/templates/admin/release-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168902370350fb426ae1a172-49534686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9424479627786ba7fe7e0fd6c73c14420823809' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/release-list.tpl',
      1 => 1294472460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168902370350fb426ae1a172-49534686',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/data/newznab/www/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_fsize_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.fsize_format.php';
if (!is_callable('smarty_modifier_date_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.date_format.php';
?><h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1> 

<?php if ($_smarty_tpl->getVariable('releaselist')->value){?>
<?php echo $_smarty_tpl->getVariable('pager')->value;?>


<table style="margin-top:10px;" class="data Sortable highlight">

	<tr>
		<th>name</th>
		<th>category</th>
		<th>size</th>
		<th>files</th>
		<th>postdate</th>
		<th>adddate</th>
		<th>grabs</th>
		<th>options</th>
	</tr>
	
	<?php  $_smarty_tpl->tpl_vars['release'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('releaselist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['release']->key => $_smarty_tpl->tpl_vars['release']->value){
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
">
		<td title="<?php echo $_smarty_tpl->tpl_vars['release']->value['name'];?>
"><a href="<?php echo @WWW_TOP;?>
/release-edit.php?id=<?php echo $_smarty_tpl->tpl_vars['release']->value['ID'];?>
"><?php echo wordwrap(smarty_modifier_escape($_smarty_tpl->tpl_vars['release']->value['searchname'],"htmlall"),75,"\n",true);?>
</a></td>
		<td class="less"><?php echo $_smarty_tpl->tpl_vars['release']->value['category_name'];?>
</td>
		<td class="less"><?php echo smarty_modifier_fsize_format($_smarty_tpl->tpl_vars['release']->value['size'],"MB");?>
</td>
		<td class="less"><a href="release-files.php?id=<?php echo $_smarty_tpl->tpl_vars['release']->value['guid'];?>
"><?php echo $_smarty_tpl->tpl_vars['release']->value['totalpart'];?>
</a></td>
		<td class="less"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['release']->value['postdate']);?>
</td>
		<td class="less"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['release']->value['adddate']);?>
</td>
		<td class="less"><?php echo $_smarty_tpl->tpl_vars['release']->value['grabs'];?>
</td>
		<td><a href="<?php echo @WWW_TOP;?>
/release-delete.php?id=<?php echo $_smarty_tpl->tpl_vars['release']->value['ID'];?>
">delete</a></td>
	</tr>
	<?php }} ?>

</table>
<?php }else{ ?>
<p>No releases available.</p>
<?php }?>
