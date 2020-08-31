<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-27 09:38:32
  from 'D:\wamp64\www\mvc\application\template\index\test.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f477f18a7f9e9_18706899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a285445e4ff850fa4937aa6cc4ef466624b65cf1' => 
    array (
      0 => 'D:\\wamp64\\www\\mvc\\application\\template\\index\\test.html',
      1 => 1598521109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f477f18a7f9e9_18706899 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        .lists-box {
            width: 800px;
            background-color: #FFFFFF;
            margin: 10px auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            height: 500px;
        }
        .list{
            width: 170px;
            height: 170px;
        }
    </style>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<ul class="lists-box">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sonInfo']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <li class="list">
        <a href="">
            <img src="<?php echo IMG_ADD;?>
logo.png" alt="">
            <h3><?php echo $_smarty_tpl->tpl_vars['v']->value["canme"];?>
</h3>
            <div><?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>
}</div>
        </a>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
