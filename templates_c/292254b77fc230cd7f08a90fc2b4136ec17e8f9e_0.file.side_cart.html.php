<?php
/* Smarty version 3.1.29, created on 2018-11-17 01:41:08
  from "/Applications/XAMPP/xamppfiles/htdocs/crazyones/templates/side_cart.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bef01347c54d4_60434497',
  'file_dependency' => 
  array (
    '292254b77fc230cd7f08a90fc2b4136ec17e8f9e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/crazyones/templates/side_cart.html',
      1 => 1542389502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bef01347c54d4_60434497 ($_smarty_tpl) {
?>
<form action="bill.php" method="post" class="form-horizontal" role="form">
  <div class="panel panel-info">
    <div class="panel-heading">我的購物車</div>
    <table class="table">
      <?php
$_from = $_smarty_tpl->tpl_vars['cart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_trip_0_saved_item = isset($_smarty_tpl->tpl_vars['trip']) ? $_smarty_tpl->tpl_vars['trip'] : false;
$__foreach_trip_0_saved_key = isset($_smarty_tpl->tpl_vars['trip_sn']) ? $_smarty_tpl->tpl_vars['trip_sn'] : false;
$_smarty_tpl->tpl_vars['trip'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['trip_sn'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['trip']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['trip_sn']->value => $_smarty_tpl->tpl_vars['trip']->value) {
$_smarty_tpl->tpl_vars['trip']->_loop = true;
$__foreach_trip_0_saved_local_item = $_smarty_tpl->tpl_vars['trip'];
?>
        <tr>
          <td><a href="index.php?trip_sn=<?php echo $_smarty_tpl->tpl_vars['trip_sn']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_title'];?>
</a></td>
          <td>
            <input type="text" name="trip_amount[<?php echo $_smarty_tpl->tpl_vars['trip_sn']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_amount'];?>
" class="form-control" style="width:40px;">
          </td>
        </tr>
      <?php
$_smarty_tpl->tpl_vars['trip'] = $__foreach_trip_0_saved_local_item;
}
if ($__foreach_trip_0_saved_item) {
$_smarty_tpl->tpl_vars['trip'] = $__foreach_trip_0_saved_item;
}
if ($__foreach_trip_0_saved_key) {
$_smarty_tpl->tpl_vars['trip_sn'] = $__foreach_trip_0_saved_key;
}
?>
      <tr>
        <td colspan=2>
          <input type="hidden" name="op" value="check_out">
          <button type="submit" class="btn btn-block btn-success">結帳</button>
        </td>
      </tr>
    </table>
  </div>
</form>
<?php }
}
