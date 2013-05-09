<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:18:40
         compiled from "/data/newznab/www/views/templates/frontend/browse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63532222850fb45f05f71a8-56645509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7e0ff229bf4f436abfae85f7f4e10f6b85a66da' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/browse.tpl',
      1 => 1297214676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63532222850fb45f05f71a8-56645509',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_cycle')) include '/data/newznab/www/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_strtotime')) include '/data/newznab/www/lib/smarty/plugins/modifier.strtotime.php';
if (!is_callable('smarty_modifier_replace')) include '/data/newznab/www/lib/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_daysago')) include '/data/newznab/www/lib/smarty/plugins/modifier.daysago.php';
if (!is_callable('smarty_modifier_timeago')) include '/data/newznab/www/lib/smarty/plugins/modifier.timeago.php';
if (!is_callable('smarty_modifier_fsize_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.fsize_format.php';
?>
<h1>Browse <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('catname')->value,"htmlall");?>
</h1>
	
<?php if (count($_smarty_tpl->getVariable('results')->value)>0){?>

<form id="nzb_multi_operations_form" action="get">

<div class="nzb_multi_operations">
	<?php if ($_smarty_tpl->getVariable('section')->value!=''){?>View: <a href="<?php echo @WWW_TOP;?>
/<?php echo $_smarty_tpl->getVariable('section')->value;?>
?t=<?php echo $_smarty_tpl->getVariable('category')->value;?>
">Covers</a> | <b>List</b><br /><?php }?>
	<small>With Selected:</small>
	<input type="button" class="nzb_multi_operations_download" value="Download NZBs" />
	<input type="button" class="nzb_multi_operations_cart" value="Add to Cart" />
	<input type="button" class="nzb_multi_operations_sab" value="Send to SAB" />
	<?php if ($_smarty_tpl->getVariable('isadmin')->value){?>
	&nbsp;&nbsp;
	<input type="button" class="nzb_multi_operations_edit" value="Edit" />
	<input type="button" class="nzb_multi_operations_delete" value="Del" />
	<input type="button" class="nzb_multi_operations_rebuild" value="Reb" />
	<?php }?>	
</div>

<?php echo $_smarty_tpl->getVariable('pager')->value;?>


<table style="width:100%;" class="data highlight icons" id="browsetable">
	<tr>
		<th><input id="chkSelectAll" type="checkbox" class="nzb_check_all" /><label for="chkSelectAll" style="display:none;">Select All</label></th>
		<th>name<br/><a title="Sort Descending" href="<?php echo $_smarty_tpl->getVariable('orderbyname_desc')->value;?>
"><img src="<?php echo @WWW_TOP;?>
/views/images/sorting/arrow_down.gif" alt="Sort Descending" /></a><a title="Sort Ascending" href="<?php echo $_smarty_tpl->getVariable('orderbyname_asc')->value;?>
"><img src="<?php echo @WWW_TOP;?>
/views/images/sorting/arrow_up.gif" alt="Sort Ascending" /></a></th>
		<th>category<br/><a title="Sort Descending" href="<?php echo $_smarty_tpl->getVariable('orderbycat_desc')->value;?>
"><img src="<?php echo @WWW_TOP;?>
/views/images/sorting/arrow_down.gif" alt="Sort Descending" /></a><a title="Sort Ascending" href="<?php echo $_smarty_tpl->getVariable('orderbycat_asc')->value;?>
"><img src="<?php echo @WWW_TOP;?>
/views/images/sorting/arrow_up.gif" alt="Sort Ascending" /></a></th>
		<th>posted<br/><a title="Sort Descending" href="<?php echo $_smarty_tpl->getVariable('orderbyposted_desc')->value;?>
"><img src="<?php echo @WWW_TOP;?>
/views/images/sorting/arrow_down.gif" alt="Sort Descending" /></a><a title="Sort Ascending" href="<?php echo $_smarty_tpl->getVariable('orderbyposted_asc')->value;?>
"><img src="<?php echo @WWW_TOP;?>
/views/images/sorting/arrow_up.gif" alt="Sort Ascending" /></a></th>
		<th>size<br/><a title="Sort Descending" href="<?php echo $_smarty_tpl->getVariable('orderbysize_desc')->value;?>
"><img src="<?php echo @WWW_TOP;?>
/views/images/sorting/arrow_down.gif" alt="Sort Descending" /></a><a title="Sort Ascending" href="<?php echo $_smarty_tpl->getVariable('orderbysize_asc')->value;?>
"><img src="<?php echo @WWW_TOP;?>
/views/images/sorting/arrow_up.gif" alt="Sort Ascending" /></a></th>
		<th>files<br/><a title="Sort Descending" href="<?php echo $_smarty_tpl->getVariable('orderbyfiles_desc')->value;?>
"><img src="<?php echo @WWW_TOP;?>
/views/images/sorting/arrow_down.gif" alt="Sort Descending" /></a><a title="Sort Ascending" href="<?php echo $_smarty_tpl->getVariable('orderbyfiles_asc')->value;?>
"><img src="<?php echo @WWW_TOP;?>
/views/images/sorting/arrow_up.gif" alt="Sort Ascending" /></a></th>
		<th>stats<br/><a title="Sort Descending" href="<?php echo $_smarty_tpl->getVariable('orderbystats_desc')->value;?>
"><img src="<?php echo @WWW_TOP;?>
/views/images/sorting/arrow_down.gif" alt="Sort Descending" /></a><a title="Sort Ascending" href="<?php echo $_smarty_tpl->getVariable('orderbystats_asc')->value;?>
"><img src="<?php echo @WWW_TOP;?>
/views/images/sorting/arrow_up.gif" alt="Sort Ascending" /></a></th>
		<th></th>
	</tr>

	<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
<?php if (smarty_modifier_strtotime($_smarty_tpl->getVariable('lastvisit')->value)<smarty_modifier_strtotime($_smarty_tpl->tpl_vars['result']->value['adddate'])){?> new<?php }?>" id="guid<?php echo $_smarty_tpl->tpl_vars['result']->value['guid'];?>
">
			<td class="check"><input id="chk<?php echo substr($_smarty_tpl->tpl_vars['result']->value['guid'],0,7);?>
" type="checkbox" class="nzb_check" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['guid'];?>
" /></td>
			<td class="item">
				<label for="chk<?php echo substr($_smarty_tpl->tpl_vars['result']->value['guid'],0,7);?>
"><a class="title" title="View details" href="<?php echo @WWW_TOP;?>
/details/<?php echo $_smarty_tpl->tpl_vars['result']->value['guid'];?>
/<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['result']->value['searchname'],"htmlall");?>
"><?php echo smarty_modifier_replace(smarty_modifier_escape($_smarty_tpl->tpl_vars['result']->value['searchname'],"htmlall"),"."," ");?>
</a></label>
				
				<?php if ($_smarty_tpl->tpl_vars['result']->value['passwordstatus']==1){?>
					<img title="Passworded Rar Archive" src="<?php echo @WWW_TOP;?>
/views/images/icons/lock.gif" alt="Passworded Rar Archive" />
				<?php }elseif($_smarty_tpl->tpl_vars['result']->value['passwordstatus']==2){?>
					<img title="Contains .cab/ace Archive" src="<?php echo @WWW_TOP;?>
/views/images/icons/lock.gif" alt="Contains .cab/ace Archive" />
				<?php }?>
				
				<div class="resextra">
					<div class="btns">
						<?php if ($_smarty_tpl->tpl_vars['result']->value['nfoID']>0){?><a href="<?php echo @WWW_TOP;?>
/nfo/<?php echo $_smarty_tpl->tpl_vars['result']->value['guid'];?>
" title="View Nfo" class="modal_nfo rndbtn" rel="nfo">Nfo</a><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['result']->value['imdbID']>0){?><a href="#" name="name<?php echo $_smarty_tpl->tpl_vars['result']->value['imdbID'];?>
" title="View movie info" class="modal_imdb rndbtn" rel="movie" >Cover</a><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['result']->value['musicinfoID']>0){?><a href="#" name="name<?php echo $_smarty_tpl->tpl_vars['result']->value['musicinfoID'];?>
" title="View music info" class="modal_music rndbtn" rel="music" >Cover</a><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['result']->value['consoleinfoID']>0){?><a href="#" name="name<?php echo $_smarty_tpl->tpl_vars['result']->value['consoleinfoID'];?>
" title="View console info" class="modal_console rndbtn" rel="console" >Cover</a><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['result']->value['rageID']>0){?><a class="rndbtn" href="<?php echo @WWW_TOP;?>
/series/<?php echo $_smarty_tpl->tpl_vars['result']->value['rageID'];?>
" title="View all episodes">View Series</a><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['result']->value['tvairdate']!=''){?><span class="rndbtn" title="<?php echo $_smarty_tpl->tpl_vars['result']->value['tvtitle'];?>
 Aired on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['result']->value['tvairdate']);?>
">Aired <?php if (smarty_modifier_strtotime($_smarty_tpl->tpl_vars['result']->value['tvairdate'])>time()){?>in future<?php }else{ ?><?php echo smarty_modifier_daysago($_smarty_tpl->tpl_vars['result']->value['tvairdate']);?>
<?php }?></span><?php }?>
						<a class="rndbtn" href="<?php echo @WWW_TOP;?>
/browse?g=<?php echo $_smarty_tpl->tpl_vars['result']->value['group_name'];?>
" title="Browse releases in <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['result']->value['group_name'],"alt.binaries","a.b");?>
">Grp</a>
					</div>
					<?php if ($_smarty_tpl->getVariable('isadmin')->value){?>
						<div class="admin">
						<a class="rndbtn" href="<?php echo @WWW_TOP;?>
/admin/release-edit.php?id=<?php echo $_smarty_tpl->tpl_vars['result']->value['ID'];?>
&amp;from=<?php echo smarty_modifier_escape($_SERVER['REQUEST_URI'],"url");?>
" title="Edit Release">Edit</a> <a class="rndbtn confirm_action" href="<?php echo @WWW_TOP;?>
/admin/release-delete.php?id=<?php echo $_smarty_tpl->tpl_vars['result']->value['ID'];?>
&amp;from=<?php echo smarty_modifier_escape($_SERVER['REQUEST_URI'],"url");?>
" title="Delete Release">Del</a> <a class="rndbtn confirm_action" href="<?php echo @WWW_TOP;?>
/admin/release-rebuild.php?id=<?php echo $_smarty_tpl->tpl_vars['result']->value['ID'];?>
&amp;from=<?php echo smarty_modifier_escape($_SERVER['REQUEST_URI'],"url");?>
" title="Rebuild Release - Delete and reset for reprocessing if binaries still exist.">Reb</a>
						</div>
					<?php }?>	
				</div>
			</td>
			<td class="less"><a title="Browse <?php echo $_smarty_tpl->tpl_vars['result']->value['category_name'];?>
" href="<?php echo @WWW_TOP;?>
/browse?t=<?php echo $_smarty_tpl->tpl_vars['result']->value['categoryID'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['category_name'];?>
</a></td>
			<td class="less mid" title="<?php echo $_smarty_tpl->tpl_vars['result']->value['postdate'];?>
"><?php echo smarty_modifier_timeago($_smarty_tpl->tpl_vars['result']->value['postdate']);?>
</td>
			<td class="less right"><?php echo smarty_modifier_fsize_format($_smarty_tpl->tpl_vars['result']->value['size'],"MB");?>
<?php if ($_smarty_tpl->tpl_vars['result']->value['completion']>0){?><br /><?php if ($_smarty_tpl->tpl_vars['result']->value['completion']<100){?><span class="warning"><?php echo $_smarty_tpl->tpl_vars['result']->value['completion'];?>
%</span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['result']->value['completion'];?>
%<?php }?><?php }?></td>
			<td class="less mid"><a title="View file list" href="<?php echo @WWW_TOP;?>
/filelist/<?php echo $_smarty_tpl->tpl_vars['result']->value['guid'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['totalpart'];?>
</a></td>
			<td class="less" nowrap="nowrap"><a title="View comments" href="<?php echo @WWW_TOP;?>
/details/<?php echo $_smarty_tpl->tpl_vars['result']->value['guid'];?>
/#comments"><?php echo $_smarty_tpl->tpl_vars['result']->value['comments'];?>
 cmt<?php if ($_smarty_tpl->tpl_vars['result']->value['comments']!=1){?>s<?php }?></a><br/><?php echo $_smarty_tpl->tpl_vars['result']->value['grabs'];?>
 grab<?php if ($_smarty_tpl->tpl_vars['result']->value['grabs']!=1){?>s<?php }?></td>
			<td class="icons">
				<div class="icon icon_nzb"><a title="Download Nzb" href="<?php echo @WWW_TOP;?>
/getnzb/<?php echo $_smarty_tpl->tpl_vars['result']->value['guid'];?>
/<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['result']->value['searchname'],"htmlall");?>
">&nbsp;</a></div>
				<div class="icon icon_cart" title="Add to Cart"></div>
				<div class="icon icon_sab" title="Send to my Sabnzbd"></div>
			</td>
		</tr>
	<?php }} ?>
	
</table>

<br/>

<?php echo $_smarty_tpl->getVariable('pager')->value;?>


<div class="nzb_multi_operations">
	<small>With Selected:</small>
	<input type="button" class="nzb_multi_operations_download" value="Download NZBs" />
	<input type="button" class="nzb_multi_operations_cart" value="Add to Cart" />
	<input type="button" class="nzb_multi_operations_sab" value="Send to SAB" />
	<?php if ($_smarty_tpl->getVariable('isadmin')->value){?>
	&nbsp;&nbsp;
	<input type="button" class="nzb_multi_operations_edit" value="Edit" />
	<input type="button" class="nzb_multi_operations_delete" value="Del" />
	<input type="button" class="nzb_multi_operations_rebuild" value="Reb" />
	<?php }?>	
</div>

</form>

<?php }?>

<br/><br/><br/>
