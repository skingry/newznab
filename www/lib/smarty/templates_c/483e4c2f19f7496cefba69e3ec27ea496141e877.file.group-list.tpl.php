<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 16:57:32
         compiled from "/data/newznab/www/views/templates/admin/group-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163750548050fb40fc87ba91-67477924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '483e4c2f19f7496cefba69e3ec27ea496141e877' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/group-list.tpl',
      1 => 1297446570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163750548050fb40fc87ba91-67477924',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/data/newznab/www/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_replace')) include '/data/newznab/www/lib/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_timeago')) include '/data/newznab/www/lib/smarty/plugins/modifier.timeago.php';
?><div id="group_list"> 

    <h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1>

		<p>
			Below is a list of all usenet groups available to be indexed. Click 'Activate' to start indexing a group.
		</p>


    <?php if ($_smarty_tpl->getVariable('grouplist')->value){?>
	
	<div style="float:right;">
	
		<form name="groupsearch" action="">
			<label for="groupname">Group</label>
			<input id="groupname" type="text" name="groupname" value="<?php echo $_smarty_tpl->getVariable('groupname')->value;?>
" size="15" />
			&nbsp;&nbsp;
			<input type="submit" value="Go" />
		</form>
	</div>
	
	<?php echo $_smarty_tpl->getVariable('pager')->value;?>

	<br/><br/>
	
    <div id="message">msg</div>
    <table style="width:100%;" class="data highlight">

        <tr>
            <th>group</th>
            <th>First Post</th>
			<th>Last Post</th>
            <th>last updated</th>
            <th>active</th>
            <th>releases</th>
			<th>Min Files</th>
            <th>Backfill Days</th>
			<th>options</th>
        </tr>
        
        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('grouplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
?>
        <tr id="grouprow-<?php echo $_smarty_tpl->tpl_vars['group']->value['ID'];?>
" class="<?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
">
            <td>
				<a href="<?php echo @WWW_TOP;?>
/group-edit.php?id=<?php echo $_smarty_tpl->tpl_vars['group']->value['ID'];?>
"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value['name'],"alt.binaries","a.b");?>
</a>
				<div class="hint"><?php echo $_smarty_tpl->tpl_vars['group']->value['description'];?>
</div>
			</td>
            <td class="less"><?php echo smarty_modifier_timeago($_smarty_tpl->tpl_vars['group']->value['first_record_postdate']);?>
</td>
			<td class="less"><?php echo smarty_modifier_timeago($_smarty_tpl->tpl_vars['group']->value['last_record_postdate']);?>
</td>
            <td class="less"><?php echo smarty_modifier_timeago($_smarty_tpl->tpl_vars['group']->value['last_updated']);?>
 ago</td>
            <td class="less" id="group-<?php echo $_smarty_tpl->tpl_vars['group']->value['ID'];?>
"><?php if ($_smarty_tpl->tpl_vars['group']->value['active']=="1"){?><a href="javascript:ajax_group_status(<?php echo $_smarty_tpl->tpl_vars['group']->value['ID'];?>
, 0)" class="group_active">Deactivate</a><?php }else{ ?><a href="javascript:ajax_group_status(<?php echo $_smarty_tpl->tpl_vars['group']->value['ID'];?>
, 1)" class="group_deactive">Activate</a><?php }?></td>
            <td class="less"><?php echo $_smarty_tpl->tpl_vars['group']->value['num_releases'];?>
</td>
			<td class="less"><?php if ($_smarty_tpl->tpl_vars['group']->value['minfilestoformrelease']==''){?>n/a<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['group']->value['minfilestoformrelease'];?>
<?php }?></td>
            <td class="less"><?php echo $_smarty_tpl->tpl_vars['group']->value['backfill_target'];?>
</td>
            <td class="less" id="groupdel-<?php echo $_smarty_tpl->tpl_vars['group']->value['ID'];?>
"><a title="Reset this group" href="javascript:ajax_group_reset(<?php echo $_smarty_tpl->tpl_vars['group']->value['ID'];?>
)" class="group_reset">Reset</a> | <a href="javascript:ajax_group_delete(<?php echo $_smarty_tpl->tpl_vars['group']->value['ID'];?>
)" class="group_delete">Delete</a> | <a href="javascript:ajax_group_purge(<?php echo $_smarty_tpl->tpl_vars['group']->value['ID'];?>
)" class="group_purge" onclick="return confirm('Are you sure? This will delete all releases, binaries/parts in the selected group');" >Purge</a></td>
        </tr>
        <?php }} ?>

    </table>
    <?php }else{ ?>
    <p>No groups available (eg. none have been added).</p>
    <?php }?>

</div>		

