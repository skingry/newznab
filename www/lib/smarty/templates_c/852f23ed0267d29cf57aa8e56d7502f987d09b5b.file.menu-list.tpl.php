<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:02:24
         compiled from "/data/newznab/www/views/templates/admin/menu-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155013295350fb42201ab2a4-13899733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '852f23ed0267d29cf57aa8e56d7502f987d09b5b' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/menu-list.tpl',
      1 => 1298961076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155013295350fb42201ab2a4-13899733',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/data/newznab/www/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
?><h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1> 

<?php if ($_smarty_tpl->getVariable('menulist')->value){?>

<table style="margin-top:10px;" class="data Sortable highlight">

	<tr>
		<th>name</th>
		<th>href</th>
		<th>tooltip</th>
		<th>role</th>
		<th>ordinal</th>
		<th>options</th>
	</tr>
	
	<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menulist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
">
		<td title="Edit <?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
"><a href="<?php echo @WWW_TOP;?>
/menu-edit.php?id=<?php echo $_smarty_tpl->tpl_vars['menu']->value['ID'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['menu']->value['title'],"htmlall");?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['menu']->value['href'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['menu']->value['tooltip'];?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['menu']->value['role']==0){?>Guests<?php }elseif($_smarty_tpl->tpl_vars['menu']->value['role']==1){?>Users<?php }elseif($_smarty_tpl->tpl_vars['menu']->value['role']==2){?>Admin<?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['menu']->value['ordinal'];?>
</td>
		<td><a href="<?php echo @WWW_TOP;?>
/menu-delete.php?id=<?php echo $_smarty_tpl->tpl_vars['menu']->value['ID'];?>
">delete</a></td>
	</tr>
	<?php }} ?>

</table>
<?php }else{ ?>
<p>No menus available.</p>
<?php }?>
