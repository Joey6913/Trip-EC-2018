<?php
/* Smarty version 3.1.29, created on 2018-12-04 12:51:03
  from "/Applications/XAMPP/xamppfiles/htdocs/crazyones2018/templates/trip_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c0607b7e08821_14665689',
  'file_dependency' => 
  array (
    '75b0bec88f3ba690f5ee8e5bf3c53e4ca36ecfda' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/crazyones2018/templates/trip_list.html',
      1 => 1542390184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0607b7e08821_14665689 ($_smarty_tpl) {
?>
<div class="row">
  <?php
$_from = $_smarty_tpl->tpl_vars['all_trip']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_trip_0_saved_item = isset($_smarty_tpl->tpl_vars['trip']) ? $_smarty_tpl->tpl_vars['trip'] : false;
$_smarty_tpl->tpl_vars['trip'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['trip']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['trip']->value) {
$_smarty_tpl->tpl_vars['trip']->_loop = true;
$__foreach_trip_0_saved_local_item = $_smarty_tpl->tpl_vars['trip'];
?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <a href="index.php?trip_sn=<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['trip']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_title'];?>
"></a>
        <div class="caption">
          <div style="height: 60px;">
            <h3><a href="index.php?trip_sn=<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_title'];?>
</a></h3>
          </div>
          <div class="row">
            <div class="col-md-6">售價：<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_price'];?>
</div>
            <div class="col-md-6">人氣：<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_counter'];?>
</div>
          </div>
        </div>
      </div>
    </div>
  <?php
$_smarty_tpl->tpl_vars['trip'] = $__foreach_trip_0_saved_local_item;
}
if ($__foreach_trip_0_saved_item) {
$_smarty_tpl->tpl_vars['trip'] = $__foreach_trip_0_saved_item;
}
?>
</div>

共有 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 個旅程
<?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

<?php }
}
