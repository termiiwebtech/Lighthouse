<?php /* Smarty version Smarty-3.1.19, created on 2017-02-03 07:30:30
         compiled from "C:\xaampp\htdocs\lighthouse\templates\common\captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24259589477e635eaa4-06797721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '881eca1dd5d69f7433324dc513c3cb7df29c41ca' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\templates\\common\\captcha.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24259589477e635eaa4-06797721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'member' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589477e6378b57_15721211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589477e6378b57_15721211')) {function content_589477e6378b57_15721211($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['core']->value['config']['captcha']&&!$_smarty_tpl->tpl_vars['member']->value) {?>
	<div class="fieldset">
		<div class="fieldset__header"><?php echo iaSmarty::lang(array('key'=>'safety'),$_smarty_tpl);?>
</div>
		<div class="fieldset__content">
			<div class="captcha"><?php echo iaSmarty::captcha(array(),$_smarty_tpl);?>
</div>
		</div>
	</div>
<?php }?><?php }} ?>
