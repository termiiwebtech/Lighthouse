<?php /* Smarty version Smarty-3.1.19, created on 2017-02-02 09:46:02
         compiled from "C:\xaampp\htdocs\lighthouse\templates\common\language-selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184195893462a010d73-47204398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fd97e98d1bef383f00e11c342bbb2e0a22b683c' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\templates\\common\\language-selector.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184195893462a010d73-47204398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'code' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5893462a03b272_93756272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5893462a03b272_93756272')) {function content_5893462a03b272_93756272($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['core']->value['config']['language_switch']&&count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
	<ul class="nav navbar-nav navbar-right nav-langs">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<?php echo $_smarty_tpl->tpl_vars['core']->value['languages'][@constant('IA_LANGUAGE')]['title'];?>

			</a>
			<span class="navbar-nav__drop dropdown-toggle" data-toggle="dropdown"><span class="fa fa-angle-down"></span></span>
			<ul class="dropdown-menu">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
					<li<?php if (@constant('IA_LANGUAGE')==$_smarty_tpl->tpl_vars['code']->value) {?> class="active"<?php }?>><a href="<?php echo iaSmarty::ia_page_url(array('code'=>$_smarty_tpl->tpl_vars['code']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</a></li>
				<?php } ?>
			</ul>
		</li>
	</ul>
<?php }?><?php }} ?>
