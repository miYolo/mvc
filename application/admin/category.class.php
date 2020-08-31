<?php

if (!defined("MVC")) {
    die("非法入侵");
}

use \libs\smarty;
use \libs\db;
use \libs\upload;

class category
{
    public $arr = array();

    function int()
    {
        $smarty = new smarty();
        //查询数据库,放入到页面当中
        $database = new db();
        $this->db = $database->db;
        $str = "";
        $this->tree(0, $str);
        $smarty->assign("data", $str);
        $smarty->display("admin/category.html");
    }

    function tree($pid = 0, &$str, $i = 0)
    {
        $result = $this->db->query("select * from mvc_category where pid=" . $pid);
        while ($row = $result->fetch_assoc()) {
            if ($row["isshow"] == 1) {
                $s = "可见";
            } else {
                $s = "不可见";
            }
            $str .= '<tr><td>' . ($i + 1) . '级目录</td><td>' . str_repeat("➥", $i) . $row["cname"] . '</td><td>' . $s . '</td><td><a href="javascript:;" attr="' . $row["cid"] . ' "class="add">添加</a>&nbsp;&nbsp;<a href="' . ENTRY_ADD . '/admin/category/del?cid=' . $row["cid"] . '" attr="' . $row["cid"] . '" class="del">删除</a>&nbsp;&nbsp;<a href="javascript:;" attr="' . $row["cid"] . '"pid="' . $row["pid"] . '" class="edit">修改</a></td></tr>';
            $this->tree($row["cid"], $str, $i + 1);
        }
    }

    function add()
    {
        if (isset($_POST["cid"])) {
            $cid = $_POST["cid"];
        } else {
            $cid = 0;
        }
//        $path=MAIN_ADD.$upload->fullpath;
        $path = $_POST["imgurl"];
        $cname = $_POST["cname"];
        $isshow = $_POST["isshow"];
        $tpl_name = $_POST["tpl_name"];
        $info = $_POST["info"];
        $database = new db();
        $db = $database->db;
        $db->query("insert into mvc_category (cname,pid,isshow,tpl_name,info,imgurl) values ('$cname','$cid',$isshow,'$tpl_name','$info','$path')");
        if ($db->affected_rows > 0) {
            header('location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    function del()
    {
        $cid = $_GET["cid"];
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from mvc_category where pid=" . $cid);
        if ($result->num_rows > 0) {
            echo '<script>alert("请先删除子目录");</script>';
            header('location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            $db->query("delete from mvc_category where cid = " . $cid);
        }
        $db->query("delete from mvc_category where cid=" . $cid);
        if ($db->affected_rows > 0) {
            header('location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    function addpage()
    {
        $smarty = new smarty();
        $smarty->display("admin/addpage.html");
    }

    function show()
    {
        $cid = $_GET["cid"];
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from mvc_category where cid=" . $cid);
        $row = $result->fetch_assoc();
        echo json_encode($row);
    }

    function getOption()
    {
        $this->treeOption(0, $this->arr);
        echo json_encode($this->arr);
    }


    function treeOption($pid, &$arr)
    {
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from mvc_category where pid=" . $pid);
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            $arr[$i] = array(
                "cid" => $row["cid"],
                "cname" => $row["cname"],
                "pid" => $row["pid"]
            );
            $this->treeOption($row["cid"], $arr[$i]["child"]);
            $i++;
        }
    }

    function editcon()
    {
        $cname = $_GET["cname"];
        $pid = $_GET["pid"];
        $cid = $_GET["cid"];
        $isshow = $_GET["isshow"];
        $info = $_GET["info"];
        $tpl_name = $_GET["tpl_name"];
        $imgurl = $_GET["imgurl"];
        $database = new db();
        $db = $database->db;
        $db->query("update mvc_category set cname='{$cname}',pid={$pid},isshow=$isshow,info=$info,tpl_name='{$tpl_name},imgurl='{$imgurl} where cid = " . $cid);

        if ($db->affected_rows > 0) {
            echo "ok";
        }
    }


    function upload()
    {
        $smarty = new smarty();
        $smarty->display("admin/upload.html");
    }

    function uploadfile()
    {
        $upload = new upload();
        $upload->up();
//        $path=HOST_ADD."/"."mvc/".$upload->fullpath;
        $path = MAIN_ADD . "/" . $upload->fullpath;
        echo $path;

    }
}