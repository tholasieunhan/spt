<?php /* Smarty version Smarty-3.1.19, created on 2014-09-25 02:40:02
         compiled from "E:\wamp\www\spt\spt\spt\admin9973\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1948054231e12630bb4-49969291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '036b4aecf4cc2c78948aaf85da5f9ef4a9c51cb4' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\admin9973\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1408778849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1948054231e12630bb4-49969291',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54231e12636de2_24912568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54231e12636de2_24912568')) {function content_54231e12636de2_24912568($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
