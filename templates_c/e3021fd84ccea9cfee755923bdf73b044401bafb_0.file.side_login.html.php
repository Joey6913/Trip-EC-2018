<?php
/* Smarty version 3.1.29, created on 2018-12-04 12:51:26
  from "/Applications/XAMPP/xamppfiles/htdocs/crazyones2018/templates/side_login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c0607ce022038_59562608',
  'file_dependency' => 
  array (
    'e3021fd84ccea9cfee755923bdf73b044401bafb' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/crazyones2018/templates/side_login.html',
      1 => 1541821886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0607ce022038_59562608 ($_smarty_tpl) {
?>
<form action="user.php" method="post" role="form" class="form-horizontal">
  <div class="form-group">
    <label class="col-md-4 control-label">帳號：</label>
    <div class="col-md-8">
      <input type="text" name="user_id" id="user_id" class="form-control" placeholder="請輸入帳號">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label">密碼：</label>
    <div class="col-md-8">
      <input type="password" name="user_passwd" id="user_passwd" class="form-control" placeholder="請輸入密碼">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4">
      <a href="user.php?op=user_form" class="btn btn-link">註冊</a>
    </label>
    <div class="col-md-8">
      <input type="hidden" name="op" value="user_login">
      <button type="submit" name="button" class="btn btn-primary btn-block">登入</button>
    </div>
  </div>
</form>
<?php }
}
