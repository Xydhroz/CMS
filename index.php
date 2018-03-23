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



    if(!isset($_GET['view']) || $_GET['view'] == ''){
        $_GET['view'] = 'accueil';
    }
    if(!isset($_GET['page']) || $_GET['page'] == ''){
        $_GET['page'] = 'index';
    }

    if($_GET['view'] == 'admin'){
        $_GET['page'] = 'login';
    }

    require $host.'settings/database-connect.php';
    require $host.'templates/header.php';

    $requiredPage = $host.'view/'.$_GET['view'].'/'.$_GET['page'].'.php';

    //echo $requiredPage;

    if(!include $requiredPage){
       include $host.'templates/404.php';
    }

    require $host.'templates/footer.php';

?>