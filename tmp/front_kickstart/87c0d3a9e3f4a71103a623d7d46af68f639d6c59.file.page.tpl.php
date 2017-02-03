<?php /* Smarty version Smarty-3.1.19, created on 2017-02-02 09:46:00
         compiled from "C:\xaampp\htdocs\lighthouse\templates\common\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211445893462895da01-00106096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87c0d3a9e3f4a71103a623d7d46af68f639d6c59' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\templates\\common\\page.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211445893462895da01-00106096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'protect' => 0,
    'page_protect' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589346289d5086_09857088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589346289d5086_09857088')) {function content_589346289d5086_09857088($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['protect']->value) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['page_protect']->value)) {?>
		<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['page_protect']->value;?>
</div>
	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php } else { ?>
	<div class="alert alert-warning"><?php echo iaSmarty::lang(array('key'=>'password_protected_page'),$_smarty_tpl);?>
</div>

	<form action="<?php echo @constant('IA_SELF');?>
" method="post" class="form-inline">
		<?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

		<label><?php echo iaSmarty::lang(array('key'=>'password'),$_smarty_tpl);?>
:
			<input type="password" tabindex="5" name="password" value="">
			<button type="submit" tabindex="6" name="login" value="" class="btn btn-primary"><?php echo iaSmarty::lang(array('key'=>'view'),$_smarty_tpl);?>
</button>
		</label>
	</form>
<?php }?><?php }} ?>
