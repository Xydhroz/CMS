<?php
    define('PX', 'rg_');

    if($_SERVER['SERVER_NAME'] == 'localhost'){ //Identifants en local
        $DBserver   = 'localhost';
        $DBname     = 'rigel_cms';
        $DBusername = 'root';
        $DBpassword = '';
    }else{
        $DBserver   = 'victoradqzadmin.mysql.db'; // Identifiants en ligne
        $DBname     = 'victoradqzadmin';
        $DBusername = 'victoradqzadmin';
        $DBpassword = '949CKvwUZrfWUDas';
    }

    try {
        $BDD = new PDO("mysql:host=$DBserver;dbname=$DBname", $DBusername, $DBpassword);
        // set the PDO error mode to exception
        $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "Database connection failed : " . $e->getMessage();
    }

?>