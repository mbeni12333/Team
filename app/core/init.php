<?php

//this file will be included in every file , it contains all necessairy requirements and session_start()
//هذا الفيشي نديرو فيه الكونفيغ و فأي فيشي بهب نينكلوديواه
session_start();

$GLOBALS['config'] = array(
        "mysql"     =>  array(
            "host"      => "127.0.0.1",
            "dbname"    => "team",
            "username"  => "root",
            "password"  => ""
    ),
        "session"    =>  array(
        
    ),
        "remmember"  =>  array(
            "cookieName" => "rem",
            "expiry"     => 768876
    )
);

// this functions loads automaticly all the classes
// هاذي الفونكسيون فوور تدير إنكلود لكامل الكلاس أوتومانيكمو
spl_autoload_register(function($class){
    require_once('../classes/'.$class.'.php');
});

require_once '../functions/sanitize.php';
?>