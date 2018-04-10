<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rigel</title>
    <link rel="icon" href="<?=$hostName?>assets/img/favicon.ico">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


    <link type="text/css" rel="stylesheet" href="<?=$hostName?>assets/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?=$hostName?>assets/css/style.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?=$hostName?>assets/css/themes/blue.min.css"  media="screen,projection"/>

    <?php
        $script = "";

        $viewCss = $hostName.'assets/css/'.$_GET['view'].'/style.min.css';
        $pageCss = $hostName.'assets/css/'.$_GET['view'].'/'.$_GET['page'].'.min.css';

        if(file_exists($host.'assets/css/'.$_GET['view'].'/style.min.css')){
            echo '<link type="text/css" rel="stylesheet" href="'.$viewCss.'"  media="screen,projection"/>';
        }

        if(file_exists($host.'assets/css/'.$_GET['view'].'/'.$_GET['page'].'.min.css')){
            echo '<link type="text/css" rel="stylesheet" href="'.$pageCss.'"  media="screen,projection"/>';
        }

    ?>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col s10">
                            <a href="<?=$hostName?>" class="brand-logo">Rigel</a>
                        </div>
                        <div class="col s2">
                            <?php
                            if(isset($_SESSION['user'])){
                                echo '<a href="'.$hostName.'controller/admin/logout.php"><i class="fa fa-sign-out-alt fa-lg"></i> Déconnexion</a>';
                            }
                            ?>
                        </div>
                        </div>
                </div>
            </div>
        </nav>
    </header>


    <main>

