<?php
/* Smarty version 3.1.29, created on 2016-12-01 08:47:40
  from "C:\wamp\www\lioncity.com\application\views\Employee\add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_583fd59caa35b5_71888470',
  'file_dependency' => 
  array (
    'edc9adf6b20fcf18d915e5bc6564a9448990d072' => 
    array (
      0 => 'C:\\wamp\\www\\lioncity.com\\application\\views\\Employee\\add.tpl',
      1 => 1480578460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583fd59caa35b5_71888470 ($_smarty_tpl) {
?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	<form class="form-horizontal" method="post" action="doadd">
		<div class="form-group">
			<label class="col-sm-2 control-label">name</label>
			<div class="col-sm-2">
				<input type="input" name="em_name" maxlength="50" class="form-control" required placeholder="name">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword" class="col-sm-2 control-label">em_country</label>
			<div class="col-sm-2">
				<select name="em_country" class="form-control">
					<option value="kh">Cambodia</option>
					<option value="tw">Taiwan</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword" class="col-sm-2 control-label">
				<input class="btn btn-default" type="submit" value="Submit">
			</label>
		</div>
	</form>
	</div>
	<div class="col-md-2"></div>
</div><?php }
}
