<?php /* Smarty version Smarty-3.1.19, created on 2017-04-28 18:53:00
         compiled from "/usr/share/nginx/html/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114384976659038f8c24fbc8-19406465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce46aca355da943eeb78552cc170e0732218988a' => 
    array (
      0 => '/usr/share/nginx/html/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1491845602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114384976659038f8c24fbc8-19406465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59038f8c266ea3_86741206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59038f8c266ea3_86741206')) {function content_59038f8c266ea3_86741206($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
