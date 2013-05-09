<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 19:37:06
         compiled from "/data/newznab/www/views/templates/admin/movie-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13406973450fb6662de2054-68724307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd05dc4f5ac13e18df345311a48e883a4394aa34d' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/movie-list.tpl',
      1 => 1297399642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13406973450fb6662de2054-68724307',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/data/newznab/www/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.date_format.php';
?><h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1> 

<?php if ($_smarty_tpl->getVariable('movielist')->value){?>
<?php echo $_smarty_tpl->getVariable('pager')->value;?>


<table style="margin-top:10px;" class="data Sortable highlight">

	<tr>
		<th>IMDB ID</th>
		<th>TMDb ID</th>
		<th>Title</th>
		<th>Cover</th>
		<th>Backdrop</th>
		<th>Created</th>
		<th></th>
	</tr>
	
	<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('movielist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value){
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
">
		<td class="less"><a href="http://www.imdb.com/title/tt<?php echo $_smarty_tpl->tpl_vars['movie']->value['imdbID'];?>
" title="View in IMDB"><?php echo $_smarty_tpl->tpl_vars['movie']->value['imdbID'];?>
</a></td>
		<td class="less"><a href="http://www.themoviedb.org/movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value['tmdbID'];?>
" title="View in TMDb"><?php echo $_smarty_tpl->tpl_vars['movie']->value['tmdbID'];?>
</a></td>
		<td><a title="Edit" href="<?php echo @WWW_TOP;?>
/movie-edit.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['imdbID'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['title'];?>
 (<?php echo $_smarty_tpl->tpl_vars['movie']->value['year'];?>
)</a></td>
		<td class="less"><?php echo $_smarty_tpl->tpl_vars['movie']->value['cover'];?>
</td>
		<td class="less"><?php echo $_smarty_tpl->tpl_vars['movie']->value['backdrop'];?>
</td>
		<td class="less"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['movie']->value['createddate']);?>
</td>
		<td class="less"><a title="Update" href="<?php echo @WWW_TOP;?>
/movie-add.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['imdbID'];?>
&amp;update=1">Update</a></td>
	</tr>
	<?php }} ?>

</table>
<?php }else{ ?>
<p>No Movies available.</p>
<?php }?>
