<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:02:25
         compiled from "/data/newznab/www/views/templates/admin/category-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24456269450fb4221018893-35990212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '654e2dff29aa9dadc405b9e7bfab4def1fa0295b' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/category-list.tpl',
      1 => 1294472460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24456269450fb4221018893-35990212',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/data/newznab/www/lib/smarty/plugins/function.cycle.php';
?> 
<h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1>

<p>
	Make a category inactive to remove it from the menu. This does not prevent binaries being matched into an appropriate category.
</p>

<table style="margin-top:10px;" class="data Sortable highlight">

	<tr>
		<th>id</th>
		<th>title</th>
		<th>parent</th>
		<th>active</th>
	</tr>
	
	<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categorylist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
">
		<td><?php echo $_smarty_tpl->tpl_vars['category']->value['ID'];?>
</td>
		<td><a href="<?php echo @WWW_TOP;?>
/category-edit.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</a></td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['category']->value['parentID']!=null){?>
				<?php echo $_smarty_tpl->tpl_vars['category']->value['parentName'];?>

			<?php }else{ ?>
				n/a
			<?php }?>
		</td>
		<td><?php if ($_smarty_tpl->tpl_vars['category']->value['status']=="1"){?>Yes<?php }else{ ?>No<?php }?></td>
	</tr>
	<?php }} ?>


</table>
