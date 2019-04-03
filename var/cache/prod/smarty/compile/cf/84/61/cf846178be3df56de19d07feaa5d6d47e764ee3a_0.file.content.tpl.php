<?php
/* Smarty version 3.1.33, created on 2019-04-02 22:53:47
  from '/var/www/html/admin909tlnzf3/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca3d9ebe2ece5_44281471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf846178be3df56de19d07feaa5d6d47e764ee3a' => 
    array (
      0 => '/var/www/html/admin909tlnzf3/themes/default/template/content.tpl',
      1 => 1554202274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca3d9ebe2ece5_44281471 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
