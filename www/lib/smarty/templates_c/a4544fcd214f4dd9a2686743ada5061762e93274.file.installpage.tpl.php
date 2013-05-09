<?php /* Smarty version Smarty-3.0.6, created on 2013-01-20 00:40:05
         compiled from "/data/www/views/templates/install/installpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37093184150fb3ce5c962d0-80882667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4544fcd214f4dd9a2686743ada5061762e93274' => 
    array (
      0 => '/data/www/views/templates/install/installpage.tpl',
      1 => 1296804580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37093184150fb3ce5c962d0-80882667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/data/www/lib/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</title>
	<link href="../views/styles/install.css" rel="stylesheet" type="text/css" media="screen" />
	<link rel="shortcut icon" type="image/ico" href="../views/images/favicon.ico"/>
	<?php echo $_smarty_tpl->getVariable('page')->value->head;?>

</head>
<body>
	<h1 id="logo"><img alt="Newznab" src="../views/images/banner.jpg" /></h1>
	<div class="content">	
		<h2><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h2>
		<?php echo $_smarty_tpl->getVariable('page')->value->content;?>

	
		<div class="footer">
			<p><br /><a href="http://www.newznab.com/">newznab</a> is released under GPL. All rights reserved <?php echo smarty_modifier_date_format(time(),"%Y");?>
.</p>
		</div>
	</div>
</body>
</html>
