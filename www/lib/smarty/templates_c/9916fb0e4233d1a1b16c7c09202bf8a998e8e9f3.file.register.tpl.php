<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:13:37
         compiled from "/data/newznab/www/views/templates/frontend/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106621829650fb44c1c92f35-74401269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9916fb0e4233d1a1b16c7c09202bf8a998e8e9f3' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/register.tpl',
      1 => 1296696122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106621829650fb44c1c92f35-74401269',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
?> 
<h1>Register</h1>

<?php if ($_smarty_tpl->getVariable('error')->value!=''){?>
	<div class="error"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</div>
<?php }?>

<?php if ($_smarty_tpl->getVariable('showregister')->value!="0"){?>
	<form method="post" action="register?action=submit">

		<table style="width:500px;" class="data">
			<tr><th width="75px;"><label for="username">Username</label>: <em>*</em></th>
				<td>
					<input autocomplete="off" id="username" name="username" value="<?php echo $_smarty_tpl->getVariable('username')->value;?>
" type="text"/>
					<div class="hint">Should be at least three characters and start with a letter.</div>
				</td>
			</tr>
			<tr><th><label for="password">Password</label>: <em>*</em></th>
				<td>
					<input id="password" autocomplete="off" name="password" value="<?php echo $_smarty_tpl->getVariable('password')->value;?>
" type="password"/>
					<input id="invitecode" name="invitecode" type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('invitecode')->value,'html_all');?>
" />
					<div class="hint">Should be at least six characters long.</div>
				</td>
			</tr>
			<tr><th><label for="confirmpassword">Confirm Password</label>: <em>*</em></th><td><input autocomplete="off" id="confirmpassword" name="confirmpassword" value="<?php echo $_smarty_tpl->getVariable('confirmpassword')->value;?>
" type="password"/></td></tr>
			<tr><th><label for="email">Email</label>: <em>*</em></th><td><input autocomplete="off" id="email" name="email" value="<?php echo $_smarty_tpl->getVariable('email')->value;?>
" type="text" /></td></tr>
		</table>

		<table style="width:500px; margin-top:10px;" class="data">
			<tr><th width="75px;"></th><td><input type="submit" value="Register"/><div style="float:right;" class="hint"><em>*</em> Indicates mandatory field.</div></td></tr>
		</table>
		
	</form>
<?php }?>