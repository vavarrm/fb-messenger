<?php
/* Smarty version 3.1.29, created on 2017-06-07 11:57:37
  from "C:\wamp\www\www.sihalife.food.com\application\views\Administrator\nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_593787c18b37d2_74805358',
  'file_dependency' => 
  array (
    '23d51a87264884cbdc189be58f689dd57ef7b54c' => 
    array (
      0 => 'C:\\wamp\\www\\www.sihalife.food.com\\application\\views\\Administrator\\nav.tpl',
      1 => 1496811407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593787c18b37d2_74805358 ($_smarty_tpl) {
?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href=""><?php echo $_smarty_tpl->tpl_vars['language']->value['admin_website_name'];?>
</a>
	</div>
	<!-- /.navbar-header -->

	<ul class="nav navbar-top-links navbar-right">
		<!-- /.dropdown -->
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-user">
				<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
				</li>
				<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
				</li>
				<li class="divider"></li>
				<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
				</li>
			</ul>
			<!-- /.dropdown-user -->
		</li>
		<!-- /.dropdown -->
	</ul>
	<!-- /.navbar-top-links -->

	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
			<ul class="nav" id="side-menu">
				<li>
					<a href="forms.html"><i class="fa fa-edit fa-fw"></i><?php echo $_smarty_tpl->tpl_vars['language']->value['admin_sidebar_shop'];?>
<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="/Administrator/shopNew"><?php echo $_smarty_tpl->tpl_vars['language']->value['admin_sidebar_shop_add'];?>
</a>
						</li>
						<li>
							<a href="morris.html"><?php echo $_smarty_tpl->tpl_vars['language']->value['admin_sidebar_shop_list'];?>
</a>
						</li>
					</ul>
					<!-- /.nav-second-level -->
				</li>
			</ul>
		</div>
		<!-- /.sidebar-collapse -->
	</div>
	<!-- /.navbar-static-side -->
</nav><?php }
}
