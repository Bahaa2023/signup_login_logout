<?php

try {
    $pdo = new PDO("mysql:host=localhost; dbname=signup_login_logout" , "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

} catch (ErrorException $e) {

    echo "Connection error : " . $e->getMessage();   
}