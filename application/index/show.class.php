<?php
use \libs\smarty;
use \libs\db;
use \libs\getheader;

class show{
    function int(){

        $db = new db();
        $db = $db->db;

        $conid = $_GET["conid"];
        $result = $db->query("select * from mvc_content where conid=$conid");
        $condata = $result->fetch_assoc();

        $smarty = new smarty();
        $header = new getheader();
        $smarty->assign("menuData",$header->menuDate);
        $smarty->assign("header",$header->header);
        $smarty->assign("footer",TPL_PATH."index/footer.html");

        $smarty->assign("condata",$condata);

        $smarty->display("index/show.html");
    }
}