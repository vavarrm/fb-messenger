<?php
/* Smarty version 3.1.29, created on 2016-11-07 04:36:42
  from "C:\wamp\www\lioncity.com\application\views\MainPage\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_581ff6cac61066_67557372',
  'file_dependency' => 
  array (
    '6fd7f09785bd78444f5c8c6ada75ac7e285ef689' => 
    array (
      0 => 'C:\\wamp\\www\\lioncity.com\\application\\views\\MainPage\\index.tpl',
      1 => 1478486130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581ff6cac61066_67557372 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'C:\\wamp\\www\\lioncity.com\\application\\third_party\\smarty\\libs\\plugins\\function.math.php';
?>
<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-12">
			<div class="row">
				<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
				<div class="col-xs-6 col-lg-3 close position" style="float: left;" status="close">
					<h2 player="" default="Number<?php if ($_smarty_tpl->tpl_vars['foo']->value > 3) {
echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['foo']->value,'y'=>1),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['foo']->value;
}?>">Number<?php if ($_smarty_tpl->tpl_vars['foo']->value > 3) {
echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['foo']->value,'y'=>1),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['foo']->value;
}?></h2>
				</div><!--/.col-xs-6.col-lg-4-->
				<?php }
}
?>

				<!--/.col-xs-6.col-lg-4-->
			</div><!--/row-->
		</div><!--/.col-xs-12.col-sm-9-->
	</div><!--/row-->
</div><!--/.container-->
<div id="dialog-form" class="hide" title="Create new player">
	<form  class="form-inline">
		<div class="form-group">
			<select class="form-control" id="market">
				<option value="NA">please select maker</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
		<div class="form-group">
			<input type="text" id="player_name" class="form-control" placeholder="player name input">
		</div>
	</form>
</div>
<?php echo '<script'; ?>
 src="/js/mainpage/index.js" rel="stylesheet"><?php echo '</script'; ?>
><?php }
}
