<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-27 07:19:53
  from 'D:\wamp64\www\mvc\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f475e99cf9fd4_43818513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '812f3ec3b16564b5ab28279a4a04ba0d40696859' => 
    array (
      0 => 'D:\\wamp64\\www\\mvc\\application\\template\\admin\\index.html',
      1 => 1598512741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f475e99cf9fd4_43818513 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html, body {
            width: 100%;
            height: 100%;
        }

        body {
            padding: 0;
            margin: 0;

        }

        .header {
            width: 100%;
            min-height: 20%;
            background-color: #ff8246;
        }

        .header h1 {
            text-align: center;
            padding-top: 20px;
        }

        .logininfo {
            float: right;
            margin-right: 48px;
        }

        .main {
            width: 100%;
            height: 70%;
            border: 1px solid red;
        }

        .bottom {
            width: 100%;
            min-height: 10%;
            text-align: center;
            position: relative;
        }

        .bottom span {
            position: absolute;
            display: block;
            width: 300px;
            height: 30px;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
        }

        .left {
            width: 20%;
            height: 100%;
            border: 1px solid #000;
            float: left;
        }

        .right {
            width: 79%;
            height: 100%;
border: yellow 1px solid;
            float: right;
        }
        iframe{
            width: 100%;
            height: 100%
        ;
        }
    </style>
</head>
<body>
<!--分帧技术-->
<!--<iframe src="http://baidu.com" frameborder="0"></iframe>-->
<!--<iframe src="http://baidu.com" frameborder="0"></iframe>-->
<!--<iframe src="http://baidu.com" frameborder="0"></iframe>-->

<div class="header">
    <h1>欢迎来到xx管理系统</h1>
    <div class="logininfo">
        <span><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>
        <a href="<?php echo ENTRY_ADD;?>
/admin">退出登录</a>
    </div>
</div>
<div class="main">
    <div class="left">
        <ul>
            <li >
                用户管理
                <ul class="son">
                    <li >
                        <a href="adduser.html" target="main">查看用户</a>
                    </li>
                    <li><a href="edituser.html" target="main">修改用户</a></li>
                </ul>
            </li>
            <li >
                栏目管理
                <ul class="son">
                    <li><a href="<?php echo ENTRY_ADD;?>
/admin/category/addpage" target="main">添加栏目</a></li>
                    <li><a href="<?php echo ENTRY_ADD;?>
/admin/category" target="main">查看栏目</a></li>
                </ul>
            </li>
            <li >
                内容管理
                <ul class="son">
                    <li>
                        <a href="<?php echo ENTRY_ADD;?>
/admin/content/add" target="main">添加内容</a>
                    </li>
                    <li> <a href="<?php echo ENTRY_ADD;?>
/admin/content/showList" target="main">查看内容</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="main"></iframe>
    </div>
</div>
<div class="bottom">
    <span>xxx版权信心,xxx制作,xxx联系方式</span>
</div>
</body>
</html><?php }
}
