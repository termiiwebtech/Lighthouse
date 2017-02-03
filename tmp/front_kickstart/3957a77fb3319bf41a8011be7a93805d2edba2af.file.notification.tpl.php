<?php /* Smarty version Smarty-3.1.19, created on 2017-02-02 09:46:02
         compiled from "C:\xaampp\htdocs\lighthouse\templates\common\notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114935893462a86e925-29133525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3957a77fb3319bf41a8011be7a93805d2edba2af' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\templates\\common\\notification.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114935893462a86e925-29133525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'type' => 0,
    'entries' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5893462a88e825_09428306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5893462a88e825_09428306')) {function content_5893462a88e825_09428306($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['core']->value['notifications']) {?>
	<?php  $_smarty_tpl->tpl_vars['entries'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entries']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entries']->key => $_smarty_tpl->tpl_vars['entries']->value) {
$_smarty_tpl->tpl_vars['entries']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['entries']->key;
?>
		<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
			<ul class="list-unstyled">
				<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</li>
				<?php } ?>
			</ul>
		</div>
	<?php } ?>
<?php } else { ?>
	<div id="notification" class="alert alert-info" style="display: none;"></div>
<?php }?><?php }} ?>
