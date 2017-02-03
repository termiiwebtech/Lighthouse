<?php /* Smarty version Smarty-3.1.19, created on 2017-02-03 07:30:29
         compiled from "C:\xaampp\htdocs\lighthouse\plugins\personal_blog\templates\front\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2674589477e5cd58c1-29955069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c46ad14c13503d0da310816a594dffddd96ae31' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\plugins\\personal_blog\\templates\\front\\manage.tpl',
      1 => 1447219206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2674589477e5cd58c1-29955069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'tags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589477e61481c5_54250322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589477e61481c5_54250322')) {function content_589477e61481c5_54250322($_smarty_tpl) {?><div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#tab-common"><span><?php echo iaSmarty::lang(array('key'=>'common'),$_smarty_tpl);?>
</span></a></li>
	</ul>
	<div class="tab-content ia-form">
		<div id="tab-common" class="tab-pane active">
			<form method="post" enctype="multipart/form-data" class="ia-form">
				<?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>


				<div class="fieldset">
					<div class="fieldset__header"><?php echo iaSmarty::lang(array('key'=>'general'),$_smarty_tpl);?>
</div>
					<div class="fieldset__content">
						<div class="form-group">
							<label for="input-title"><?php echo iaSmarty::lang(array('key'=>'title'),$_smarty_tpl);?>
</label>
							<input class="form-control" type="text" name="title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" id="input-title">
						</div>

						<div class="form-group">
							<label for="input-alias"><?php echo iaSmarty::lang(array('key'=>'title_alias'),$_smarty_tpl);?>
</label>
							<input class="form-control" type="text" name="alias" id="input-alias" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['alias'])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
<?php }?>">
							<p class="help-block text-break-word" id="title_box" style="display: none;"><?php echo iaSmarty::lang(array('key'=>'page_url_will_be'),$_smarty_tpl);?>
: <span id="title_url" class="text-danger"><?php echo @constant('IA_URL');?>
</span></p>
						</div>

						<div class="form-group">
							<label for="body"><?php echo iaSmarty::lang(array('key'=>'body'),$_smarty_tpl);?>
</label>
							<?php echo iaSmarty::ia_wysiwyg(array('name'=>'body','value'=>$_smarty_tpl->tpl_vars['item']->value['body']),$_smarty_tpl);?>

						</div>

						<div class="form-group">
							<label for="input-tag"><?php echo iaSmarty::lang(array('key'=>'tags'),$_smarty_tpl);?>
</label>
							<input class="form-control" type="text" name="tags" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tags']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="input-tag">
							<p class="help-block text-break-word" id="title_box"><?php echo iaSmarty::lang(array('key'=>'separate_with_comma_or_enter'),$_smarty_tpl);?>
</p>
						</div>

						<div class="form-group">
							<label for="input-image"><?php echo iaSmarty::lang(array('key'=>'image'),$_smarty_tpl);?>
</label>

							<?php if (isset($_smarty_tpl->tpl_vars['item']->value['image'])&&$_smarty_tpl->tpl_vars['item']->value['image']) {?>
								<div class="thumbnail">
									<div class="thumbnail__actions">
										<button class="btn btn-danger btn-sm js-delete-file" data-field="image" data-item="blog_entries" data-item-id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" data-picture-path="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" title="<?php echo iaSmarty::lang(array('key'=>'delete'),$_smarty_tpl);?>
"><span class="fa fa-times"></span></button>
									</div>

									<a href="<?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['item']->value['image'],'fullimage'=>true,'url'=>true),$_smarty_tpl);?>
" rel="ia_lightbox[image]">
										<?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['item']->value['image']),$_smarty_tpl);?>

									</a>

									<input type="hidden" name="image[path]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
">
								</div>
							<?php }?>

							<div class="input-group js-files">
								<span class="input-group-btn">
									<span class="btn btn-primary btn-file">
										<?php echo iaSmarty::lang(array('key'=>'browse'),$_smarty_tpl);?>
 <input type="file" name="image" id="field_image">
									</span>
								</span>
								<input type="text" class="form-control js-file-name" readonly value="<?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
<?php }?>">
							</div>
						</div>
					</div>
				</div>

				<?php echo $_smarty_tpl->getSubTemplate ('captcha.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


				<div class="fieldset__actions">
					<button type="submit" name="data-blog-entry" class="btn btn-primary"><?php echo iaSmarty::lang(array('key'=>'save'),$_smarty_tpl);?>
</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php echo iaSmarty::ia_add_media(array('files'=>'tagsinput, js:_IA_URL_plugins/personal_blog/js/manage'),$_smarty_tpl);?>
<?php }} ?>
