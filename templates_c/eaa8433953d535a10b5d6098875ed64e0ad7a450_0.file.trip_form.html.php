<?php
/* Smarty version 3.1.29, created on 2018-11-14 17:44:01
  from "/Applications/XAMPP/xamppfiles/htdocs/crazyones/templates/trip_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bebee61cbb313_89466840',
  'file_dependency' => 
  array (
    'eaa8433953d535a10b5d6098875ed64e0ad7a450' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/crazyones/templates/trip_form.html',
      1 => 1541599427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bebee61cbb313_89466840 ($_smarty_tpl) {
?>
<h1>編輯旅程</h1>
<?php echo '<script'; ?>
 src="class/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<form action="tool.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-md-2 control-label">旅程名稱：</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="trip_title" id="trip_title" placeholder="請輸入旅程名稱" value="<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_title'];?>
">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">旅程內容：</label>
        <div class="col-md-10">
            <textarea class="form-control" name="trip_content" id="trip_content" placeholder="請輸入旅程內容"><?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_content'];?>
</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">旅程價格：</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="trip_price" id="trip_price" placeholder="請輸入旅程價格" value="<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_price'];?>
">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">旅程圖片：</label>
        <div class="col-md-10">
            <input type="file" name="trip_pic" id="trip_pic">
            <?php if (isset($_smarty_tpl->tpl_vars['trip']->value['pic'])) {?>
              <img src="<?php echo $_smarty_tpl->tpl_vars['trip']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['trip']->value['title'];?>
">
            <?php }?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
          <?php if (isset($_smarty_tpl->tpl_vars['trip']->value['trip_sn']) && $_smarty_tpl->tpl_vars['trip']->value['trip_sn'] > 0) {?>
              <input type="hidden" name="op" value="update_trip">
              <input type="hidden" name="trip_sn" value="<?php echo $_smarty_tpl->tpl_vars['trip']->value['trip_sn'];?>
">
          <?php } else { ?>
              <input type="hidden" name="op" value="insert_trip">
          <?php }?>
            <button type="submit" class="btn btn-primary">儲存</button>
        </div>
    </div>
</form>

<?php echo '<script'; ?>
>
    CKEDITOR.replace( 'trip_content' );
<?php echo '</script'; ?>
>
<?php }
}
