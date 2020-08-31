<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-25 13:44:49
  from 'D:\Wampserver\www\八月\mvcone\application\template\admin\edition.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4515d1141447_50678274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cf84236635f555591bb3da641f79fc620229a12' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\admin\\edition.html',
      1 => 1598363083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4515d1141447_50678274 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BOOT_ADD;?>
">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
/jquery3.5.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
/jquery.validate.js"><?php echo '</script'; ?>
>

</head>
<body>
<div class="container">
    <form action="/八月/mvcone/index.php/admin/content/edition" method="post">
        <input type="hidden" name="conid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['conid'];?>
">
        <br>
        <div class="form-group">
            <label for="cid">所属分类</label>
            <input type="text" class="form-control" id="cid" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cname'];?>
" readonly>
            </select>
        </div>
        <div class="form-group">
            <label for="ctitle">内容标题</label>
            <input type="text" class="form-control" id="ctitle" name="ctitle" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ctitle'];?>
">
        </div>
        <div class="form-group">
            <label for="cons">内容主体</label>
            <textarea class="form-control" rows="3" name="cons" id="cons"><?php echo $_smarty_tpl->tpl_vars['data']->value['cons'];?>
</textarea>
        </div>
        <button type="submit" class="btn btn-default">提交</button>
    </form>
</div>
</body>
</html><?php }
}
