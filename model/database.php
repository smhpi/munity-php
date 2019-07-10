<?php
    $dsn = 'mysql:host=localhost;dbname=adventureworks';
    $username = 'root';
    $password = '';

    try{
        $db = new PDO($dsn, $username, $password);
    } catch(PDOException $e){
        $error_msg = $e -> getMessage();
        include('../errors/db_error.php');
        exit();
    }
?>