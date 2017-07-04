<?php
/* Smarty version 3.1.29, created on 2016-12-02 09:38:05
  from "C:\wamp\www\lioncity.com\application\views\MainPage\handCardLog.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_584132ed2bb174_11767915',
  'file_dependency' => 
  array (
    '866c6a28e08e5113d335b06e75d08a3f661d1ed9' => 
    array (
      0 => 'C:\\wamp\\www\\lioncity.com\\application\\views\\MainPage\\handCardLog.tpl',
      1 => 1480667872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584132ed2bb174_11767915 ($_smarty_tpl) {
?>
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<form class="form-inline">
		<div class="form-group">
			<label for="exampleInputName2">table</label>
			<select class="form-control" name="player numbers">
				<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
				<?php }
}
?>

			</select>
		</div>
		<div class="form-group">
			<label for="exampleInputName2">player numbers</label>
			<select class="form-control"  name="player_numbers">
				<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 11+1 - (3) : 3-(11)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 3, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['foo']->value == 3) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
				<?php }
}
?>

			</select>
		</div>
		<div class="form-group">
			<label for="exampleInputName2">position</label>
			<select class="form-control"  name="my_position">
				<?php
$_from = $_smarty_tpl->tpl_vars['position']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</option>
				<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
if ($__foreach_value_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_value_0_saved_key;
}
?>
			</select>

		</div>
		</form>
	</div>
	<div class="col-md-2">
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-2"></div>	
	<div class="col-md-8">
		<div class="col-sm-2">
			<select name="flopcard1" class="form-control">
				<option value="A">A</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="T">T</option>
				<option value="J">J</option>
				<option value="Q">Q</option>
				<option value="K">K</option>
			</select>
			<select name="flopcardcolor1" class="form-control">
				<option value="s">spades</option>
				<option value="h">hearts</option>
				<option value="d">diamonds</option>
				<option value="c">clubs</option>
			</select>
		</div>
		<div class="col-sm-2">
			<select name="flopcard2" class="form-control">
				<option value="A">A</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="T">T</option>
				<option value="J">J</option>
				<option value="Q">Q</option>
				<option value="K">K</option>
			</select>
			<select name="flopcardcolor2" class="form-control">
				<option value="s">spades</option>
				<option value="h">hearts</option>
				<option value="d">diamonds</option>
				<option value="c">clubs</option>
			</select>
		</div>
		<div class="col-sm-2">
			<select name="flopcard3" class="form-control">
				<option value="A">A</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="T">T</option>
				<option value="J">J</option>
				<option value="Q">Q</option>
				<option value="K">K</option>
			</select>
			<select name="flopcardcolor3" class="form-control">
				<option value="s">spades</option>
				<option value="h">hearts</option>
				<option value="d">diamonds</option>
				<option value="c">clubs</option>
			</select>
		</div>
		<div class="col-sm-1">
			<button class="btn btn-primary" id="flopbtn">flop</button>
		</div>
	</div>	
	<div class="col-md-2"></div>	
</div>
<p>
<div class="row">
	<div class="col-md-2"></div>	
	<div class="col-md-8">
		<div class="col-sm-2">
			<select name="turncard1" class="form-control">
				<option value="A">A</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="T">T</option>
				<option value="J">J</option>
				<option value="Q">Q</option>
				<option value="K">K</option>
			</select>
			<select name="turncardcolor1" class="form-control">
				<option value="s">spades</option>
				<option value="h">hearts</option>
				<option value="d">diamonds</option>
				<option value="c">clubs</option>
			</select>
		</div>
		<div class="col-sm-1">
			<button class="btn btn-primary" id="turnbtn">turn</button>
		</div>
		<div class="col-sm-2">
			<select name="rivercard1" class="form-control">
				<option value="A">A</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="T">T</option>
				<option value="J">J</option>
				<option value="Q">Q</option>
				<option value="K">K</option>
			</select>
			<select name="rivercardcolor1" class="form-control">
				<option value="s">spades</option>
				<option value="h">hearts</option>
				<option value="d">diamonds</option>
				<option value="c">clubs</option>
			</select>
		</div>
		<div class="col-sm-1">
			<button class="btn btn-primary" id="riverbtn">river</button>
		</div>
	</div>
	<div class="col-md-2"></div>	
</div>
<hr>
<div class="row">
	<div class="col-md-2">
	</div>		
	<div class="col-md-8">
		<form class="form-horizontal">
			<?php
$_from = $_smarty_tpl->tpl_vars['position']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_1_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_1_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
			<div class="form-group player_action" position="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">
				<div class="col-sm-2">
					<label for="exampleInputName2"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</label>
				</div>
				<div class="col-sm-3">
					<select name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['value']->value != "SB") {
}?> >
						<option value="call">Call</option>
						<option value="bet">Bet</option>
						<option value="raise">Raise</option>
						<option value="fold">Fold</option>
						<option value="allin">All in</option>
					</select>
				</div>
				<div class="col-sm-2">
					<div class="input-group">
						<div class="input-group-addon">$</div>
						<input type="text" class="form-control"  name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_value" placeholder="BB" <?php if ($_smarty_tpl->tpl_vars['value']->value != "SB") {
}?> >
					</div>
				</div>
				<div class="col-sm-2">
					<div class="input-group">
						<button class="btn btn-primary player_send" position="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">send</button>
					</div>
				</div>
			</div>	
			<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_local_item;
}
if ($__foreach_value_1_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_item;
}
if ($__foreach_value_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_value_1_saved_key;
}
?>
		</form>
	</div>		
	<div class="col-md-2">
	</div>
</div>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<table class="table table-striped" id="myTable">
			<thead>
				<tr>
					<th>position</th>
					<th>action</th>
					<th>BB</th>
					<th></th>
				</tr>
			</thead>
		</table>
	</div>
	<div class="col-md-2"></div>
</div>

<?php echo '<script'; ?>
 src="/js/mainpage/handCardLog.js" rel="stylesheet"><?php echo '</script'; ?>
><?php }
}
