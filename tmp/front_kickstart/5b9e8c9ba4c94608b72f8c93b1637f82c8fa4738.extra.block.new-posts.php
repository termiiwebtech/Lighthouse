<?php /* Smarty version Smarty-3.1.19, created on 2017-02-02 09:46:02
         compiled from "extra:personal_blog/block.new-posts" */ ?>
<?php /*%%SmartyHeaderCode:314065893462a49c242-51772700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b9e8c9ba4c94608b72f8c93b1637f82c8fa4738' => 
    array (
      0 => 'extra:personal_blog/block.new-posts',
      1 => 1455490436,
      2 => 'extra',
    ),
  ),
  'nocache_hash' => '314065893462a49c242-51772700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_blog_entries' => 0,
    'one_blog_entry' => 0,
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5893462a4fa469_28398901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5893462a4fa469_28398901')) {function content_5893462a4fa469_28398901($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/plugins\\modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['block_blog_entries']->value)&&$_smarty_tpl->tpl_vars['block_blog_entries']->value) {?>
	<div class="new-blog-posts">
		<?php  $_smarty_tpl->tpl_vars['one_blog_entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_blog_entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_blog_entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['one_blog_entry']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['one_blog_entry']->key => $_smarty_tpl->tpl_vars['one_blog_entry']->value) {
$_smarty_tpl->tpl_vars['one_blog_entry']->_loop = true;
 $_smarty_tpl->tpl_vars['one_blog_entry']->iteration++;
?>
			<div class="media">
				<?php if ($_smarty_tpl->tpl_vars['one_blog_entry']->value['image']) {?>
					<a href="<?php echo @constant('IA_URL');?>
blog/<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['alias'];?>
" class="media-object pull-left"><?php echo iaSmarty::printImage(array('imgfile'=>$_smarty_tpl->tpl_vars['one_blog_entry']->value['image'],'width'=>'60','title'=>htmlspecialchars($_smarty_tpl->tpl_vars['one_blog_entry']->value['title'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
</a>
				<?php }?>
				<div class="media-body">
					<h5 class="media-heading">
						<a href="<?php echo @constant('IA_URL');?>
blog/<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['alias'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['one_blog_entry']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
					</h5>
					<p class="text-fade-50"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one_blog_entry']->value['date_added'],$_smarty_tpl->tpl_vars['core']->value['config']['date_format']);?>
 <?php echo iaSmarty::lang(array('key'=>'by'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['fullname'];?>
</p>
					<p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['one_blog_entry']->value['body']),50,'...');?>
</p>
				</div>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['one_blog_entry']->iteration==$_smarty_tpl->tpl_vars['core']->value['config']['blog_number_new_block']) {?>
				<?php break 1?>
			<?php }?>
		<?php } ?>
	</div>

	<p>
		<a href="<?php echo @constant('IA_URL');?>
blog/"><?php echo iaSmarty::lang(array('key'=>'view_all_blog_entries'),$_smarty_tpl);?>
 &rarr;</a>
	</p>
<?php } else { ?>
	<div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'no_blog_entries'),$_smarty_tpl);?>
</div>
<?php }?><?php }} ?>
