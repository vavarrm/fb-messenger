<?php
/* Smarty version 3.1.29, created on 2017-02-17 05:22:30
  from "C:\wamp\www\www.sihalife.poker.com\application\views\shared\ncvbar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a67a86960556_76432463',
  'file_dependency' => 
  array (
    '3a58403c2abaf6b18b71bc44a82ed9d82f4bfabe' => 
    array (
      0 => 'C:\\wamp\\www\\www.sihalife.poker.com\\application\\views\\shared\\ncvbar.tpl',
      1 => 1480579218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a67a86960556_76432463 ($_smarty_tpl) {
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
