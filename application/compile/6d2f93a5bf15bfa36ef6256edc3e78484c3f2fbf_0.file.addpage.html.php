<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 07:44:41
  from 'D:\wamp64\www\mvc\application\template\admin\addpage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a0769756e61_90214536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d2f93a5bf15bfa36ef6256edc3e78484c3f2fbf' => 
    array (
      0 => 'D:\\wamp64\\www\\mvc\\application\\template\\admin\\addpage.html',
      1 => 1598686751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a0769756e61_90214536 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<form action="<?php echo ENTRY_ADD;?>
/admin/category/add" style="margin-top: 24px" method="post" ENCTYPE="multipart/form-data">
    <input type="text" placeholder="添加一级栏目" name="cname"><br>
    <select name="isshow" id="">
        <option value="1">在导航可见</option>
        <option value="0">在导航不可见</option>
    </select><br>
    <input type="text" name="tpl_name" placeholder="输入对应的模板"><br>
    栏目描述<textarea name="info" cols="30" rows="10"></textarea>
    <input type="hidden" value="hidden" name="imgurl">
    <!--    <iframe src="<?php echo ENTRY_ADD;?>
/admin/category/upload" frameborder="0" name="a"></iframe>-->
    <input type="file" name="file">
    <div class="upload"></div>
    <input type="submit" value="添加">
</form>
<div class="ENTRY_ADD" style="display: none"><?php echo ENTRY_ADD;?>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
Jquery3.5.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var uploadObj = new upload();
    uploadObj.createView({
        parent: document.querySelector(".upload")
    })
    const a = document.querySelector(".ENTRY_ADD");
    const b = a.innerHTML + "/admin/category/uploadfile";
    uploadObj.up(b, function (e) {
        $("input[type=hidden]").val(e[0]);
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
