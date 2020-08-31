<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 08:18:20
  from 'D:\wamp64\www\mvc\application\template\admin\upload.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48bdcccd92e0_37315942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5fca734ea37fbb6370a378c81c17657551a1977' => 
    array (
      0 => 'D:\\wamp64\\www\\mvc\\application\\template\\admin\\upload.html',
      1 => 1598602476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48bdcccd92e0_37315942 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="<?php echo ENTRY_ADD;?>
/admin/category/uploadfile" method="post" enctype="multipart/form-data">
<input type="file" name="file" >
<input type="submit" value="上传图片">
</form>
</body>
</html><?php }
}
