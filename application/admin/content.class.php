<?php
if(!defined("MVC")){
    die("非法进入");
}
use \libs\smarty;
use \libs\db;
class content{
    function add(){
        $smarty = new smarty();
        $smarty->display("admin/addcon.html");
    }

    function addcon(){
        $cid = $_POST["cid"];
        $ctitle = $_POST["ctitle"];
        $cons = $_POST["cons"];
        $imgurl = $_POST["imgurl"];
        $info = $_POST["info"];


        $database = new db();
        $db = $database->db;
        $db->query("insert into mvc_content (ctitle,cons,cid,imgurl,info) values ('$ctitle','$cons','$cid','$imgurl','$info')");

        if($db->affected_rows>0){
            echo "<script>alert('插入成功');location.href='/study/mvc/index.php/admin/content/add';</script>";
        }else{
            echo "<script>alert('插入失败');location.href='/study/mvc/index.php/admin/content/add';</script>";
        }

    }


    function showList(){
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from mvc_content as con left join mvc_category as cat on con.cid=cat.cid");
        $arr = array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }

        $smarty = new smarty();
        $smarty->assign("data",$arr);
        $smarty->display("admin/showList.html");
    }

    function show(){
        $coid = $_GET["conid"];
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from mvc_content where conid=".$coid);
        $row = $result->fetch_assoc();
        $smarty = new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/show.html");
    }

    function edit(){
        $conid = $_GET["conid"];
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from mvc_content where conid=".$conid);
        $row = $result->fetch_assoc();

        $smarty = new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/edition.html");
    }

    function edition(){
        $conid = $_POST["conid"];
        $ctitle = $_POST["ctitle"];
        $cons = $_POST["cons"];
        $cid = $_POST["cid"];
        $imgurl = $_POST["imgurl"];
        $info = $_POST["info"];

        $database = new db();
        $db = $database->db;
        $db->query("update mvc_content set ctitle='$ctitle',cons='$cons',cid=$cid,imgurl='$imgurl',info='$info' where conid=".$conid);

        if($db->affected_rows>0){
            echo "<script>alert('修改成功');location.href='/study/mvc/index.php/admin/content/edit?conid={$conid}';</script>";
        }else{
            echo $db->error;
            echo "<script>alert('修改失败');location.href='/study/mvc/index.php/admin/content/edit?conid={$conid}';</script>";
        }
    }


}