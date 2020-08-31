<?php
return array(
    "database"=>array(
        "host"=>"localhost",
        "username"=>"root",
        "password"=>"gzx123456",
        "dbname"=>"wui2006",
        "port"=>3308
    ),
    "smarty"=>array(
        "templateDir"=>TPL_PATH,
        "compileDir"=>COMPILE_PATH,
        "cacheDir"=>CACHE_PATH
    ),
    "code"=>array(
        "type" => "png",
        "width" => 160,
        "height" => 50,
        "codeLen" => 4,
        "seed" => "abcdefhjkmnprstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ2345678",

        "fontSize" => array("min"=>25,"max"=>35),
        "fontAngle" => array("min"=>-15,"max"=>15),
        "lineNum" => array("min"=>2,"max"=>4),
        "lineWidth" => array("min"=>1,"max"=>4),
        "pixNum" => array("min"=>80,"max"=>150),
        "font" => 'C:\Windows\Fonts\msyh.ttc',
        "ischeck"=>true
    )
);