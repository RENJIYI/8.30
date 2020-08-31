<?php
use \libs\smarty;
use \libs\db;

use \libs\getheader;
if(!defined("MVC")){
    die("非法进入");
}

class index{

    function int(){
        $smarty = new smarty();

//        $arr = array();
//        $database=new db();
//        $db=$database->db;
//
//        $i=0;
//        $result = $db->query("select * from mvc_category where pid=0");
//        while($row=$result->fetch_assoc()){
//            $arr[$i]=$row;
//            $result1=$db->query("select * from mvc_category where pid=".$row["cid"]);
//            while($row1=$result1->fetch_assoc()){
//                $arr[$i]["child"][] = $row1;
//            }
//            $i++;
//        }
//        var_dump($arr);
        $header = new getheader();
        $smarty->assign("menuData",$header->menuDate);
        $smarty->assign("header",$header->header);

        $smarty->assign("footer",TPL_PATH."index/footer.html");

        $smarty->display("index/index.html");
    }
}