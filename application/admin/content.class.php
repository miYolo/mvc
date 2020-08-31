<?php
if (!defined("MVC")) {
    die("非法入侵");
}

use \libs\smarty;
use \libs\db;
use \libs\upload;

class content
{
    function add()
    {
        $smarty = new smarty();
        $smarty->display("admin/addcon.html");
    }

    function addcon()
    {
        $cid = $_POST["cid"];
        $ctitle = $_POST["ctitle"];
        $cons = $_POST["cons"];
        $imgurl = $_POST["imgurl"];
        $info = $_POST["info"];

        $database = new db();
        $db = $database->db;
        $db->query("insert into mvc_content (ctitle,cons,cid,imgurl,info) values ('$ctitle','$cons','$cid','$imgurl','$info')");
        if ($db->affected_rows > 0) {
            echo "<script>alert('插入成功');
location.href='location:/mvc/index.php/admin/content/add'</script>";
        } else {
            echo "<script>alert('插入失败');
location.href='location:/mvc/index.php/admin/content/add'</script>";
        }
    }

    function showList()
    {
        //显示
        $database = new db();
        $sql = "select * from mvc_content as con left join mvc_category as cat on con.cid=cat.cid where 1=1";
        if (isset($_POST['cid']) && !empty($_POST["cid"])) {
            $sql.= " and con.cid=" . $_POST["cid"];
        }

        if(isset($_POST['ctitle']) && !empty($_POST['ctitle'])){
            $wordkey=$_POST["ctitle"];
            $sql.=" and ctitle like '%".$wordkey."%'";
        }

        if(isset($_POST['order']) && !empty($_POST['order'])){
            $order=$_POST["order"];
            $sql.=" order by conid ".$order;
        }
echo $sql;

        $db = $database->db;
        $result = $db->query($sql);
        $arr = array();
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        $smarty = new smarty();
        $smarty->assign("data", $arr);
        $smarty->display("admin/showList.html");
    }

    function show()
    {
        $conid = $_GET["conid"];
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from mvc_content where conid=" . $conid);
        $row = $result->fetch_assoc();
        $smarty = new smarty();
        $smarty->assign("data", $row);
        $smarty->display("admin/show.html");
    }

    function editcon()
    {
        $conid = $_POST["conid"];
        $ctitle = $_POST["ctitle"];
        $cons = $_POST["cons"];
        $cid = $_POST["cid"];
        $imgurl = $_POST["imgurl"];
        $info = $_POST['info'];

        $database = new db();
        $db = $database->db;
        $result = $db->query("update  mvc_content set ctitle='$ctitle',cons='$cons',cid='$cid',imgurl='$imgurl' ,info='$info' where conid=" . $conid);
        if ($db->affected_rows > 0) {
            //header('location:'.$_SERVER["HTTP_REFERER"]);
            echo '<script>alert("修改成功");location.href=$(".ENTRY_ADD").html()+"/admin/content/edit?conid=' . $conid . '"</script>';
        } else {
            echo '<script>alert("修改失败");location.href=$(\".ENTRY_ADD\").html()+\"/admin/content/edit?conid=' . $conid . '"</script>';
        }
    }

    function delcon()
    {
        $conid = $_GET["conid"];
        $database = new db();
        $db = $database->db;
        $result = $db->query("delete from mvc_content where conid=" . $conid);
        if ($db->affected_rows > 0) {
            header("location:" . $_SERVER["HTTP_REFERER"]);
        } else {
            echo '<script>alert("修改失败");</script>';
        }
    }

    function edit()
    {
        $smarty = new smarty();
        $conid = $_GET["conid"];
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from mvc_content where conid = " . $conid);
        $row = $result->fetch_assoc();
        $smarty->assign("data", $row);
        $smarty->display("admin/editcon.html");
    }

    function uploadfile()
    {
        $upload = new upload();
        $upload->up();
//        $path=HOST_ADD."/"."mvc/".$upload->fullpath;
        $path = MAIN_ADD . "/" . $upload->fullpath;
        echo $path;
    }

    function tinyuploadfile()
    {
        $upload = new upload();
        $upload->up();
//        $path=HOST_ADD."/"."mvc/".$upload->fullpath;
        $path = MAIN_ADD . "/" . $upload->fullpath;
        echo json_encode(array('location' => $path));
    }
}