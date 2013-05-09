<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:14:11
         compiled from "/data/newznab/www/views/templates/frontend/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128703034150fb44e31f1b89-86445368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66968781a4599f90281f945f328ad14616852a61' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/profile.tpl',
      1 => 1296973668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128703034150fb44e31f1b89-86445368',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_date_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_timeago')) include '/data/newznab/www/lib/smarty/plugins/modifier.timeago.php';
if (!is_callable('smarty_modifier_replace')) include '/data/newznab/www/lib/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_nl2br')) include '/data/newznab/www/lib/smarty/plugins/modifier.nl2br.php';
?> 
<h1>Profile for <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('user')->value['username'],"htmlall");?>
</h1>

<table class="data">
	<tr><th>Username:</th><td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('user')->value['username'],"htmlall");?>
</td></tr>
	<?php if ($_smarty_tpl->getVariable('user')->value['ID']==$_smarty_tpl->getVariable('userdata')->value['ID']||$_smarty_tpl->getVariable('userdata')->value['role']==2){?><tr><th title="Not public">Email:</th><td><?php echo $_smarty_tpl->getVariable('user')->value['email'];?>
</td></tr><?php }?>
	<tr><th>Registered:</th><td title="<?php echo $_smarty_tpl->getVariable('user')->value['createddate'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('user')->value['createddate']);?>
  (<?php echo smarty_modifier_timeago($_smarty_tpl->getVariable('user')->value['createddate']);?>
 ago)</td></tr>
	<tr><th>Last Login:</th><td title="<?php echo $_smarty_tpl->getVariable('user')->value['lastlogin'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('user')->value['lastlogin']);?>
  (<?php echo smarty_modifier_timeago($_smarty_tpl->getVariable('user')->value['lastlogin']);?>
 ago)</td></tr>
	<?php if ($_smarty_tpl->getVariable('user')->value['ID']==$_smarty_tpl->getVariable('userdata')->value['ID']||$_smarty_tpl->getVariable('userdata')->value['role']==2){?><tr><th title="Not public">Site Api/Rss Key:</th><td><a href="<?php echo @WWW_TOP;?>
/rss?t=0&amp;dl=1&amp;i=<?php echo $_smarty_tpl->getVariable('userdata')->value['ID'];?>
&amp;r=<?php echo $_smarty_tpl->getVariable('userdata')->value['rsstoken'];?>
"><?php echo $_smarty_tpl->getVariable('user')->value['rsstoken'];?>
</a></td></tr><?php }?>
	<tr><th>Grabs:</th><td><?php echo $_smarty_tpl->getVariable('user')->value['grabs'];?>
</td></tr>
	
	<?php if (($_smarty_tpl->getVariable('user')->value['ID']==$_smarty_tpl->getVariable('userdata')->value['ID']||$_smarty_tpl->getVariable('userdata')->value['role']==2)&&$_smarty_tpl->getVariable('site')->value->registerstatus==1){?>
	<tr>
		<th title="Not public">Invites:</th>
		<td><?php echo $_smarty_tpl->getVariable('user')->value['invites'];?>
 
		<?php if ($_smarty_tpl->getVariable('user')->value['invites']>0){?>
			[<a id="lnkSendInvite" onclick="return false;" href="#">Send Invite</a>]
			<span title="Your invites will be reduced when the invitation is claimed." class="invitesuccess" id="divInviteSuccess">Invite Sent</span>
			<span class="invitefailed" id="divInviteError"></span>
			<div style="display:none;" id="divInvite">
				<form id="frmSendInvite" method="GET">
					<label for="txtInvite">Email</label>:
					<input type="text" id="txtInvite" />
					<input type="submit" value="Send"/>
				</form>
			</div>
		<?php }?>
		</td>
	</tr>
	<?php }?>
	
	<?php if ($_smarty_tpl->getVariable('userinvitedby')->value['username']!=''){?>
	<tr><th>Invited By:</th><td><a title="View <?php echo $_smarty_tpl->getVariable('userinvitedby')->value['username'];?>
's profile" href="<?php echo @WWW_TOP;?>
/profile?name=<?php echo $_smarty_tpl->getVariable('userinvitedby')->value['username'];?>
"><?php echo $_smarty_tpl->getVariable('userinvitedby')->value['username'];?>
</a></td>
	<?php }?>
	
	<tr><th>UI Preferences:</th>
		<td>
			<?php if ($_smarty_tpl->getVariable('user')->value['movieview']=="1"){?>View movie covers<?php }else{ ?>View standard movie category<?php }?><br/>
			<?php if ($_smarty_tpl->getVariable('user')->value['musicview']=="1"){?>View music covers<?php }else{ ?>View standard music category<?php }?><br/>
			<?php if ($_smarty_tpl->getVariable('user')->value['consoleview']=="1"){?>View console covers<?php }else{ ?>View standard console category<?php }?>
		</td>
	</tr>
	<?php if ($_smarty_tpl->getVariable('user')->value['ID']==$_smarty_tpl->getVariable('userdata')->value['ID']||$_smarty_tpl->getVariable('userdata')->value['role']==2){?><tr><th title="Not public">Excluded Categories:</th><td><?php echo smarty_modifier_replace($_smarty_tpl->getVariable('exccats')->value,",","<br/>");?>
</td></tr><?php }?>
	<?php if ($_smarty_tpl->getVariable('user')->value['ID']==$_smarty_tpl->getVariable('userdata')->value['ID']){?><tr><th></th><td><a href="<?php echo @WWW_TOP;?>
/profileedit">Edit</a></td></tr><?php }?>
</table>

<?php if (count($_smarty_tpl->getVariable('commentslist')->value)>0){?>
<div style="padding-top:20px;">
	<a id="comments"></a>
	<h2>Comments</h2>

	<?php echo $_smarty_tpl->getVariable('pager')->value;?>


	<table style="margin-top:10px;" class="data Sortable">

		<tr>
			<th>date</th>
			<th>comment</th>
		</tr>

		
		<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('commentslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
?>
		<tr>
			<td width="80" title="<?php echo $_smarty_tpl->tpl_vars['comment']->value['createddate'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['createddate']);?>
</td>
			<td><?php echo smarty_modifier_nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['text'],"htmlall"));?>
</td>
		</tr>
		<?php }} ?>
	</table>
</div>
<?php }?>