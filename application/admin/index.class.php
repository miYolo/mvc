<?php
if (!defined("MVC")) {
    die("非法入侵");
}

use \libs\smarty;
use \libs\db;
use \libs\code;

//use \libs\cookie;
class index
{
    function int()
    {
        $smarty = new smarty();
        $smarty->display("admin/login.html");

    }

    function login()
    {
        global $config;
        $uname = addslashes($_POST["uname"]);//对SQL语句进行转义
        $pass = md5(md5($_POST["pass"]));
        if ($config["code"]["ischeck"]) {
//        if(!(isset($_COOKIE["code"])&&$_COOKIE["code"]==$_POST["code"])){
            if ($_POST["code"] !== $_SESSION["code"]) {
                echo "验证码有误";
                return;
            }
        }
        if (strlen($uname) < 5 || empty($pass)) {
            echo "用户名和密码不符合规范!";
            return;
        }

//        $db = new mysqli("localhost", "root", '12345', 'wui2006', '3308');
//        if (mysqli_connect_error()) {
//            die("数据库连接错误");
//        }
//        $db->query("set names utf8");

        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from mvc_user where uname='{$uname}' and pass='{$pass}'");
        if ($result->num_rows < 1) {
            echo "没有相应的数据,请重新登录";
        } else {
            $_SESSION["login"] = "yes";
            $_SESSION["uname"] = $uname;
//            $cookie=new cookie();
//            $cookie->setCookie('login','yes');
            header("location:/mvc/index.php/admin/index/first");
        }
        $db->close();
    }

    function logout()
    {
        session_destroy();
        header("location:/mvc/index.php/admin");
    }

    function first()
    {
//        $cookie=new cookie();
//        if($cookie->isCookie('login')&&$cookie->getCookie('login')=='yes'){
        if (isset($_SESSION["login"]) && $_SESSION["login"] == "yes") {
            $smarty = new smarty();
            $smarty->assign("uname", $_SESSION["uname"]);
            $smarty->display("admin/index.html");
        } else {
            header("location:/mvc/index.php/admin");
        }
    }

    function mycode()
    {
        $code = new code();
//    setcookie("code",$code->getStr(),0,"/");
        $code->out();

    }
}