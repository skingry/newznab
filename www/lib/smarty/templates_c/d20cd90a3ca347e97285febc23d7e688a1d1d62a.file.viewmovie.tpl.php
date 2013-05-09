<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 20:07:09
         compiled from "/data/newznab/www/views/templates/frontend/viewmovie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164987187550fb6d6d0020a4-99317069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd20cd90a3ca347e97285febc23d7e688a1d1d62a' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/viewmovie.tpl',
      1 => 1297236182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164987187550fb6d6d0020a4-99317069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
?><?php if (!$_smarty_tpl->getVariable('modal')->value){?> 
<h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1>
<h2>For <a href="<?php echo @WWW_TOP;?>
/details/<?php echo $_smarty_tpl->getVariable('rel')->value['guid'];?>
/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('rel')->value['searchname'],'htmlall');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('rel')->value['searchname'],'htmlall');?>
</a></h2>
<?php }?>

<?php if ($_smarty_tpl->getVariable('movie')->value['backdrop']==1){?><div id="backdrop"><img src="<?php echo @WWW_TOP;?>
/covers/movies/<?php echo $_smarty_tpl->getVariable('movie')->value['imdbID'];?>
-backdrop.jpg" alt="" /></div><?php }?>

<div id="movieinfo">

<h1><?php echo stripslashes($_smarty_tpl->getVariable('movie')->value['title']);?>
 <?php if ($_smarty_tpl->getVariable('movie')->value['year']!=''){?>(<?php echo $_smarty_tpl->getVariable('movie')->value['year'];?>
)<?php }?></h1>
<h2><?php if ($_smarty_tpl->getVariable('movie')->value['cover']==1){?><img src="<?php echo @WWW_TOP;?>
/covers/movies/<?php echo $_smarty_tpl->getVariable('movie')->value['imdbID'];?>
-cover.jpg" class="cover" alt="<?php echo stripslashes($_smarty_tpl->getVariable('movie')->value['title']);?>
" align="left" /><?php }?>
<?php if ($_smarty_tpl->getVariable('movie')->value['tagline']!=''){?><b><?php echo stripslashes($_smarty_tpl->getVariable('movie')->value['tagline']);?>
</b><?php }?></h2>

<?php if ($_smarty_tpl->getVariable('movie')->value['plot']!=''){?>
	<h2><?php echo stripslashes($_smarty_tpl->getVariable('movie')->value['plot']);?>
</h2>
<?php }?>

<h3>
	<?php if ($_smarty_tpl->getVariable('movie')->value['rating']!=''){?>Rating: <?php echo $_smarty_tpl->getVariable('movie')->value['rating'];?>
/10<br /><?php }?>
	<?php if ($_smarty_tpl->getVariable('movie')->value['director']!=''){?>Director: <?php echo $_smarty_tpl->getVariable('movie')->value['director'];?>
<br /><?php }?>
	<?php if ($_smarty_tpl->getVariable('movie')->value['genre']!=''){?>Genre: <?php echo stripslashes($_smarty_tpl->getVariable('movie')->value['genre']);?>
<?php }?>
</h3>

<?php if ($_smarty_tpl->getVariable('movie')->value['actors']!=''){?><h3>Starring:<br /><?php echo $_smarty_tpl->getVariable('movie')->value['actors'];?>
</h3><?php }?>

</div>