<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 19:42:54
         compiled from "/data/newznab/www/views/templates/admin/group-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59858307450fb67be9d4756-86324281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e76dd202eb2639b648849fbb830be915fd08895' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/group-edit.tpl',
      1 => 1294472460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59858307450fb67be9d4756-86324281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_radios')) include '/data/newznab/www/lib/smarty/plugins/function.html_radios.php';
?> 
<h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1>

<form action="<?php echo $_smarty_tpl->getVariable('SCRIPT_NAME')->value;?>
?action=submit" method="POST">

<table class="input">

<tr>
	<td>Name:</td>
	<td>
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('group')->value['ID'];?>
" />
		<input id="name" class="long" name="name" type="text" value="<?php echo $_smarty_tpl->getVariable('group')->value['name'];?>
" />
		<div class="hint">Changing the name to an invalid group will break things.</div>		
	</td>
</tr>

<tr>
	<td><label for="description">Description</label>:</td>
	<td>
		<textarea id="description" name="description"><?php echo $_smarty_tpl->getVariable('group')->value['description'];?>
</textarea>
	</td>
</tr>

<tr>
	<td><label for="backfill_target">Backfill Days</label></td>
	<td>
		<input class="small" id="backfill_target" name="backfill_target" type="text" value="<?php echo $_smarty_tpl->getVariable('group')->value['backfill_target'];?>
" />
		<div class="hint">Number of days to attempt to backfill this group.  Adjust as necessary.</div>
	</td>
</td>

<tr>
	<td><label for="minfilestoformrelease">Minimum Files <br/>To Form Release</label></td>
	<td>
		<input class="small" id="minfilestoformrelease" name="minfilestoformrelease" type="text" value="<?php echo $_smarty_tpl->getVariable('group')->value['minfilestoformrelease'];?>
" />
		<div class="hint">The minimum number of files to make a release. i.e. if set to two, then releases which only contain one file will not be created. If left blank, will use the site wide setting.</div>
	</td>
</td>

<tr>
	<td><label for="active">Active</label>:</td>
	<td>
		<?php echo smarty_function_html_radios(array('id'=>"active",'name'=>'active','values'=>$_smarty_tpl->getVariable('yesno_ids')->value,'output'=>$_smarty_tpl->getVariable('yesno_names')->value,'selected'=>$_smarty_tpl->getVariable('group')->value['active'],'separator'=>'<br />'),$_smarty_tpl);?>

		<div class="hint">Inactive groups will not have headers downloaded for them.</div>		
	</td>
</tr>

<tr>
	<td></td>
	<td>
		<input type="submit" value="Save" />
	</td>
</tr>

</table>

</form>
