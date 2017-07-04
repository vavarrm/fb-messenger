<?php
/* Smarty version 3.1.29, created on 2016-12-01 09:00:18
  from "C:\wamp\www\lioncity.com\application\views\shared\ncvbar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_583fd892e9c6d6_76520147',
  'file_dependency' => 
  array (
    'c9bc3137393f8a190c8c803a3e05974cc6932ff2' => 
    array (
      0 => 'C:\\wamp\\www\\lioncity.com\\application\\views\\shared\\ncvbar.tpl',
      1 => 1480579218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583fd892e9c6d6_76520147 ($_smarty_tpl) {
?>
<nav class="navbar navbar-fixed-top navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">I Love Sreymum</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class=""><a href="#">position</a></li>
				<li class="" Controller="Employee"><a href="/Employee/">Employee</a></li>
			</ul>
		</div><!-- /.nav-collapse -->
	</div><!-- /.container -->
</nav><!-- /.navbar -->
<?php echo '<script'; ?>
>
	var Controller = "<?php echo $_smarty_tpl->tpl_vars['Controller']->value;?>
";
	$('li[Controller='+Controller+']').addClass('active');
<?php echo '</script'; ?>
>
<?php }
}
