<?php /* Smarty version Smarty-3.1.19, created on 2017-02-03 06:12:22
         compiled from "C:\xaampp\htdocs\lighthouse\admin\templates\default\field-type-content-manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1360758946596659267-86856211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbec5c9a431e51674ffdbb11fbaf2bdc6749435e' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\admin\\templates\\default\\field-type-content-manage.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1360758946596659267-86856211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'fieldName' => 0,
    'field_before' => 0,
    'item' => 0,
    'type' => 0,
    'name' => 0,
    'annotation' => 0,
    'value' => 0,
    'default_date' => 0,
    'id' => 0,
    'entry' => 0,
    'i' => 0,
    'core' => 0,
    'max_num' => 0,
    '_field' => 0,
    '_values' => 0,
    '_value' => 0,
    'radios' => 0,
    'checkboxes' => 0,
    'field_after' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58946596d95617_16002319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58946596d95617_16002319')) {function content_58946596d95617_16002319($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_html_file')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/intelli_plugins\\function.ia_html_file.php';
if (!is_callable('smarty_function_html_options')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_radios')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/plugins\\function.html_radios.php';
if (!is_callable('smarty_function_html_checkboxes')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/plugins\\function.html_checkboxes.php';
?><?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['type'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['fieldName'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['name'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable("field_".((string)$_smarty_tpl->tpl_vars['fieldName']->value), null, 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['field_before']->value[$_smarty_tpl->tpl_vars['fieldName']->value])) {?><?php echo $_smarty_tpl->tpl_vars['field_before']->value[$_smarty_tpl->tpl_vars['fieldName']->value];?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['fieldName']->value])&&$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['fieldName']->value]) {?>
	<?php if (iaField::CHECKBOX==$_smarty_tpl->tpl_vars['type']->value) {?>
		<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['fieldName']->value]), null, 0);?>
	<?php } elseif (in_array($_smarty_tpl->tpl_vars['type']->value,array(iaField::IMAGE,iaField::PICTURES,iaField::STORAGE))) {?>
		<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['fieldName']->value]), null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['fieldName']->value], null, 0);?>
	<?php }?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['default'], null, 0);?>
<?php }?>

<div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
_fieldzone" class="row <?php echo $_smarty_tpl->tpl_vars['field']->value['relation'];?>
">

	<label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><?php echo iaSmarty::lang(array('key'=>'field_required'),$_smarty_tpl);?>
<?php }?>
		<?php if (iaField::PICTURES==$_smarty_tpl->tpl_vars['type']->value||iaField::IMAGE==$_smarty_tpl->tpl_vars['type']->value) {?>
			<span class="help-block">
				<?php echo iaSmarty::lang(array('key'=>'thumb_dimensions'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['field']->value['thumb_width'];?>
x<?php echo $_smarty_tpl->tpl_vars['field']->value['thumb_height'];?>
<br>
				<?php echo iaSmarty::lang(array('key'=>'image_dimensions'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['field']->value['image_width'];?>
x<?php echo $_smarty_tpl->tpl_vars['field']->value['image_height'];?>

			</span>
		<?php }?>
		<?php ob_start();?><?php echo iaSmarty::lang(array('key'=>((string)$_smarty_tpl->tpl_vars['name']->value)."_annotation",'default'=>''),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['annotation'] = new Smarty_variable($_tmp1, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['annotation']->value) {?><br><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['annotation']->value;?>
</span><?php }?>
	</label>

	<?php if (iaField::TEXTAREA!=$_smarty_tpl->tpl_vars['type']->value) {?>
		<div class="col col-lg-4">
	<?php } else { ?>
		<div class="col col-lg-8">
	<?php }?>

	<?php switch ($_smarty_tpl->tpl_vars['type']->value){?>
<?php case iaField::TEXT:?>
			<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" value="<?php if ($_smarty_tpl->tpl_vars['value']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['field']->value['empty_field'];?>
<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['length'];?>
">

		<?php break;?><?php case iaField::DATE:?>
			<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['default_date'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value&&!in_array($_smarty_tpl->tpl_vars['value']->value,array('0000-00-00','0000-00-00 00:00:00')) ? $_tmp2 : '', null, 0);?>

			<div class="input-group date" id="field_date_<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
">
				<input type="text" class="js-datepicker" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['default_date']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['timepicker']) {?> data-date-show-time="true" data-date-format="yyyy-mm-dd H:i:s"<?php } else { ?>data-date-format="yyyy-mm-dd"<?php }?>>
				<span class="input-group-addon js-datepicker-toggle"><i class="i-calendar"></i></span>
			</div>

		<?php break;?><?php case iaField::NUMBER:?>
			<input class="js-filter-numeric" type="text" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" value="<?php if ($_smarty_tpl->tpl_vars['value']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['field']->value['empty_field'];?>
<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['length'];?>
">

		<?php break;?><?php case iaField::URL:?>
			<?php if (!is_array($_smarty_tpl->tpl_vars['value']->value)) {?>
				<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(explode('|',$_smarty_tpl->tpl_vars['value']->value), null, 0);?>
			<?php }?>
			<div class="row control-group-inner">
				<div class="col col-lg-6">
					<label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
[url]" class="control-label"><?php echo iaSmarty::lang(array('key'=>'url'),$_smarty_tpl);?>
:</label>
					<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
[url]" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value['url'])) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
<?php } elseif (!empty($_smarty_tpl->tpl_vars['value']->value[0])) {?><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
<?php } else { ?>http://<?php }?>">
				</div>

				<div class="col col-lg-6">
					<label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
[title]" class="control-label"><?php echo iaSmarty::lang(array('key'=>'title'),$_smarty_tpl);?>
:</label>
					<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
[title]" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value['title'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php } elseif (!empty($_smarty_tpl->tpl_vars['value']->value[1])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value[1], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
					<p class="help-block">(<?php echo iaSmarty::lang(array('key'=>'optional'),$_smarty_tpl);?>
)</p>
				</div>
			</div>

		<?php break;?><?php case iaField::TEXTAREA:?>
			<?php if (!$_smarty_tpl->tpl_vars['field']->value['use_editor']) {?>
				<textarea name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" rows="8" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
				<?php if ($_smarty_tpl->tpl_vars['field']->value['length']>0) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmarty::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function($)
{
	$('#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
').dodosTextCounter(<?php echo $_smarty_tpl->tpl_vars['field']->value['length'];?>
,
	{
		counterDisplayElement: 'span',
		counterDisplayClass: 'textcounter_<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
',
		addLineBreak: false
	});

	$('.textcounter_<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
').wrap('<p class="help-block text-right">').addClass('textcounter').after(' ' + _t('chars_left'));
});
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php echo iaSmarty::ia_print_js(array('files'=>'jquery/plugins/jquery.textcounter'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<?php echo iaSmarty::ia_wysiwyg(array('value'=>$_smarty_tpl->tpl_vars['value']->value,'name'=>$_smarty_tpl->tpl_vars['field']->value['name']),$_smarty_tpl);?>

			<?php }?>

		<?php break;?><?php case iaField::IMAGE:?>
			<?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
				<div class="input-group thumbnail thumbnail-single with-actions">
					<a href="<?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['value']->value['path'],'url'=>true,'fullimage'=>true),$_smarty_tpl);?>
" rel="ia_lightbox[<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
]">
						<?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['value']->value['path']),$_smarty_tpl);?>

					</a>

					<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[path]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['path'];?>
">

					<div class="caption">
						<a class="btn btn-small btn-danger" href="javascript:void(0);" title="<?php echo iaSmarty::lang(array('key'=>'delete'),$_smarty_tpl);?>
" onclick="return intelli.admin.removeFile('<?php echo $_smarty_tpl->tpl_vars['value']->value['path'];?>
',this,'<?php echo $_smarty_tpl->tpl_vars['field']->value['item'];?>
','<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')"><i class="i-remove-sign"></i></a>
					</div>
				</div>

				<?php echo smarty_function_ia_html_file(array('name'=>((string)$_smarty_tpl->tpl_vars['fieldName']->value)."[]",'id'=>$_smarty_tpl->tpl_vars['name']->value,'value'=>$_smarty_tpl->tpl_vars['value']->value['path']),$_smarty_tpl);?>

			<?php } else { ?>
				<?php echo smarty_function_ia_html_file(array('name'=>((string)$_smarty_tpl->tpl_vars['fieldName']->value)."[]",'id'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl);?>

			<?php }?>

		<?php break;?><?php case iaField::PICTURES:?>
		<?php case iaField::STORAGE:?>
			<?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
				<div class="uploads-list" id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
_upload_list">
					<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['entry']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['entry']->key;
 $_smarty_tpl->tpl_vars['entry']->index++;
?>
						<div class="uploads-list-item">
							<?php if ('pictures'==$_smarty_tpl->tpl_vars['type']->value) {?>
								<a class="uploads-list-item__thumb" href="<?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['entry']->value['path'],'url'=>true,'fullimage'=>true),$_smarty_tpl);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" rel="ia_lightbox[<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
]"><?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['entry']->value['path']),$_smarty_tpl);?>
</a>
							<?php } else { ?>
								<span class="uploads-list-item__thumb uploads-list-item__thumb--file"><i class="i-file-2"></i></span>
							<?php }?>
							<div class="uploads-list-item__body">
								<div class="input-group">
									<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][title]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['entry']->index;?>
">
									<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][path]" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['path'];?>
">

									<span class="input-group-btn">
										<?php if ('pictures'==$_smarty_tpl->tpl_vars['type']->value) {?>
											<a class="btn btn-danger" href="javascript:void(0);" title="<?php echo iaSmarty::lang(array('key'=>'delete'),$_smarty_tpl);?>
" onclick="return intelli.admin.removeFile('<?php echo $_smarty_tpl->tpl_vars['entry']->value['path'];?>
', this, '<?php echo $_smarty_tpl->tpl_vars['field']->value['item'];?>
', '<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
', '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? '' : $tmp);?>
')"><i class=" i-remove-sign"></i></a>
										<?php } else { ?>
											<a class="btn btn-success uploads-list-item__img" href="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
uploads/<?php echo $_smarty_tpl->tpl_vars['entry']->value['path'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="i-box-add"></i></a>
											<a class="btn btn-danger js-file-delete" href="#" title="<?php echo iaSmarty::lang(array('key'=>'delete'),$_smarty_tpl);?>
" onclick="return intelli.admin.removeFile('<?php echo $_smarty_tpl->tpl_vars['entry']->value['path'];?>
', this, '<?php echo $_smarty_tpl->tpl_vars['field']->value['item'];?>
', '<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
', '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? '' : $tmp);?>
')"><i class="i-remove-sign"></i></a>
										<?php }?>
										<span class="btn btn-default uploads-list-item__drag-handle"><i class="i-list-2"></i></span>
									</span>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmarty::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function()
{
	var params = {
		handle: '.uploads-list-item__drag-handle'
	}

	intelli.sortable('<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
_upload_list', params);
});
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				<?php $_smarty_tpl->tpl_vars['max_num'] = new Smarty_variable(($_smarty_tpl->tpl_vars['field']->value['length']-count($_smarty_tpl->tpl_vars['value']->value)), null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['max_num'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['length'], null, 0);?>
			<?php }?>

			<?php echo smarty_function_ia_html_file(array('name'=>$_smarty_tpl->tpl_vars['fieldName']->value,'id'=>$_smarty_tpl->tpl_vars['fieldName']->value,'multiple'=>true,'max_num'=>$_smarty_tpl->tpl_vars['max_num']->value,'title'=>true),$_smarty_tpl);?>


		<?php break;?><?php case iaField::COMBO:?>
			<select name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
				<option value=""><?php echo iaSmarty::lang(array('key'=>'_select_'),$_smarty_tpl);?>
</option>
				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['field']->value['values'],'selected'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>

			</select>

			<?php if ('parent'==$_smarty_tpl->tpl_vars['field']->value['relation']&&$_smarty_tpl->tpl_vars['field']->value['children']) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array('order'=>5)); $_block_repeat=true; echo iaSmarty::ia_add_js(array('order'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function()
{
	$('<?php  $_smarty_tpl->tpl_vars['_values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_values']->_loop = false;
 $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_values']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_values']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_values']->key => $_smarty_tpl->tpl_vars['_values']->value) {
$_smarty_tpl->tpl_vars['_values']->_loop = true;
 $_smarty_tpl->tpl_vars['_field']->value = $_smarty_tpl->tpl_vars['_values']->key;
 $_smarty_tpl->tpl_vars['_values']->iteration++;
 $_smarty_tpl->tpl_vars['_values']->last = $_smarty_tpl->tpl_vars['_values']->iteration === $_smarty_tpl->tpl_vars['_values']->total;
?>#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone<?php if (!$_smarty_tpl->tpl_vars['_values']->last) {?>, <?php }?><?php } ?>').addClass('hide_<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
');
	$('#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
').on('change', function()
	{
		var value = $(this).val();
		$('.hide_<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
').hide();
		<?php  $_smarty_tpl->tpl_vars['_values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_values']->_loop = false;
 $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_values']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_values']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_values']->key => $_smarty_tpl->tpl_vars['_values']->value) {
$_smarty_tpl->tpl_vars['_values']->_loop = true;
 $_smarty_tpl->tpl_vars['_field']->value = $_smarty_tpl->tpl_vars['_values']->key;
 $_smarty_tpl->tpl_vars['_values']->iteration++;
 $_smarty_tpl->tpl_vars['_values']->last = $_smarty_tpl->tpl_vars['_values']->iteration === $_smarty_tpl->tpl_vars['_values']->total;
?>
		if ($.inArray(value, [<?php  $_smarty_tpl->tpl_vars['_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_value']->key => $_smarty_tpl->tpl_vars['_value']->value) {
$_smarty_tpl->tpl_vars['_value']->_loop = true;
 $_smarty_tpl->tpl_vars['_value']->iteration++;
 $_smarty_tpl->tpl_vars['_value']->last = $_smarty_tpl->tpl_vars['_value']->iteration === $_smarty_tpl->tpl_vars['_value']->total;
?>'<?php echo $_smarty_tpl->tpl_vars['_value']->value;?>
'<?php if (!$_smarty_tpl->tpl_vars['_value']->last) {?>,<?php }?><?php } ?>])!=-1) $('#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone').show();
		<?php } ?>
		$('fieldset').show().each(function(index, item)
		{
			if ($('.fieldset-wrapper', item).length > 0)
			{
				$('.fieldset-wrapper div.fieldzone:visible, .fieldset-wrapper div.fieldzone.regular', item).length == 0
					? $(this).hide()
					: $(this).show();
			}
		});
	}).change();
});
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array('order'=>5), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>

		<?php break;?><?php case iaField::RADIO:?>
			<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['values'])) {?>
				<?php echo smarty_function_html_radios(array('assign'=>'radios','name'=>$_smarty_tpl->tpl_vars['fieldName']->value,'options'=>$_smarty_tpl->tpl_vars['field']->value['values'],'selected'=>$_smarty_tpl->tpl_vars['value']->value,'separator'=>'</div>'),$_smarty_tpl);?>


				<div class="radio"><?php echo implode('<div class="radio">',$_smarty_tpl->tpl_vars['radios']->value);?>

			<?php }?>

			<?php if (iaField::RELATION_PARENT==$_smarty_tpl->tpl_vars['field']->value['relation']&&$_smarty_tpl->tpl_vars['field']->value['children']) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array('order'=>5)); $_block_repeat=true; echo iaSmarty::ia_add_js(array('order'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function()
{
	$('<?php  $_smarty_tpl->tpl_vars['_values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_values']->_loop = false;
 $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_values']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_values']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_values']->key => $_smarty_tpl->tpl_vars['_values']->value) {
$_smarty_tpl->tpl_vars['_values']->_loop = true;
 $_smarty_tpl->tpl_vars['_field']->value = $_smarty_tpl->tpl_vars['_values']->key;
 $_smarty_tpl->tpl_vars['_values']->iteration++;
 $_smarty_tpl->tpl_vars['_values']->last = $_smarty_tpl->tpl_vars['_values']->iteration === $_smarty_tpl->tpl_vars['_values']->total;
?>#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone<?php if (!$_smarty_tpl->tpl_vars['_values']->last) {?>, <?php }?><?php } ?>').addClass('hide_<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
');
	$('input[name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
"]').on('change', function()
	{
		var $this = $(this),
			value = $this.val();

		if ($this.is(':checked'))
		{
			<?php  $_smarty_tpl->tpl_vars['_values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_values']->_loop = false;
 $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_values']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_values']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_values']->key => $_smarty_tpl->tpl_vars['_values']->value) {
$_smarty_tpl->tpl_vars['_values']->_loop = true;
 $_smarty_tpl->tpl_vars['_field']->value = $_smarty_tpl->tpl_vars['_values']->key;
 $_smarty_tpl->tpl_vars['_values']->iteration++;
 $_smarty_tpl->tpl_vars['_values']->last = $_smarty_tpl->tpl_vars['_values']->iteration === $_smarty_tpl->tpl_vars['_values']->total;
?>
				if ($.inArray(value, [<?php  $_smarty_tpl->tpl_vars['_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_value']->key => $_smarty_tpl->tpl_vars['_value']->value) {
$_smarty_tpl->tpl_vars['_value']->_loop = true;
 $_smarty_tpl->tpl_vars['_value']->iteration++;
 $_smarty_tpl->tpl_vars['_value']->last = $_smarty_tpl->tpl_vars['_value']->iteration === $_smarty_tpl->tpl_vars['_value']->total;
?>'<?php echo $_smarty_tpl->tpl_vars['_value']->value;?>
'<?php if (!$_smarty_tpl->tpl_vars['_value']->last) {?>,<?php }?><?php } ?>])!=-1)
				{
					$('#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone').show();
				}
				else
				{
					$('#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone').hide();
				}
			<?php } ?>
		}
	}).change();
});
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array('order'=>5), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>

		<?php break;?><?php case iaField::CHECKBOX:?>
			<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['values'])) {?>
				<?php echo smarty_function_html_checkboxes(array('assign'=>'checkboxes','name'=>$_smarty_tpl->tpl_vars['fieldName']->value,'options'=>$_smarty_tpl->tpl_vars['field']->value['values'],'selected'=>$_smarty_tpl->tpl_vars['value']->value,'separator'=>'</div>'),$_smarty_tpl);?>


				<div class="checkbox"><?php echo implode('<div class="checkbox">',$_smarty_tpl->tpl_vars['checkboxes']->value);?>

			<?php }?>

			<?php if (iaField::RELATION_PARENT==$_smarty_tpl->tpl_vars['field']->value['relation']&&$_smarty_tpl->tpl_vars['field']->value['children']) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array('order'=>5)); $_block_repeat=true; echo iaSmarty::ia_add_js(array('order'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function()
{
	$('<?php  $_smarty_tpl->tpl_vars['_values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_values']->_loop = false;
 $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_values']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_values']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_values']->key => $_smarty_tpl->tpl_vars['_values']->value) {
$_smarty_tpl->tpl_vars['_values']->_loop = true;
 $_smarty_tpl->tpl_vars['_field']->value = $_smarty_tpl->tpl_vars['_values']->key;
 $_smarty_tpl->tpl_vars['_values']->iteration++;
 $_smarty_tpl->tpl_vars['_values']->last = $_smarty_tpl->tpl_vars['_values']->iteration === $_smarty_tpl->tpl_vars['_values']->total;
?>#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone<?php if (!$_smarty_tpl->tpl_vars['_values']->last) {?>, <?php }?><?php } ?>').addClass('hide_<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
');
	$('input[name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[]"]').on('change', function()
	{
		$('.hide_<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
').hide();

		$('input[type="checkbox"]:checked', '#type_fieldzone').each(function()
		{
			var value = $(this).val();

			<?php  $_smarty_tpl->tpl_vars['_values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_values']->_loop = false;
 $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_values']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_values']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_values']->key => $_smarty_tpl->tpl_vars['_values']->value) {
$_smarty_tpl->tpl_vars['_values']->_loop = true;
 $_smarty_tpl->tpl_vars['_field']->value = $_smarty_tpl->tpl_vars['_values']->key;
 $_smarty_tpl->tpl_vars['_values']->iteration++;
 $_smarty_tpl->tpl_vars['_values']->last = $_smarty_tpl->tpl_vars['_values']->iteration === $_smarty_tpl->tpl_vars['_values']->total;
?>
				if ($.inArray(value, [<?php  $_smarty_tpl->tpl_vars['_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_value']->key => $_smarty_tpl->tpl_vars['_value']->value) {
$_smarty_tpl->tpl_vars['_value']->_loop = true;
 $_smarty_tpl->tpl_vars['_value']->iteration++;
 $_smarty_tpl->tpl_vars['_value']->last = $_smarty_tpl->tpl_vars['_value']->iteration === $_smarty_tpl->tpl_vars['_value']->total;
?>'<?php echo $_smarty_tpl->tpl_vars['_value']->value;?>
'<?php if (!$_smarty_tpl->tpl_vars['_value']->last) {?>,<?php }?><?php } ?>])!=-1) $('#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone').show();
			<?php } ?>
		});
	}).change();
});
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array('order'=>5), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>

		<?php break;?><?php case iaField::TREE:?>
			<input type="text" id="label-<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" disabled>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" id="input-<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
">
			<div class="js-tree categories-tree" data-field="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" data-nodes="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['values'], ENT_QUOTES, 'UTF-8', true);?>
" data-multiple="<?php echo $_smarty_tpl->tpl_vars['field']->value['timepicker'];?>
"></div>
			<?php echo iaSmarty::ia_add_media(array('files'=>'tree'),$_smarty_tpl);?>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array('order'=>5)); $_block_repeat=true; echo iaSmarty::ia_add_js(array('order'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function()
{
	'use strict';

	$('.js-tree').each(function()
	{
		var data = $(this).data(),
			options = { core:{ data: data.nodes, multiple: data.multiple}};

		if (data.multiple) options.plugins = ['checkbox'];

		$(this).jstree(options)
		.on('changed.jstree', function(e, d)
		{
			var nodes = [], ids = [];
			for (var i = 0; i < d.selected.length; i++)
			{
				var node = d.instance.get_node(d.selected[i]);
				nodes.push(node.text.trim());
				ids.push(node.id);
			}

			var fieldName = $(this).data('field');

			$('#label-' + fieldName).val(nodes.join(', '));
			$('#input-' + fieldName).val(ids.join(', '));
		})
		.on('ready.jstree', function(e, d)
		{
			var nodes = $('#input-' + $(this).data('field')).val().split(',');
			d.instance.open_all();
			for (var i in nodes)
			{
				d.instance.select_node(nodes[i]);
			}
		})
	});
});
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array('order'=>5), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	</div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['field_after']->value[$_smarty_tpl->tpl_vars['fieldName']->value])) {?><?php echo $_smarty_tpl->tpl_vars['field_after']->value[$_smarty_tpl->tpl_vars['fieldName']->value];?>
<?php }?><?php }} ?>
