<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:02:35
         compiled from "/data/newznab/www/views/templates/frontend/basepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142754104550fb422b4712e4-67066993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27cf0b0c4421515089c716341aadc484df218b11' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/basepage.tpl',
      1 => 1298970218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142754104550fb422b4712e4-67066993',
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
	<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('page')->value->meta_keywords;?>
,<?php echo $_smarty_tpl->getVariable('site')->value->meta_keywords;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->getVariable('page')->value->meta_description;?>
 - <?php echo $_smarty_tpl->getVariable('site')->value->meta_description;?>
" />	
	<meta name="newznab_version" content="<?php echo $_smarty_tpl->getVariable('site')->value->version;?>
" />
	<title><?php echo $_smarty_tpl->getVariable('page')->value->meta_title;?>
 - <?php echo $_smarty_tpl->getVariable('site')->value->meta_title;?>
</title>
	<link href="<?php echo @WWW_TOP;?>
/views/styles/style.css" rel="stylesheet" type="text/css" media="screen" />
	<?php if ($_smarty_tpl->getVariable('site')->value->google_adsense_acc==''){?>
<link href="<?php echo @WWW_TOP;?>
/views/styles/style_noadsense.css" rel="stylesheet" type="text/css" media="screen" />
<?php }else{ ?>
<link href="http://www.google.com/cse/api/branding.css" rel="stylesheet" type="text/css" media="screen" />
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('site')->value->style!=''&&$_smarty_tpl->getVariable('site')->value->style!="/"){?><link href="<?php echo @WWW_TOP;?>
/views/themes/<?php echo $_smarty_tpl->getVariable('site')->value->style;?>
/style.css" rel="stylesheet" type="text/css" media="screen" />
	<?php }?>
	<link rel="shortcut icon" type="image/ico" href="<?php echo @WWW_TOP;?>
/views/images/favicon.ico"/>
	<script type="text/javascript" src="<?php echo @WWW_TOP;?>
/views/scripts/jquery.js"></script>
	<script type="text/javascript" src="<?php echo @WWW_TOP;?>
/views/scripts/utils.js"></script>
	<script type="text/javascript" src="<?php echo @WWW_TOP;?>
/views/scripts/sorttable.js"></script>

	<script type="text/javascript">
		var WWW_TOP = "<?php echo @WWW_TOP;?>
";
		var SERVERROOT = "<?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
";
		var UID = "<?php if ($_smarty_tpl->getVariable('loggedin')->value=="true"){?><?php echo $_smarty_tpl->getVariable('userdata')->value['ID'];?>
<?php }else{ ?><?php }?>";
		var RSSTOKEN = "<?php if ($_smarty_tpl->getVariable('loggedin')->value=="true"){?><?php echo $_smarty_tpl->getVariable('userdata')->value['rsstoken'];?>
<?php }else{ ?><?php }?>";
	</script>
	<?php echo $_smarty_tpl->getVariable('page')->value->head;?>

</head>
<body <?php echo $_smarty_tpl->getVariable('page')->value->body;?>
>
	<a name="top"></a>
	<div id="statusbar"><?php if ($_smarty_tpl->getVariable('loggedin')->value=="true"){?>Welcome back <a href="<?php echo @WWW_TOP;?>
/profile"><?php echo $_smarty_tpl->getVariable('userdata')->value['username'];?>
</a>. <a href="<?php echo @WWW_TOP;?>
/logout">Logout</a><?php }else{ ?><a href="<?php echo @WWW_TOP;?>
/login">Login</a> or <a href="<?php echo @WWW_TOP;?>
/register">Register</a><?php }?></div>

	<div id="logo">
		<a class="logolink" title="<?php echo $_smarty_tpl->getVariable('site')->value->title;?>
 Logo" href="<?php echo @WWW_TOP;?>
/"><img class="logoimg" alt="<?php echo $_smarty_tpl->getVariable('site')->value->title;?>
 Logo" src="<?php echo @WWW_TOP;?>
/views/images/clearlogo.png" /></a>

		<?php if ($_smarty_tpl->getVariable('site')->value->menuposition==2){?><ul><?php echo $_smarty_tpl->getVariable('main_menu')->value;?>
</ul><?php }?>

		<h1><a href="<?php echo @WWW_TOP;?>
/"><?php echo $_smarty_tpl->getVariable('site')->value->title;?>
</a></h1>
		<p><em><?php echo $_smarty_tpl->getVariable('site')->value->strapline;?>
</em></p>

	</div>
	<hr />
	
	<div id="header">
		<div id="menu"> 

			<?php if ($_smarty_tpl->getVariable('loggedin')->value=="true"){?>
				<?php echo $_smarty_tpl->getVariable('header_menu')->value;?>

			<?php }?>
						
		</div> 
	</div>
	
	<div id="page">

		<div id="adpanel">
			&nbsp;
			<?php if ($_smarty_tpl->getVariable('site')->value->google_adsense_acc!=''&&$_smarty_tpl->getVariable('site')->value->google_adsense_sidepanel!=''){?>
			
		
				<script type="text/javascript"><!--
				google_ad_client = "<?php echo $_smarty_tpl->getVariable('site')->value->google_adsense_acc;?>
";
				google_ad_slot = "<?php echo $_smarty_tpl->getVariable('site')->value->google_adsense_sidepanel;?>
";
				google_ad_width = 160;
				google_ad_height = 600;
				//-->
				</script>
				<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
		
			
			<?php }?>
		</div>

		<div id="content">
			<?php echo $_smarty_tpl->getVariable('page')->value->content;?>

		</div>

		<?php if ($_smarty_tpl->getVariable('site')->value->menuposition==1){?>
		<div id="sidebar">
			<ul>		
			
			<?php echo $_smarty_tpl->getVariable('main_menu')->value;?>

			
			<?php echo $_smarty_tpl->getVariable('article_menu')->value;?>

	
			<?php echo $_smarty_tpl->getVariable('useful_menu')->value;?>

			
			<?php if ($_smarty_tpl->getVariable('site')->value->google_adsense_acc!=''&&$_smarty_tpl->getVariable('site')->value->google_adsense_search!=''){?>
			
				<li>
				<h2>Search for <?php echo $_smarty_tpl->getVariable('site')->value->term_plural;?>
</h2> 
				<div style="padding-left:20px;">
					<div class="cse-branding-bottom" style="background-color:#FFFFFF;color:#000000">
					  <div class="cse-branding-form">
					    <form action="http://www.google.co.uk/cse" id="cse-search-box" target="_blank">
					      <div>
					        <input type="hidden" name="cx" value="partner-<?php echo $_smarty_tpl->getVariable('site')->value->google_adsense_acc;?>
:<?php echo $_smarty_tpl->getVariable('site')->value->google_adsense_search;?>
" />
					        <input type="hidden" name="ie" value="UTF-8" />
					        <input type="text" name="q" size="10" />
					        <input type="submit" name="sa" value="Search" />
					      </div>
					    </form>
					  </div>
					  <div class="cse-branding-logo">
					    <img src="http://www.google.com/images/poweredby_transparent/poweredby_FFFFFF.gif" alt="Google" />
					  </div>
					  <div class="cse-branding-text">
					    Custom Search
					  </div>
					</div>
				</div>
				</li>		
			
			<?php }?>
			
			<li>
				<a title="Sickbeard - The ultimate usenet PVR" href="http://www.sickbeard.com/"><img class="menupic" alt="Sickbeard - The ultimate usenet PVR" src="<?php echo @WWW_TOP;?>
/views/images/sickbeard.png" /></a>
			</li>
			<li>
				<a title="CouchPotato - Automatic movie downloader" href="http://www.couchpotatoapp.com/"><img style="padding-left:30px;"  class="menupic" alt="CouchPotato - Automatic Movie Downloader" src="<?php echo @WWW_TOP;?>
/views/images/couchpotato.png" /></a>
			</li>
			<li>
				<a title="Sabznbd - A great usenet binary downloader" href="http://www.sabnzbd.org/"><img class="menupic" alt="Sabznbd - A great usenet binary downloader" src="<?php echo @WWW_TOP;?>
/views/images/sabnzbd.png" /></a>
			</li>
			</ul>
		</div>
		<?php }?>
	
		<div style="clear: both;text-align:right;">
			<a class="w3validator" href="http://validator.w3.org/check?uri=referer">
			<img src="<?php echo @WWW_TOP;?>
/views/images/valid-xhtml10.png" alt="Valid XHTML 1.0 Transitional" height="31" width="88" />
			</a> 
		</div>
		
	</div>

	<div class="footer">
	<p>
		<?php echo $_smarty_tpl->getVariable('site')->value->footer;?>

		<br /><br /><br /><a title="Newznab - A usenet indexing web application with community features." href="http://www.newznab.com/">Newznab</a> is released under GPL. All rights reserved <?php echo smarty_modifier_date_format(time(),"%Y");?>
. <br/> <a title="Chat about newznab" href="http://www.newznab.com/chat.html">Newznab Chat</a> <br/><a href="<?php echo @WWW_TOP;?>
/terms-and-conditions"><?php echo $_smarty_tpl->getVariable('site')->value->title;?>
 Terms and Conditions</a>
	</p>
	</div>
	
	<?php if ($_smarty_tpl->getVariable('site')->value->google_analytics_acc!=''){?>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {	
	var pageTracker = _gat._getTracker("<?php echo $_smarty_tpl->getVariable('site')->value->google_analytics_acc;?>
");	
	pageTracker._trackPageview();
	} catch(err) {}</script>
	
	<?php }?>

<?php if ($_smarty_tpl->getVariable('loggedin')->value=="true"){?>
<input type="hidden" name="UID" value="<?php echo $_smarty_tpl->getVariable('userdata')->value['ID'];?>
" />
<input type="hidden" name="RSSTOKEN" value="<?php echo $_smarty_tpl->getVariable('userdata')->value['rsstoken'];?>
" />
<?php }?>
	
</body>
</html>
