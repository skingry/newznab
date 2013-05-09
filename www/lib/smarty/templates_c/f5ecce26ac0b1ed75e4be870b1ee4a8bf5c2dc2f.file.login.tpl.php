<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:14:35
         compiled from "/data/newznab/www/views/templates/frontend/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130938303650fb44fb07fe26-60266669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5ecce26ac0b1ed75e4be870b1ee4a8bf5c2dc2f' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/login.tpl',
      1 => 1298875740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130938303650fb44fb07fe26-60266669',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
?> 
<h1>Login</h1>

<?php if ($_smarty_tpl->getVariable('error')->value!=''){?>
	<div class="error"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</div>
<?php }?>

<form action="login" method="post">
	<input type="hidden" name="redirect" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('redirect')->value,"htmlall");?>
" />
	<table class="data">
		<tr><th><label for="username">Username<br/> or Email</label>:</th>
			<td>
				<input style="width:150px;" id="username" value="<?php echo $_smarty_tpl->getVariable('username')->value;?>
" name="username" type="text"/>
			</td></tr>
		<tr><th><label for="password">Password</label>:</th>
			<td>
				<input style="width:150px;" id="password" name="password" type="password"/>
			</td></tr>
		<tr><th><label for="rememberme">Remember Me</label>:</th><td><input id="rememberme" <?php if ($_smarty_tpl->getVariable('rememberme')->value==1){?>checked="checked"<?php }?> name="rememberme" type="checkbox"/></td>
		<tr><th></th><td><input type="submit" value="Login"/></td></tr>
	</table>
</form>
<br/>
<a href="<?php echo @WWW_TOP;?>
/forgottenpassword">Forgotten your password?</a>
