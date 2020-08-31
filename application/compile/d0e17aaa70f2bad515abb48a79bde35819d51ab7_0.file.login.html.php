<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-23 10:30:04
  from 'D:\Wampserver\www\八月\mvcone\application\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f42452c344682_58697614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0e17aaa70f2bad515abb48a79bde35819d51ab7' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\admin\\login.html',
      1 => 1598178423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f42452c344682_58697614 (Smarty_Internal_Template $_smarty_tpl) {
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
admin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var date = new Date();
        var time  = date.getTime()+1000*30;
        date.setTime(time);
        document.cookie="name=zhangsan;expires="+date.toUTCString()+";domain=localhost;path=/八月/mvcone/index.php/admin";

    <?php echo '</script'; ?>
>
</head>

<body>
<form class="form-horizontal" action="admin/index/login" method="post">
    <h1>欢迎来到xx后台管理中心</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="username">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="密码" name="pass">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">验证码</label>
        <div class="col-sm-10">

            <input type="text" placeholder="请输入验证码" name="code" id="code" style="width: 35%">
            <img src="http://localhost/八月/mvcone/index.php/admin/index/mycode" alt="" onclick="this.src='http://localhost/八月/mvcone/index.php/admin/index/mycode?'+Math.random()" style="cursor: pointer;width: 120px">看不清楚，点击更换
            <div class="form-group">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 记住密码
                </label>
            </div>
        </div>
    </div>

        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">登录</button>
            &nbsp;&nbsp;没有账号？请
            <a href="admin/reg/add" class="btn btn-default">注册</a>

        </div>

    </div>
</form>
</body>
</html><?php }
}
