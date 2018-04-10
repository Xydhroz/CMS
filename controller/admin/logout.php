<?php
    session_start();
    $_SESSION = null;
    session_destroy();

    if($_SERVER['SERVER_NAME'] == 'localhost'){
        $host       = $_SERVER['DOCUMENT_ROOT'].'/CMS/';
        $hostName   = 'http://'.$_SERVER['SERVER_NAME'].'/CMS/';
    }else{
        $host       = $_SERVER['DOCUMENT_ROOT'].'/';
        $hostName   = 'http://'.$_SERVER['SERVER_NAME'].'/';
    }

    header('location: '.$hostName);
?>