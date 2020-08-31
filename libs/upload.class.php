<?php
namespace libs;
class upload{
    //定义属性，在外部可修改的属性
    public $filesize;
    public $fileType = array("image/png","image/jpeg","image/gif");
    public $filename = "file";
    public $defaulDir = "upload";
    public $fullpath;
    function __construct(){
        ini_set("max_execution_time",100);
        ini_set("memory_limit",500);
        //ini_set("upload_max_filesize","10M");
        //ini_set("post_max_size","10M");
        $this->filesize = 1024*1024*5;

    }

    private function accept(){
        $this->data = $_FILES[$this->filename];
    }

    private function check(){
        if(is_uploaded_file($this->data["tmp_name"])){

            if($this->data["size"]<$this->filesize){

                if(in_array($this->data["type"],$this->fileType)){

                    return true;
                }else{
                    echo "文件类型不符合";
                    return false;
                }

            }else{
                echo "文件太大";
                return false;
            }

        }else{
            echo "文件不合法";
            return false;
        }
    }

    private function createDir(){
        if(!is_dir($this->defaulDir)){
            mkdir($this->defaulDir,0777,true);

        }
        $currentDir = $this->defaulDir."/".date("Y-m-d");

        if(!is_dir($currentDir)){
            mkdir($currentDir,0777,true);
        }

        $filename = time().mt_rand(1000,20000).$this->data["name"];
        $this->fullpath = $currentDir."/".$filename;
    }

    private function move(){
        move_uploaded_file($this->data["tmp_name"],$this->fullpath);
    }
    function up(){
        //1.接收上传的数据
        $this->accept();
        //2.检查数据是否合法
        if($this->check()){

            //3.创建文件夹，用于放入上传文件
            $this->createDir();
            //4.移动到指定的目录
            $this->move();
        }
    }
}
