<?php
if(!defined("MVC")){
    die("非法进入");
}
use \libs\smarty;
use \libs\db;
use \libs\code;
//use \libs\cookie;
class index {
    function int(){
//        $smarty = new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//        $smarty->display("admin/login.html");

//        $this->smarty->display("admin/login.html");

        $smarty = new smarty();
        $smarty->display("admin/login.html");
    }

    function login(){
        //使用magic_quotes_sybase:off配置文件
        $username = addslashes($_POST["username"]);
        $pass = md5(md5($_POST["pass"]));
//        if($_POST["code"]!=$_SESSION["code"]){
//            echo "验证码有误";
//            return ;
//        }
        if(strlen($username)<5||empty($pass)){
            echo "用户名或密码不符合规范";
            return ;
        }


//        $db = @new mysqli("localhost","root","gzx123456","wui2006","3308");
//        if($db->error){
//            die("数据库连接错误");
//        }
//
//        $db->query("set names utf8");

//        $db = $this->db;

        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from mvc_user where username='$username' and pass='$pass'");

        if($result->num_rows<1){
            echo "没有相应的数据，请重新登录";

        }else{
//            $cookie = new cookie();
//            $cookie->setCookie("login","yes");
            $_SESSION["login"] = "yes";
            $_SESSION["username"] = $username;
            header("location:/study/mvc/index.php/admin/index/first");
        }

        $db->close();
    }


    function first(){
//        $cookie = new cookie();
//        if($cookie->isCookie("login")&&$cookie->getCookie("login")=="yes"){
//            echo "后台首页";
//        }else{
//
//            header("location:/study/mvc/index.php/admin/index/first");
//        }

        if(isset($_SESSION["login"])&&$_SESSION["login"]=="yes"){
            $smarty = new smarty();
            $smarty->assign("username",$_SESSION["username"]);
            $smarty->display("admin/index.html");
        }else{

            header("location:/study/mvc/index.php/admin/index/first");
        }

    }

    function logout(){
        session_destroy();
        header("location:/study/mvc/index.php/admin");
    }

    function mycode(){
        $code = new code();

        $code->codeLen=5;
        $code->lineNum["min"]=2;
        $code->lineNum["max"]=4;
        $code->fontSize["min"]=25;

        $code->out();


    }




}

