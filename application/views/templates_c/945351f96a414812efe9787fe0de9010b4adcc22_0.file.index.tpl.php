<?php
/* Smarty version 3.1.29, created on 2016-12-01 09:00:21
  from "C:\wamp\www\lioncity.com\application\views\Employee\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_583fd8957cecf8_95783270',
  'file_dependency' => 
  array (
    '945351f96a414812efe9787fe0de9010b4adcc22' => 
    array (
      0 => 'C:\\wamp\\www\\lioncity.com\\application\\views\\Employee\\index.tpl',
      1 => 1480578667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583fd8957cecf8_95783270 ($_smarty_tpl) {
?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>em_id</th>
				<th>name</th>
				<th>country</th>
				<th>add_datetime</th>
				<th>is_leaving</th>
				<th>leaving_datetime</th>
				<th></th>
			</tr>
			</thead>
			<?php
$_from = $_smarty_tpl->tpl_vars['table_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['em_id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['em_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['em_country'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['em_add_datetime'];?>
</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['row']->value['em_is_leaving'] == 0) {?>
						flase
						<?php } else { ?>
						true
						<?php }?>
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['em_leaving_datetime'];?>
</td>
					<td>
						<a type="button" class="btn btn-default" href="add">leaving</a>
					</td>
				</tr>
			<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
		</table>
	</div>
	<div class="col-md-2"></div>
</div>
<div>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<a type="button" class="btn btn-default" href="add">add</a>
	</div>
	<div class="col-md-2"></div>
</div><?php }
}
