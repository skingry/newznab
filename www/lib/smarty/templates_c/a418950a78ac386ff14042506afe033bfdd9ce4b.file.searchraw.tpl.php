<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 19:35:34
         compiled from "/data/newznab/www/views/templates/frontend/searchraw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40010122450fb6606925952-58466160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a418950a78ac386ff14042506afe033bfdd9ce4b' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/searchraw.tpl',
      1 => 1296973668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40010122450fb6606925952-58466160',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_cycle')) include '/data/newznab/www/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_replace')) include '/data/newznab/www/lib/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.date_format.php';
?> 
<h1>Search Binaries</h1>

<form method="get" action="<?php echo @WWW_TOP;?>
/searchraw">
	<div style="text-align:center;">
		<label for="search" style="display:none;">Search</label>
		<input id="search" name="search" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('search')->value,'htmlall');?>
" type="text"/>
		<input id="searchraw_search_button" type="submit" value="search" />
	</div>
</form>

<?php if (count($_smarty_tpl->getVariable('results')->value)==0&&$_smarty_tpl->getVariable('search')->value!=''){?>
	<div class="nosearchresults">
		Your search - <strong><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('search')->value,'htmlall');?>
</strong> - did not match any headers.
		<br/><br/>
		Suggestions:
		<br/><br/>
		<ul>
		<li>Make sure all words are spelled correctly.</li>
		<li>Try different keywords.</li>
		<li>Try more general keywords.</li>
		<li>Try fewer keywords.</li>
		</ul>
	</div>
<?php }elseif($_smarty_tpl->getVariable('search')->value==''){?>
<?php }else{ ?>
<form method="post" id="dl" name="dl" action="<?php echo @WWW_TOP;?>
/searchraw">
<table style="width:100%;" class="data" id="browsetable">
	<tr>
		<!--<th width="10"></th>-->
		<th>filename</th>
		<th>group</th>
		<th>posted</th>
		<?php if ($_smarty_tpl->getVariable('isadmin')->value){?>
		<th>Misc</th>
		<th>%</th>
		<?php }?>
		<th>Nzb</th>
	</tr>

	<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
">
			<!--<td class="selection"><input name="file<?php echo $_smarty_tpl->tpl_vars['result']->value['ID'];?>
" id="file<?php echo $_smarty_tpl->tpl_vars['result']->value['ID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['ID'];?>
" type="checkbox"/></td>-->
			<td title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['result']->value['xref'],"htmlall");?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['result']->value['name'],"htmlall");?>
</td>
			<td class="less"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['result']->value['group_name'],"alt.binaries","a.b");?>
</td>
			<td class="less" title="<?php echo $_smarty_tpl->tpl_vars['result']->value['date'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['result']->value['date']);?>
</td>
			<?php if ($_smarty_tpl->getVariable('isadmin')->value){?>
			<td><span title="procstat"><?php echo $_smarty_tpl->tpl_vars['result']->value['procstat'];?>
</span>/<span title="procattempts"><?php echo $_smarty_tpl->tpl_vars['result']->value['procattempts'];?>
</span>/<span title="totalparts"><?php echo $_smarty_tpl->tpl_vars['result']->value['totalParts'];?>
</span>/<span title="regex"><?php if ($_smarty_tpl->tpl_vars['result']->value['regexID']==''){?>_<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['result']->value['regexID'];?>
<?php }?></span>/<span title="relpart"><?php echo $_smarty_tpl->tpl_vars['result']->value['relpart'];?>
</span>/<span title="reltotalpart"><?php echo $_smarty_tpl->tpl_vars['result']->value['reltotalpart'];?>
</span></td>
			<td class="less"><?php if ($_smarty_tpl->tpl_vars['result']->value['binnum']<$_smarty_tpl->tpl_vars['result']->value['totalParts']){?><span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['result']->value['binnum'];?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['totalParts'];?>
</span><?php }else{ ?>100%<?php }?></td>
			<?php }?>			
			<td class="less"><?php if ($_smarty_tpl->tpl_vars['result']->value['releaseID']>0){?><a title="View Nzb details" href="<?php echo @WWW_TOP;?>
/details/<?php echo $_smarty_tpl->tpl_vars['result']->value['guid'];?>
/<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['result']->value['filename'],"htmlall");?>
">Yes</a><?php }?></td>
		</tr>
	<?php }} ?>
	
</table>
</form>

<!--
<div class="checkbox_operations">
	Selection:
	<a href="#" class="select_all">All</a>
	<a href="#" class="select_none">None</a>
	<a href="#" class="select_invert">Invert</a>
	<a href="#" class="select_range">Range</a>
</div>

<div style="padding-top:20px;">
	<a href="#" id="searchraw_download_selected">Download selected as Nzb</a>
</div>
-->
<?php }?>
