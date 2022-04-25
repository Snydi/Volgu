<?php
error_reporting(E_ERROR | E_PARSE);


if (isset($_POST["signup-submit"])) {

    $email = $_POST["signup-email"];
    $password = $_POST["signup-password"];
    $passwordRepeat = $_POST['signup-passwordRepeat'];
    $username = $_POST["signup-username"];
    $userbirthdate = $_POST["signup-birthdate"];
    $address = $_POST["signup-address"];
    $interests = $_POST["signup-interests"];
    $link = $_POST["signup-link"];
    $sex = $_POST["signup-sex"];
    $bloodtype = $_POST["signup-bloodtype"];
    $bloodfactor = $_POST["signup-bloodfactor"];


    require_once 'dbh.php';
    require_once 'functions.php';
    $error = 0;
    if (uidExists($conn, $email) !== false){
        $_GET['message'] = 'Такой пользователь уже существует.';
        $error = 1;
    }
    if (passwordMatch($password,$passwordRepeat) !== false){
        $_GET['message'] = 'Пароли не совпадают.';
        $error = 1;

    }
    if (invalidPassword($password) !== false){
        $_GET['message'] = 'Пароль не соответсвует требованиям.';
        $error = 1;
    }
    if (invalidEmail($email) !== false){
        $_GET['message'] = 'Пожалуйста, введите валидный email.';
        $error = 1;
    }
    if (emptyInputSignup($email,$password,$passwordRepeat,$username,$userbirthdate,$address,$sex,$interests,$link,$bloodtype,$bloodfactor) !== false){
        $_GET['message'] = 'Пожалуйста, заполните все поля.';
        $error = 1;
    }
    if ($error !== 1) {
        createUser($conn, $email, $password, $username, $userbirthdate, $address, $sex, $interests, $link, $bloodtype, $bloodfactor);
    }

}

