<?php
    session_start();
    error_reporting(0);

    if($_SERVER['SERVER_NAME'] == 'localhost'){
        $host       = $_SERVER['DOCUMENT_ROOT'].'/CMS/';
        $hostName   = 'http://'.$_SERVER['SERVER_NAME'].'/CMS/';
    }else{
        $host       = $_SERVER['DOCUMENT_ROOT'].'/';
        $hostName   = 'http://'.$_SERVER['SERVER_NAME'].'/';
    }

    if(!isset($_GET['view'])){
        $_GET['view'] = 'accueil';
    }
    if(!isset($_GET['page'])){
        $_GET['page'] = 'index';
    }


    require $host.'settings/database-connect.php';
    require $host.'templates/header.php';

    if(!include $host.'view/'.$_GET['view'].'/'.$_GET['page'].'.php'){
       include $host.'templates/404.php';
    }

    require $host.'templates/footer.php';

?>