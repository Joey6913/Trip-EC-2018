<?php
/* Smarty version 3.1.29, created on 2018-11-27 00:54:58
  from "/Applications/XAMPP/xamppfiles/htdocs/crazyones/templates/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bfc2562040b26_32437271',
  'file_dependency' => 
  array (
    '6073689887b24c90457c8c411a9337ba42644f47' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/crazyones/templates/index.html',
      1 => 1543251288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:trip_form.html' => 1,
    'file:trip_display.html' => 1,
    'file:user_form.html' => 1,
    'file:display_user.html' => 1,
    'file:bill_check_out.html' => 1,
    'file:display_bill.html' => 1,
    'file:list_bill.html' => 1,
    'file:trip_list.html' => 1,
    'file:index_side.html' => 1,
  ),
),false)) {
function content_5bfc2562040b26_32437271 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['website_name']->value;?>
</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.1.0/octicons.min.css">
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="bootstrap/js/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="bootstrap/js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="container">
      <div id="shop_head">
        <a href="index.php">
          <img src="https://dummyimage.com/1280X302/000/fff" alt="<?php echo $_smarty_tpl->tpl_vars['website_name']->value;?>
" class="img-responsive">
        </a>
      </div>

      <div id="shop_main" class="row">
        <div class="col-md-9 col-sm-8">
          <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['op']->value == "trip_form") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:trip_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "trip_display") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:trip_display.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "user_form") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display_user") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:display_user.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "check_out") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:bill_check_out.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display_bill") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:display_bill.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "list_bill") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:list_bill.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:trip_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php }?>
        </div>
        <div class="col-md-3 col-sm-4">
          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index_side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      </div>

      <div id="shop_foot">
        <div>Copyright © 2018 <?php echo $_smarty_tpl->tpl_vars['website_name']->value;?>
. All Rights Reserved. </div>
      </div>
    </div>


  </body>
</html>
<?php }
}
