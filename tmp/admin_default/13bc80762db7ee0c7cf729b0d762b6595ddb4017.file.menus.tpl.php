<?php /* Smarty version Smarty-3.1.19, created on 2017-02-03 05:52:17
         compiled from "C:\xaampp\htdocs\lighthouse\admin\templates\default\menus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11962589460e1cd8ac7-11239431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13bc80762db7ee0c7cf729b0d762b6595ddb4017' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\admin\\templates\\default\\menus.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11962589460e1cd8ac7-11239431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'treeData' => 0,
    'pageAction' => 0,
    'item' => 0,
    'id' => 0,
    'positions' => 0,
    'position' => 0,
    'pagesGroup' => 0,
    'row' => 0,
    'classname' => 0,
    'post_key' => 0,
    'pages' => 0,
    'page' => 0,
    'group' => 0,
    'visibleOn' => 0,
    'key' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589460e23cdd93_35272289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589460e23cdd93_35272289')) {function content_589460e23cdd93_35272289($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radio_switcher')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/intelli_plugins\\function.html_radio_switcher.php';
?><form method="post" id="js-form-menus" class="sap-form form-horizontal">
	<?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

	<input type="hidden" id="js-menu-data" name="menus"<?php if (isset($_smarty_tpl->tpl_vars['treeData']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['treeData']->value;?>
"<?php }?>>

	<div class="wrap-list">
		<div class="wrap-group">
			<div class="wrap-group-heading">
				<h4><?php echo iaSmarty::lang(array('key'=>'options'),$_smarty_tpl);?>
</h4>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'name'),$_smarty_tpl);?>
 <?php echo iaSmarty::lang(array('key'=>'field_required'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php if (iaCore::ACTION_ADD==$_smarty_tpl->tpl_vars['pageAction']->value) {?>
						<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" id="input-name" name="name">
						<p class="help-block"><?php echo iaSmarty::lang(array('key'=>'unique_name'),$_smarty_tpl);?>
</p>
					<?php } else { ?>
						<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="disabled" disabled>
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" id="input-name" name="name">
						<input type="hidden" id="js-input-id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
					<?php }?>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'menu_configuration'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<div class="row">
						<div class="col col-lg-6">
							<h4><?php echo iaSmarty::lang(array('key'=>'menus'),$_smarty_tpl);?>
</h4>
							<div id="js-placeholder-menus" class="box-simple box-simple-small" style="height: 240px;"></div>
						</div>
						<div class="col col-lg-6">
							<h4><?php echo iaSmarty::lang(array('key'=>'pages'),$_smarty_tpl);?>
</h4>
							<div id="js-placeholder-pages" class="box-simple box-simple-small" style="height: 240px;"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'title'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<input type="text" id="title" name="title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'place'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<select class="common" id="position" name="position">
						<?php  $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['position']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['positions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['position']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['position']==$_smarty_tpl->tpl_vars['position']->value['name']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['position']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'css_class_name'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<input type="text" name="classname" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['classname'], ENT_QUOTES, 'UTF-8', true);?>
">
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'show_header'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['header'],'name'=>'header'),$_smarty_tpl);?>

				</div>
			</div>

			<div class="row" style="display: none;">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'collapsible'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['collapsible'],'name'=>'collapsible'),$_smarty_tpl);?>

				</div>
			</div>

			<div class="row" style="display: none;">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'collapsed'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['collapsed'],'name'=>'collapsed'),$_smarty_tpl);?>

				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'menu_visible_everywhere'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['sticky'],'name'=>'sticky'),$_smarty_tpl);?>

					<p class="js-visibility-visible help-block"><?php echo iaSmarty::lang(array('key'=>'menu_visibility_exceptions_visible'),$_smarty_tpl);?>
</p>
					<p class="js-visibility-hidden help-block"><?php echo iaSmarty::lang(array('key'=>'menu_visibility_exceptions_hidden'),$_smarty_tpl);?>
</p>
				</div>
			</div>

			<div id="js-pages-list" class="row">
				<label class="col col-lg-2 control-label"></label>

				<div class="col col-lg-8">
					<ul class="nav nav-tabs">
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagesGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['row']->key;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
							<li<?php if ($_smarty_tpl->tpl_vars['row']->iteration==1) {?> class="active"<?php }?>><a href="#tab-pages_<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
						<?php } ?>
					</ul>

					<div class="tab-content">
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagesGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['row']->key;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
							<?php $_smarty_tpl->tpl_vars['post_key'] = new Smarty_variable("all_pages_".((string)$_smarty_tpl->tpl_vars['row']->value['name']), null, 0);?>
							<?php $_smarty_tpl->tpl_vars['classname'] = new Smarty_variable("pages_".((string)$_smarty_tpl->tpl_vars['row']->value['name']), null, 0);?>
							<div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['row']->iteration==1) {?> active<?php }?>" id="tab-<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
">
								<div class="checkbox checkbox-all">
									<label>
										<input type="checkbox" value="1" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" data-group="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['post_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['post_key']->value;?>
"<?php if (isset($_POST[$_smarty_tpl->tpl_vars['post_key']->value])&&$_POST[$_smarty_tpl->tpl_vars['post_key']->value]=='1') {?> checked<?php }?>> <?php echo iaSmarty::lang(array('key'=>'select_all_in_tab'),$_smarty_tpl);?>

									</label>
								</div>

								<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['page']->value['group']==$_smarty_tpl->tpl_vars['group']->value) {?>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="pages[]" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
"<?php if (in_array($_smarty_tpl->tpl_vars['page']->value['name'],$_smarty_tpl->tpl_vars['visibleOn']->value)) {?> checked<?php }?>>
											<?php if (empty($_smarty_tpl->tpl_vars['page']->value['title'])) {?><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>

											<?php if ($_smarty_tpl->tpl_vars['page']->value['suburl']) {?>
												<div class="subpages" style="display: none" rel="<?php echo $_smarty_tpl->tpl_vars['page']->value['suburl'];?>
::<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">&nbsp;</div>
												<input type="hidden" name="subpages[<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
]" value="<?php if (isset($_smarty_tpl->tpl_vars['block']->value['subpages'][$_smarty_tpl->tpl_vars['page']->value['name']])) {?><?php echo $_smarty_tpl->tpl_vars['block']->value['subpages'][$_smarty_tpl->tpl_vars['page']->value['name']];?>
<?php } elseif (isset($_POST['subpages'][$_smarty_tpl->tpl_vars['page']->value['name']])) {?><?php echo $_POST['subpages'][$_smarty_tpl->tpl_vars['page']->value['name']];?>
<?php }?>" id="subpage_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
											<?php }?>
										</label>
									</div>
									<?php }?>
								<?php } ?>
							</div>
						<?php } ?>
					</div>

					<div class="checkbox checkbox-all">
						<label>
							<input type="checkbox" value="1" name="all_pages" id="js-select-all-pages"<?php if (isset($_POST['all_pages'])&&$_POST['all_pages']==1) {?> checked<?php }?>> <?php echo iaSmarty::lang(array('key'=>'select_all'),$_smarty_tpl);?>

						</label>
					</div>
				</div>
			</div>
		</div>

		<?php echo $_smarty_tpl->getSubTemplate ('fields-system.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</form>
<?php echo iaSmarty::ia_print_js(array('files'=>'admin/menus'),$_smarty_tpl);?>
<?php }} ?>
