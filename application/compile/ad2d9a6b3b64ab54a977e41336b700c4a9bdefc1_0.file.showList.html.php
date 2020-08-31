<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 15:03:46
  from 'D:\wamp64\www\mvc\application\template\admin\showList.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4bbfd2ac6697_85729971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad2d9a6b3b64ab54a977e41336b700c4a9bdefc1' => 
    array (
      0 => 'D:\\wamp64\\www\\mvc\\application\\template\\admin\\showList.html',
      1 => 1598799821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4bbfd2ac6697_85729971 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">

</head>
<body>
<div class="container" style="margin-top: 20px">
    <form action="" class="form-inline" method="post">
        <div class="form-group">
            <label for="cid">选择分类</label>
            <select class="form-control" id="cid" name="cid">
            </select>
        </div>
        <div class="form-group">
            <label for="ctitle">标题关键字</label>
            <input type="text" class="form-control" id="ctitle" name="ctitle">
            <div class="form-group">
                <label for="ctitle">倒叙</label>
                <input type="checkbox" class="form-control" id="order" name="order"  value="desc">
            </div>
        </div>
        <input type="submit" value="查询">
    </form>
    <table class="table table-bordered">
        <tr>
            <th>所属分类</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</td>
            <td>
                <a href="<?php echo ENTRY_ADD;?>
/admin/content/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">查看</a>
                <a href="<?php echo ENTRY_ADD;?>
/admin/content/edit?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">编辑</a>
                <a href="<?php echo ENTRY_ADD;?>
/admin/content/delcon?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">删除</a>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
Jquery3.5.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addcon.js"><?php echo '</script'; ?>
>
</div>
</body>
</html><?php }
}
