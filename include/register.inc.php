<?php

if (isset($_POST["submit"])) {
    echo "It works";

    $fullname =  $_POST["fullname"];
    $username =  $_POST["username"];
    $email =  $_POST["email"];
    $password =  $_POST["password"];
    $cpassword =  $_POST["cpassword"];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputRegister($fullname, $username, $email, $password, $cpassword) !== false) {
        header("location: ../register.php?error=emptyinput ");
        exit();
    }
    if (invalidUsername($username) !== false) {
        header("location: ../register.php?error=invalidusername");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../register.php?error=invalidemail");
        exit();
    }
    if (passwordMath($password, $cpassword) !== false) {
        header("location: ../register.php?error=passwordsnotmatch");
        exit();
    }
    if (usernameExists($conn, $username, $email) !== false) {
        header("location: ../register.php?error=usernametaken");
        exit();
    }

    createUser($conn, $fullname, $username, $email, $password);
} else {
    header("location: ../register.php");
    exit();
}
