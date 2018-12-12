<?php
/* Smarty version 3.1.29, created on 2018-11-17 00:58:38
  from "/Applications/XAMPP/xamppfiles/htdocs/crazyones/templates/trip_display.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5beef73e509a17_40737591',
  'file_dependency' => 
  array (
    '0b929b3865d0b445c91bb4f248df2e4bcaa6350b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/crazyones/templates/trip_display.html',
      1 => 1542387474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beef73e509a17_40737591 ($_smarty_tpl) {
?>
<div class="row">
  <div class="col-md-6">
    <img src="<?php echo $_smarty_tpl->tpl_vars['trip']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_title'];?>
" class="img-thumbnail">
  </div>
  <div class="col-md-6">
    <h2><?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_title'];?>
</h2>
    <p>售價：<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_price'];?>
元整</p>
    <p>人氣：<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_counter'];?>
</p>
    <div>
      <a href="index.php?op=add_to_cart&trip_sn=<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_sn'];?>
&trip_title=<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_title'];?>
&trip_amount=1" class="btn btn-primary" role="button">加入購物車</a>
      <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
        <a href="tool.php?op=trip_form&trip_sn=<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_sn'];?>
" class="btn btn-warning">編輯旅程</a>
        <a href="tool.php?op=delete_trip&trip_sn=<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_sn'];?>
" class="btn btn-danger">刪除旅程</a>
      <?php }?>
    </div>
  </div>
</div>


<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#trip" aria-controls="trip" role="tab" data-toggle="tab">旅程介紹</a></li>
  <li role="presentation"><a href="#note" aria-controls="note" role="tab" data-toggle="tab">退換或須知</a></li>
  <li role="presentation"><a href="#service" aria-controls="service" role="tab" data-toggle="tab">售後服務</a></li>
  <li role="presentation"><a href="#other" aria-controls="other" role="tab" data-toggle="tab">特別說明</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="trip">
    <h3>旅程介紹</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_content'];?>
</p>
  </div>
  <div role="tabpanel" class="tab-pane" id="note">
    <h3>退換貨須知</h3>
    <ul>
      <li>旅程到貨享十天猶豫期之權益<span class="text-danger">（注意！猶豫期非試用期）</span>，辦理退貨旅程必須是全新狀態且包裝完整，否則將會影響退貨權限。</li>
    </ul>
  </div>
  <div role="tabpanel" class="tab-pane" id="service">
    <h3>售後服務</h3>
    <ul>
      <li>如您收到旅程，請依正常程序儘速檢查旅程，若旅程發生新品瑕疵之情形，您可申請更換新品或退貨，請直接點選<a href="#" target="_blank">聯絡我們</a>。</li>
      <li>若您對於購買流程、付款方式、退貨及旅程運送方式有疑問，你可直接點選<a href="#" target="_blank">會員中心</a>。</li>
    </ul>
  </div>
  <div role="tabpanel" class="tab-pane" id="other">
    <h3>特別說明</h3>
    <ul>
      <li>本公司對於所販售具遞延性之旅程或服務，消費者權益均受保障。如因合作廠商無法提供旅程或服務，請與本公司聯繫辦理退貨或換成等值旅程。</li>
      <li>※特惠旅程，不適用折價券</li>
    </ul>
  </div>
</div>
<?php }
}
