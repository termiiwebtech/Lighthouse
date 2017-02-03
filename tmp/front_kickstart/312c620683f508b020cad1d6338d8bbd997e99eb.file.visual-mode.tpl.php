<?php /* Smarty version Smarty-3.1.19, created on 2017-02-02 09:46:02
         compiled from "C:\xaampp\htdocs\lighthouse\templates\common\visual-mode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45525893462aa483a8-57200080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '312c620683f508b020cad1d6338d8bbd997e99eb' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\templates\\common\\visual-mode.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45525893462aa483a8-57200080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5893462aa77a57_97069594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5893462aa77a57_97069594')) {function content_5893462aa77a57_97069594($_smarty_tpl) {?>

<input type="hidden" id="js-config-admin-page" value="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['admin_page'];?>
">

<div class="sb-slide vm-bar">
	<div class="vm-bar__title">Visual mode</div>
	<a class="vm-bar__exit" href="?manage_exit=y" title="<?php echo iaSmarty::lang(array('key'=>'exit'),$_smarty_tpl);?>
"><span class="v-icon v-icon--exit"></span> <?php echo iaSmarty::lang(array('key'=>'exit'),$_smarty_tpl);?>
</a>
</div>

<div class="sb-slidebar sb-left">
	<div class="vm-config">
		<div class="vm-spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>

		<input type="hidden" id="js-object" value="">

		<div class="vm-config__item vm-config__item--hidden vm-config__item--position" data-name="">
			<div class="vm-config__item__title"><span class="v-icon v-icon--columns"></span> <?php echo iaSmarty::lang(array('key'=>'edit_position'),$_smarty_tpl);?>
: <b></b></div>

			<form action="" class="vm-form">
				<div class="vm-control-group">
					<label class="vm-control-label" for="pos-visible-on-page">
						<?php echo iaSmarty::lang(array('key'=>'show_on_this_page'),$_smarty_tpl);?>

					</label>

					<div class="vm-controls">
						<div class="vm-checkbox">
							<i class="v-icon v-icon--square"></i>
							<input type="checkbox" id="pos-visible-on-page" name="pos-visible-on-page">
						</div>
					</div>
				</div>
				
				<div class="vm-control-group">
					<label class="vm-control-label" for="pos-visible-everywhere">
						<?php echo iaSmarty::lang(array('key'=>'show_on_all_pages'),$_smarty_tpl);?>

					</label>

					<div class="vm-controls">
						<select class="vm-select input-block-level" id="pos-visible-everywhere" name="pos-visible-everywhere">
							<option value="1"><?php echo iaSmarty::lang(array('key'=>'show_everywhere'),$_smarty_tpl);?>
</option>
							<option value="0"><?php echo iaSmarty::lang(array('key'=>'hide_everywhere'),$_smarty_tpl);?>
</option>
						</select>
					</div>
				</div>
				<div class="vm-actions">
					<button type="submit" class="js-config-save vm-btn" data-type="positions"><?php echo iaSmarty::lang(array('key'=>'save'),$_smarty_tpl);?>
</button>
					<button type="reset" class="js-config-close vm-btn pull-right"><?php echo iaSmarty::lang(array('key'=>'cancel'),$_smarty_tpl);?>
</button>
				</div>
			</form>
		</div>

		<div class="vm-config__item vm-config__item--hidden vm-config__item--block">
			<div class="vm-config__item__title"><span class="v-icon v-icon--th-large"></span> <?php echo iaSmarty::lang(array('key'=>'edit_block'),$_smarty_tpl);?>
: <b></b></div>

			<form action="" class="vm-form">
				<div class="vm-control-group">
					<label class="vm-control-label" for="block-visible-on-page">
						<?php echo iaSmarty::lang(array('key'=>'show_on_this_page'),$_smarty_tpl);?>

					</label>

					<div class="vm-controls">
						<div class="vm-checkbox">
							<i class="v-icon v-icon--square"></i>
							<input type="checkbox" id="block-visible-on-page" name="block-visible-on-page">
						</div>
					</div>
				</div>
				
				<div class="vm-control-group">
					<label class="vm-control-label" for="block-visible-everywhere">
						<?php echo iaSmarty::lang(array('key'=>'show_on_all_pages'),$_smarty_tpl);?>

					</label>

					<div class="vm-controls">
						<select class="vm-select input-block-level" id="block-visible-everywhere" name="block-visible-everywhere">
							<option value="1"><?php echo iaSmarty::lang(array('key'=>'show_everywhere'),$_smarty_tpl);?>
</option>
							<option value="0"><?php echo iaSmarty::lang(array('key'=>'hide_everywhere'),$_smarty_tpl);?>
</option>
						</select>
					</div>
				</div>

				

				<div class="vm-actions">
					<button type="submit" class="js-config-save vm-btn" data-type="blocks"><?php echo iaSmarty::lang(array('key'=>'save'),$_smarty_tpl);?>
</button>
					<button type="reset" class="js-config-close vm-btn pull-right"><?php echo iaSmarty::lang(array('key'=>'cancel'),$_smarty_tpl);?>
</button>
				</div>
			</form>
		</div>
		
		
	</div>
</div><?php }} ?>
