<?php
/* Smarty version 3.1.29, created on 2018-12-04 12:51:03
  from "/Applications/XAMPP/xamppfiles/htdocs/crazyones2018/templates/side_tools.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c0607b7e20ce3_35198270',
  'file_dependency' => 
  array (
    '2b7f6946eb4be674eb3abc491c3afd2436c85e30' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/crazyones2018/templates/side_tools.html',
      1 => 1543831592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0607b7e20ce3_35198270 ($_smarty_tpl) {
?>
<div class="alert alert-success">
  <?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_name'];?>
 您好！歡迎光臨<?php echo $_smarty_tpl->tpl_vars['website_name']->value;?>

</div>

<form action="index.php" method="get" role="form">
    <div class="input-group">
      <input name="keyword" type="text" class="form-control" placeholder="請輸入關鍵字">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">搜尋</button>
      </span>
    </div>
</form>
<br>

<a href="index.php" class="btn btn-block btn-primary">回首頁</a>
<a href="user.php?op=user_display&user_sn=<?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_sn'];?>
" class="btn btn-block btn-info">我的帳號</a>
<?php if ($_smarty_tpl->tpl_vars['isUser']->value) {?>
    <a href="bill.php" class="btn btn-block btn-warning">我的訂單</a>
<?php }
if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
<a href="tool.php?op=trip_form" class="btn btn-block btn-success">發布旅程</a>
<?php }?>
<a href="user.php?op=user_logout" class="btn btn-block btn-danger">登出</a>
<?php }
}
