<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 16:56:52
         compiled from "/data/newznab/www/views/templates/admin/site-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137446841450fb40d440e3b2-96709148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3fe8cb3d8718702b7bf201a839245ca9501da5e' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/site-edit.tpl',
      1 => 1296804580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137446841450fb40d440e3b2-96709148',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/data/newznab/www/lib/smarty/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_radios')) include '/data/newznab/www/lib/smarty/plugins/function.html_radios.php';
?> 
<h1><?php echo $_smarty_tpl->getVariable('page')->value->title;?>
</h1>

<form action="<?php echo $_smarty_tpl->getVariable('SCRIPT_NAME')->value;?>
?action=submit" method="post">

<fieldset>
<legend>Main Site Settings, Html Layout, Tags</legend>
<table class="input">

<tr>
	<td><label for="title">Title</label>:</td>
	<td>
		<input id="title" class="long" name="title" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->title;?>
" />
		<div class="hint">Displayed around the site and contact form as the name for the site.</div>
	</td>
</tr>

<tr>
	<td><label for="strapline">Strapline</label>:</td>
	<td>
		<input id="strapline" class="long" name="strapline" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->strapline;?>
" />
		<div class="hint">Displayed in the header on every public page.</div>
	</td>
</tr>

<tr>
	<td><label for="metatitle">Meta Title</label>:</td>
	<td>
		<input id="metatitle" class="long" name="metatitle" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->meta_title;?>
" />
		<div class="hint">Stem meta-tag appended to all page title tags.</div>
	</td>
</tr>


<tr>
	<td><label for="metadescription">Meta Description</label>:</td>
	<td>
		<textarea id="metadescription" name="metadescription"><?php echo $_smarty_tpl->getVariable('fsite')->value->meta_description;?>
</textarea>
		<div class="hint">Stem meta-description appended to all page meta description tags.</div>
	</td>
</tr>

<tr>
	<td><label for="metakeywords">Meta Keywords</label>:</td>
	<td>
		<textarea id="metakeywords" name="metakeywords"><?php echo $_smarty_tpl->getVariable('fsite')->value->meta_keywords;?>
</textarea>
		<div class="hint">Stem meta-keywords appended to all page meta keyword tags.</div>
	</td>
</tr>

<tr>
	<td><label for="footer">Footer</label>:</td>
	<td>
		<textarea id="footer" name="footer"><?php echo $_smarty_tpl->getVariable('fsite')->value->footer;?>
</textarea>
		<div class="hint">Displayed in the footer section of every public page.</div>
	</td>
</tr>

<tr>
	<td style="width:160px;"><label for="codename">Code Name</label>:</td>
	<td>
		<input id="codename" name="code" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->code;?>
" />
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->id;?>
" />
		<div class="hint">A just for fun value shown in debug and not on public pages.</div>
	</td>
</tr>

<tr>
	<td><label for="style">Theme</label>:</td>
	<td>
		<?php echo smarty_function_html_options(array('class'=>"siteeditstyle",'id'=>"style",'name'=>'style','values'=>$_smarty_tpl->getVariable('themelist')->value,'output'=>$_smarty_tpl->getVariable('themelist')->value,'selected'=>$_smarty_tpl->getVariable('fsite')->value->style),$_smarty_tpl);?>

		<div class="hint">The theme folder which will be loaded for css and images. (Use / for default)</div>
	</td>
</tr>

<tr>
	<td><label for="style">User Menu Position</label>:</td>
	<td>
		<?php echo smarty_function_html_options(array('class'=>"siteeditmenuposition",'id'=>"menuposition",'name'=>'menuposition','values'=>$_smarty_tpl->getVariable('menupos_ids')->value,'output'=>$_smarty_tpl->getVariable('menupos_names')->value,'selected'=>$_smarty_tpl->getVariable('fsite')->value->menuposition),$_smarty_tpl);?>

		<div class="hint">Where the menu should appear. Moving the menu to the top will require using a theme which widens the content panel. (e.g. nzbsu theme)</div>
	</td>
</tr>

<tr>
	<td><label for="style">Dereferrer Link</label>:</td>
	<td>
		<input id="dereferrer_link" class="long" name="dereferrer_link" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->dereferrer_link;?>
" />
		<div class="hint">Optional URL to prepend to external links</div>
	</td>
</tr>

<tr>
	<td><label for="email">Email</label>:</td>
	<td>
		<input id="email" class="long" name="email" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->email;?>
" />
		<div class="hint">Shown in the contact us page, and where the contact html form is sent to.</div>
	</td>
</tr>

<tr>
	<td><label for="tandc">Terms and Conditions</label>:</td>
	<td>
		<textarea id="tandc" name="tandc"><?php echo $_smarty_tpl->getVariable('fsite')->value->tandc;?>
</textarea>
		<div class="hint">Text displayed in the terms and conditions page.</div>
	</td>
</tr>

</table>
</fieldset>

<fieldset>
<legend>Google Adsense and Analytics</legend>
<table class="input">
<tr>
	<td style="width:160px;"><label for="google_analytics_acc">Google Analytics</label>:</td>
	<td>
		<input id="google_analytics_acc" name="google_analytics_acc" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->google_analytics_acc;?>
" />
		<div class="hint">e.g. UA-xxxxxx-x</div>
	</td>
</tr>

<tr>
	<td style="width:160px;"><label for="google_adsense_acc">Google Adsense</label>:</td>
	<td>
		<input id="google_adsense_acc" name="google_adsense_acc" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->google_adsense_acc;?>
" />
		<div class="hint">e.g. pub-123123123123123</div>
	</td>
</tr>

<tr>
	<td><label for="google_adsense_sidepanel">Google Adsense Sidepanel</label>:</td>
	<td>
		<input id="google_adsense_sidepanel" name="google_adsense_sidepanel" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->google_adsense_sidepanel;?>
" />
		<div class="hint">The ID of a google skyscraper link panel displayed at the right side of every page.</div>
	</td>
</tr>

<tr>
	<td><label for="google_adsense_search">Google Adsense Search</label>:</td>
	<td>
		<input id="google_adsense_search" name="google_adsense_search" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->google_adsense_search;?>
" />
		<div class="hint">The ID of the google search ad panel displayed at the bottom of the left menu.</div>
	</td>
</tr>

</table>
</fieldset>


<fieldset>
<legend>3rd Party API Keys</legend>
<table class="input">
<tr>
	<td style="width:160px;"><label for="tmdbkey">TMDB API Key</label>:</td>
	<td>
		<input id="tmdbkey" class="long" name="tmdbkey" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->tmdbkey;?>
" />
		<div class="hint">The api key used for access to tmdb</div>
	</td>
</tr>

<tr>
	<td><label for="amazonpubkey">Amazon Public API Key</label>:</td>
	<td>
		<input id="amazonpubkey" class="long" name="amazonpubkey" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->amazonpubkey;?>
" />
		<div class="hint">The amazon public api key. Used for music lookups.</div>
	</td>
</tr>

<tr>
	<td><label for="amazonprivkey">Amazon Private API Key</label>:</td>
	<td>
		<input id="amazonprivkey" class="long" name="amazonprivkey" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->amazonprivkey;?>
" />
		<div class="hint">The amazon private api key. Used for music lookups.</div>
	</td>
</tr>

</table>
</fieldset>



<fieldset>
<legend>Usenet Settings</legend>
<table class="input">

<tr>
	<td><label for="nzbpath">Nzb File Path</label>:</td>
	<td>
		<input id="nzbpath" class="long" name="nzbpath" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->nzbpath;?>
" />
		<div class="hint">The directory where nzb files will be stored.</div>
	</td>
</tr>

<tr>
	<td><label for="rawretentiondays">Raw Search Retention</label>:</td>
	<td>
		<input class="tiny" id="rawretentiondays" name="rawretentiondays" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->rawretentiondays;?>
" />
		<div class="hint">The number of days binary and part data will be retained for use in raw search, regardless of other processes.</div>
	</td>
</tr>

<tr>
	<td><label for="attemptgroupbindays">Days to Attempt To Group</label>:</td>
	<td>
		<input class="tiny" id="attemptgroupbindays" name="attemptgroupbindays" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->attemptgroupbindays;?>
" />
		<div class="hint">The number of days an attempt will be made to group binaries into releases after being added.</div>
	</td>
</tr>

<tr>
	<td><label for="releaseretentiondays">Release Retention</label>:</td>
	<td>
		<input class="tiny" id="releasedays" name="releaseretentiondays" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->releaseretentiondays;?>
" />
		<div class="hint">The number of days releases will be retained for use throughout site. Set to 0 to disable.</div>
	</td>
</tr>

<tr>
	<td><label for="minfilestoformrelease">Minimum Files to Make a Release</label>:</td>
	<td>
		<input class="tiny" id="minfilestoformrelease" name="minfilestoformrelease" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->minfilestoformrelease;?>
" />
		<div class="hint">The minimum number of files to make a release. i.e. if set to two, then releases which only contain one file will not be created.</div>
	</td>
</tr>

<tr>
	<td><label for="checkpasswordedrar">Check For Passworded Releases</label>:</td>
	<td>
		<?php echo smarty_function_html_radios(array('id'=>"checkpasswordedrar",'name'=>'checkpasswordedrar','values'=>$_smarty_tpl->getVariable('yesno_ids')->value,'output'=>$_smarty_tpl->getVariable('yesno_names')->value,'selected'=>$_smarty_tpl->getVariable('fsite')->value->checkpasswordedrar,'separator'=>'<br />'),$_smarty_tpl);?>

		<div class="hint">Whether to attempt to peek into every release, to see if rar files are password protected.<br/></div>
	</td>
</tr>

<tr>
	<td><label for="showpasswordedrelease">Show Passworded Releases</label>:</td>
	<td>
		<?php echo smarty_function_html_options(array('id'=>"showpasswordedrelease",'name'=>'showpasswordedrelease','values'=>$_smarty_tpl->getVariable('passworded_ids')->value,'output'=>$_smarty_tpl->getVariable('passworded_names')->value,'selected'=>$_smarty_tpl->getVariable('fsite')->value->showpasswordedrelease),$_smarty_tpl);?>

		<div class="hint">Whether to show passworded or potentially passworded releases in browse, search, api and rss feeds. Potentially passworded means releases which contain .cab or .ace files which are typically password protected.</div>
	</td>
</tr>

<tr>
	<td><label for="reqidurl">Allfilled Request Id Lookup URL</label>:</td>
	<td>
		<input class="long" id="reqidurl" name="reqidurl" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->reqidurl;?>
" />
		<div class="hint">The url to use to translate allfilled style reqid usenet posts into real release titles. Leave blank to not perform lookup.</div>
	</td>
</tr>

<tr>
	<td><label for="reqidurl">Latest Regex Lookup URL</label>:</td>
	<td>
		<input class="long" id="latestregexurl" name="latestregexurl" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->latestregexurl;?>
" />
		<div class="hint">The url to use to get the latest default regexs. Leave blank to not perform lookup.</div>
	</td>
</tr>

<tr>
	<td><label for="lookupnfo">Lookup Nfo</label>:</td>
	<td>
		<?php echo smarty_function_html_radios(array('id'=>"lookupnfo",'name'=>'lookupnfo','values'=>$_smarty_tpl->getVariable('yesno_ids')->value,'output'=>$_smarty_tpl->getVariable('yesno_names')->value,'selected'=>$_smarty_tpl->getVariable('fsite')->value->lookupnfo,'separator'=>'<br />'),$_smarty_tpl);?>

		<div class="hint">Whether to attempt to retrieve the an nfo file from usenet when processing binaries.<br/><strong>NOTE: disabling nfo lookups will disable movie lookups.</strong></div>
	</td>
</tr>


<tr>
	<td><label for="lookuptvrage">Lookup TV Rage</label>:</td>
	<td>
		<?php echo smarty_function_html_radios(array('id'=>"lookuptvrage",'name'=>'lookuptvrage','values'=>$_smarty_tpl->getVariable('yesno_ids')->value,'output'=>$_smarty_tpl->getVariable('yesno_names')->value,'selected'=>$_smarty_tpl->getVariable('fsite')->value->lookuptvrage,'separator'=>'<br />'),$_smarty_tpl);?>

		<div class="hint">Whether to attempt to lookup tv rage ids on the web when processing binaries.</div>
	</td>
</tr>

<tr>
	<td><label for="lookupimdb">Lookup Movies</label>:</td>
	<td>
		<?php echo smarty_function_html_radios(array('id'=>"lookupimdb",'name'=>'lookupimdb','values'=>$_smarty_tpl->getVariable('yesno_ids')->value,'output'=>$_smarty_tpl->getVariable('yesno_names')->value,'selected'=>$_smarty_tpl->getVariable('fsite')->value->lookupimdb,'separator'=>'<br />'),$_smarty_tpl);?>

		<div class="hint">Whether to attempt to lookup film information from IMDB or TheMovieDB when processing binaries.</div>
	</td>
</tr>

<tr>
	<td><label for="lookupmusic">Lookup Music</label>:</td>
	<td>
		<?php echo smarty_function_html_radios(array('id'=>"lookupmusic",'name'=>'lookupmusic','values'=>$_smarty_tpl->getVariable('yesno_ids')->value,'output'=>$_smarty_tpl->getVariable('yesno_names')->value,'selected'=>$_smarty_tpl->getVariable('fsite')->value->lookupmusic,'separator'=>'<br />'),$_smarty_tpl);?>

		<div class="hint">Whether to attempt to lookup music information from Amazon when processing binaries.</div>
	</td>
</tr>

<tr>
	<td><label for="lookupgames">Lookup Games</label>:</td>
	<td>
		<?php echo smarty_function_html_radios(array('id'=>"lookupgames",'name'=>'lookupgames','values'=>$_smarty_tpl->getVariable('yesno_ids')->value,'output'=>$_smarty_tpl->getVariable('yesno_names')->value,'selected'=>$_smarty_tpl->getVariable('fsite')->value->lookupgames,'separator'=>'<br />'),$_smarty_tpl);?>

		<div class="hint">Whether to attempt to lookup game information from Amazon when processing binaries.</div>
	</td>
</tr>

<tr>
	<td><label for="compressedheaders">Use Compressed Headers</label>:</td>
	<td>
		<?php echo smarty_function_html_radios(array('class'=>($_smarty_tpl->getVariable('compress_headers_warning')->value),'id'=>"compressedheaders",'name'=>'compressedheaders','values'=>$_smarty_tpl->getVariable('yesno_ids')->value,'output'=>$_smarty_tpl->getVariable('yesno_names')->value,'selected'=>$_smarty_tpl->getVariable('fsite')->value->compressedheaders,'separator'=>'<br />'),$_smarty_tpl);?>

		<div class="hint">Some servers allow headers to be sent over in a compressed format.  If enabled this will use much less bandwidth, but processing times may increase.</div>
	</td>
</tr>


<tr>
	<td><label for="maxmssgs">Max Messages</label>:</td>
	<td>
		<input class="small" id="maxmssgs" name="maxmssgs" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->maxmssgs;?>
" />
		<div class="hint">The maximum number of messages to fetch at a time from the server.</div>
	</td>
</tr>
<tr>
	<td><label for="newgroupscanmethod">Where to start new groups</label>:</td>
	<td>
		<?php echo smarty_function_html_radios(array('id'=>"newgroupscanmethod",'name'=>'newgroupscanmethod','values'=>$_smarty_tpl->getVariable('yesno_ids')->value,'output'=>$_smarty_tpl->getVariable('newgroupscan_names')->value,'selected'=>$_smarty_tpl->getVariable('fsite')->value->newgroupscanmethod,'separator'=>'<br />'),$_smarty_tpl);?>

		<input class="tiny" id="newgroupdaystoscan" name="newgroupdaystoscan" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->newgroupdaystoscan;?>
" /> Days  or 
		<input class="small" id="newgroupmsgstoscan" name="newgroupmsgstoscan" type="text" value="<?php echo $_smarty_tpl->getVariable('fsite')->value->newgroupmsgstoscan;?>
" /> Posts<br />
		<div class="hint">Scan back X (posts/days) for each new group?  Can backfill to scan further.</div>
	</td>
</tr>
</table>
</fieldset>

<fieldset>
<legend>User Settings</legend>
<table class="input">

<tr>
	<td style="width:160px;"><label for="registerstatus">Registration Status</label>:</td>
	<td>
		<?php echo smarty_function_html_radios(array('id'=>"registerstatus",'name'=>'registerstatus','values'=>$_smarty_tpl->getVariable('registerstatus_ids')->value,'output'=>$_smarty_tpl->getVariable('registerstatus_names')->value,'selected'=>$_smarty_tpl->getVariable('fsite')->value->registerstatus,'separator'=>'<br />'),$_smarty_tpl);?>

		<div class="hint">The status of registrations to the site.</div>
	</td>
</tr>

<tr>
	<td><label for="storeuserips">Store User Ip</label>:</td>
	<td>
		<?php echo smarty_function_html_radios(array('id'=>"storeuserips",'name'=>'storeuserips','values'=>$_smarty_tpl->getVariable('yesno_ids')->value,'output'=>$_smarty_tpl->getVariable('yesno_names')->value,'selected'=>$_smarty_tpl->getVariable('fsite')->value->storeuserips,'separator'=>'<br />'),$_smarty_tpl);?>

		<div class="hint">Whether to store the users ip address when they signup or login.</div>
	</td>
</tr>

</table>
</fieldset>

<input type="submit" value="Save Site Settings" />

</form>
