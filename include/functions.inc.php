<?php

function emptyInputRegister($fullname, $username, $email, $password, $cpassword)
{

    $result = true;

    if (empty($fullname) || empty($username) || empty($email) || empty($password) || empty($cpassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username)
{

    $result = false;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }

    return $result;
}


function invalidEmail($email)
{

    $result = false;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }

    return $result;
}

function passwordMath($password, $cpassword)
{

    $result = false;

    if ($password !== $cpassword) {
        $result = true;
    }

    return $result;
}


function usernameExists($conn, $username, $email)
{

    $sql = " SELECT * from users  where username = ? OR email = ? ; ";

    $stmt = mysqli_stmt_init($conn,);  #make more secure; do not inject sql statements that harm db
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultdata)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $fullname, $username, $email, $password)
{

    $sql = " INSERT INTO users (user_fullname, username, email, password) VALUES (?, ?, ?, ?) ; ";

    $stmt = mysqli_stmt_init($conn,);  #make more secure; do not inject sql statements that harm db
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $fullname, $username, $email, $hashedPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
}


function emptyInputLogin($username,  $password)
{
    $result = true;

    if (empty($username) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password)
{
    $uidExist = usernameExists($conn, $username, $username);

    if ($uidExist === false) {
        header("location: ../login.php?error=wronglogin ");
        exit();
    }

    $passwordHashed = $uidExist["password"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword === false) {
        header("location: ../login.php?error=wronglogin ");
        exit();
    } else if ($checkPassword === true) {
        session_start();
        $_SESSION["userid"] = $uidExist["user_id"];
        $_SESSION["username"] = $uidExist["username"];
        header("location: ../index.php");
        exit();
    }
}
