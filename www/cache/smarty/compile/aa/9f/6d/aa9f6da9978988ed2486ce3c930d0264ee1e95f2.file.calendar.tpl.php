<?php /* Smarty version Smarty-3.1.19, created on 2017-04-28 18:52:52
         compiled from "/usr/share/nginx/html/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1423920159038f841eaff1-73584823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa9f6da9978988ed2486ce3c930d0264ee1e95f2' => 
    array (
      0 => '/usr/share/nginx/html/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1491845602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1423920159038f841eaff1-73584823',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59038f8420a528_82944168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59038f8420a528_82944168')) {function content_59038f8420a528_82944168($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
