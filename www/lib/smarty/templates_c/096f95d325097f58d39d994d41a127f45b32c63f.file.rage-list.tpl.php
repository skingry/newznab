<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 19:36:14
         compiled from "/data/newznab/www/views/templates/admin/rage-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24547839850fb662e709b01-02270690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '096f95d325097f58d39d994d41a127f45b32c63f' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/rage-list.tpl',
      1 => 1297446570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24547839850fb662e709b01-02270690',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/data/newznab/www/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_date_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.date_format.php';
?><h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1> 

<?php if ($_smarty_tpl->getVariable('tvragelist')->value){?>

<div style="float:right;">

	<form name="ragesearch" action="">
		<label for="ragename">Title</label>
		<input id="ragename" type="text" name="ragename" value="<?php echo $_smarty_tpl->getVariable('ragename')->value;?>
" size="15" />
		&nbsp;&nbsp;
		<input type="submit" value="Go" />
	</form>
</div>

<?php echo $_smarty_tpl->getVariable('pager')->value;?>


<br/><br/>

<table style="width:100%;margin-top:10px;" class="data Sortable highlight">

	<tr>
		<th style="width:50px;">rageid</th>
		<th>title</th>
		<th style="width:80px;">date</th>
		<th style="width:100px;" class="right">options</th>
	</tr>
	
	<?php  $_smarty_tpl->tpl_vars['tvrage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tvragelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tvrage']->key => $_smarty_tpl->tpl_vars['tvrage']->value){
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
">
		<td class="less"><a href="http://www.tvrage.com/shows/id-<?php echo $_smarty_tpl->tpl_vars['tvrage']->value['rageID'];?>
" title="View in TvRage"><?php echo $_smarty_tpl->tpl_vars['tvrage']->value['rageID'];?>
</a></td>
		<td><a title="Edit" href="<?php echo @WWW_TOP;?>
/rage-edit.php?id=<?php echo $_smarty_tpl->tpl_vars['tvrage']->value['ID'];?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tvrage']->value['releasetitle'],"htmlall");?>
</a></td>
		<td class="less"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tvrage']->value['createddate']);?>
</td>
		<td class="right"><a title="delete this rage entry" href="<?php echo @WWW_TOP;?>
/rage-delete.php?id=<?php echo $_smarty_tpl->tpl_vars['tvrage']->value['ID'];?>
">delete</a> | <a title="remove this rageid from all releases" href="<?php echo @WWW_TOP;?>
/rage-remove.php?id=<?php echo $_smarty_tpl->tpl_vars['tvrage']->value['rageID'];?>
">remove</a></td>
	</tr>
	<?php }} ?>

</table>
<?php }else{ ?>
<p>No TVRage episodes available.</p>
<?php }?>
