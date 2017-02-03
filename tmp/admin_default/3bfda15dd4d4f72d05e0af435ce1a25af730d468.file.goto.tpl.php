<?php /* Smarty version Smarty-3.1.19, created on 2017-02-02 10:16:30
         compiled from "C:\xaampp\htdocs\lighthouse\admin\templates\default\goto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2319458934d4e863097-54100467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bfda15dd4d4f72d05e0af435ce1a25af730d468' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\admin\\templates\\default\\goto.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2319458934d4e863097-54100467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goto' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58934d4e881bb6_04487084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58934d4e881bb6_04487084')) {function content_58934d4e881bb6_04487084($_smarty_tpl) {?><label><?php echo iaSmarty::lang(array('key'=>'and_then'),$_smarty_tpl);?>
</label>
<select name="goto" class="goto-actions">
	<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['action']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_POST['goto'])&&$_POST['goto']==$_smarty_tpl->tpl_vars['action']->value) {?> selected<?php }?>><?php echo iaSmarty::lang(array('key'=>$_smarty_tpl->tpl_vars['name']->value,'default'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl);?>
</option>
	<?php } ?>
</select><?php }} ?>
