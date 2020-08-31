<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-25 12:18:27
  from 'D:\Wampserver\www\八月\mvcone\application\template\admin\showList.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4501931db2e8_61516457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b15313f05701d69cc01642f2ab117c366e55ec66' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\admin\\showList.html',
      1 => 1598357899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4501931db2e8_61516457 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
<div class="container" style="margin-top: 20px">
    <table class="table table-bordered">
        <tr>
            <th>板块</th>
            <th>标题</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>

            </td>
            <td>
                <a href="/八月/mvcone/index.php/admin/content/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">查看</a>
                <a href="/八月/mvcone/index.php/admin/content/edit?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">编辑</a>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>

</div>

</body>
</html><?php }
}
