<?php
/* Smarty version 3.1.29, created on 2017-06-07 14:15:49
  from "C:\wamp\www\www.sihalife.food.com\application\views\Administrator\shopNewFrom.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5937a825d29419_69623658',
  'file_dependency' => 
  array (
    '71270bba67c9b5cd535f73a82b05c16ec11d781d' => 
    array (
      0 => 'C:\\wamp\\www\\www.sihalife.food.com\\application\\views\\Administrator\\shopNewFrom.tpl',
      1 => 1496819748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Administrator/meta.tpl' => 1,
    'file:Administrator/css.tpl' => 1,
    'file:Administrator/nav.tpl' => 1,
    'file:Administrator/js.tpl' => 1,
  ),
),false)) {
function content_5937a825d29419_69623658 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Administrator/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <title><?php echo $_smarty_tpl->tpl_vars['language']->value['admin_website_name'];?>
</title>
	
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Administrator/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
    <div id="wrapper">
        <!-- Navigation -->
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Administrator/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div id="page-wrapper">
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $_smarty_tpl->tpl_vars['language']->value['admin_shop_list_add'];?>
</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<div class="row">
                <div class="col-lg-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $_smarty_tpl->tpl_vars['language']->value['admin_shop_list_add'];?>

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="/Administrator/doShopNew">
                                        <div class="form-group">
                                            <label><?php echo $_smarty_tpl->tpl_vars['language']->value['shop_name_col'];?>
</label>
                                            <input maxlength="20" type="text" class="form-control" style="width:50%">
                                        </div>
										<div class="form-group">
                                            <label><?php echo $_smarty_tpl->tpl_vars['language']->value['shop_depiction_col'];?>
</label>
                                            <input maxlength="20" type="text" class="form-control" style="width:50%">
                                        </div>
                                        <button type="submit" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['language']->value['from_btn_submit'];?>
</button>
                                        <button type="reset" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['language']->value['from_btn_reset'];?>
</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Administrator/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
