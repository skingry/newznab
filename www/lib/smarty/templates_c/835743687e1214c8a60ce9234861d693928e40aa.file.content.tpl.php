<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:02:35
         compiled from "/data/newznab/www/views/templates/frontend/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211753113450fb422b459ec3-76958840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '835743687e1214c8a60ce9234861d693928e40aa' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/content.tpl',
      1 => 1294472460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211753113450fb422b459ec3-76958840',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
 
			<h1><?php echo $_smarty_tpl->getVariable('content')->value->title;?>
</h1>

			<?php echo $_smarty_tpl->getVariable('content')->value->body;?>

