<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 07:20:38
  from 'D:\Wampserver\www\八月\mvcone\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f460d463e2ff4_45909360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ffd12660360ae3d8c27d8535dd28b8adc9e9733' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\admin\\index.html',
      1 => 1598424915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f460d463e2ff4_45909360 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html{
            width: 100%;
            height: 100%;
        }
        body{
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        .header{
            width: 100%;
            height: 20%;
            background: #c26133;
        }
        .header h1{
            text-align: center;

        }
        .logininfo{
            float: right;
            margin-right: 30px;
        }

        .main{
            width: 100%;
            height: 70%;
            border: 1px solid red;
        }

        .bottom{
            width: 100%;
            height: 10%;
            text-align: center;
            position: relative;
        }

        .bottom div{
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            text-align: center;
            line-height: 40px;
        }
        .left{
            width: 25%;
            height: 100%;
            border-right: 5px solid #000;
            float: left;
            box-sizing: border-box;
        }
        .right{
            width: 75%;
            height: 100%;
            float: left;
            box-sizing: border-box;
        }
        iframe{
            width: 100%;
            height: 100%;
        }

    </style>
</head>
<body>
<div class="header">
    <h1>欢迎来到xxx管理系统</h1>
    <div class="logininfo">
        <span>用户: <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
        <span>
                <a href="/八月/mvcone/index.php/admin/index/logout">退出登录</a>
            </span>
    </div>
</div>
<div class="main">
    <div class="left">
        <ul>
            <li>
                用户管理
                <ul>
                    <li><a href="adduser.html" target="main">添加用户</a></li>
                    <li><a href="edituser.html" target="main">修改用户</a></li>
                </ul>
            </li>
            <li>
                栏目管理
                <ul>
                    <li>
                        <a href="/八月/mvcone/index.php/admin/category/addpage" target="main">添加栏目</a>
                    </li>
                    <li>
                        <a href="/八月/mvcone/index.php/admin/category/int" target="main">查看栏目</a>
                    </li>
                </ul>
            </li>
            <li>
                内容管理
                <ul>
                    <li>
                        <a href="/八月/mvcone/index.php/admin/content/add" target="main">添加内容 </a>
                    </li>
                    <li>
                        <a href="/八月/mvcone/index.php/admin/content/showList" target="main">查看内容 </a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="main"></iframe>
    </div>
</div>
<div class="bottom">
    <div>
        <span>xxx版权信息，xxx制作，联系方式</span>
    </div>

</div>
</body>
</html><?php }
}
