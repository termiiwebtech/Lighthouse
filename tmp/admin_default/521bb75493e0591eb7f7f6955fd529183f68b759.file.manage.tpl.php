<?php /* Smarty version Smarty-3.1.19, created on 2017-02-02 10:16:29
         compiled from "C:\xaampp\htdocs\lighthouse\plugins\personal_blog\templates\admin\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198058934d4de44a11-60799155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '521bb75493e0591eb7f7f6955fd529183f68b759' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\plugins\\personal_blog\\templates\\admin\\manage.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198058934d4de44a11-60799155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'id' => 0,
    'core' => 0,
    'code' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58934d4df21ce6_18471005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58934d4df21ce6_18471005')) {function content_58934d4df21ce6_18471005($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_html_file')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/intelli_plugins\\function.ia_html_file.php';
?><form method="post" enctype="multipart/form-data" class="sap-form form-horizontal">
	<?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>


	<div class="wrap-list">
		<div class="wrap-group">
			<div class="wrap-group-heading">
				<h4><?php echo iaSmarty::lang(array('key'=>'general'),$_smarty_tpl);?>
</h4>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="input-title"><?php echo iaSmarty::lang(array('key'=>'title'),$_smarty_tpl);?>
 <?php echo iaSmarty::lang(array('key'=>'field_required'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-4">
					<input type="text" name="title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" id="input-title">
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="input-alias"><?php echo iaSmarty::lang(array('key'=>'title_alias'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-4">
					<input type="text" name="alias" id="input-alias" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['alias'])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
<?php }?>">
					<p class="help-block text-break-word" id="title_box" style="display: none;"><?php echo iaSmarty::lang(array('key'=>'page_url_will_be'),$_smarty_tpl);?>
: <span id="title_url" class="text-danger"><?php echo @constant('IA_URL');?>
</span></p>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="body"><?php echo iaSmarty::lang(array('key'=>'body'),$_smarty_tpl);?>
 <?php echo iaSmarty::lang(array('key'=>'field_required'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-8">
					<?php echo iaSmarty::ia_wysiwyg(array('name'=>'body','value'=>$_smarty_tpl->tpl_vars['item']->value['body']),$_smarty_tpl);?>

				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="input-tag"><?php echo iaSmarty::lang(array('key'=>'tags'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-4">
					<input type="text" name="tags" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['tags'], ENT_QUOTES, 'UTF-8', true);?>
" id="input-tag">
					<p class="help-block text-break-word" id="title_box"><?php echo iaSmarty::lang(array('key'=>'separate_with_comma_or_enter'),$_smarty_tpl);?>
</p>
				</div>
			</div>

			<div class="row">
				<label class="col col-lg-2 control-label" for="input-image"><?php echo iaSmarty::lang(array('key'=>'image'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-4">
					<?php if (isset($_smarty_tpl->tpl_vars['item']->value['image'])&&$_smarty_tpl->tpl_vars['item']->value['image']) {?>
					<div class="input-group thumbnail thumbnail-single with-actions">
						<a href="<?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['item']->value['image'],'fullimage'=>true,'url'=>true),$_smarty_tpl);?>
" rel="ia_lightbox">
							<?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['item']->value['image']),$_smarty_tpl);?>

						</a>

						<div class="caption">
							<a class="btn btn-small btn-danger" href="javascript:void(0);" title="<?php echo iaSmarty::lang(array('key'=>'delete'),$_smarty_tpl);?>
" onclick="return intelli.admin.removeFile('<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
',this,'blog_entries','image','<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')"><i class="i-remove-sign"></i></a>
						</div>
					</div>
					<?php }?>

					<?php echo smarty_function_ia_html_file(array('name'=>'image','id'=>'input-image'),$_smarty_tpl);?>

				</div>
			</div>
		</div>

		<?php $_smarty_tpl->_capture_stack[0][] = array('systems', null, 'fieldset_before'); ob_start(); ?>
			<div class="row">
				<label class="col col-lg-2 control-label" for="input-language"><?php echo iaSmarty::lang(array('key'=>'language'),$_smarty_tpl);?>
</label>
				<div class="col col-lg-4">
					<select name="lang" id="input-language"<?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])==1) {?> disabled<?php }?>>
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['lang']==$_smarty_tpl->tpl_vars['code']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, array("$_capture_buffer" => ob_get_contents()), true);
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php echo $_smarty_tpl->getSubTemplate ('fields-system.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('datetime'=>true), 0);?>


	</div>
</form>
<?php echo iaSmarty::ia_add_media(array('files'=>'tagsinput, js:_IA_URL_plugins/personal_blog/js/manage'),$_smarty_tpl);?>
<?php }} ?>
