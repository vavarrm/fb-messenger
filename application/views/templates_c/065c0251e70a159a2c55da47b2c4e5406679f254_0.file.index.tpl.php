<?php
/* Smarty version 3.1.29, created on 2017-06-07 09:52:48
  from "C:\wamp\www\www.sihalife.food.com\application\views\MainPage\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59376a805e3585_26914101',
  'file_dependency' => 
  array (
    '065c0251e70a159a2c55da47b2c4e5406679f254' => 
    array (
      0 => 'C:\\wamp\\www\\www.sihalife.food.com\\application\\views\\MainPage\\index.tpl',
      1 => 1496802217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/meta.tpl' => 1,
    'file:frontend/css.tpl' => 1,
    'file:frontend/navigation.tpl' => 1,
    'file:frontend/footer.tpl' => 1,
    'file:frontend/js.tpl' => 1,
  ),
),false)) {
function content_59376a805e3585_26914101 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:frontend/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <title><?php echo $_smarty_tpl->tpl_vars['language']->value['website_name'];?>
</title>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:frontend/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!-- Custom CSS -->
	<link href="/css/index.css?<?php echo $_smarty_tpl->tpl_vars['randseed']->value;?>
" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:frontend/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
					<?php
$_from = $_smarty_tpl->tpl_vars['shopList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
					<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/358x167" alt="">
                            <div class="caption">
                                
                                <h4><a href="/MainPage/shopInfo/1">First Product</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
							
                        </div>
                    </div>
					<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
                </div>
				 <!-- Page List -->
				<div class="row">
					<div class="col-md-4">
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="container">
        <hr>
        <!-- Footer -->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:frontend/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <!-- /.container -->

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:frontend/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
