<?php /* Smarty version Smarty-3.1.19, created on 2017-04-29 14:46:28
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155879973159048b244095a5-56056525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2f26a32795f3ffad7f75f5b4db98606b00ed84d' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1491845602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155879973159048b244095a5-56056525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59048b244335b2_87636809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59048b244335b2_87636809')) {function content_59048b244335b2_87636809($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
