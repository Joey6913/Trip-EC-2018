<?php
/* Smarty version 3.1.29, created on 2018-11-24 23:02:13
  from "/Applications/XAMPP/xamppfiles/htdocs/crazyones/templates/bill_check_out.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bf967f569ebc1_77428765',
  'file_dependency' => 
  array (
    '0675b6786678d6fa7be11cfa190701a9a82aab41' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/crazyones/templates/bill_check_out.html',
      1 => 1542706950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf967f569ebc1_77428765 ($_smarty_tpl) {
?>
<h2>我的訂購單</h2>
<?php echo '<script'; ?>
 type="text/javascript">
  function check_total(trip_sn,amount,price){
    var total=amount*price;
    $("#total_" + trip_sn).html(total + " 元");
    $("#trip_total_" + trip_sn).val(total);

    var sum = 0;
    $('.price').each(function() {
        sum += Number($(this).val());
    });
    $("#bill_total_display").html(sum + " 元");
    $("#bill_total").val(sum);
  }
<?php echo '</script'; ?>
>
<form action="bill.php" method="post" class="form-horizontal">
  <?php
$_from = $_smarty_tpl->tpl_vars['cart_arr']->value;
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
    <div class="form-group">
      <label class="col-md-4 control-label" for="trip_amount"><?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_title'];?>
</label>
      <div class="col-md-1">
        <input type="text" class="form-control" name="trip_amount[<?php echo $_smarty_tpl->tpl_vars['trip_sn']->value;?>
]" id="trip_amount_<?php echo $_smarty_tpl->tpl_vars['trip_sn']->value;?>
" placeholder="商品數量" value="<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_amount'];?>
" onchange="check_total('<?php echo $_smarty_tpl->tpl_vars['trip_sn']->value;?>
', this.value ,'<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_price'];?>
')">
      </div>
      <div class="col-md-2 text-right">
        <p class="form-control-static">x <?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_price'];?>
 元 = </p>
      </div>
      <div class="col-md-2 text-right">
        <p class="form-control-static" id="total_<?php echo $_smarty_tpl->tpl_vars['trip_sn']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_total'];?>
 元</p>
        <input type="hidden" name="trip_total[<?php echo $_smarty_tpl->tpl_vars['trip_sn']->value;?>
]" class="price" id="trip_total_<?php echo $_smarty_tpl->tpl_vars['trip_sn']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_total'];?>
">
      </div>
    </div>
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
  <hr>
  <div class="form-group">
    <div class="col-md-offset-7 col-md-2 text-right">
      <p class="form-control-static" id="bill_total_display"><?php echo $_smarty_tpl->tpl_vars['bill_total']->value;?>
 元</p>
      <input type="hidden" class="form-control" name="bill_total" id="bill_total" placeholder="總計" value="<?php echo $_smarty_tpl->tpl_vars['bill_total']->value;?>
">
    </div>
  </div>
  <div class="text-center">
    <input type="hidden" name="op" value="save_bill">
    <button type="submit" class="btn btn-primary">送出訂購單</button>
  </div>
</form>
<?php }
}
