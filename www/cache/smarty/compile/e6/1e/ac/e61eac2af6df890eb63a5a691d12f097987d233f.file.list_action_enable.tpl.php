<?php /* Smarty version Smarty-3.1.19, created on 2017-04-28 18:52:57
         compiled from "/usr/share/nginx/html/admin/themes/default/template/helpers/list/list_action_enable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187407968559038f898fe1e7-47339651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e61eac2af6df890eb63a5a691d12f097987d233f' => 
    array (
      0 => '/usr/share/nginx/html/admin/themes/default/template/helpers/list/list_action_enable.tpl',
      1 => 1491845602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187407968559038f898fe1e7-47339651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax' => 0,
    'enabled' => 0,
    'url_enable' => 0,
    'confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59038f8992f538_14068985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59038f8992f538_14068985')) {function content_59038f8992f538_14068985($_smarty_tpl) {?>
<a class="list-action-enable<?php if (isset($_smarty_tpl->tpl_vars['ajax']->value)&&$_smarty_tpl->tpl_vars['ajax']->value) {?> ajax_table_link<?php }?><?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?> action-enabled<?php } else { ?> action-disabled<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');"<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?><?php echo smartyTranslate(array('s'=>'Enabled'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Disabled'),$_smarty_tpl);?>
<?php }?>">
	<i class="icon-check<?php if (!$_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
	<i class="icon-remove<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
</a>
<?php }} ?>
