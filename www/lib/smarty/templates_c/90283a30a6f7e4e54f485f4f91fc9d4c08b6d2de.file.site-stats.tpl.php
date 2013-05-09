<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:02:28
         compiled from "/data/newznab/www/views/templates/admin/site-stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43562643650fb422411acd1-24747578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90283a30a6f7e4e54f485f4f91fc9d4c08b6d2de' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/site-stats.tpl',
      1 => 1294789668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43562643650fb422411acd1-24747578',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/data/newznab/www/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_replace')) include '/data/newznab/www/lib/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_timeago')) include '/data/newznab/www/lib/smarty/plugins/modifier.timeago.php';
?> 
<h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1>

<h2>Top Grabbers</h2>

<table style="width:100%;margin-top:10px;" class="data highlight">
	<tr>
		<th>User</th>
		<th>Grabs</th>
	</tr>

	<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('topgrabs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
">
			<td width="75%"><a href="<?php echo @WWW_TOP;?>
/user-edit.php?id=<?php echo $_smarty_tpl->tpl_vars['result']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['username'];?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['result']->value['grabs'];?>
</td>
		</tr>
	<?php }} ?>
	
</table>

<br/><br/>

<h2>Top Downloads</h2>

<table style="width:100%;margin-top:10px;" class="data highlight">
	<tr>
		<th>Release</th>
		<th>Grabs</th>
		<th>Days Ago</th>
	</tr>

	<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('topdownloads')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
">
			<td width="75%"><a href="<?php echo @WWW_TOP;?>
/../details/<?php echo $_smarty_tpl->tpl_vars['result']->value['guid'];?>
/<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['result']->value['searchname'],"htmlall");?>
"><?php echo smarty_modifier_replace(smarty_modifier_escape($_smarty_tpl->tpl_vars['result']->value['searchname'],"htmlall"),"."," ");?>
</a>
			<?php if ($_smarty_tpl->getVariable('isadmin')->value){?><a href="<?php echo @WWW_TOP;?>
/release-edit.php?id=<?php echo $_smarty_tpl->tpl_vars['result']->value['ID'];?>
">[Edit]</a><?php }?></td>
			<td><?php echo $_smarty_tpl->tpl_vars['result']->value['grabs'];?>
</td>
			<td><?php echo smarty_modifier_timeago($_smarty_tpl->tpl_vars['result']->value['adddate']);?>
</td>
		</tr>
	<?php }} ?>
	
</table>

<br/><br/>

<h2>Releases Added In Last 7 Days</h2>

<table style="width:100%;margin-top:10px;" class="data highlight">
	<tr>
		<th>Category</th>
		<th>Releases</th>
	</tr>

	<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('recent')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
">
			<td width="75%"><?php echo $_smarty_tpl->tpl_vars['result']->value['title'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['result']->value['count'];?>
</td>
		</tr>
	<?php }} ?>
	
</table>

<br/><br/>

<h2>Top Comments</h2>

<table style="width:100%;margin-top:10px;" class="data highlight">
	<tr>
		<th>Release</th>
		<th>Comments</th>
		<th>Days Ago</th>
	</tr>

	<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('topcomments')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
">
			<td width="75%"><a href="<?php echo @WWW_TOP;?>
/../details/<?php echo $_smarty_tpl->tpl_vars['result']->value['guid'];?>
/<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['result']->value['searchname'],"htmlall");?>
#comments"><?php echo smarty_modifier_replace(smarty_modifier_escape($_smarty_tpl->tpl_vars['result']->value['searchname'],"htmlall"),"."," ");?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['result']->value['comments'];?>
</td>
			<td><?php echo smarty_modifier_timeago($_smarty_tpl->tpl_vars['result']->value['adddate']);?>
</td>
		</tr>
	<?php }} ?>
	
</table>
