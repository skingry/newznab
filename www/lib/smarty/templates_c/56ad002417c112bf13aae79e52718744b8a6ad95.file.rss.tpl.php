<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:14:21
         compiled from "/data/newznab/www/views/templates/frontend/rss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139430046350fb44ede73df7-31521631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ad002417c112bf13aae79e52718744b8a6ad95' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/rss.tpl',
      1 => 1296377752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139430046350fb44ede73df7-31521631',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_phpdate_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.phpdate_format.php';
if (!is_callable('smarty_modifier_fsize_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.fsize_format.php';
if (!is_callable('smarty_modifier_date_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_parray')) include '/data/newznab/www/lib/smarty/plugins/modifier.parray.php';
?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:newznab="http://www.newznab.com/DTD/2010/feeds/attributes/" encoding="utf-8">
<channel>
<atom:link href="<?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
rss" rel="self" type="application/rss+xml" />
<title><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('site')->value->title);?>
</title>
<description><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('site')->value->title);?>
 Nzb Feed</description>
<link><?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
</link>
<language>en-gb</language>
<webMaster><?php echo $_smarty_tpl->getVariable('site')->value->email;?>
 (<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('site')->value->title);?>
)</webMaster>
<category><?php echo $_smarty_tpl->getVariable('site')->value->meta_keywords;?>
</category>
<image>
	<url><?php if ($_smarty_tpl->getVariable('site')->value->style!=''&&$_smarty_tpl->getVariable('site')->value->style!="/"){?><?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
theme/<?php echo $_smarty_tpl->getVariable('site')->value->style;?>
/images/banner.jpg<?php }else{ ?><?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
images/banner.jpg<?php }?></url>
	<title><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('site')->value->title);?>
</title>
	<link><?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
</link>
	<description>Visit <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('site')->value->title);?>
 - <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('site')->value->strapline);?>
</description>
</image>

<?php  $_smarty_tpl->tpl_vars['release'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('releases')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['release']->key => $_smarty_tpl->tpl_vars['release']->value){
?>
<item>
	<title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['release']->value['searchname'],'html');?>
</title>
	<guid isPermaLink="true"><?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
details/<?php echo $_smarty_tpl->tpl_vars['release']->value['guid'];?>
</guid>
	<link><?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
<?php if ($_smarty_tpl->getVariable('dl')->value=="1"){?>getnzb<?php }else{ ?>details<?php }?>/<?php echo $_smarty_tpl->tpl_vars['release']->value['guid'];?>
<?php if ($_smarty_tpl->getVariable('dl')->value=="1"){?>.nzb&amp;i=<?php echo $_smarty_tpl->getVariable('uid')->value;?>
&amp;r=<?php echo $_smarty_tpl->getVariable('rsstoken')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('del')->value=="1"){?>&amp;del=1<?php }?></link>
	<comments><?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
details/<?php echo $_smarty_tpl->tpl_vars['release']->value['guid'];?>
#comments</comments> 	
	<pubDate><?php echo smarty_modifier_phpdate_format($_smarty_tpl->tpl_vars['release']->value['adddate'],"DATE_RSS");?>
</pubDate> 
	<category><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['release']->value['category_name'],'html');?>
</category> 	
	<description><?php if ($_smarty_tpl->getVariable('api')->value=="1"){?><?php echo $_smarty_tpl->tpl_vars['release']->value['searchname'];?>
<?php }else{ ?>
<![CDATA[<div><?php if ($_smarty_tpl->tpl_vars['release']->value['cover']==1){?><img style="margin-left:10px;margin-bottom:10px;float:right;" src="<?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
covers/movies/<?php echo $_smarty_tpl->tpl_vars['release']->value['imdbID'];?>
-cover.jpg" width="120" border="0" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['release']->value['searchname'],"htmlall");?>
" /><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['mu_cover']==1){?><img style="margin-left:10px;margin-bottom:10px;float:right;" src="<?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
covers/music/<?php echo $_smarty_tpl->tpl_vars['release']->value['musicinfoID'];?>
.jpg" width="120" border="0" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['release']->value['searchname'],"htmlall");?>
" /><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['co_cover']==1){?><img style="margin-left:10px;margin-bottom:10px;float:right;" src="<?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
covers/console/<?php echo $_smarty_tpl->tpl_vars['release']->value['consoleinfoID'];?>
.jpg" width="120" border="0" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['release']->value['searchname'],"htmlall");?>
" /><?php }?><ul><li>ID: <a href="<?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
details/<?php echo $_smarty_tpl->tpl_vars['release']->value['guid'];?>
"><?php echo $_smarty_tpl->tpl_vars['release']->value['guid'];?>
</a> (Size: <?php echo smarty_modifier_fsize_format($_smarty_tpl->tpl_vars['release']->value['size'],"MB");?>
) </li><li>Name: <?php echo $_smarty_tpl->tpl_vars['release']->value['searchname'];?>
</li><li>Attributes: Category - <?php echo $_smarty_tpl->tpl_vars['release']->value['category_name'];?>
</li><li>Groups: <?php echo $_smarty_tpl->tpl_vars['release']->value['group_name'];?>
</li><li>Poster: <?php echo $_smarty_tpl->tpl_vars['release']->value['fromname'];?>
</li><li>PostDate: <?php echo smarty_modifier_phpdate_format($_smarty_tpl->tpl_vars['release']->value['postdate'],"DATE_RSS");?>
</li><li>Password: <?php if ($_smarty_tpl->tpl_vars['release']->value['passwordstatus']==0){?>None<?php }elseif($_smarty_tpl->tpl_vars['release']->value['passwordstatus']==1){?>Passworded Rar Archive<?php }elseif($_smarty_tpl->tpl_vars['release']->value['passwordstatus']==2){?>Contains Cab/Ace Archive<?php }else{ ?>Unknown<?php }?></li><?php if ($_smarty_tpl->tpl_vars['release']->value['parentCategoryID']==2000){?><?php if ($_smarty_tpl->tpl_vars['release']->value['imdbID']!=''){?><li>Imdb Info:<ul><li>IMDB Link: <a href="http://www.imdb.com/title/tt<?php echo $_smarty_tpl->tpl_vars['release']->value['imdbID'];?>
/"><?php echo $_smarty_tpl->tpl_vars['release']->value['searchname'];?>
</a></li><?php if ($_smarty_tpl->tpl_vars['release']->value['rating']!=''){?><li>Rating: <?php echo $_smarty_tpl->tpl_vars['release']->value['rating'];?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['plot']!=''){?><li>Plot: <?php echo $_smarty_tpl->tpl_vars['release']->value['plot'];?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['year']!=''){?><li>Year: <?php echo $_smarty_tpl->tpl_vars['release']->value['year'];?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['genre']!=''){?><li>Genre: <?php echo $_smarty_tpl->tpl_vars['release']->value['genre'];?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['director']!=''){?><li>Director: <?php echo $_smarty_tpl->tpl_vars['release']->value['director'];?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['actors']!=''){?><li>Actors: <?php echo $_smarty_tpl->tpl_vars['release']->value['actors'];?>
</li><?php }?></ul></li><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['parentCategoryID']==3000){?><?php if ($_smarty_tpl->tpl_vars['release']->value['musicinfoID']>0){?><li>Music Info:<ul><?php if ($_smarty_tpl->tpl_vars['release']->value['mu_url']!=''){?><li>Amazon: <a href="<?php echo $_smarty_tpl->tpl_vars['release']->value['mu_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['release']->value['mu_title'];?>
</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['mu_artist']!=''){?><li>Artist: <?php echo $_smarty_tpl->tpl_vars['release']->value['mu_artist'];?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['mu_genre']!=''){?><li>Genre: <?php echo $_smarty_tpl->tpl_vars['release']->value['mu_genre'];?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['mu_publisher']!=''){?><li>Publisher: <?php echo $_smarty_tpl->tpl_vars['release']->value['mu_publisher'];?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['year']!=''){?><li>Released: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['release']->value['mu_releasedate']);?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['mu_review']!=''){?><li>Review: <?php echo $_smarty_tpl->tpl_vars['release']->value['mu_review'];?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['mu_tracks']!=''){?><li>Track Listing:<ol><?php $_smarty_tpl->tpl_vars["tracksplits"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['release']->value['mu_tracks']), null, null);?><?php  $_smarty_tpl->tpl_vars['tracksplit'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tracksplits')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tracksplit']->key => $_smarty_tpl->tpl_vars['tracksplit']->value){
?><li><?php echo trim($_smarty_tpl->tpl_vars['tracksplit']->value);?>
</li><?php }} ?></ol></li><?php }?></ul></li><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['parentCategoryID']==1000){?><?php if ($_smarty_tpl->tpl_vars['release']->value['consoleinfoID']>0){?><li>Console Info:<ul><?php if ($_smarty_tpl->tpl_vars['release']->value['co_url']!=''){?><li>Amazon: <a href="<?php echo $_smarty_tpl->tpl_vars['release']->value['co_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['release']->value['co_title'];?>
</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['co_genre']!=''){?><li>Genre: <?php echo $_smarty_tpl->tpl_vars['release']->value['co_genre'];?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['co_publisher']!=''){?><li>Publisher: <?php echo $_smarty_tpl->tpl_vars['release']->value['co_publisher'];?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['year']!=''){?><li>Released: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['release']->value['co_releasedate']);?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['release']->value['co_review']!=''){?><li>Review: <?php echo $_smarty_tpl->tpl_vars['release']->value['co_review'];?>
</li><?php }?></ul></li><?php }?><?php }?></ul></div><div style="clear:both;">]]>
	<?php }?>
</description>
	<?php if ($_smarty_tpl->getVariable('dl')->value=="1"){?><enclosure url="<?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
getnzb/<?php echo $_smarty_tpl->tpl_vars['release']->value['guid'];?>
.nzb&amp;i=<?php echo $_smarty_tpl->getVariable('uid')->value;?>
&amp;r=<?php echo $_smarty_tpl->getVariable('rsstoken')->value;?>
<?php if ($_smarty_tpl->getVariable('del')->value=="1"){?>&amp;del=1<?php }?>" length="<?php echo $_smarty_tpl->tpl_vars['release']->value['size'];?>
" type="application/x-nzb" /><?php }?>


	<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
 $_from = smarty_modifier_parray($_smarty_tpl->tpl_vars['release']->value['category_ids'],","); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
?>
<newznab:attr name="category" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
" />
	<?php }} ?><newznab:attr name="size" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['size'];?>
" />
	<newznab:attr name="files" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['totalpart'];?>
" />
	<newznab:attr name="poster" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['release']->value['fromname'],'html');?>
" />
<?php if ($_smarty_tpl->tpl_vars['release']->value['season']!=''){?>	<newznab:attr name="season" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['season'];?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['release']->value['episode']!=''){?>	<newznab:attr name="episode" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['episode'];?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['release']->value['rageID']!="-1"&&$_smarty_tpl->tpl_vars['release']->value['rageID']!="-2"){?>	<newznab:attr name="rageid" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['rageID'];?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['release']->value['tvtitle']!=''){?>	<newznab:attr name="tvtitle" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['release']->value['tvtitle'],'html');?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['release']->value['tvairdate']!=''){?>	<newznab:attr name="tvairdate" value="<?php echo smarty_modifier_phpdate_format($_smarty_tpl->tpl_vars['release']->value['tvairdate'],"DATE_RSS");?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['release']->value['imdbID']!=''){?>	<newznab:attr name="imdb" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['imdbID'];?>
" />
<?php }?>
	<newznab:attr name="grabs" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['grabs'];?>
" />
	<newznab:attr name="comments" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['comments'];?>
" />
	<newznab:attr name="password" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['passwordstatus'];?>
" />
	<newznab:attr name="usenetdate" value="<?php echo smarty_modifier_phpdate_format($_smarty_tpl->tpl_vars['release']->value['postdate'],"DATE_RSS");?>
" />	
	<newznab:attr name="group" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['release']->value['group_name'],'html');?>
" />
		
</item>
<?php }} ?>

</channel>
</rss>