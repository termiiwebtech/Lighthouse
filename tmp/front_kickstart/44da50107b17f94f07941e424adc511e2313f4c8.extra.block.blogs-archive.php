<?php /* Smarty version Smarty-3.1.19, created on 2017-02-02 09:46:02
         compiled from "extra:personal_blog/block.blogs-archive" */ ?>
<?php /*%%SmartyHeaderCode:287515893462a60cbb2-07043921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44da50107b17f94f07941e424adc511e2313f4c8' => 
    array (
      0 => 'extra:personal_blog/block.blogs-archive',
      1 => 1455490436,
      2 => 'extra',
    ),
  ),
  'nocache_hash' => '287515893462a60cbb2-07043921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blogs_archive' => 0,
    'item' => 0,
    'curr_year' => 0,
    'curr_month' => 0,
    'month' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5893462a6502c5_80883006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5893462a6502c5_80883006')) {function content_5893462a6502c5_80883006($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['blogs_archive']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['blogs_archive']->value) {?>
		<div class="list-group">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs_archive']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['month'] = new Smarty_variable("month".((string)$_smarty_tpl->tpl_vars['item']->value['month']), null, 0);?>
				<a class="list-group-item<?php if ((isset($_smarty_tpl->tpl_vars['curr_year']->value)&&isset($_smarty_tpl->tpl_vars['curr_month']->value))&&($_smarty_tpl->tpl_vars['curr_year']->value==$_smarty_tpl->tpl_vars['item']->value['year']&&$_smarty_tpl->tpl_vars['curr_month']->value==$_smarty_tpl->tpl_vars['item']->value['month'])) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo iaSmarty::lang(array('key'=>$_smarty_tpl->tpl_vars['month']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['year'];?>
</a>
			<?php } ?>
		</div>
	<?php } else { ?>
		<div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'no_blog_entries'),$_smarty_tpl);?>
</div>
	<?php }?>
<?php }?><?php }} ?>
