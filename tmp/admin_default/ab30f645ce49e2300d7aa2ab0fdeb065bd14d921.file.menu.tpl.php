<?php /* Smarty version Smarty-3.1.19, created on 2017-02-02 09:45:55
         compiled from "C:\xaampp\htdocs\lighthouse\admin\templates\default\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1547758934623a7cc79-61390938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab30f645ce49e2300d7aa2ab0fdeb065bd14d921' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\admin\\templates\\default\\menu.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1547758934623a7cc79-61390938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'item' => 0,
    'submenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58934623b22ee2_88715387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58934623b22ee2_88715387')) {function content_58934623b22ee2_88715387($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['info']['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['item']->value['items'])&&$_smarty_tpl->tpl_vars['item']->value['items']) {?>
	<ul id="nav-sub-<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="nav-sub<?php if ($_smarty_tpl->tpl_vars['core']->value['page']['info']['group']==$_smarty_tpl->tpl_vars['item']->value['id']) {?> active<?php }?>">
		<?php  $_smarty_tpl->tpl_vars['submenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['submenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['submenu']->key => $_smarty_tpl->tpl_vars['submenu']->value) {
$_smarty_tpl->tpl_vars['submenu']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['submenu']->value['name']) {?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['core']->value['page']['info']['name']==$_smarty_tpl->tpl_vars['submenu']->value['name']||$_smarty_tpl->tpl_vars['core']->value['page']['info']['parent']==$_smarty_tpl->tpl_vars['submenu']->value['name']||(isset($_smarty_tpl->tpl_vars['core']->value['page']['info']['active_menu'])&&$_smarty_tpl->tpl_vars['core']->value['page']['info']['active_menu']==$_smarty_tpl->tpl_vars['submenu']->value['name']&&!isset($_smarty_tpl->tpl_vars['submenu']->value['config']))) {?>active<?php }?><?php if (isset($_smarty_tpl->tpl_vars['submenu']->value['config'])&&isset($_smarty_tpl->tpl_vars['core']->value['page']['info']['active_menu'])&&$_smarty_tpl->tpl_vars['submenu']->value['config']==$_smarty_tpl->tpl_vars['core']->value['page']['info']['active_menu']) {?> active-setting<?php }?>">
				<?php if (empty($_smarty_tpl->tpl_vars['submenu']->value['url'])) {?>
					<span><?php echo $_smarty_tpl->tpl_vars['submenu']->value['title'];?>
</span>
				<?php } else { ?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['submenu']->value['url'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['submenu']->value['attr'])) {?> <?php echo $_smarty_tpl->tpl_vars['submenu']->value['attr'];?>
<?php }?>><?php echo $_smarty_tpl->tpl_vars['submenu']->value['title'];?>
</a>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['submenu']->value['config'])&&$_smarty_tpl->tpl_vars['submenu']->value['config']) {?>
					<a href="configuration/<?php echo $_smarty_tpl->tpl_vars['submenu']->value['config'];?>
/" class="nav-sub__config<?php if (isset($_smarty_tpl->tpl_vars['core']->value['page']['info']['active_config'])&&$_smarty_tpl->tpl_vars['submenu']->value['config']==$_smarty_tpl->tpl_vars['core']->value['page']['info']['active_config']) {?> active<?php }?>" title="<?php echo iaSmarty::lang(array('key'=>'settings'),$_smarty_tpl);?>
"><i class="i-cog"></i></a>
				<?php }?>
			</li>
			<?php } else { ?>
			<li class="heading">
				<?php echo $_smarty_tpl->tpl_vars['submenu']->value['title'];?>

				<?php if (isset($_smarty_tpl->tpl_vars['submenu']->value['config'])&&$_smarty_tpl->tpl_vars['submenu']->value['config']) {?>
					<a href="configuration/<?php echo $_smarty_tpl->tpl_vars['submenu']->value['config'];?>
/" class="nav-sub__config<?php if (isset($_smarty_tpl->tpl_vars['core']->value['page']['info']['active_config'])&&$_smarty_tpl->tpl_vars['submenu']->value['config']==$_smarty_tpl->tpl_vars['core']->value['page']['info']['active_config']) {?> active<?php }?>" title="<?php echo iaSmarty::lang(array('key'=>'settings'),$_smarty_tpl);?>
"><i class="i-cog"></i></a>
				<?php }?>
			</li>
			<?php }?>
		<?php } ?>
	</ul>
	<?php }?>
<?php } ?><?php }} ?>
