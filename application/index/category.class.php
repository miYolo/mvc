<?php

use \libs\smarty;
use \libs\db;
use \libs\getheader;

if (!defined("MVC")) {
    die("非法入侵");
}

class category
{
    function int()
    {
        $smarty = new smarty();
        $cid = $_GET["cid"];
        $db = new db();
        $db = $db->db;
        $result = $db->query("select * from mvc_category where cid=$cid");
        $currentInfo = $result->fetch_assoc();
        $result = $db->query("select * from mvc_category where pid=$cid");

        $sonInfo = array();
        while ($row = $result->fetch_assoc()) {
            $sonInfo[] = $row;
        }

        $coninfo = array();
        foreach ($sonInfo as $k => $v) {
            $cid = $v["cid"];
            $result = $db->query("select * from mvc_content where cid=$cid");
            while ($row = $result->fetch_assoc()) {
                $coninfo[$k][] = $row;
            }
        }


        $header = new getheader();
        $smarty->assign("menuData", $header->menuData);
        $smarty->assign("header", "$header->header");
        $smarty->assign("footer", "$header->footer");
        $smarty->assign("sonInfo", $sonInfo);
        $smarty->assign("currentInfo", $currentInfo);
        $smarty->assign("conInfo", $coninfo);
        $smarty->display("index/" . $currentInfo["tpl_name"]);
    }
}