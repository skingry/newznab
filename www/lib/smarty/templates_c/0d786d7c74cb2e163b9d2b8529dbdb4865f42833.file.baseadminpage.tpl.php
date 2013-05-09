<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 16:56:47
         compiled from "/data/newznab/www/views/templates/admin/baseadminpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142916048650fb40cf12f892-50024259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d786d7c74cb2e163b9d2b8529dbdb4865f42833' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/baseadminpage.tpl',
      1 => 1294470604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142916048650fb40cf12f892-50024259',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />	
	<title><?php echo (($tmp = @$_smarty_tpl->getVariable('site')->value->title)===null||$tmp==='' ? 'newznab' : $tmp);?>
 - <?php echo (($tmp = @$_smarty_tpl->getVariable('page')->value->meta_title)===null||$tmp==='' ? $_smarty_tpl->getVariable('page')->value->title : $tmp);?>
</title>
	<link href="<?php echo @WWW_TOP;?>
/../views/styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo @WWW_TOP;?>
/../views/styles/admin.css" rel="stylesheet" type="text/css" media="screen" />
	<?php if ($_smarty_tpl->getVariable('site')->value->style!=''&&$_smarty_tpl->getVariable('site')->value->style!="/"){?><link href="<?php echo @WWW_TOP;?>
/../views/themes/<?php echo $_smarty_tpl->getVariable('site')->value->style;?>
/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo @WWW_TOP;?>
/../views/themes/<?php echo $_smarty_tpl->getVariable('site')->value->style;?>
/admin.css" rel="stylesheet" type="text/css" media="screen" />	
	<?php }?>
	<link rel="shortcut icon" type="image/ico" href="<?php echo @WWW_TOP;?>
/../views/images/favicon.ico"/>
	<script type="text/javascript" src="<?php echo @WWW_TOP;?>
/../views/scripts/jquery.js"></script>
	<script type="text/javascript" src="<?php echo @WWW_TOP;?>
/../views/scripts/sorttable.js"></script>
	<script type="text/javascript" src="<?php echo @WWW_TOP;?>
/../views/scripts/utils-admin.js"></script>
	<script type="text/javascript" src="<?php echo @WWW_TOP;?>
/../views/scripts/jquery.multifile.js"></script>
	<script type="text/javascript">var WWW_TOP = "<?php echo @WWW_TOP;?>
/..";</script>
	
	<?php echo $_smarty_tpl->getVariable('page')->value->head;?>

</head>
<body>
	<div id="logo" style="cursor: pointer;">
		<h1><a href="/"></a></h1>
		<p><em></em></p>
	</div>
	<hr />
	
	<div id="header">
		<div id="menu"> 
		</div> 
		<!-- end #menu --> 
	</div>
	
	<div id="page">

		<div id="adpanel">

		</div>

		<div id="content">
			<?php echo $_smarty_tpl->getVariable('page')->value->content;?>

		</div>
		<!-- end #content -->

		<div id="sidebar">
		<ul>		
		<li>
		<?php echo $_smarty_tpl->getVariable('admin_menu')->value;?>

		</li>

		</ul>
		</div>
		<!-- end #sidebar -->
	
		<div style="clear: both;">&nbsp;</div>
			
	</div>
	<!-- end #page -->
	
	<div id="searchfooter">
		<center>
		</center>
	</div>
	
	<div class="footer">
	<p>
		<?php echo $_smarty_tpl->getVariable('site')->value->footer;?>

		<br /><br /><br />Copyright &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php echo $_smarty_tpl->getVariable('site')->value->title;?>
. All rights reserved.
	</p>
	</div>
	<!-- end #footer -->
	
	<?php if ($_smarty_tpl->getVariable('google_analytics_acc')->value!=''){?>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {	
	var pageTracker = _gat._getTracker("<?php echo $_smarty_tpl->getVariable('google_analytics_acc')->value;?>
");	
	pageTracker._trackPageview();
	} catch(err) {}</script>
	
	<?php }?>
	
</body>
</html>
