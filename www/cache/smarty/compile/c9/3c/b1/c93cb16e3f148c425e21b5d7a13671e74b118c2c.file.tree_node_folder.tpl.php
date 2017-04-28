<?php /* Smarty version Smarty-3.1.19, created on 2017-04-28 18:52:59
         compiled from "/usr/share/nginx/html/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130897254759038f8be3e7f4-23063907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93cb16e3f148c425e21b5d7a13671e74b118c2c' => 
    array (
      0 => '/usr/share/nginx/html/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1491845602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130897254759038f8be3e7f4-23063907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59038f8be64c10_17566734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59038f8be64c10_17566734')) {function content_59038f8be64c10_17566734($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/share/nginx/html/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
