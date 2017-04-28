<?php /* Smarty version Smarty-3.1.19, created on 2017-04-28 18:52:40
         compiled from "/usr/share/nginx/html/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37499678459038f7847d1e4-28782278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '947b39d1ca6bcfdd71950513b81c8a20db0aa47b' => 
    array (
      0 => '/usr/share/nginx/html/admin/themes/default/template/content.tpl',
      1 => 1491845602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37499678459038f7847d1e4-28782278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59038f78d33c37_57928963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59038f78d33c37_57928963')) {function content_59038f78d33c37_57928963($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
