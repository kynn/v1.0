<?php /* Smarty version Smarty-3.1.12, created on 2012-10-21 23:09:36
         compiled from "application\views\templates\welcome_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101550840c5157cf38-69710966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1983d63d23d562b598b7671de09afc4cbef077ec' => 
    array (
      0 => 'application\\views\\templates\\welcome_message.tpl',
      1 => 1350832175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101550840c5157cf38-69710966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50840c515deec6_82912050',
  'variables' => 
  array (
    'name' => 0,
    'years_old' => 0,
    'contacts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50840c515deec6_82912050')) {function content_50840c515deec6_82912050($_smarty_tpl) {?><p>Name:  <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 </p>
<p>Years old: <?php echo $_smarty_tpl->tpl_vars['years_old']->value;?>
</p>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>Phone</td>
        <td>Fax</td>
        <td>Cell</td>
    </tr>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['contact'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['name'] = 'contact';
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contacts']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['contact']['total']);
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contact']['index']]['phone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contact']['index']]['fax'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contact']['index']]['cell'];?>
</td>
        </tr>
    <?php endfor; endif; ?>
</table>
<?php }} ?>