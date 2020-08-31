<?php
use \libs\smarty;
use \libs\db;
class reg {
    function add(){
//        $smarty = new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//
//        $smarty->display("admin/reg.html");

//        $this->smarty->display("admin/reg.html");

        $smarty = new smarty();
        $smarty->display("admin/reg.html");
    }

    function addUser(){
        $username = $_POST["username"];
        $pass = $_POST["pass"];
        $pass1 = $_POST["pass1"];

        if(!$pass==$pass1){
            echo "密码不一致";
            return;
        }

        //连接数据库
//        $db = @new mysqli("localhost","root","gzx123456","wui2006","3308");
//        if($db->connect_error){
//            die("数据库连接错误");
//        }
//
//        $db->query("set names utf8");

//        $db = $this->db;
        $database = new db();
        $db = $database->db;
        $result = $db->query("select username from mvc_user where username='$username'");

        if($result->num_rows>0){
            echo "用户名已存在";
            return ;
        }

        $pass = md5(md5($pass));
        $db->query("insert into mvc_user (username,pass) values ('$username','$pass')");

        if($db->affected_rows>0){
            echo "插入成功";
        }
        $db->close();



    }

    function checkName(){
        $username = $_POST["username"];
//
//        $db = new mysqli("localhost","root","gzx123456","wui2006","3308");
//        $db->query("set names utf8");

//        $db = $this->db;

        $database = new db();
        $db = $database->db;
        $result = $db->query("select username from mvc_user where username='$username'");

        if($result->num_rows==0){
            echo "true";
        }else{
            echo "false";
        }

        $db->close();
    }
}