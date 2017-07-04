<?php
/* Smarty version 3.1.29, created on 2017-06-06 17:59:41
  from "C:\wamp\www\www.sihalife.second-hand.com\application\views\Administrator\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59368b1d18e434_76111163',
  'file_dependency' => 
  array (
    '0aacd5629781d06337308bc06eae007afba418ce' => 
    array (
      0 => 'C:\\wamp\\www\\www.sihalife.second-hand.com\\application\\views\\Administrator\\index.tpl',
      1 => 1491991183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Administrator/top.tpl' => 1,
    'file:Administrator/nav.tpl' => 1,
    'file:Administrator/index_nav_side.tpl' => 1,
    'file:Administrator/footer.tpl' => 1,
  ),
),false)) {
function content_59368b1d18e434_76111163 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Administrator/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- /. NAV TOP  -->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Administrator/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Administrator/index_nav_side.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Administrator/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <?php echo '<script'; ?>
 src="assets/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
      <!-- BOOTSTRAP SCRIPTS -->
    <?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
      <!-- CUSTOM SCRIPTS -->
    <?php echo '<script'; ?>
 src="assets/js/custom.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
