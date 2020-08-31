<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 05:21:58
  from 'D:\Wampserver\www\八月\mvcone\application\template\index\service.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b37767f5809_78245632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '053b473c844aa89105e415e65cb736b52200d249' => 
    array (
      0 => 'D:\\Wampserver\\www\\八月\\mvcone\\application\\template\\index\\service.html',
      1 => 1598764914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b37767f5809_78245632 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .my-service{
            width: 1000px;
            text-align: center;
            margin: 10px auto;
            background: #fff;
        }
        .my-service-box{
            width: 800px;
            margin: auto;
        }

        .my-service-list{
            float: left;
            width: 200px;
            height: 200px;
        }

        .youshi{
            width: 1000px;
            text-align: center;
            margin: 10px auto;
            background: #fff;
        }
        .youshi-box{
            width: 800px;
            margin: auto;
        }

        .youshi-box-list{
            float: left;
            width: 50%;
            margin-top: 20px;
        }

        .youshi-box-list li{
            float: left;
            /*border: 1px solid red;*/
        }
            h1,h2,h3,h4,h5,h6{
                padding: 0;
                margin: 0;
            }
        .youshi-box-list li:nth-child(1){
            width: 100px;
            height: 100px;
        }

        .youshi-box-list li:nth-child(2){
            width: 300px;
            height: 100px;
        }
    </style>
    <title>Document</title>
</head>
<body style="background: #efefef">
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="my-service">
    <h3>我们的服务</h3>
    <h6>站在用户的角度规划思考</h6>
    <div class="my-service-box">
        <ul class="my-service-list">
            <li>
                <img src="<?php echo IMAGE_ADD;?>
icon.png" alt="">
            </li>
            <li>网站建设</li>
            <li>网站建设</li>
            <li>网站建设</li>

        </ul>
        <div style="clear: both"></div>
    </div>

</div>
<div class="youshi">
    <h3>我们的优势</h3>
    <h6>描述</h6>
    <div class="youshi-box">
        <ul class="youshi-box-list">
            <li>
                <img src="<?php echo IMAGE_ADD;?>
icon.png" alt="">
            </li>
            <li>
                <h4>专业技术团队</h4>
                <h6>团队的描述</h6>
            </li>
        </ul>
        <div style="clear: both"></div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</body>
</html><?php }
}
