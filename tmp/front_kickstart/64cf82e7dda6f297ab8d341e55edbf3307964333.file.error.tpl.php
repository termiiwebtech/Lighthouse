<?php /* Smarty version Smarty-3.1.19, created on 2017-02-02 10:03:03
         compiled from "C:\xaampp\htdocs\lighthouse\templates\common\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3150858934a2718d959-76170857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64cf82e7dda6f297ab8d341e55edbf3307964333' => 
    array (
      0 => 'C:\\xaampp\\htdocs\\lighthouse\\templates\\common\\error.tpl',
      1 => 1455490436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3150858934a2718d959-76170857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58934a2720c3c1_11650228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58934a2720c3c1_11650228')) {function content_58934a2720c3c1_11650228($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_hooker')) include 'C:/xaampp/htdocs/lighthouse/includes/smarty/intelli_plugins\\function.ia_hooker.php';
?><?php if (iaView::ERROR_NOT_FOUND==$_smarty_tpl->tpl_vars['code']->value) {?>
	<div class="google-suggestions" id="google_suggestions">
		<script type="text/javascript">
			var GOOG_FIXURL_LANG = '<?php echo @constant('IA_LANGUAGE');?>
';
			var GOOG_FIXURL_SITE = '<?php echo @constant('IA_URL');?>
';
		</script>
		<script type="text/javascript" src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
	</div>
<?php }?>

<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontErrorPage'),$_smarty_tpl);?>
<?php }} ?>
