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

    //redirecttion admin
    if($_GET['view'] == 'admin'){
        if(!isset($_SESSION['user']) || $_SESSION['user']['type_user'] == 0){
            $_GET['page'] = 'login';
        }
        if(!isset($_GET['page']) || $_GET['page'] == ''){
            $_GET['page'] = 'accueil';
        }
    }

    //redirection front
    if(!isset($_GET['view']) || $_GET['view'] == ''){
        $_GET['view'] = 'accueil';
    }
    if(!isset($_GET['page']) || $_GET['page'] == ''){
        $_GET['page'] = 'index';
    }

    require $host.'settings/database-connect.php';


    //header front ou admin
    if($_GET['view'] == 'admin') {
        require $host . 'templates/headerAdmin.php';
    }else{
        require $host . 'templates/header.php';
    }


    $requiredPage = $host.'view/'.$_GET['view'].'/'.$_GET['page'].'.php';


    //include de la page voulue ou du 404
    if(!include $requiredPage){
       include $host.'templates/404.php';
    }


    //footer front ou admin
    if($_GET['view'] == 'admin') {
        require $host.'templates/footerAdmin.php';
    }else{
        require $host.'templates/footer.php';
    }


?>