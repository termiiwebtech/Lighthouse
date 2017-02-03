<?php /* Smarty version Smarty-3.1.19, created on 2017-02-03 07:07:23
         compiled from "C:\xaampp\htdocs\lighthouse\admin\templates\default\fieldgroups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136695894727b0c6f77-47148960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36ee28feb3d24aaf0942022b2f04d0017df622ff' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\admin\\templates\\default\\fieldgroups.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136695894727b0c6f77-47148960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageAction' => 0,
    'item' => 0,
    'items' => 0,
    'itemName' => 0,
    'core' => 0,
    'language' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5894727b6ed288_47088686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5894727b6ed288_47088686')) {function content_5894727b6ed288_47088686($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radio_switcher')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/intelli_plugins\\function.html_radio_switcher.php';
?><form method="post" class="sap-form form-horizontal">
	<?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

	<div class="wrap-list">
		<div class="wrap-group">
			<div class="wrap-group-heading">
				<h4><?php echo iaSmarty::lang(array('key'=>'options'),$_smarty_tpl);?>
</h4>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'name'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php if (iaCore::ACTION_ADD==$_smarty_tpl->tpl_vars['pageAction']->value) {?>
						<input type="text" name="name" id="input-name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
						<p class="help-block"><?php echo iaSmarty::lang(array('key'=>'unique_name'),$_smarty_tpl);?>
</p>
					<?php } else { ?>
						<input type="text" class="disabled" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" disabled>
						<input type="hidden" name="name" id="input-name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
					<?php }?>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'item'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php if (iaCore::ACTION_ADD==$_smarty_tpl->tpl_vars['pageAction']->value) {?>
						<select name="item" id="input-item">
							<option value=""><?php echo iaSmarty::lang(array('key'=>'_select_'),$_smarty_tpl);?>
</option>
							<?php  $_smarty_tpl->tpl_vars['itemName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemName']->key => $_smarty_tpl->tpl_vars['itemName']->value) {
$_smarty_tpl->tpl_vars['itemName']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['itemName']->value;?>
"<?php if (isset($_POST['item'])&&$_POST['item']==$_smarty_tpl->tpl_vars['itemName']->value||isset($_GET['item'])&&$_GET['item']==$_smarty_tpl->tpl_vars['itemName']->value) {?> selected<?php }?>><?php echo iaSmarty::lang(array('key'=>$_smarty_tpl->tpl_vars['itemName']->value,'default'=>$_smarty_tpl->tpl_vars['itemName']->value),$_smarty_tpl);?>
</option>
							<?php } ?>
						</select>
					<?php } else { ?>
						<select class="disabled" disabled><option><?php echo iaSmarty::lang(array('key'=>$_smarty_tpl->tpl_vars['item']->value['item']),$_smarty_tpl);?>
</option></select>
						<input type="hidden" name="item" id="input-item" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['item'];?>
">
					<?php }?>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'view_as_tab'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php echo smarty_function_html_radio_switcher(array('value'=>(($tmp = @$_smarty_tpl->tpl_vars['item']->value['tabview'])===null||$tmp==='' ? 0 : $tmp),'name'=>'tabview'),$_smarty_tpl);?>

				</div>
			</div>

			<div class="row" id="js-tab-container">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'tab_container'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<input type="hidden" id="tabcontainer" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['tabcontainer'], ENT_QUOTES, 'UTF-8', true);?>
">
					<select name="tabcontainer" id="js-fieldgroup-selectbox">
						<option value=""><?php echo iaSmarty::lang(array('key'=>'_select_'),$_smarty_tpl);?>
</option>
					</select>
				</div>
			</div>

			<div class="row" id="js-collapsible">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'collapsible'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php echo smarty_function_html_radio_switcher(array('value'=>(($tmp = @$_smarty_tpl->tpl_vars['item']->value['collapsible'])===null||$tmp==='' ? 0 : $tmp),'name'=>'collapsible'),$_smarty_tpl);?>

				</div>
			</div>

			<div class="row" id="js-collapsed">
				<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'collapsed'),$_smarty_tpl);?>
</label>

				<div class="col col-lg-4">
					<?php echo smarty_function_html_radio_switcher(array('value'=>(($tmp = @$_smarty_tpl->tpl_vars['item']->value['collapsed'])===null||$tmp==='' ? 0 : $tmp),'name'=>'collapsed'),$_smarty_tpl);?>

				</div>
			</div>

			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
				<div class="row">
					<label class="col col-lg-2 control-label"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
 <?php echo iaSmarty::lang(array('key'=>'title'),$_smarty_tpl);?>
</label>

					<div class="col col-lg-4">
						<input type="text" name="titles[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]" value="<?php if (isset($_POST['titles'][$_smarty_tpl->tpl_vars['code']->value])) {?><?php echo htmlspecialchars($_POST['titles'][$_smarty_tpl->tpl_vars['code']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['item']->value['titles'][$_smarty_tpl->tpl_vars['code']->value])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['titles'][$_smarty_tpl->tpl_vars['code']->value];?>
<?php }?>">
					</div>
				</div>
				<div class="row">
					<label class="col col-lg-2 control-label"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
 <?php echo iaSmarty::lang(array('key'=>'description'),$_smarty_tpl);?>
</label>

					<div class="col col-lg-4">
						<textarea id="description[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]" rows="6" name="description[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]"><?php if (isset($_POST['description'][$_smarty_tpl->tpl_vars['code']->value])) {?><?php echo htmlspecialchars($_POST['description'][$_smarty_tpl->tpl_vars['code']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['item']->value['description'][$_smarty_tpl->tpl_vars['code']->value])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['description'][$_smarty_tpl->tpl_vars['code']->value];?>
<?php }?></textarea>
					</div>
				</div>
			<?php } ?>
		</div>

		<?php echo $_smarty_tpl->getSubTemplate ('fields-system.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</form>

<?php echo iaSmarty::ia_add_media(array('files'=>'js:admin/fieldgroups'),$_smarty_tpl);?>
<?php }} ?>
