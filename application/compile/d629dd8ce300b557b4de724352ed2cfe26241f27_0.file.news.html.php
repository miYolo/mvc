<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 13:11:55
  from 'D:\wamp64\www\mvc\application\template\index\news.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ba59b96e108_83610407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd629dd8ce300b557b4de724352ed2cfe26241f27' => 
    array (
      0 => 'D:\\wamp64\\www\\mvc\\application\\template\\index\\news.html',
      1 => 1598793112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ba59b96e108_83610407 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="news-box">
<h3>新闻中心</h3>
<div class="info"><?php echo $_smarty_tpl->tpl_vars['currentInfo']->value['info'];?>
</div>
<h3>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sonInfo']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <a href="<?php echo ENTRY_ADD;?>
index/lists?cid<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</h3>
    <div class="list-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[0], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <a class="list" href="<?php echo ENTRY_ADD;?>
index/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
            <h4><?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>
</h4>
            <div class="news-info"><?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>
</div>
        </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
