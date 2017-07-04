<?php
/* Smarty version 3.1.29, created on 2017-02-17 05:22:30
  from "C:\wamp\www\www.sihalife.poker.com\application\views\shared\frame.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a67a868db834_13220720',
  'file_dependency' => 
  array (
    '4ec6cb602efbf15bc7877654cd2c642be2480749' => 
    array (
      0 => 'C:\\wamp\\www\\www.sihalife.poker.com\\application\\views\\shared\\frame.tpl',
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
function content_58a67a868db834_13220720 ($_smarty_tpl) {
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
