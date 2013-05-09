<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 16:56:17
         compiled from "/data/newznab/www/views/templates/install/step6.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97492220950fb40b1714ca8-44298176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74936c5b4a9f8862d80d3ced74731d268ebb046b' => 
    array (
      0 => '/data/newznab/www/views/templates/install/step6.tpl',
      1 => 1296804580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97492220950fb40b1714ca8-44298176',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('page')->value->isSuccess()){?>
	<div align="center">
		<h1>Install Complete!</h1>
		<br/>
		<p>Continue to the <a href="../admin/">admin home page</a> to give your site a name and learn how to start indexing usenet.</p>
		<br/><br/>
		<p><b >Note:</b> It is a good idea to remove the www/install directory after setup</p>
	</div>   
<?php }else{ ?>

<p>You must set the NZB file path. This is the location where the NZB files are stored:</p>
<form action="?" method="post">
	<table width="100%" border="0" style="margin-top:10px;" class="data highlight">
		<tr class="alt">
			<td><label for="nzbpath">Location:</label></td>
			<td><input type="text" name="nzbpath" value="<?php echo $_smarty_tpl->getVariable('cfg')->value->NZB_PATH;?>
" size="70" /></td>
		</tr>
	</table>

	<div style="padding-top:20px; text-align:center;">
			<?php if ($_smarty_tpl->getVariable('cfg')->value->error){?>
			<div>
				The following error was encountered:<br />
				<?php if (!$_smarty_tpl->getVariable('cfg')->value->nzbPathCheck){?><br /><span class="error">The installer cannot write to <?php echo $_smarty_tpl->getVariable('cfg')->value->NZB_PATH;?>
. A quick solution is to run:<br />chmod -R 777 <?php echo $_smarty_tpl->getVariable('cfg')->value->NZB_PATH;?>
</span><br /><?php }?>
				<br />
			</div>
			<?php }?>
			<input type="submit" value="Set NZB File Path" />
	</div>

</form>

<?php }?>