<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-27 11:34:31
  from 'D:\Wampserver\www\八月\mvcone\application\template\admin\upload.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f479a476f4c66_92078905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a16f5d44043564dcd2f6cb349508ec73b07f5926' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\admin\\upload.html',
      1 => 1598528060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f479a476f4c66_92078905 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/八月/mvcone/index.php/admin/category/uploadfile" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="上传图片">
</form>

</body>
</html><?php }
}
