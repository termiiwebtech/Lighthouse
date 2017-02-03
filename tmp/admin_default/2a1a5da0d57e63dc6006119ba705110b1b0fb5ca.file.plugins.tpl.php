<?php /* Smarty version Smarty-3.1.19, created on 2017-02-03 06:11:43
         compiled from "C:\xaampp\htdocs\lighthouse\admin\templates\default\plugins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:310365894656f811629-86003526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a1a5da0d57e63dc6006119ba705110b1b0fb5ca' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\admin\\templates\\default\\plugins.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310365894656f811629-86003526',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5894656f8647b9_67233991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5894656f8647b9_67233991')) {function content_5894656f8647b9_67233991($_smarty_tpl) {?><div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab-installed" data-toggle="tab"><?php echo iaSmarty::lang(array('key'=>'installed_plugins'),$_smarty_tpl);?>
</a></li>
		<li><a href="#tab-available" data-toggle="tab"><?php echo iaSmarty::lang(array('key'=>'available_plugins'),$_smarty_tpl);?>
</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab-installed">
			<div id="js-grid-installed"></div>
		</div>
		<div class="tab-pane" id="tab-available">
			<div id="js-grid-available"></div>
		</div>
	</div>
</div><?php }} ?>
