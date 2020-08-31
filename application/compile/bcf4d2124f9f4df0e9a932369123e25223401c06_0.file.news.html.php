<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 04:09:12
  from 'D:\Wampserver\www\八月\mvcone\application\template\index\news.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b2668bb8888_43523493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf4d2124f9f4df0e9a932369123e25223401c06' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\index\\news.html',
      1 => 1598760542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b2668bb8888_43523493 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .lists-box{
            width: 1000px;
            background: #fff;
            margin: 10px auto;
            border: 1px solid red;
            padding: 0 50px;
            box-sizing: border-box;
            height: 410px;
        }

        .list-content{
            width: 800px;
            margin: auto;
        }
        .list a{
            width: 100%;
            height: 100%;
            text-decoration: none;
        }
        .list{
            float: left;
            width: 200px;
            height: 200px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<ul class="lists-box">
    <div class="list-content">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sonInfo']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <li class="list">
            <a href="/八月/mvcone/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                <img src="<?php echo IMAGE_ADD;?>
icon.png" alt="">
                <h3><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</h3>
                <div><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</div>
            </a>
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

</ul>

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
