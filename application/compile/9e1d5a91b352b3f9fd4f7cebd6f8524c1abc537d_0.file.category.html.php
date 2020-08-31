<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 15:06:04
  from 'D:\wamp64\www\mvc\application\template\admin\category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4bc05c75eec6_72388373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e1d5a91b352b3f9fd4f7cebd6f8524c1abc537d' => 
    array (
      0 => 'D:\\wamp64\\www\\mvc\\application\\template\\admin\\category.html',
      1 => 1598799024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4bc05c75eec6_72388373 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
Jquery3.5.1.js"><?php echo '</script'; ?>
>
    <style>
        .panel {
            width: 320px;
            height: 180px;
            background-color: whitesmoke;
            box-shadow: 0 0 10px #000;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            z-index: 1;
            display: none;
        }

        .close {
            float: right;
        }

    </style>
</head>
<body>
<div class="ENTRY_ADD" style="display: none"><?php echo ENTRY_ADD;?>
</div>
<div class="ENTRY_ADD1" style="display: none"><?php echo ENTRY_ADD;?>
</div>
<div class="ENTRY_ADD2" style="display: none"><?php echo ENTRY_ADD;?>
</div>
<div class="container">

    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <table class="table table-bordered">
        <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

    </table>
    <?php } else { ?>
    <table>
        <tr>
            <td>没有数据</td>
        </tr>
    </table>
    <?php }?>
</div>

<div class="panel addPanel">
    <div class="close">
        x
    </div>
    <form action="<?php echo ENTRY_ADD;?>
/admin/category/add" method="post">
        <input type="text" name="cname"><br>
        <input type="hidden" name="cid" id="cid"><br>
        <select name="isshow" id="">
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select><br>
        <input type="text" name="tpl_name" placeholder="输入对应的模板"><br>
        栏目描述<textarea name="info"></textarea>

        <input type="submit" value="提交">
    </form>
</div>

<div class="panel delPanel">
    <div class="close">
        x
    </div>
    <form action="<?php echo ENTRY_ADD;?>
/admin/category" method="POST">
        <input type="text" name="cname">
        <input type="submit" value="">
    </form>
</div>


<div class="panel editPanel">
    <div class="close">
        x
    </div>
    <form action="<?php echo ENTRY_ADD;?>
/admin/category/add" method="post">
        <input type="text" name="cname">
        <select name="pid" id="opts">
        </select>
        <select name="isshow" id="isshow">
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select><br>
        <input type="text" name="tpl_name" placeholder="输入对应的模板"><br>
        栏目描述<textarea name="info"></textarea>
        <input type="hidden" value="" class="cidEdit" name="cidEdit">
        <input type="hidden" name="imgurl" id="imgurl">
        <div class="editUpload"></div>
        <input type="button" value="修改" class="change">
    </form>
    <div class="ENTRY_ADD" style="display: none"><?php echo ENTRY_ADD;?>
</div>
</div>

<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
category.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    const a = document.querySelector(".ENTRY_ADD");
    const b = a.innerHTML + "/admin/category/uploadfile";
    var upObj = new upload();
    upObj.createView({
        parent: document.querySelector(".editUpload")
    })
    upObj.up(b,function (e){
        $("#imgurl").val(e[0]);
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
