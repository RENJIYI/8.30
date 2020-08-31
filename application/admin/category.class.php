<?php
if(!defined("MVC")){
    die("非法侵入");
}

use \libs\smarty;
use \libs\db;
use \libs\upload;
class category{

    public $arr = array();
     function int(){
         $smarty = new smarty();

         //要查询数据，放入到页面当中
         $database = new db();
         $this->db=$database->db;
//         $result = $this->db->query("select * from mvc_category");
//         $data = array();
//         while($row=$result->fetch_assoc()){
//             $data[]=$row;
//         }

         $str="";
         $this->tree(0,$str);

         $smarty->assign("data",$str);
         $smarty->display("admin/category.html");
     }

     function tree($pid=0,&$str,$i=0){
         $result = $this->db->query("select * from mvc_category where pid=".$pid);
         while ($row=$result->fetch_assoc()){
             if($row["isshow"]==1){
                 $s="可见";
             }else{
                 $s="不可见";
             }

             $str.='<tr><td>'.($i+1).'级目录</td><td>'.str_repeat(">",$i).$row["cname"].'</td><td>'.$s.'</td>
<td>
<a href="javascript:;" attr="'.$row["cid"].'" class="add">添加</a>
<a href="/study/mvc/index.php/admin/category/del?cid='.$row["cid"].'" attr="'.$row["cid"].'" class="del">删除</a>
<a href="javascript:;" attr="'.$row["cid"].'" pid="'.$row["pid"].'" class="edit">修改</a>

</td></tr>';
             $this->tree($row["cid"],$str,$i+1);
         }
     }

     function show(){
         $cid = $_GET["cid"];
         $database = new db();
         $db = $database->db;
         $result = $db->query("select * from mvc_category where cid=".$cid);
         $row = $result->fetch_assoc();

         echo json_encode($row);
     }

     function getOption(){
         $this->treeOption(0,$this->arr);

         echo json_encode($this->arr);
     }

    function treeOption($pid,&$arr){
        $database = new db();
        $this->db=$database->db;
        $result = $this->db->query("select * from mvc_category where pid=".$pid);
        $i = 0;
        while ($row=$result->fetch_assoc()){
            $arr[$i]=array(
                "name"=>$row["cname"],
                "cid"=>$row["cid"],
                "pid"=>$row["pid"],
            );
            $this->treeOption($row["cid"],$arr[$i]["child"]);
            $i++;
        }
    }

    function addpage(){
         echo "添加栏目";
         $smarty = new smarty();
         $smarty->display("admin/addpage.html");
    }



     function add(){
         if(isset($_POST["cid"])){
             $pid = $_POST["cid"];
         }else{
             $pid = 0;
         }


         $path = $_POST["imgurl"];



         $cname = $_POST["cname"];
         $isshow = $_POST["isshow"];
         $tpl_name = $_POST["tpl_name"];
         $info = $_POST["info"];
         $database = new db();
         $db = $database->db;
         $db->query("insert into mvc_category (cname,pid,isshow,tpl_name,info,imgurl) values ('$cname','$pid',$isshow,'$tpl_name','$info','$path')");
         if($db->affected_rows>0){
             header("location:/study/mvc/index.php/admin/category/int");
         }else{
             header("location:/study/mvc/index.php/admin/category/int");
         }

     }

     function del(){
         $cid = $_GET["cid"];
         $database = new db();
         $db = $database->db;

         $result=$db->query("select * from mvc_category where pid=".$cid);
         if($result->num_rows>0){
             echo "<script>alert('请先删除子元素');location.href='/study/mvc/index.php/admin/category/int'</script>";
         }else{
             $db->query("delete from mvc_category where cid=".$cid);
             if($db->affected_rows>0){
                 header("location:/study/mvc/index.php/admin/category/int");
             }
         }

     }

     //修改内容
     function edition(){
         $cname = $_GET["cname"];
         $pid = $_GET["pid"];
         $cid = $_GET["cid"];
         $isshow = $_GET["isshow"];
         $tpl_name = $_GET["tpl_name"];
         $info = $_GET["info"];

         $imgurl = $_GET["imgurl"];

         $database = new db();
         $db = $database->db;

         $db->query("update mvc_category set cname='{$cname}',pid={$pid},isshow={$isshow},tpl_name='{$tpl_name}',info='{$info}',imgurl='{$imgurl}' where cid=".$cid);

         if($db->affected_rows>0){
             echo "ok";
         }else{
             echo "aaaa";

         }
     }

     function upload(){
         $smarty = new smarty();
         $smarty->display("admin/upload.html");
     }

     function uploadfile(){
         $upload = new upload();
         $upload->up();
         $path = HOST_ADD."/study/mvc/".$upload->fullpath;
         echo $path;
     }
}