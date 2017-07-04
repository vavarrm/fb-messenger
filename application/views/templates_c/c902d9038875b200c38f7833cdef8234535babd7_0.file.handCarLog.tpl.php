<?php
/* Smarty version 3.1.29, created on 2016-11-07 03:37:55
  from "C:\wamp\www\lioncity.com\application\views\MainPage\handCarLog.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_581fe903cfa6b4_00279423',
  'file_dependency' => 
  array (
    'c902d9038875b200c38f7833cdef8234535babd7' => 
    array (
      0 => 'C:\\wamp\\www\\lioncity.com\\application\\views\\MainPage\\handCarLog.tpl',
      1 => 1478486130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581fe903cfa6b4_00279423 ($_smarty_tpl) {
?>
<div class="row">
  <div class="col-md-12 text-center">
	<div class="form-group row">
		<label for="example-text-input" class="col-xs-4 col-form-label">Card1</label>
		<div class="col-xs-3">
			<input name="C1_value" type="text"  class="form-control" id="C1_value" placeholder="value">
		</div>		
		<div class="col-xs-3">
			<input name="C1_color" type="text"  class="form-control" id="C1_color" placeholder="color">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-text-input" class="col-xs-4 col-form-label">Card2</label>
		<div class="col-xs-3">
			<input name="C2_value" type="text"  class="form-control" id="C2_value" placeholder="value">
		</div>		
		<div class="col-xs-3">
			<input name="C2_color" type="text"  class="form-control" id="C2_color" placeholder="color">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-text-input" class="col-xs-4 col-form-label">position</label>
		<div class="col-xs-6">
			<select name="position" class="form-control">
			  <option>BT</option>
			  <option>CO</option>
			  <option>HJ</option>
			  <option>MP</option>
			  <option>EP</option>
			  <option>SB</option>
			  <option>BB</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label for="example-text-input" class="col-xs-4 col-form-label">limp</label>
		<div class="col-xs-6">
			<input name="limp" type="text"  class="form-control" value="0" id="limp" placeholder="limp">
		</div>
	</div>
	<div class="form-group row iso">
		<label for="example-text-input" class="col-xs-4 col-form-label">iso</label>
		<div class="col-xs-6">
			<input name="iso" disabled type="text"  class="form-control" value="0" id="iso" placeholder="iso">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-text-input" class="col-xs-4 col-form-label">open</label>
		<div class="col-xs-6">
			<input name="open"  type="text"  class="form-control" value="0" id="open" placeholder="open">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-text-input" class="col-xs-4 col-form-label">first action</label>
		<div class="col-xs-3">
			<select name="f_action" class="form-control">
				<option>Bet</option>
				<option>Call</option>
				<option>Check</option>
				<option>Raise</option>
			</select>
		</div>
		<div class="col-xs-3">
			<input name="f_action_value"  type="text"  class="form-control" value="0" id="f_action_value" >
		</div>
	</div>	
	<div class="form-group row">
		<label for="example-text-input" class="col-xs-4 col-form-label">SB</label>
		<div class="col-xs-3">
			<select name="SB_action" class="form-control">
				<option>Bet</option>
				<option>Call</option>
				<option>Check</option>
				<option>Raise</option>
			</select>
		</div>
		<div class="col-xs-3">
			<input name="SB_action_value"  type="text"  class="form-control" value="1" id="f_action_value" >
		</div>
	</div>
	<div class="form-group row">
		<label for="example-text-input" class="col-xs-4 col-form-label">BB</label>
		<div class="col-xs-3">
			<select name="BB_action" class="form-control">
				<option>Bet</option>
				<option>Call</option>
				<option>Check</option>
				<option>Raise</option>
			</select>
		</div>
		<div class="col-xs-3">
			<input name="SB_action_value"  type="text"  class="form-control" value="1" id="f_action_value" >
		</div>
	</div>
	<hr> 	
	<div class="form-group row">
		<div class="col-xs-4">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
  </div>
</div>
<?php echo '<script'; ?>
 src="/js/mainpage/handCarLog.js" rel="stylesheet"><?php echo '</script'; ?>
><?php }
}
