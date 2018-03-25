<?php
    session_start();
    require_once '../../settings/database-connect.php';

    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $requete = 'SELECT * FROM '.PX.'users WHERE LOWER(email) = LOWER("'.$email.'")';

    $results = $BDD->query($requete);
    $results->setFetchMode(PDO::FETCH_OBJ);

    $users = $results->fetchAll();

    if(count($users) == 1){
        if(password_verify($password, $users[0]->password) && $users[0]->type != 0){
            $_SESSION['user']['id_user'] = $users[0]->id_user;
            $_SESSION['user']['type_user'] = $users[0]->type;
            echo 'connect';
        }else{
            echo 'error';
            return 'error';
        }
    }else{
        echo 'error';
        return null;
    }
    $results->closeCursor();


?>