<?php /* Smarty version Smarty-3.1.19, created on 2017-02-03 06:09:58
         compiled from "C:\xaampp\htdocs\lighthouse\plugins\personal_blog\templates\front\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:974458946506e18785-74405767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72a4ec5f2016fb04279d33f393d61a705222b255' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\plugins\\personal_blog\\templates\\front\\index.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '974458946506e18785-74405767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog_entry' => 0,
    'core' => 0,
    'tags' => 0,
    'tag' => 0,
    'blog_entries' => 0,
    'tagsExist' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589465075bfe50_40824939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589465075bfe50_40824939')) {function content_589465075bfe50_40824939($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/plugins\\modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['blog_entry']->value)) {?>
	<p class="text-i text-fade-50"><?php echo iaSmarty::lang(array('key'=>'posted_on'),$_smarty_tpl);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['blog_entry']->value['date_added'],$_smarty_tpl->tpl_vars['core']->value['config']['date_format']);?>
 <?php echo iaSmarty::lang(array('key'=>'by'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['blog_entry']->value['fullname'];?>
</p>

	<?php if ($_smarty_tpl->tpl_vars['blog_entry']->value['image']) {?>
		<?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['blog_entry']->value['image'],'fullimage'=>true,'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['blog_entry']->value['title'], ENT_QUOTES, 'UTF-8', true),'class'=>'img-responsive m-b'),$_smarty_tpl);?>

	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['blog_entry']->value['body'];?>


	<div class="tags">
		<span class="fa fa-tags"></span>
		<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
			<?php echo iaSmarty::lang(array('key'=>'tags'),$_smarty_tpl);?>
:
			<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
?>
				<a href="<?php echo @constant('IA_URL');?>
tag/<?php echo $_smarty_tpl->tpl_vars['tag']->value['alias'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php if (!$_smarty_tpl->tpl_vars['tag']->last) {?>, <?php }?>
			<?php } ?>
		<?php } else { ?>
			<?php echo iaSmarty::lang(array('key'=>'no_tags'),$_smarty_tpl);?>

		<?php }?>
	</div>

	<hr>
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style">
		<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
		<a class="addthis_button_tweet"></a>
		<a class="addthis_button_pinterest_pinit"></a>
		<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
		<a class="addthis_counter addthis_pill_style"></a>
	</div>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5170da8b1f667e6d"></script>
	<!-- AddThis Button END -->
<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['blog_entries']->value) {?>
		<div class="ia-items blogroll">
			<?php  $_smarty_tpl->tpl_vars['blog_entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog_entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blog_entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog_entry']->key => $_smarty_tpl->tpl_vars['blog_entry']->value) {
$_smarty_tpl->tpl_vars['blog_entry']->_loop = true;
?>
				<div class="ia-item">
					<?php if ($_smarty_tpl->tpl_vars['blog_entry']->value['image']) {?>
						<a href="<?php echo @constant('IA_URL');?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog_entry']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['blog_entry']->value['alias'];?>
" class="ia-item__image"><?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['blog_entry']->value['image'],'title'=>$_smarty_tpl->tpl_vars['blog_entry']->value['title']),$_smarty_tpl);?>
</a>
					<?php }?>
					<div class="ia-item__content">
						<h4 class="ia-item__title">
							<a href="<?php echo @constant('IA_URL');?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog_entry']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['blog_entry']->value['alias'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog_entry']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
						</h4>
						<div class="ia-item__additional">
							<p><span class="fa fa-tags"></span>
							<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
								<?php $_smarty_tpl->tpl_vars['tagsExist'] = new Smarty_variable(0, null, 0);?>
								<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
?>
									<?php if ($_smarty_tpl->tpl_vars['blog_entry']->value['id']==$_smarty_tpl->tpl_vars['tag']->value['blog_id']) {?>
										<?php $_smarty_tpl->tpl_vars['tagsExist'] = new Smarty_variable($_smarty_tpl->tpl_vars['tagsExist']->value+1, null, 0);?>
									<?php }?>
								<?php } ?>
								<?php if ($_smarty_tpl->tpl_vars['tagsExist']->value!=0) {?>
									<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
?>
										<?php if ($_smarty_tpl->tpl_vars['blog_entry']->value['id']==$_smarty_tpl->tpl_vars['tag']->value['blog_id']) {?>
											<a href="<?php echo @constant('IA_URL');?>
tag/<?php echo $_smarty_tpl->tpl_vars['tag']->value['alias'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
										<?php }?>
									<?php } ?>
								<?php } else { ?>
									<?php echo iaSmarty::lang(array('key'=>'no_tags'),$_smarty_tpl);?>

								<?php }?>

							<?php } else { ?>
								<?php echo iaSmarty::lang(array('key'=>'no_tags'),$_smarty_tpl);?>

							<?php }?>
							</p>
							<p><?php echo iaSmarty::lang(array('key'=>'posted_on'),$_smarty_tpl);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['blog_entry']->value['date_added'],$_smarty_tpl->tpl_vars['core']->value['config']['date_format']);?>
 <?php echo iaSmarty::lang(array('key'=>'by'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['blog_entry']->value['fullname'];?>
</p>
						</div>
						<div class="ia-item__body"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['blog_entry']->value['body']),$_smarty_tpl->tpl_vars['core']->value['config']['blog_max'],'...');?>
</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<?php echo iaSmarty::pagination(array('aTotal'=>$_smarty_tpl->tpl_vars['pagination']->value['total'],'aTemplate'=>$_smarty_tpl->tpl_vars['pagination']->value['template'],'aItemsPerPage'=>$_smarty_tpl->tpl_vars['core']->value['config']['blog_number'],'aNumPageItems'=>5),$_smarty_tpl);?>

	<?php } else { ?>
		<div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'no_blog_entries'),$_smarty_tpl);?>
</div>
	<?php }?>
<?php }?><?php }} ?>
