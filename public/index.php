<?php
    require_once('../core/init.php');
    // index.php?p=login 
    // to separate at maximum access to server for security
    // files are found in ../pages 
    $p = isset($_GET['p'])) ? $_GET['p'] : 'login';
    ob_start();
    if($p === 'login'){
        require '../pages/login.php';
    }else if(){
        require '';
    }
    $content = ob_get_clean();
    require '..pages/template/default.php';
?>