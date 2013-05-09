<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:02:22
         compiled from "/data/newznab/www/views/templates/admin/content-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195076993450fb421e1c4475-40865698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1dbd26884639b6779f65aad49549fce8aba6a19' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/content-add.tpl',
      1 => 1294472460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195076993450fb421e1c4475-40865698',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/data/newznab/www/lib/smarty/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_radios')) include '/data/newznab/www/lib/smarty/plugins/function.html_radios.php';
?> 
<h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1>

<form action="<?php echo $_smarty_tpl->getVariable('SCRIPT_NAME')->value;?>
?action=submit" method="POST">

<table class="input">

<tr>
	<td><label for="title">Title</label>:</td>
	<td>
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('content')->value->id;?>
" />
		<input id="title" class="long" name="title" type="text" value="<?php echo $_smarty_tpl->getVariable('content')->value->title;?>
" />
	</td>
</tr>

<tr>
	<td><label for="url">Url</label>:</td>
	<td>
		<input id="url" class="long" name="url" type="text" value="<?php echo $_smarty_tpl->getVariable('content')->value->url;?>
" />
	</td>
</tr>

<tr>
	<td><label for="body">Body</label>:</td>
	<td>
		<textarea id="body" name="body"><?php echo $_smarty_tpl->getVariable('content')->value->body;?>
</textarea>
	</td>
</tr>

<tr>
	<td><label for="metadescription">Meta Description</label>:</td>
	<td>
		<textarea id="metadescription" name="metadescription"><?php echo $_smarty_tpl->getVariable('content')->value->metadescription;?>
</textarea>
	</td>
</tr>

<tr>
	<td><label for="metakeywords">Meta Keywords</label>:</td>
	<td>
		<textarea id="metakeywords" name="metakeywords"><?php echo $_smarty_tpl->getVariable('content')->value->metakeywords;?>
</textarea>
	</td>
</tr>

<tr>
	<td><label for="contenttype">Content Type</label>:</td>
	<td>
		<?php echo smarty_function_html_options(array('id'=>"contenttype",'name'=>'contenttype','options'=>$_smarty_tpl->getVariable('contenttypelist')->value,'selected'=>$_smarty_tpl->getVariable('content')->value->contenttype),$_smarty_tpl);?>

	</td>
</tr>

<tr>
	<td><label for="role">Visible To</label>:</td>
	<td>
		<?php echo smarty_function_html_options(array('id'=>"role",'name'=>'role','options'=>$_smarty_tpl->getVariable('rolelist')->value,'selected'=>$_smarty_tpl->getVariable('content')->value->role),$_smarty_tpl);?>

		<div class="hint">Only appropriate for articles and useful links</div>
	</td>
</tr>

<tr>
	<td><label for="showinmenu">Show In Menu</label>:</td>
	<td>
		<?php echo smarty_function_html_radios(array('id'=>"showinmenu",'name'=>'showinmenu','values'=>$_smarty_tpl->getVariable('yesno_ids')->value,'output'=>$_smarty_tpl->getVariable('yesno_names')->value,'selected'=>$_smarty_tpl->getVariable('content')->value->showinmenu,'separator'=>'<br />'),$_smarty_tpl);?>

	</td>
</tr>

<tr>
	<td><label for="status">Status</label>:</td>
	<td>
		<?php echo smarty_function_html_radios(array('id'=>"status",'name'=>'status','values'=>$_smarty_tpl->getVariable('status_ids')->value,'output'=>$_smarty_tpl->getVariable('status_names')->value,'selected'=>$_smarty_tpl->getVariable('content')->value->status,'separator'=>'<br />'),$_smarty_tpl);?>

	</td>
</tr>

<tr>
	<td><label for="ordinal">Ordinal</label>:</td>
	<td>
		<input id="ordinal" name="ordinal" type="text" value="<?php echo $_smarty_tpl->getVariable('content')->value->ordinal;?>
" />
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