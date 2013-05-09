<?php /* Smarty version Smarty-3.0.6, created on 2013-01-20 00:52:48
         compiled from "/data/newznab/www/views/templates/frontend/apiresult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151316690850fbb0602c8e94-65740784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9051de038927a8ac909af8a2e626f1f6a2a063af' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/apiresult.tpl',
      1 => 1296014612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151316690850fbb0602c8e94-65740784',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/data/newznab/www/lib/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_phpdate_format')) include '/data/newznab/www/lib/smarty/plugins/modifier.phpdate_format.php';
if (!is_callable('smarty_modifier_parray')) include '/data/newznab/www/lib/smarty/plugins/modifier.parray.php';
?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:newznab="http://www.newznab.com/DTD/2010/feeds/attributes/" encoding="utf-8">
<channel>
<atom:link href="<?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
api" rel="self" type="application/rss+xml" />
<title><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('site')->value->title);?>
</title>
<description><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('site')->value->title);?>
 API Results</description>
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
<newznab:response offset="<?php echo $_smarty_tpl->getVariable('offset')->value;?>
" total="<?php if (count($_smarty_tpl->getVariable('releases')->value)>0){?><?php echo $_smarty_tpl->getVariable('releases')->value[0]['_totalrows'];?>
<?php }else{ ?>0<?php }?>" />
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
getnzb/<?php echo $_smarty_tpl->tpl_vars['release']->value['guid'];?>
.nzb&amp;i=<?php echo $_smarty_tpl->getVariable('uid')->value;?>
&amp;r=<?php echo $_smarty_tpl->getVariable('rsstoken')->value;?>
</link>
	<comments><?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
details/<?php echo $_smarty_tpl->tpl_vars['release']->value['guid'];?>
#comments</comments> 	
	<pubDate><?php echo smarty_modifier_phpdate_format($_smarty_tpl->tpl_vars['release']->value['adddate'],"DATE_RSS");?>
</pubDate> 
	<category><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['release']->value['category_name'],'html');?>
</category> 	
	<description><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['release']->value['searchname'],'html');?>
</description>
	<enclosure url="<?php echo $_smarty_tpl->getVariable('serverroot')->value;?>
getnzb/<?php echo $_smarty_tpl->tpl_vars['release']->value['guid'];?>
.nzb&amp;i=<?php echo $_smarty_tpl->getVariable('uid')->value;?>
&amp;r=<?php echo $_smarty_tpl->getVariable('rsstoken')->value;?>
" length="<?php echo $_smarty_tpl->tpl_vars['release']->value['size'];?>
" type="application/x-nzb" />

	<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
 $_from = smarty_modifier_parray($_smarty_tpl->tpl_vars['release']->value['category_ids'],","); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
?>
<newznab:attr name="category" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
" />
	<?php }} ?>
<newznab:attr name="size" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['size'];?>
" />
<?php if ($_smarty_tpl->getVariable('extended')->value=="1"){?>
	<newznab:attr name="files" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['totalpart'];?>
" />
	<newznab:attr name="poster" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['release']->value['fromname'],'html');?>
" />
	<?php if ($_smarty_tpl->tpl_vars['release']->value['season']!=''){?><newznab:attr name="season" value="<?php echo $_smarty_tpl->tpl_vars['release']->value['season'];?>
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
<?php }?>
</item>
<?php }} ?>

</channel>
</rss>
