<?php
use \libs\smarty;
use \libs\db;
use \libs\getheader;

class lists{
    function int(){

        $db = new db();
        $db = $db->db;

        $cid = $_GET["cid"];
        $result = $db->query("select * from mvc_category where cid=$cid");
        $currentInfo = $result->fetch_assoc();

        $result = $db->query("select * from mvc_content where cid=$cid");
        $condata = array();
        while($row=$result->fetch_assoc()){
            $condata[] = $row;
        }


        $smarty = new smarty();
        $header = new getheader();
        $smarty->assign("menuData",$header->menuDate);
        $smarty->assign("header",$header->header);
        $smarty->assign("footer",TPL_PATH."index/footer.html");

        $smarty->assign("currentInfo",$currentInfo);
        $smarty->assign("condata",$condata);

        $smarty->display("index/lists.html");
    }
}