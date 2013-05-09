<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 17:14:11
         compiled from "/data/newznab/www/views/templates/frontend/../common/pager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96960052550fb44e3038876-02639889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed3867560bcf26380f13e013198aeab6322e641c' => 
    array (
      0 => '/data/newznab/www/views/templates/frontend/../common/pager.tpl',
      1 => 1294472460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96960052550fb44e3038876-02639889',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('pagertotalitems')->value>$_smarty_tpl->getVariable('pageritemsperpage')->value){?><div class="pager"><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pager']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['name'] = 'pager';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('pagertotalitems')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['step'] = ((int)$_smarty_tpl->getVariable('pageritemsperpage')->value) == 0 ? 1 : (int)$_smarty_tpl->getVariable('pageritemsperpage')->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pager']['total']);
?><?php if ($_smarty_tpl->getVariable('pageroffset')->value==$_smarty_tpl->getVariable('smarty')->value['section']['pager']['index']){?><span class="current" title="Current page <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pager']['iteration'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pager']['iteration'];?>
</span>&nbsp;<?php }elseif($_smarty_tpl->getVariable('pageroffset')->value-$_smarty_tpl->getVariable('smarty')->value['section']['pager']['index']==$_smarty_tpl->getVariable('pageritemsperpage')->value||$_smarty_tpl->getVariable('pageroffset')->value+$_smarty_tpl->getVariable('pageritemsperpage')->value==$_smarty_tpl->getVariable('smarty')->value['section']['pager']['index']){?><a title="Goto page <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pager']['iteration'];?>
" href="<?php echo $_smarty_tpl->getVariable('pagerquerybase')->value;?>
<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pager']['index'];?>
<?php echo $_smarty_tpl->getVariable('pagerquerysuffix')->value;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pager']['iteration'];?>
</a>&nbsp;<?php }elseif(($_smarty_tpl->getVariable('pagertotalitems')->value-($_smarty_tpl->getVariable('smarty')->value['section']['pager']['index']+$_smarty_tpl->getVariable('pageritemsperpage')->value))<0){?>... <a title="Goto last page" href="<?php echo $_smarty_tpl->getVariable('pagerquerybase')->value;?>
<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pager']['index'];?>
<?php echo $_smarty_tpl->getVariable('pagerquerysuffix')->value;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pager']['iteration'];?>
</a><?php }elseif($_smarty_tpl->getVariable('smarty')->value['section']['pager']['index']>(($_smarty_tpl->getVariable('pagertotalitems')->value/2)+$_smarty_tpl->getVariable('pageroffset')->value+1)&&$_smarty_tpl->getVariable('smarty')->value['section']['pager']['index']<(($_smarty_tpl->getVariable('pagertotalitems')->value/2)+$_smarty_tpl->getVariable('pageroffset')->value)+50){?>... <a title="Goto page <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pager']['iteration'];?>
" href="<?php echo $_smarty_tpl->getVariable('pagerquerybase')->value;?>
<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pager']['index'];?>
<?php echo $_smarty_tpl->getVariable('pagerquerysuffix')->value;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pager']['iteration'];?>
</a>&nbsp;<?php }elseif(($_smarty_tpl->getVariable('pagertotalitems')->value-($_smarty_tpl->getVariable('smarty')->value['section']['pager']['index']+$_smarty_tpl->getVariable('pageritemsperpage')->value))<0){?>... <a title="Goto last page" href="<?php echo $_smarty_tpl->getVariable('pagerquerybase')->value;?>
<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pager']['index'];?>
<?php echo $_smarty_tpl->getVariable('pagerquerysuffix')->value;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pager']['iteration'];?>
</a><?php }elseif(($_smarty_tpl->getVariable('smarty')->value['section']['pager']['iteration']==1)){?><a title="Goto first page" href="<?php echo $_smarty_tpl->getVariable('pagerquerybase')->value;?>
0<?php echo $_smarty_tpl->getVariable('pagerquerysuffix')->value;?>
">1</a> ... <?php }?><?php endfor; endif; ?></div><?php }?>