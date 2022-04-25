<?php error_reporting(E_ERROR | E_PARSE);


function emptyInputSignup($email,$password,$passwordRepeat,$username,$userbirthdate,$address,$sex,$interests,$link,$bloodtype,$bloodfactor) {

    if(empty($email) || empty($password) || empty($passwordRepeat) || empty($username) || empty($userbirthdate) || empty($address) || empty($sex) || empty($interests) || empty($link) || empty($bloodtype) || empty($bloodfactor))
    {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emptyInputLogin($email,$password) {

    if(empty($email) || empty($password))
    {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function invalidPassword($password)
{
    if (!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^& +=§!\?]{7,100}$/',$password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password,$passwordRepeat) {
    if($password !== $passwordRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function uidExists($conn,$email) {
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location:main.php?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}


function createUser($conn,$email,$password,$username,$userbirthdate,$address,$sex,$interests,$link,$bloodtype,$bloodfactor) {
    $sql = "INSERT INTO users (usersEmail,usersPassword,usersName,usersBirthdate,usersAddress,usersSex,usersInterests,usersLink,usersBloodtype,usersBloodfactor) VALUES(?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location:main.php?error=stmtFailed");
        exit();
    }

    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssssssssss",$email,$hashedPassword,$username,$userbirthdate,$address,$sex,$interests,$link,$bloodtype,$bloodfactor);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:login-page.php?error=none");
    exit();
}

function loginUser($conn,$email,$password) {
    $error = 0;
    $uidExists = uidExists($conn, $email);
    $passwordHashed = $uidExists["usersPassword"];
    $checkPassword = password_verify($password, $passwordHashed);
    $loginerror = 0;
    if ($checkPassword === false) {
        $_GET['message'] = 'Неправильный пароль.';
        $error = 1;
    }
    if ($uidExists === false) {
        $_GET['message'] = 'Такого пользователя не существует.';
        $error = 1;
    }
    if (emptyInputLogin($email,$password) !== false){
        $_GET['message'] = 'Пожалуйста, заполните все поля.';
        $error = 1;
    }
    /*if ($loginerror > 2) {
        $_GET['message'] = 'Слишком много неудачных попыток. Подождите 1 час.';
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = new DateTime();
        $fdate = $date->format('Y-m-d H:i:s');
        $sql = "INSERT INTO loginfailed (ip,time) VALUES(?,?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("location:main.php?error=stmtFailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"ss",$ip,$fdate);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

    }*/

    if ($error !== 1) {
            session_start();
            $_SESSION["userid"] = $uidExists["usersId"];
            $_SESSION["email"] = $uidExists["usersEmail"];
            header("location:main.php");
            exit();

    }

}