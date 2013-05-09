<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:02:35
         compiled from "/data/newznab/www/views/templates/frontend/headermenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92744180150fb422b20fe04-18922664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad55b98261c8c694cf70a6662ca686335343756f' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/headermenu.tpl',
      1 => 1299178790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92744180150fb422b20fe04-18922664',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
?><div id="menucontainer"> 
	<div id="menulink"> 
		<ul>
		<?php  $_smarty_tpl->tpl_vars['parentcat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('parentcatlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['parentcat']->key => $_smarty_tpl->tpl_vars['parentcat']->value){
?>
			<?php if ($_smarty_tpl->tpl_vars['parentcat']->value['ID']==1000&&$_smarty_tpl->getVariable('userdata')->value['consoleview']=="1"){?>
			<li><a title="Browse <?php echo $_smarty_tpl->tpl_vars['parentcat']->value['title'];?>
" href="<?php echo @WWW_TOP;?>
/console"><?php echo $_smarty_tpl->tpl_vars['parentcat']->value['title'];?>
</a>
				<ul>
				<?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['parentcat']->value['subcatlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
?>
					<li><a title="Browse <?php echo $_smarty_tpl->tpl_vars['subcat']->value['title'];?>
" href="<?php echo @WWW_TOP;?>
/console?t=<?php echo $_smarty_tpl->tpl_vars['subcat']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['title'];?>
</a></li>
				<?php }} ?>
				</ul>
			</li>
			<?php }elseif($_smarty_tpl->tpl_vars['parentcat']->value['ID']==2000&&$_smarty_tpl->getVariable('userdata')->value['movieview']=="1"){?>
			<li><a title="Browse <?php echo $_smarty_tpl->tpl_vars['parentcat']->value['title'];?>
" href="<?php echo @WWW_TOP;?>
/movies"><?php echo $_smarty_tpl->tpl_vars['parentcat']->value['title'];?>
</a>
				<ul>
				<?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['parentcat']->value['subcatlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
?>
					<li><a title="Browse <?php echo $_smarty_tpl->tpl_vars['subcat']->value['title'];?>
" href="<?php echo @WWW_TOP;?>
/movies?t=<?php echo $_smarty_tpl->tpl_vars['subcat']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['title'];?>
</a></li>
				<?php }} ?>
				</ul>
			</li>
			<?php }elseif(($_smarty_tpl->tpl_vars['parentcat']->value['ID']==3000&&$_smarty_tpl->getVariable('userdata')->value['musicview']=="1")){?>
			<li><a title="Browse <?php echo $_smarty_tpl->tpl_vars['parentcat']->value['title'];?>
" href="<?php echo @WWW_TOP;?>
/music"><?php echo $_smarty_tpl->tpl_vars['parentcat']->value['title'];?>
</a>
				<ul>
				<?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['parentcat']->value['subcatlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
?>
					<?php if ($_smarty_tpl->tpl_vars['subcat']->value['ID']==3030){?>
						<li><a title="Browse <?php echo $_smarty_tpl->tpl_vars['subcat']->value['title'];?>
" href="<?php echo @WWW_TOP;?>
/browse?t=<?php echo $_smarty_tpl->tpl_vars['subcat']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['title'];?>
</a></li>
					<?php }else{ ?>
						<li><a title="Browse <?php echo $_smarty_tpl->tpl_vars['subcat']->value['title'];?>
" href="<?php echo @WWW_TOP;?>
/music?t=<?php echo $_smarty_tpl->tpl_vars['subcat']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['title'];?>
</a></li>
					<?php }?>
				<?php }} ?>
				</ul>
			</li>
			<?php }else{ ?>
			<li><a title="Browse <?php echo $_smarty_tpl->tpl_vars['parentcat']->value['title'];?>
" href="<?php echo @WWW_TOP;?>
/browse?t=<?php echo $_smarty_tpl->tpl_vars['parentcat']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['parentcat']->value['title'];?>
</a>
				<ul>
				<?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['parentcat']->value['subcatlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
?>
					<li><a title="Browse <?php echo $_smarty_tpl->tpl_vars['subcat']->value['title'];?>
" href="<?php echo @WWW_TOP;?>
/browse?t=<?php echo $_smarty_tpl->tpl_vars['subcat']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['title'];?>
</a></li>
				<?php }} ?>
				</ul>
			</li>
			<?php }?>
		<?php }} ?>
			<li><a title="Browse All" href="<?php echo @WWW_TOP;?>
/browse">All</a>
				<ul>
					<li><a title="Browse Groups" href="<?php echo @WWW_TOP;?>
/browsegroup">Groups</a></li>
				</ul>
			</li>
		</ul>
	</div>
	
	<div id="menusearchlink">
		<form id="headsearch_form" action="<?php echo @WWW_TOP;?>
/search/" method="get">

			<div class="gobutton" title="Submit search"><input id="headsearch_go" type="submit" value="" tabindex="3" /></div>

			<label style="display:none;" for="headcat">Search Category</label>
			<select id="headcat" name="t" tabindex="2">
				<option class="grouping" value="-1">All</option>
			<?php  $_smarty_tpl->tpl_vars['parentcat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('parentcatlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['parentcat']->key => $_smarty_tpl->tpl_vars['parentcat']->value){
?>
				<option <?php if ($_smarty_tpl->getVariable('header_menu_cat')->value==$_smarty_tpl->tpl_vars['parentcat']->value['ID']){?>selected="selected"<?php }?> class="grouping" value="<?php echo $_smarty_tpl->tpl_vars['parentcat']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['parentcat']->value['title'];?>
</option>
				<?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['parentcat']->value['subcatlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
?>
					<option <?php if ($_smarty_tpl->getVariable('header_menu_cat')->value==$_smarty_tpl->tpl_vars['subcat']->value['ID']){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['ID'];?>
">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['subcat']->value['title'];?>
</option>
				<?php }} ?>
			<?php }} ?>
			</select>

			<label style="display:none;" for="headsearch">Search Text</label>
			<input id="headsearch" name="search" value="<?php if ($_smarty_tpl->getVariable('header_menu_search')->value==''){?>Enter keywords<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('header_menu_search')->value,"htmlall");?>
<?php }?>" style="width:85px;" type="text" tabindex="1" /> 

		</form>
	</div>
</div>
