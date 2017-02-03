<?php /* Smarty version Smarty-3.1.19, created on 2017-02-03 06:39:08
         compiled from "C:\xaampp\htdocs\lighthouse\admin\templates\default\packages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1591758946bdc1dc888-77273883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5010cb73529245281703d202bbc5e7d94ff8387' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\admin\\templates\\default\\packages.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1591758946bdc1dc888-77273883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'packages' => 0,
    'core' => 0,
    'package' => 0,
    'preview' => 0,
    'screenshot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58946bdc45a8b8_39395525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58946bdc45a8b8_39395525')) {function content_58946bdc45a8b8_39395525($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/plugins\\modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['packages']->value) {?>
	<input type="hidden" id="js-default-package-value" value="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['default_package'];?>
">
	<div class="plates plates--templates">
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['package'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['package']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['packages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['package']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['package']->key => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
 $_smarty_tpl->tpl_vars['package']->iteration++;
?>
				<div class="col col-lg-3">
					<div class="media plate<?php if ($_smarty_tpl->tpl_vars['package']->value['remote']) {?> plate--remote<?php }?><?php if (iaCore::STATUS_ACTIVE==$_smarty_tpl->tpl_vars['package']->value['status']) {?> plate--active<?php }?>">
						<div class="plate__image">
							<?php if (isset($_smarty_tpl->tpl_vars['package']->value['preview'])&&count($_smarty_tpl->tpl_vars['package']->value['preview'])>0) {?>
								<?php  $_smarty_tpl->tpl_vars['preview'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['preview']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['package']->value['preview']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['preview']->key => $_smarty_tpl->tpl_vars['preview']->value) {
$_smarty_tpl->tpl_vars['preview']->_loop = true;
?>
									<a href="<?php echo @constant('IA_CLEAR_URL');?>
packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
/docs/img/<?php echo $_smarty_tpl->tpl_vars['preview']->value['name'];?>
" rel="ia_lightbox[<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
]" title="<?php echo $_smarty_tpl->tpl_vars['package']->value['title'];?>
">
										<img title="<?php echo $_smarty_tpl->tpl_vars['preview']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
/docs/img/icon.png">
									</a>
								<?php } ?>
								<div class="screenshots hidden">
									<?php  $_smarty_tpl->tpl_vars['screenshot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['screenshot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['package']->value['screenshots']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['screenshot']->key => $_smarty_tpl->tpl_vars['screenshot']->value) {
$_smarty_tpl->tpl_vars['screenshot']->_loop = true;
?>
										<a rel="ia_lightbox[<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
]" title="<?php echo $_smarty_tpl->tpl_vars['package']->value['title'];?>
. <?php echo $_smarty_tpl->tpl_vars['screenshot']->value['title'];?>
" href="<?php echo @constant('IA_CLEAR_URL');?>
packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
/docs/img/<?php echo $_smarty_tpl->tpl_vars['screenshot']->value['name'];?>
"></a>
									<?php } ?>
								</div>
							<?php } else { ?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['package']->value['url'];?>
" target="_blank">
									<img title="<?php echo $_smarty_tpl->tpl_vars['package']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['package']->value['logo'];?>
">
								</a>
							<?php }?>

							<?php if (isset($_smarty_tpl->tpl_vars['package']->value['remote'])&&$_smarty_tpl->tpl_vars['package']->value['price']>0) {?>
								<div class="plate__badge plate__badge--premium">Premium &mdash; $<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
</div>
							<?php }?>
						</div>
						<div class="media-body">
							<div class="plate__heading">
								<h4><?php echo $_smarty_tpl->tpl_vars['package']->value['title'];?>
 <small><?php echo $_smarty_tpl->tpl_vars['package']->value['version'];?>
</small></h4>
							</div>
							<p class="plate__info">
								<?php echo iaSmarty::lang(array('key'=>'date'),$_smarty_tpl);?>
: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['package']->value['date'],$_smarty_tpl->tpl_vars['core']->value['config']['date_format']);?>
<br>
								
								<?php echo iaSmarty::lang(array('key'=>'compatibility'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['package']->value['compatibility'];?>

							</p>

							<p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['package']->value['summary'];?>
</p>

							<div class="plate-actions clearfix">
								<?php if ($_smarty_tpl->tpl_vars['package']->value['buttons']) {?>
									<?php if ($_smarty_tpl->tpl_vars['package']->value['items']['install']) {?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_pages','id'=>'packages','action'=>'install')); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_pages','id'=>'packages','action'=>'install'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										<a data-url="<?php echo @constant('IA_ADMIN_URL');?>
packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
/install/" href="javascript:;" onclick="installPackage(this,'<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
')" title="<?php echo iaSmarty::lang(array('key'=>'install'),$_smarty_tpl);?>
" class="btn btn-success btn-small"><i class="i-plus-alt"></i></a>
										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_pages','id'=>'packages','action'=>'install'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['package']->value['items']['readme']) {?>
										<a href="javascript:;" title="<?php echo iaSmarty::lang(array('key'=>'documentation'),$_smarty_tpl);?>
" onclick="readme('<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
')" class="btn btn-primary btn-small"><i class="i-info"></i></a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['package']->value['items']['set_default']) {?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_pages','id'=>'packages','action'=>'set_default')); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_pages','id'=>'packages','action'=>'set_default'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

											<?php if ($_smarty_tpl->tpl_vars['core']->value['config']['default_package']!=$_smarty_tpl->tpl_vars['package']->value['name']) {?>
												<a data-url="<?php echo @constant('IA_ADMIN_URL');?>
packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
/set_default/" href="javascript:;" onclick="setDefault(this)" class="btn btn-primary btn-small" title="<?php echo iaSmarty::lang(array('key'=>'set_as_default_package'),$_smarty_tpl);?>
"><i class="i-loop"></i></a>
											<?php } else { ?>
												<a data-url="<?php echo @constant('IA_ADMIN_URL');?>
packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
/reset/" href="javascript:;" onclick="resetUrl(this,'<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
')" class="btn btn-primary btn-small" title="<?php echo iaSmarty::lang(array('key'=>'reset_default'),$_smarty_tpl);?>
"><i class="i-loop"></i></a>
											<?php }?>
										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_pages','id'=>'packages','action'=>'set_default'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['package']->value['items']['upgrade']) {?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_pages','id'=>'packages','action'=>'upgrade')); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_pages','id'=>'packages','action'=>'upgrade'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										<a href="<?php echo @constant('IA_ADMIN_URL');?>
packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
/upgrade/" class="btn btn-success btn-small" title="<?php echo iaSmarty::lang(array('key'=>'upgrade'),$_smarty_tpl);?>
"><i class="i-box-remove"></i></a>
										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_pages','id'=>'packages','action'=>'upgrade'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['package']->value['items']['config']) {?>
										<a href="<?php echo @constant('IA_ADMIN_URL');?>
configuration/<?php echo $_smarty_tpl->tpl_vars['package']->value['items']['config']['url'];?>
/#<?php echo $_smarty_tpl->tpl_vars['package']->value['items']['config']['anchor'];?>
" class="btn btn-primary btn-small" title="<?php echo iaSmarty::lang(array('key'=>'go_to_config'),$_smarty_tpl);?>
"><i class="i-cog"></i></a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['package']->value['items']['manage']) {?>
										<a href="<?php echo @constant('IA_ADMIN_URL');?>
<?php echo $_smarty_tpl->tpl_vars['package']->value['items']['manage'];?>
" class="btn btn-primary btn-small" title="<?php echo iaSmarty::lang(array('key'=>'manage'),$_smarty_tpl);?>
"><i class="i-equalizer"></i></a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['package']->value['items']['import']) {?>
										<a href="<?php echo @constant('IA_ADMIN_URL');?>
database/import/" class="btn btn-primary btn-small" title="<?php echo iaSmarty::lang(array('key'=>'import'),$_smarty_tpl);?>
"><i class="i-database"></i></a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['package']->value['items']['deactivate']) {?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_pages','id'=>'packages','action'=>'activate')); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_pages','id'=>'packages','action'=>'activate'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										<a href="<?php echo @constant('IA_ADMIN_URL');?>
packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
/deactivate/" class="btn btn-danger btn-small" title="<?php echo iaSmarty::lang(array('key'=>'deactivate'),$_smarty_tpl);?>
"><i class="i-switch"></i></a>
										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_pages','id'=>'packages','action'=>'activate'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['package']->value['items']['activate']) {?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_pages','id'=>'packages','action'=>'activate')); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_pages','id'=>'packages','action'=>'activate'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										<a href="<?php echo @constant('IA_ADMIN_URL');?>
packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
/activate/" class="btn btn-success btn-small" title="<?php echo iaSmarty::lang(array('key'=>'activate'),$_smarty_tpl);?>
"><i class="i-switch"></i></a>
										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_pages','id'=>'packages','action'=>'activate'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['package']->value['items']['uninstall']) {?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_pages','id'=>'packages','action'=>'uninstall')); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_pages','id'=>'packages','action'=>'uninstall'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										<a href="<?php echo @constant('IA_ADMIN_URL');?>
packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
/uninstall/" class="btn btn-danger btn-small" title="<?php echo iaSmarty::lang(array('key'=>'uninstall'),$_smarty_tpl);?>
"><i class="i-remove-sign"></i></a>
										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_pages','id'=>'packages','action'=>'uninstall'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['package']->value['remote']) {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['package']->value['url'];?>
" target="_blank" class="btn btn-default btn-sm" title="<?php echo iaSmarty::lang(array('key'=>'view'),$_smarty_tpl);?>
"><i class="i-eye"></i> <?php echo iaSmarty::lang(array('key'=>'view'),$_smarty_tpl);?>
</a>
								<?php }?>
							</div>
						</div>
					</div>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['package']->iteration%4==0) {?>
					</div>
					<div class="row">
				<?php }?>
			<?php } ?>
		</div>
	</div>
	<?php echo iaSmarty::ia_print_js(array('files'=>'admin/packages'),$_smarty_tpl);?>

<?php } else { ?>
	<div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'no_packages'),$_smarty_tpl);?>
</div>
<?php }?><?php }} ?>
