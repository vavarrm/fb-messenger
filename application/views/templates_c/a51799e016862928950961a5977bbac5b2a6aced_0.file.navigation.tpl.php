<?php
/* Smarty version 3.1.29, created on 2017-06-07 09:52:48
  from "C:\wamp\www\www.sihalife.food.com\application\views\frontend\navigation.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59376a80621d97_37997062',
  'file_dependency' => 
  array (
    'a51799e016862928950961a5977bbac5b2a6aced' => 
    array (
      0 => 'C:\\wamp\\www\\www.sihalife.food.com\\application\\views\\frontend\\navigation.tpl',
      1 => 1496803854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59376a80621d97_37997062 ($_smarty_tpl) {
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['language']->value['nav_index'];?>
</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav ">
				<li>
					<a href="#"><?php echo $_smarty_tpl->tpl_vars['language']->value['nav_about'];?>
</a>
				</li>
				<li>
					<a href="#"><?php echo $_smarty_tpl->tpl_vars['language']->value['nav_contact'];?>
</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['language']->value['nav_class'];?>
<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<?php
$_from = $_smarty_tpl->tpl_vars['foodTypeClass']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$__foreach_row_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
						<li>
							<a href="portfolio-1-col.html">分类<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a>
						</li>
						<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
if ($__foreach_row_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_row_0_saved_key;
}
?>
					</ul>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav><?php }
}
