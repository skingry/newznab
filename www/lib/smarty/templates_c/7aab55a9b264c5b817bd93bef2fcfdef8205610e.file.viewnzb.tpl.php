<?php /* Smarty version Smarty-3.0.6, created on 2013-01-28 21:32:46
         compiled from "/data/newznab/www/views/templates/frontend/viewnzb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76070928151075efec07213-64060373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aab55a9b264c5b817bd93bef2fcfdef8205610e' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/viewnzb.tpl',
      1 => 1297396978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76070928151075efec07213-64060373',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_replace')) include '/data/newznab/www/lib/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_nl2br')) include '/data/newznab/www/lib/smarty/plugins/modifier.nl2br.php';
if (!is_callable('smarty_modifier_magicurl')) include '/data/newznab/www/lib/smarty/plugins/modifier.magicurl.php';
if (!is_callable('smarty_modifier_truncate')) include '/data/newznab/www/lib/smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_fsize_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.fsize_format.php';
if (!is_callable('smarty_modifier_daysago')) include '/data/newznab/www/lib/smarty/plugins/modifier.daysago.php';
if (!is_callable('smarty_function_cycle')) include '/data/newznab/www/lib/smarty/plugins/function.cycle.php';
?>
<h1><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('release')->value['searchname'],"htmlall");?>
</h1>

<?php if ($_smarty_tpl->getVariable('rage')->value&&$_smarty_tpl->getVariable('release')->value['rageID']>0&&$_smarty_tpl->getVariable('rage')->value['imgdata']!=''){?><img class="shadow" src="<?php echo @WWW_TOP;?>
/getimage?type=tvrage&amp;id=<?php echo $_smarty_tpl->getVariable('rage')->value['ID'];?>
" width="180" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('rage')->value['releasetitle'],"htmlall");?>
" style="float:right;" /><?php }?>
<?php if ($_smarty_tpl->getVariable('movie')->value&&$_smarty_tpl->getVariable('release')->value['rageID']<0&&$_smarty_tpl->getVariable('movie')->value['cover']==1){?><img class="shadow" src="<?php echo @WWW_TOP;?>
/covers/movies/<?php echo $_smarty_tpl->getVariable('movie')->value['imdbID'];?>
-cover.jpg" width="180" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('movie')->value['title'],"htmlall");?>
" style="float:right;" /><?php }?>
<?php if ($_smarty_tpl->getVariable('con')->value&&$_smarty_tpl->getVariable('con')->value['cover']==1){?><img class="shadow" src="<?php echo @WWW_TOP;?>
/covers/console/<?php echo $_smarty_tpl->getVariable('con')->value['ID'];?>
.jpg" width="160" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('con')->value['title'],"htmlall");?>
" style="float:right;" /><?php }?>
<?php if ($_smarty_tpl->getVariable('music')->value&&$_smarty_tpl->getVariable('music')->value['cover']==1){?><img class="shadow" src="<?php echo @WWW_TOP;?>
/covers/music/<?php echo $_smarty_tpl->getVariable('music')->value['ID'];?>
.jpg" width="160" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('music')->value['title'],"htmlall");?>
" style="float:right;" /><?php }?>

<table class="data" id="detailstable" >
	<?php if ($_smarty_tpl->getVariable('isadmin')->value){?>
	<tr><th>Admin:</th><td><a class="rndbtn" href="<?php echo @WWW_TOP;?>
/admin/release-edit.php?id=<?php echo $_smarty_tpl->getVariable('release')->value['ID'];?>
&amp;from=<?php echo $_SERVER['REQUEST_URI'];?>
" title="Edit Release">Edit</a> <a class="rndbtn confirm_action" href="<?php echo @WWW_TOP;?>
/admin/release-delete.php?id=<?php echo $_smarty_tpl->getVariable('release')->value['ID'];?>
&amp;from=<?php echo $_SERVER['HTTP_REFERER'];?>
" title="Delete Release">Delete</a> <a class="rndbtn confirm_action" href="<?php echo @WWW_TOP;?>
/admin/release-rebuild.php?id=<?php echo $_smarty_tpl->getVariable('release')->value['ID'];?>
&amp;from=<?php echo $_SERVER['HTTP_REFERER'];?>
" title="Rebuild Release - Delete and reset for reprocessing if binaries still exist.">Rebuild</a></td></tr>
	<?php }?>
	<tr><th>Name:</th><td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('release')->value['name'],"htmlall");?>
</td></tr>
	
	<?php if ($_smarty_tpl->getVariable('rage')->value&&$_smarty_tpl->getVariable('release')->value['rageID']>0){?>
		<tr><th>Tv Info:</th><td>
			<strong><?php if ($_smarty_tpl->getVariable('release')->value['tvtitle']!=''){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('release')->value['tvtitle'],"htmlall");?>
 - <?php }?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getVariable('release')->value['seriesfull'],"S","Season "),"E"," Episode ");?>
</strong><br />
			<?php if ($_smarty_tpl->getVariable('rage')->value['description']!=''){?><span class="descinitial"><?php echo smarty_modifier_truncate(smarty_modifier_magicurl(smarty_modifier_nl2br(smarty_modifier_escape($_smarty_tpl->getVariable('rage')->value['description'],"htmlall"))),"350"," <a class=\"descmore\" href=\"#\">more...</a>");?>
</span><?php if (strlen($_smarty_tpl->getVariable('rage')->value['description'])>350){?><span class="descfull"><?php echo smarty_modifier_magicurl(smarty_modifier_nl2br(smarty_modifier_escape($_smarty_tpl->getVariable('rage')->value['description'],"htmlall")));?>
</span><?php }?><br /><br /><?php }?>
			<?php if ($_smarty_tpl->getVariable('rage')->value['genre']!=''){?><strong>Genre:</strong> <?php echo smarty_modifier_replace(smarty_modifier_escape($_smarty_tpl->getVariable('rage')->value['genre'],"htmlall"),"|",", ");?>
<br /><?php }?>
			<?php if ($_smarty_tpl->getVariable('release')->value['tvairdate']!=''){?><strong>Aired:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('release')->value['tvairdate']);?>
<br/><?php }?>
			<?php if ($_smarty_tpl->getVariable('rage')->value['country']!=''){?><strong>Country:</strong> <?php echo $_smarty_tpl->getVariable('rage')->value['country'];?>
<?php }?>
			<div style="margin-top:10px;">
				<a class="rndbtn" title="View all episodes from this series" href="<?php echo @WWW_TOP;?>
/series/<?php echo $_smarty_tpl->getVariable('release')->value['rageID'];?>
">All Episodes</a> 
				<a class="rndbtn" target="_blank" href="<?php echo $_smarty_tpl->getVariable('site')->value->dereferrer_link;?>
http://www.tvrage.com/shows/id-<?php echo $_smarty_tpl->getVariable('release')->value['rageID'];?>
" title="View at TV Rage">TV Rage</a>
				<a class="rndbtn" href="<?php echo @WWW_TOP;?>
/rss?rage=<?php echo $_smarty_tpl->getVariable('release')->value['rageID'];?>
&dl=1&i=<?php echo $_smarty_tpl->getVariable('userdata')->value['ID'];?>
&r=<?php echo $_smarty_tpl->getVariable('userdata')->value['rsstoken'];?>
" title="Rss feed for this series">Series Rss Feed</a>
			</div>
			</td>
		</tr>
	<?php }?>
	
	<?php if ($_smarty_tpl->getVariable('movie')->value&&$_smarty_tpl->getVariable('release')->value['rageID']<0){?>
	<tr><th>Movie Info:</th><td>
		<strong><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('movie')->value['title'],"htmlall");?>
 (<?php echo $_smarty_tpl->getVariable('movie')->value['year'];?>
) <?php if ($_smarty_tpl->getVariable('movie')->value['rating']==''){?>N/A<?php }?><?php echo $_smarty_tpl->getVariable('movie')->value['rating'];?>
/10</strong>
		<?php if ($_smarty_tpl->getVariable('movie')->value['tagline']!=''){?><br /><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('movie')->value['tagline'],"htmlall");?>
<?php }?>
		<?php if ($_smarty_tpl->getVariable('movie')->value['plot']!=''){?><?php if ($_smarty_tpl->getVariable('movie')->value['tagline']!=''){?> - <?php }else{ ?><br /><?php }?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('movie')->value['plot'],"htmlall");?>
<?php }?>
		<br /><br /><?php if ($_smarty_tpl->getVariable('movie')->value['director']!=''){?> <strong>Director:</strong> <?php echo $_smarty_tpl->getVariable('movie')->value['director'];?>
<br /><?php }?>
		<strong>Genre:</strong> <?php echo $_smarty_tpl->getVariable('movie')->value['genre'];?>

		<br /><strong>Starring:</strong> <?php echo $_smarty_tpl->getVariable('movie')->value['actors'];?>

		<div style="margin-top:10px;">
			<a class="rndbtn" target="_blank" href="<?php echo $_smarty_tpl->getVariable('site')->value->dereferrer_link;?>
http://www.imdb.com/title/tt<?php echo $_smarty_tpl->getVariable('release')->value['imdbID'];?>
/" title="View at IMDB">IMDB</a>
			<?php if ($_smarty_tpl->getVariable('movie')->value['tmdbID']!=''){?><a class="rndbtn" target="_blank" href="<?php echo $_smarty_tpl->getVariable('site')->value->dereferrer_link;?>
http://www.themoviedb.org/movie/<?php echo $_smarty_tpl->getVariable('movie')->value['tmdbID'];?>
" title="View at TMDb">TMDb</a><?php }?>
		</div>
	</td></tr>
	<?php }?>
	
	<?php if ($_smarty_tpl->getVariable('con')->value){?>
	<tr><th>Console Info:</th><td>
		<strong><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('con')->value['title'],"htmlall");?>
 (<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('con')->value['releasedate'],"%Y");?>
)</strong><br />
		<?php if ($_smarty_tpl->getVariable('con')->value['review']!=''){?><span class="descinitial"><?php echo smarty_modifier_truncate(smarty_modifier_magicurl(smarty_modifier_nl2br(smarty_modifier_escape($_smarty_tpl->getVariable('con')->value['review'],"htmlall"))),"350"," <a class=\"descmore\" href=\"#\">more...</a>");?>
</span><?php if (strlen($_smarty_tpl->getVariable('con')->value['review'])>350){?><span class="descfull"><?php echo smarty_modifier_magicurl(smarty_modifier_nl2br(smarty_modifier_escape($_smarty_tpl->getVariable('con')->value['review'],"htmlall")));?>
</span><?php }?><br /><br /><?php }?>
		<?php if ($_smarty_tpl->getVariable('con')->value['esrb']!=''){?><strong>ESRB:</strong> <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('con')->value['esrb'],"htmlall");?>
<br /><?php }?>
		<?php if ($_smarty_tpl->getVariable('con')->value['genres']!=''){?><strong>Genre:</strong> <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('con')->value['genres'],"htmlall");?>
<br /><?php }?>
		<?php if ($_smarty_tpl->getVariable('con')->value['publisher']!=''){?><strong>Publisher:</strong> <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('con')->value['publisher'],"htmlall");?>
<br /><?php }?>
		<?php if ($_smarty_tpl->getVariable('con')->value['platform']!=''){?><strong>Platform:</strong> <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('con')->value['platform'],"htmlall");?>
<br /><?php }?>
		<?php if ($_smarty_tpl->getVariable('con')->value['releasedate']!=''){?><strong>Released:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('con')->value['releasedate']);?>
<?php }?>
		<div style="margin-top:10px;">
			<a class="rndbtn" target="_blank" href="<?php echo $_smarty_tpl->getVariable('site')->value->dereferrer_link;?>
<?php echo $_smarty_tpl->getVariable('con')->value['url'];?>
/" title="View game at Amazon">Amazon</a>
		</div>
	</td></tr>
	<?php }?>
	
	<?php if ($_smarty_tpl->getVariable('music')->value){?>
	<tr><th>Music Info:</th><td>
		<strong><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('music')->value['title'],"htmlall");?>
 <?php if ($_smarty_tpl->getVariable('music')->value['year']!=''){?>(<?php echo $_smarty_tpl->getVariable('music')->value['year'];?>
)<?php }?></strong><br />
		<?php if ($_smarty_tpl->getVariable('music')->value['review']!=''){?><span class="descinitial"><?php echo smarty_modifier_truncate(smarty_modifier_magicurl(smarty_modifier_nl2br($_smarty_tpl->getVariable('music')->value['review'])),"350"," <a class=\"descmore\" href=\"#\">more...</a>");?>
</span><?php if (strlen($_smarty_tpl->getVariable('music')->value['review'])>350){?><span class="descfull"><?php echo smarty_modifier_magicurl(smarty_modifier_nl2br(smarty_modifier_escape($_smarty_tpl->getVariable('music')->value['review'],"htmlall")));?>
</span><?php }?><br /><br /><?php }?>
		<?php if ($_smarty_tpl->getVariable('music')->value['genres']!=''){?><strong>Genre:</strong> <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('music')->value['genres'],"htmlall");?>
<br /><?php }?>
		<?php if ($_smarty_tpl->getVariable('music')->value['publisher']!=''){?><strong>Publisher:</strong> <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('music')->value['publisher'],"htmlall");?>
<br /><?php }?>
		<?php if ($_smarty_tpl->getVariable('music')->value['releasedate']!=''){?><strong>Released:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('music')->value['releasedate']);?>
<br /><?php }?>
		<div style="margin-top:10px;">
			<a class="rndbtn" target="_blank" href="<?php echo $_smarty_tpl->getVariable('site')->value->dereferrer_link;?>
<?php echo $_smarty_tpl->getVariable('music')->value['url'];?>
/" title="View record at Amazon">Amazon</a>
		</div>
	</td></tr>
	<?php if ($_smarty_tpl->getVariable('music')->value['tracks']!=''){?>
	<tr><th>Track Listing:</th><td>
		<ol class="tracklist">
			<?php $_smarty_tpl->tpl_vars["tracksplits"] = new Smarty_variable(explode("|",$_smarty_tpl->getVariable('music')->value['tracks']), null, null);?>
			<?php  $_smarty_tpl->tpl_vars['tracksplit'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tracksplits')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tracksplit']->key => $_smarty_tpl->tpl_vars['tracksplit']->value){
?>
			<li><?php echo smarty_modifier_escape(trim($_smarty_tpl->tpl_vars['tracksplit']->value),"htmlall");?>
</li>
			<?php }} ?>		
		</ol>
	</td></tr>
	<?php }?>
	<?php }?>
	
	<tr><th>Group:</th><td title="<?php echo $_smarty_tpl->getVariable('release')->value['group_name'];?>
"><a title="Browse <?php echo $_smarty_tpl->getVariable('release')->value['group_name'];?>
" href="<?php echo @WWW_TOP;?>
/browse?g=<?php echo $_smarty_tpl->getVariable('release')->value['group_name'];?>
"><?php echo smarty_modifier_replace($_smarty_tpl->getVariable('release')->value['group_name'],"alt.binaries","a.b");?>
</a></td></tr>
	<tr><th>Category:</th><td><a title="Browse by <?php echo $_smarty_tpl->getVariable('release')->value['category_name'];?>
" href="<?php echo @WWW_TOP;?>
/browse?t=<?php echo $_smarty_tpl->getVariable('release')->value['categoryID'];?>
"><?php echo $_smarty_tpl->getVariable('release')->value['category_name'];?>
</a></td></tr>
	<?php if (count($_smarty_tpl->getVariable('nfo')->value['ID'])>0){?>
	<tr><th>Nfo:</th><td><a href="<?php echo @WWW_TOP;?>
/nfo/<?php echo $_smarty_tpl->getVariable('release')->value['guid'];?>
" title="View Nfo">View Nfo</a></td></tr>
	<?php }?>
	<tr><th>Size:</th><td><?php echo smarty_modifier_fsize_format($_smarty_tpl->getVariable('release')->value['size'],"MB");?>
<?php if ($_smarty_tpl->getVariable('release')->value['completion']>0){?>&nbsp;(<?php if ($_smarty_tpl->getVariable('release')->value['completion']<100){?><span class="warning"><?php echo $_smarty_tpl->getVariable('release')->value['completion'];?>
%</span><?php }else{ ?><?php echo $_smarty_tpl->getVariable('release')->value['completion'];?>
%<?php }?>)<?php }?></td></tr>
	<tr><th>Grabs:</th><td><?php echo $_smarty_tpl->getVariable('release')->value['grabs'];?>
 time<?php if ($_smarty_tpl->getVariable('release')->value['grabs']==1){?><?php }else{ ?>s<?php }?></td></tr>
	<tr><th>Files:</th><td><a title="View file list" href="<?php echo @WWW_TOP;?>
/filelist/<?php echo $_smarty_tpl->getVariable('release')->value['guid'];?>
"><?php echo $_smarty_tpl->getVariable('release')->value['totalpart'];?>
 file<?php if ($_smarty_tpl->getVariable('release')->value['totalpart']==1){?><?php }else{ ?>s<?php }?></a></td></tr>

	<?php if ($_smarty_tpl->getVariable('site')->value->checkpasswordedrar==1){?>
	<tr><th>Password:</th>
		<td>
			<?php if ($_smarty_tpl->getVariable('release')->value['passwordstatus']==0){?>None<?php }elseif($_smarty_tpl->getVariable('release')->value['passwordstatus']==1){?>Passworded Rar Archive<?php }elseif($_smarty_tpl->getVariable('release')->value['passwordstatus']==2){?>Contains Cab/Ace Archive<?php }else{ ?>Unknown<?php }?>
		</td>
	</tr>
	<?php }?>
	<tr><th>Poster:</th><td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('release')->value['fromname'],"htmlall");?>
</td></tr>
	<tr><th>Posted:</th><td title="<?php echo $_smarty_tpl->getVariable('release')->value['postdate'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('release')->value['postdate']);?>
 (<?php echo smarty_modifier_daysago($_smarty_tpl->getVariable('release')->value['postdate']);?>
)</td></tr>
	<tr><th>Added:</th><td title="<?php echo $_smarty_tpl->getVariable('release')->value['adddate'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('release')->value['adddate']);?>
 (<?php echo smarty_modifier_daysago($_smarty_tpl->getVariable('release')->value['adddate']);?>
)</td></tr>
	<tr id="guid<?php echo $_smarty_tpl->getVariable('release')->value['guid'];?>
"><th>Download:</th><td>
		<div class="icon icon_nzb"><a title="Download Nzb" href="<?php echo @WWW_TOP;?>
/getnzb/<?php echo $_smarty_tpl->getVariable('release')->value['guid'];?>
/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('release')->value['searchname'],"htmlall");?>
">&nbsp;</a></div>
		<div class="icon icon_cart" title="Add to Cart"></div>
		<div class="icon icon_sab" title="Send to my Sabnzbd"></div>
	</td></tr>

	<?php if (count($_smarty_tpl->getVariable('similars')->value)>1){?>
	<tr>
		<th>Similar:</th>
		<td>
			<?php  $_smarty_tpl->tpl_vars['similar'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('similars')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['similar']->key => $_smarty_tpl->tpl_vars['similar']->value){
?>
				<a title="View similar Nzb details" href="<?php echo @WWW_TOP;?>
/details/<?php echo $_smarty_tpl->tpl_vars['similar']->value['guid'];?>
/<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['similar']->value['searchname'],"htmlall");?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['similar']->value['searchname'],"htmlall");?>
</a><br/>
			<?php }} ?>
			<br/>
			<a title="Search for similar Nzbs" href="<?php echo @WWW_TOP;?>
/search/<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('searchname')->value,"htmlall");?>
">Search for similar NZBs...</a><br/>
		</td>
	</tr>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('isadmin')->value){?>
	<tr><th>Release Info:</th>
		<td>
			Regex Id (<a href="<?php echo @WWW_TOP;?>
/admin/regex-list.php#<?php echo $_smarty_tpl->getVariable('release')->value['regexID'];?>
"><?php echo $_smarty_tpl->getVariable('release')->value['regexID'];?>
</a>) <br/> 
			<?php if ($_smarty_tpl->getVariable('release')->value['reqID']!=''){?>
				Request Id (<?php echo $_smarty_tpl->getVariable('release')->value['reqID'];?>
)
			<?php }?>
		</td></tr>
	<?php }?>
</table>

<div class="comments">
	<a id="comments"></a>
	<h2>Comments</h2>
	
	<?php if (count($_smarty_tpl->getVariable('comments')->value)>0){?>
	
		<table style="margin-bottom:20px;" class="data Sortable">
			<tr class="<?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
">
			<th width="80">User</th>
			<th>Comment</th>
			</tr>
		<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('comments')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
?>
			<tr>
				<td class="less" title="<?php echo $_smarty_tpl->tpl_vars['comment']->value['createddate'];?>
"><a title="View <?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
's profile" href="<?php echo @WWW_TOP;?>
/profile?name=<?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
</a><br/><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['createddate']);?>
</td>
				<td><?php echo smarty_modifier_nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['text'],"htmlall"));?>
</td>
			</tr>
		<?php }} ?>
		</table>
	
	<?php }?>
	
	<form action="" method="post">
		<label for="txtAddComment">Add Comment</label>:<br/>
		<textarea id="txtAddComment" name="txtAddComment" rows="6" cols="60"></textarea>
		<br/>
		<input type="submit" value="submit"/>
	</form>

</div>
