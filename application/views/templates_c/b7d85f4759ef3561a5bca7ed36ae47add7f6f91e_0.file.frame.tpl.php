<?php
/* Smarty version 3.1.29, created on 2016-11-07 03:37:55
  from "C:\wamp\www\lioncity.com\application\views\shared\frame.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_581fe903cd7439_88181470',
  'file_dependency' => 
  array (
    'b7d85f4759ef3561a5bca7ed36ae47add7f6f91e' => 
    array (
      0 => 'C:\\wamp\\www\\lioncity.com\\application\\views\\shared\\frame.tpl',
      1 => 1478486130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shared/head.tpl' => 1,
    'file:shared/ncvbar.tpl' => 1,
  ),
),false)) {
function content_581fe903cd7439_88181470 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:shared/ncvbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html>
<?php }
}
