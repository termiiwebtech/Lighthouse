<?php /* Smarty version Smarty-3.1.19, created on 2017-02-02 09:46:01
         compiled from "C:\xaampp\htdocs\lighthouse\templates\common\render-menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132558934629a374b6-14437815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1ec606ac189be7fd5476f13b230af28a07f7261' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\templates\\common\\render-menu.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132558934629a374b6-14437815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'position' => 0,
    'menu' => 0,
    'member' => 0,
    'core' => 0,
    'manageMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58934629b380b3_66605657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58934629b380b3_66605657')) {function content_58934629b380b3_66605657($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_menu')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/intelli_plugins\\function.ia_menu.php';
if (!is_callable('smarty_function_ia_hooker')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/intelli_plugins\\function.ia_hooker.php';
?><?php if ('mainmenu'==$_smarty_tpl->tpl_vars['position']->value) {?>
	<?php echo smarty_function_ia_menu(array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['contents'],'class'=>"nav navbar-nav navbar-right nav-main ".((string)$_smarty_tpl->tpl_vars['menu']->value['classname'])),$_smarty_tpl);?>

<?php } elseif ('inventory'==$_smarty_tpl->tpl_vars['position']->value) {?>
	<?php echo smarty_function_ia_menu(array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['contents'],'class'=>"nav navbar-nav navbar-right nav-inventory ".((string)$_smarty_tpl->tpl_vars['menu']->value['classname'])),$_smarty_tpl);?>

<?php } elseif ('account'==$_smarty_tpl->tpl_vars['position']->value) {?>
	<?php if ('account'==$_smarty_tpl->tpl_vars['menu']->value['name']&&$_smarty_tpl->tpl_vars['member']->value&&$_smarty_tpl->tpl_vars['core']->value['config']['members_enabled']) {?>
		<ul class="nav navbar-nav navbar-right nav-account">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['member']->value['avatar'],'title'=>(($tmp = @$_smarty_tpl->tpl_vars['member']->value['fullname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['member']->value['username'] : $tmp),'class'=>'img-circle','gravatar'=>true,'email'=>$_smarty_tpl->tpl_vars['member']->value['email']),$_smarty_tpl);?>


					<?php echo (($tmp = @$_smarty_tpl->tpl_vars['member']->value['fullname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['member']->value['username'] : $tmp);?>

				</a>
				<span class="navbar-nav__drop dropdown-toggle" data-toggle="dropdown"><span class="fa fa-angle-down"></span></span>
				<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontInsideAccountBox'),$_smarty_tpl);?>

				<?php echo smarty_function_ia_menu(array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['contents'],'class'=>'dropdown-menu','loginout'=>true),$_smarty_tpl);?>

			</li>
		</ul>
	<?php } else { ?>
		<ul class="nav navbar-nav navbar-right">
			<li<?php if ('login'==$_smarty_tpl->tpl_vars['core']->value['page']['name']) {?> class="active"<?php }?>><a href="<?php echo @constant('IA_URL');?>
login/"><?php echo iaSmarty::lang(array('key'=>'login'),$_smarty_tpl);?>
</a></li>
			<li<?php if ('registration'==$_smarty_tpl->tpl_vars['core']->value['page']['name']) {?> class="active"<?php }?>><a href="<?php echo @constant('IA_URL');?>
registration/"><?php echo iaSmarty::lang(array('key'=>'register'),$_smarty_tpl);?>
</a></li>
		</ul>
	<?php }?>
<?php } elseif (in_array($_smarty_tpl->tpl_vars['position']->value,array('left','right','user1','user2','top'))) {?>
	<?php if (!empty($_smarty_tpl->tpl_vars['menu']->value['contents'][0])&&'account'!=$_smarty_tpl->tpl_vars['menu']->value['name']) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_block', array('title'=>$_smarty_tpl->tpl_vars['menu']->value['title'],'movable'=>true,'id'=>$_smarty_tpl->tpl_vars['menu']->value['id'],'name'=>$_smarty_tpl->tpl_vars['menu']->value['name'],'collapsible'=>$_smarty_tpl->tpl_vars['menu']->value['collapsible'],'classname'=>$_smarty_tpl->tpl_vars['menu']->value['classname'])); $_block_repeat=true; echo iaSmarty::ia_block(array('title'=>$_smarty_tpl->tpl_vars['menu']->value['title'],'movable'=>true,'id'=>$_smarty_tpl->tpl_vars['menu']->value['id'],'name'=>$_smarty_tpl->tpl_vars['menu']->value['name'],'collapsible'=>$_smarty_tpl->tpl_vars['menu']->value['collapsible'],'classname'=>$_smarty_tpl->tpl_vars['menu']->value['classname']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_ia_menu(array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['contents'],'class'=>"list-group ".((string)$_smarty_tpl->tpl_vars['menu']->value['classname'])),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_block(array('title'=>$_smarty_tpl->tpl_vars['menu']->value['title'],'movable'=>true,'id'=>$_smarty_tpl->tpl_vars['menu']->value['id'],'name'=>$_smarty_tpl->tpl_vars['menu']->value['name'],'collapsible'=>$_smarty_tpl->tpl_vars['menu']->value['collapsible'],'classname'=>$_smarty_tpl->tpl_vars['menu']->value['classname']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php } elseif ('copyright'==$_smarty_tpl->tpl_vars['position']->value) {?>
	<?php echo smarty_function_ia_menu(array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['contents'],'class'=>"nav nav-inline ".((string)$_smarty_tpl->tpl_vars['menu']->value['classname'])),$_smarty_tpl);?>

<?php } else { ?>
	<!--__ms_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
-->
	<?php if ($_smarty_tpl->tpl_vars['menu']->value['header']||isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?>
		<div class="nav-menu-header <?php echo $_smarty_tpl->tpl_vars['menu']->value['classname'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
</div>
	<?php } else { ?>
		<div class="menu <?php echo $_smarty_tpl->tpl_vars['menu']->value['classname'];?>
">
	<?php }?>

	<!--__ms_c_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
-->
	<?php echo smarty_function_ia_menu(array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['contents'],'class'=>'nav-menu'),$_smarty_tpl);?>

	<!--__me_c_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
-->

	<?php if ($_smarty_tpl->tpl_vars['menu']->value['header']||isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?>
	<?php } else { ?>
		</div>
	<?php }?>
	<!--__me_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
-->
<?php }?><?php }} ?>