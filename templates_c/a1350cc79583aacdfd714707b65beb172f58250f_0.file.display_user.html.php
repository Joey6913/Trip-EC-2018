<?php
/* Smarty version 3.1.29, created on 2018-11-15 18:57:27
  from "/Applications/XAMPP/xamppfiles/htdocs/crazyones/templates/display_user.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bed5117012d69_27286460',
  'file_dependency' => 
  array (
    'a1350cc79583aacdfd714707b65beb172f58250f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/crazyones/templates/display_user.html',
      1 => 1542279438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed5117012d69_27286460 ($_smarty_tpl) {
?>
<h1>會員資料</h1>
<div class="row">
  <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
    <div class="col-md-2">
      <select size=10 class="form-control" onChange="location.href='user.php?user_sn='+this.value">
        <?php
$_from = $_smarty_tpl->tpl_vars['all_users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_mem_0_saved_item = isset($_smarty_tpl->tpl_vars['mem']) ? $_smarty_tpl->tpl_vars['mem'] : false;
$_smarty_tpl->tpl_vars['mem'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['mem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['mem']->value) {
$_smarty_tpl->tpl_vars['mem']->_loop = true;
$__foreach_mem_0_saved_local_item = $_smarty_tpl->tpl_vars['mem'];
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['mem']->value['user_sn'];?>
" <?php if ($_smarty_tpl->tpl_vars['now_user_sn']->value == $_smarty_tpl->tpl_vars['mem']->value['user_sn']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['mem']->value['user_name'];?>
</option>
        <?php
$_smarty_tpl->tpl_vars['mem'] = $__foreach_mem_0_saved_local_item;
}
if ($__foreach_mem_0_saved_item) {
$_smarty_tpl->tpl_vars['mem'] = $__foreach_mem_0_saved_item;
}
?>
      }
      </select>
    </div>
  <?php }?>
  <div class="col-md-10">
    <table class="table table-hover table-bordered table-responsive">
        <tr>
          <td>姓名</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
        </tr>
        <tr>
          <td>帳號</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
        </tr>
        <tr>
          <td>Email</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
</td>
        </tr>
        <tr>
          <td>性別</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_sex'];?>
</td>
        </tr>
        <tr>
          <td>電話</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_tel'];?>
</td>
        </tr>
        <tr>
          <td>地址</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_zip'];
echo $_smarty_tpl->tpl_vars['user']->value['user_county'];
echo $_smarty_tpl->tpl_vars['user']->value['user_district'];
echo $_smarty_tpl->tpl_vars['user']->value['user_address'];?>
</td>
        </tr>
    </table>
    <div class="text-center">
        <a href="user.php?op=user_form&user_sn=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
" class="btn btn-primary">編輯帳號</a>
        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
          <?php echo '<script'; ?>
 src="class/bootstrap-sweetalert/sweet-alert.min.js"><?php echo '</script'; ?>
>
          <link rel="stylesheet" type="text/css" href="class/bootstrap-sweetalert/sweet-alert.css">
          <?php echo '<script'; ?>
 type="text/javascript">
            function delete_user(user_sn){
              swal({
                title: "確定要刪除嗎？",
                text: "刪掉之後，該會員所有資料會消失喔!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "是！我要刪了它！",
                closeOnConfirm: false
                },
                function(){
                location.href='user.php?op=delete_user&user_sn=' + user_sn;
                swal("好啦！刪完了！", "後悔也來不及了。", "success");
              });
            }
          <?php echo '</script'; ?>
>
          <?php if ($_smarty_tpl->tpl_vars['now_user_sn']->value != $_smarty_tpl->tpl_vars['login_user']->value['user_sn']) {?>
              <a href="javascript:delete_user('<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
')" class="btn btn-danger">刪除帳號</a>
          <?php }?>
        <?php }?>
    </div>
  </div>
</div>
<?php }
}
