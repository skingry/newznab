<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 19:36:50
         compiled from "/data/newznab/www/views/templates/admin/rage-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48041303550fb6652e3ad79-84570368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5728b35392a372dccb987930fd29e21a61f52833' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/rage-edit.tpl',
      1 => 1296674402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48041303550fb6652e3ad79-84570368',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
?> 
<h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1>

<form enctype="multipart/form-data" action="<?php echo $_smarty_tpl->getVariable('SCRIPT_NAME')->value;?>
?action=submit" method="POST">

<input type="hidden" name="from" value="<?php echo $_GET['from'];?>
" />

<table class="input">

<tr>
	<td><label for="rageID">Rage Id</label>:</td>
	<td>
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('rage')->value['ID'];?>
" />
		<input id="rageID" class="short" name="rageID" type="text" value="<?php echo $_smarty_tpl->getVariable('rage')->value['rageID'];?>
" />
		<div class="hint">The numeric TVRage Id.</div>
	</td>
</tr>

<tr>
	<td><label for="releasetitle">Show Name</label>:</td>
	<td>
		<input id="releasetitle" class="long" name="releasetitle" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('rage')->value['releasetitle'],'htmlall');?>
" />
		<div class="hint">The title of the TV show.</div>
	</td>
</tr>

<tr>
	<td><label for="description">Description</label>:</td>
	<td>
		<textarea id="description" name="description"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('rage')->value['description'],'htmlall');?>
</textarea>
	</td>
</tr>

<tr>
	<td><label for="genre">Show Genres</label>:</td>
	<td>
		<input id="genre" class="long" name="genre" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('rage')->value['genre'],'htmlall');?>
" />
		<div class="hint">The genres for the TV show. Separated by pipes ( | )</div>
	</td>
</tr>

<tr>
	<td><label for="country">Show Country</label>:</td>
	<td>
		<input id="country" name="country" type="text" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('rage')->value['country'],'htmlall');?>
" maxlength="2" />
		<div class="hint">The country for the TV show.</div>
	</td>
</tr>

<tr>
	<td><label for="imagedata">Series Image</label>:</td>
	<td>
		<?php if ($_smarty_tpl->getVariable('rage')->value['imgdata']!=''){?>
			<img style="max-width:200px; display:block;" src="<?php echo @WWW_TOP;?>
/../getimage?type=tvrage&id=<?php echo $_smarty_tpl->getVariable('rage')->value['ID'];?>
">
		<?php }?>
		<input type="file" id="imagedata" name="imagedata">
		<div class="hint">Shown in the TV series view page.</div>
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