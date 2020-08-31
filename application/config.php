<?php
return array(
    "database" => array(
        "host" => "localhost",
        "username" => "root",
        "password" => "12345",
        "dbname" => "wui2006",
        "port" => 3308
    ),
    "smarty" => array(
        "templateDir" => TPL_PATH,
        "compileDir" => COMPILE_PATH,
        "cacheDir" => CACHE_PATH
    ),
    "code" => array(
        "type" => "png",
        "width" => 160,
        "height" => 40,
        "codeLen" => 4,
        "seed" => "abcdefhjkmnprstuvwxyzABCDEFHJKMNPRSTUVWXYZ345678",
        "fontSize" => array("min" => 20, "max" => 35),
        "fontAngle" => array("min" => -15, "max" => 15),
        "lineNum" => array("min" => 1, "max" => 4),
        "linWidth" => array("min" => 1, "max" => 4),
        "pixNum" => array("min" => 300, "max" => 500),
        "fontFile" => 'D:\wamp64\www\mvc\application\static\font\msyh.ttc',
        "ischeck"=>false
    )
);