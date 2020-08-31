<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-27 14:01:16
  from 'D:\wamp64\www\mvc\application\template\index\server.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f47bcac949f45_43909061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe165969fb2808045e5890fb1c1a87f377862665' => 
    array (
      0 => 'D:\\wamp64\\www\\mvc\\application\\template\\index\\server.html',
      1 => 1598536853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f47bcac949f45_43909061 (Smarty_Internal_Template $_smarty_tpl) {
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
<style>
    .my-service{
        width: 1000px;
        text-align: center;
        margin: 10px auto;
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
</style>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="my-service">
    <h3><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["cname"];?>
</h3>
    <h6><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["info"];?>
</h6>
    <div class="my-service-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[0], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <ul class="my-service-list">
        <li>
            <img src="<?php echo IMG_ADD;?>
logo.png" alt="">
        </li>
        <li>
            <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4>
        </li>
        <li>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>

        </li>
    </ul>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div style="clear: both"></div>
    </div>
</div>
<style>
    .youshi{
        width: 1000px;
        text-align: center;
        margin: 10px auto;
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
    }
    .youshi-box-list li:nth-child(1){
        width: 100px;
        height: 100px;

    }
    h1,h2,h3,h4,h5,h6{
        margin:0;
        padding:0;
    }
    .youshi-box-list li:nth-child(2){
        width: 300px;
        height: 100px;

    }
</style>
<div class="youshi">
    <h3><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["cname"];?>
</h3>
    <h6><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["info"];?>
</h6>
    <div class="youshi-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[1], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <ul class="youshi-box-list">
            <li>
                <img src="<?php echo IMG_ADD;?>
logo.png" alt="">
            </li>
            <li>
                <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4>
            </li>
            <li>
               <h6><?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>
</h6>
            </li>
        </ul>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div style="clear: both"></div>
    </div>
</div>
<div class="my-service">
    <h3><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["cname"];?>
</h3>
    <h6><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["info"];?>
</h6>
    <div class="my-service-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[2], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <ul class="my-service-list">
            <li>
                <img src="<?php echo IMG_ADD;?>
logo.png" alt="">
            </li>
            <li>
                <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4>
            </li>
            <li>
             <?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>

            </li>
        </ul>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div style="clear: both"></div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
