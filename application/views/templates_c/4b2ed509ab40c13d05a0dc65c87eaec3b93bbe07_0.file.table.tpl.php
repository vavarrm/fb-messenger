<?php
/* Smarty version 3.1.29, created on 2016-11-24 11:03:53
  from "C:\wamp\www\lioncity.com\application\views\MainPage\table.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5836bb09151ba3_46726880',
  'file_dependency' => 
  array (
    '4b2ed509ab40c13d05a0dc65c87eaec3b93bbe07' => 
    array (
      0 => 'C:\\wamp\\www\\lioncity.com\\application\\views\\MainPage\\table.tpl',
      1 => 1479981832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5836bb09151ba3_46726880 ($_smarty_tpl) {
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 ">
			<form class="form-horizontal">
				<div class="form-group">
					<select id="table-select" class="form-control input-lg">
						<option value="1">table1</option>
						<option value="2">table2</option>
						<option value="3">table3</option>
					</select>
				</div>
			</form>
			<p>
			<button type="button" p_id="1" class="btn btn-default btn-addtable">tryion</button><p>
			<button type="button" p_id="2" class="btn btn-default btn-addtable">甘超</button><p>
			<button type="button" p_id="3" class="btn btn-default btn-addtable">小意</button><p>
			<button type="button" p_id="4" class="btn btn-default btn-addtable">wine</button><p>
		</div><!-- /.blog-main -->
		<div class="col-sm-6 poker-table">
			<h1>table1</h1>
			<div class="table-seat"></div>
		</div><!-- /.blog-sidebar -->
		<div class="col-sm-6 poker-table hidden">
			<h1>table2</h1>
			<div class="table-seat"></div>
		</div><!-- /.blog-sidebar -->
		<div class="col-sm-6 poker-table hidden">
			<h1>table3</h1>
			<div class="table-seat"></div>
		</div><!-- /.blog-sidebar -->
	</div><!-- /.row -->
</div>
<?php echo '<script'; ?>
 src="/js/mainpage/table.js" rel="stylesheet"><?php echo '</script'; ?>
><?php }
}
