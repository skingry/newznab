<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 22:31:27
         compiled from "/data/newznab/www/views/templates/frontend/viewnfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98024224950fb8f3f3706a3-63704175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa7dfc20baffeba727716c6d818d036f94403979' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/viewnfo.tpl',
      1 => 1295845376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98024224950fb8f3f3706a3-63704175',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_magicurl')) include '/data/newznab/www/lib/smarty/plugins/modifier.magicurl.php';
?> 
<?php if (!$_smarty_tpl->getVariable('modal')->value){?>
<h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1>
<h2>For <a href="<?php echo @WWW_TOP;?>
/details/<?php echo $_smarty_tpl->getVariable('rel')->value['guid'];?>
/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('rel')->value['searchname'],'htmlall');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('rel')->value['searchname'],'htmlall');?>
</a></h2>
<?php }?>

<pre id="nfo"><?php echo smarty_modifier_magicurl($_smarty_tpl->getVariable('nfo')->value['nfoUTF'],$_smarty_tpl->getVariable('site')->value->dereferrer_link);?>
</pre>
