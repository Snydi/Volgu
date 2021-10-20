<?php

if (isset($_POST["login-submit"])) {
    $email = $_POST["login-email"];
    $password = $_POST["login-password"];

    require_once 'dbh.php';
    require_once 'functions.php';

    loginUser($conn,$email,$password);

}

