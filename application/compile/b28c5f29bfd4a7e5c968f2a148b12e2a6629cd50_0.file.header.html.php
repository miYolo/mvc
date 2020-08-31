<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-27 10:08:25
  from 'D:\wamp64\www\mvc\application\template\index\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4786195b2e68_58872353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b28c5f29bfd4a7e5c968f2a148b12e2a6629cd50' => 
    array (
      0 => 'D:\\wamp64\\www\\mvc\\application\\template\\index\\header.html',
      1 => 1598521777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4786195b2e68_58872353 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index.css">
</head>
<body>
<div class="header">
    <div class="logo">
        <img src="<?php echo IMG_ADD;?>
logo.png" alt="">
        <h3>更好更快的互联网开发服务商</h3>
    </div>
    <ul class="menu">
        <li>
            <a href="<?php echo ENTRY_ADD;?>
">首页</a>
        </li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <li>
            <a href="<?php echo ENTRY_ADD;?>
/index/category?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
            <?php if ((isset($_smarty_tpl->tpl_vars['v']->value["child"]))) {?>
            <ul class="son">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["child"], 'v1');
$_smarty_tpl->tpl_vars['v1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->do_else = false;
?>
                <li>
                    <a href="<?php echo ENTRY_ADD;?>
/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value["cname"];?>
</a>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <?php }?>
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<div class="wheel">

</div>
</body>
</html><?php }
}
