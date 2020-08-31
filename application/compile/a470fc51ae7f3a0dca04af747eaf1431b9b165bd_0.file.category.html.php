<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 01:17:10
  from 'D:\Wampserver\www\八月\mvcone\application\template\admin\category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f485b16a004e3_16089289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a470fc51ae7f3a0dca04af747eaf1431b9b165bd' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\admin\\category.html',
      1 => 1598577420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f485b16a004e3_16089289 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
</head>
<body>
<!--页面如何去呈现-->
<div class="container">

    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
        <table class='table table-bordered'>
            <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

        </table>
    <?php } else { ?>
    <table>
       <tr><td>没有数据</td></tr>
    </table>
    <?php }?>
</div>

<style>
    .pannel{
        width: 40%;
        height: 30%;
        background: #fff;
        box-shadow: 0 0 4px #000;
        position: fixed;
        left: 0;right: 0;top: 20%;
        margin: auto;

        z-index: 1;
        display: none;
    }
</style>

<div class="pannel addpannel" style="height: 350px">
    <div class="close">
        X
    </div>
    <form action="/八月/mvcone/index.php/admin/category/add" method="post">
        <input type="text" name="cname" placeholder="名称">
        <br>
        <input type="hidden" name="cid">
        <select name="isshow"><br>
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select>
        <br>
        <input type="text" name="tpl_name" placeholder="输入对应的模板">
        <br>
        栏目描述<textarea name="info"  cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="添加">

    </form>

</div>

<div class="pannel editpannel" style="height: 350px">
    <div class="close">
        X
    </div>
    <form>
        <input type="text" name="cname" placeholder="名称">
        <select name="pid" id="opts">
        </select>
        <select name="isshow" id="isshow"><br>
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select>
        <input type="text" name="tpl_name" placeholder="输入对应的模板">
        <br>
        栏目描述<textarea name="info" cols="30" rows="2"></textarea>
        <input type="hidden" name="imgurl" id="imgurl">
        <div class="editupload"></div>
        <input type="button" value="修改">

    </form>

</div>

<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery3.5.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
category.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var upObj = new upload();
    upObj.createView({

        parent:document.querySelector(".editupload")
    })
    upObj.selectBtn.parentNode.style.lineHeight="50px";
    upObj.upBtn.style.lineHeight="50px";

    upObj.up("/八月/mvcone/index.php/admin/category/uploadfile",function (e) {
        $("#imgurl").val(e[0]);
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
