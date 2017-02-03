<?php /* Smarty version Smarty-3.1.19, created on 2017-02-03 06:19:30
         compiled from "C:\xaampp\htdocs\lighthouse\plugins\elfinder\templates\admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3172558946742c3fb31-14837126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6885949d2f9fd319f446384b224c3bc204ef81fd' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\plugins\\elfinder\\templates\\admin\\index.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3172558946742c3fb31-14837126',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58946742cfece6_79991577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58946742cfece6_79991577')) {function content_58946742cfece6_79991577($_smarty_tpl) {?><?php echo iaSmarty::ia_print_js(array('files'=>'_IA_URL_plugins/elfinder/js/jqueryui/jquery-ui.min,_IA_URL_plugins/elfinder/includes/elfinder/js/elfinder.min'),$_smarty_tpl);?>

<?php echo iaSmarty::ia_print_css(array('files'=>'_IA_URL_plugins/elfinder/js/jqueryui/jquery-ui.min,_IA_URL_plugins/elfinder/includes/elfinder/css/elfinder.min,_IA_URL_plugins/elfinder/includes/elfinder/css/theme'),$_smarty_tpl);?>


<div id="elfinder"></div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmarty::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function()
{
	$('#elfinder').elfinder(
	{
		url : intelli.config.admin_url + '/elfinder/read.json'
	});
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
