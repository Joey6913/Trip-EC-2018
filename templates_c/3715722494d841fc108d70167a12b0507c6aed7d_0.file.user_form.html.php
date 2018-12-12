<?php
/* Smarty version 3.1.29, created on 2018-12-04 12:59:35
  from "/Applications/XAMPP/xamppfiles/htdocs/crazyones2018/templates/user_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c0609b79009b2_97195212',
  'file_dependency' => 
  array (
    '3715722494d841fc108d70167a12b0507c6aed7d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/crazyones2018/templates/user_form.html',
      1 => 1542103170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0609b79009b2_97195212 ($_smarty_tpl) {
?>
<h1>會員註冊</h1>
<?php echo '<script'; ?>
 src="class/jQuery-Validation-Engine/js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="class/jQuery-Validation-Engine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="class/jQuery-Validation-Engine/css/validationEngine.jquery.css" type="text/css"/>

<?php echo '<script'; ?>
 language="javascript" src="class/jquery.twzipcode-1.7.8.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
      $("#addr_form").twzipcode();
      $("#user_form").validationEngine();
    });
<?php echo '</script'; ?>
>

<form action="user.php" id="user_form" method="post" class="form-horizontal">
    <div class="form-group">
      <label class="col-md-2 control-label" for="user_name">姓名：</label>
      <div class="col-md-4">
        <input type="text" class="form-control validate[required]" name="user_name" id="user_name" placeholder="請輸入姓名" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
">
      </div>
      <label class="col-md-2 control-label" for="user_sex">性別：</label>
      <div class="col-md-4">
        <label class="radio-inline">
          <input type="radio" name="user_sex" class="validate[required]" id="user_sex_1" value="先生" <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex'] == '先生') {?>checked<?php }?>>先生
        </label>
        <label class="radio-inline">
          <input type="radio" name="user_sex" class="validate[required]" id="user_sex_0" value="女士" <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex'] == '女士') {?>checked<?php }?>>女士
        </label>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label" for="user_id">帳號：</label>
      <div class="col-md-4">
        <input type="text" class="form-control validate[required]" name="user_id" id="user_id" placeholder="請輸入帳號" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
">
      </div>
      <label class="col-md-2 control-label" for="user_passwd">密碼：</label>
      <div class="col-md-4 has-error">
        <input type="text" class="form-control <?php if ($_smarty_tpl->tpl_vars['user']->value['user_passwd'] == '') {?>validate[required]<?php }?>" name="user_passwd" id="user_passwd" placeholder="<?php if ($_smarty_tpl->tpl_vars['user']->value['user_passwd']) {?>需要改密碼才填寫<?php } else { ?>請輸入密碼<?php }?>">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label" for="user_email">Email：</label>
      <div class="col-md-4">
        <input type="text" class="form-control validate[required, custom[email]]" name="user_email" id="user_email" placeholder="請輸入Email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
">
      </div>
      <label class="col-md-2 control-label" for="user_tel">電話：</label>
      <div class="col-md-4">
        <input type="text" class="form-control validate[required, custom[phone]]" name="user_tel" id="user_tel" placeholder="請輸入電話" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_tel'];?>
">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">地址：</label>
      <div id="addr_form">
        <div class="col-md-2">
          <div data-role="zipcode"
               data-name="user_zip"
               data-value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_zip'];?>
"
               data-style="form-control validate[required]">
          </div>
        </div>
        <div class="col-md-2">
          <div data-role="county"
               data-name="user_county"
               data-value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_county'];?>
"
               data-style="form-control validate[required]">
          </div>
        </div>
        <div class="col-md-2">
          <div data-role="district"
               data-name="user_district"
               data-value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_district'];?>
"
               data-style="form-control validate[required]">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control validate[required]" name="user_address" id="user_address" placeholder="請輸入地址" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_address'];?>
">
      </div>
    </div>

    <div class="text-center">
        <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sn'] > 0) {?>
            <input type="hidden" name="op" value="update_user">
            <input type="hidden" name="user_sn" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
">
        <?php } else { ?>
            <input type="hidden" name="op" value="insert_user">
        <?php }?>
        <button type="submit" class="btn btn-primary">儲存</button>
    </div>
</form>
<?php }
}
