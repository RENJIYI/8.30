<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 08:45:14
  from 'D:\Wampserver\www\八月\mvcone\application\template\admin\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3e381abca884_66742112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '901163241278a83fc534ea14872d927836ba868f' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\admin\\reg.html',
      1 => 1597913110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3e381abca884_66742112 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>xx后台管理系统</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
/jquery3.5.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
/jquery.validate.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
reg.js"><?php echo '</script'; ?>
>
</head>

<body>
<form class="form-horizontal" action="/八月/mvcone/index.php/admin/reg/addUser" method="post" style="height: 300px">
    <h1>注册</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="username">
        </div>
    </div>
    <div class="form-group">
        <label for="pass" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pass" placeholder="密码" name="pass">
        </div>
    </div>
    <div class="form-group">
        <label for="pass1" class="col-sm-2 control-label">重新输入密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pass1" placeholder="密码" name="pass1">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">注册</button>
            &nbsp;&nbsp;已有账号？请
            <a href="/八月/mvcone/index.php/admin" class="btn btn-default">登录</a>

        </div>

    </div>
</form>
</body>
</html><?php }
}
