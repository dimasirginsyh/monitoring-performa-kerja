<?php
include_once("../db/config.php");
include_once("../utils/password.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$checkPassword = checkPassword($mysqli, $username, $password);

if ($checkPassword['verify']) {

    $_SESSION['user_id'] = $checkPassword['data']['user_id'];
    $_SESSION['name'] = $checkPassword['data']['name'];
    $_SESSION['username'] = $checkPassword['data']['username'];
    $_SESSION['role'] = $checkPassword['data']['rolename'];

    header("location: /");
} else {
    $_SESSION['error_message'] = "Pastikan username dan password anda benar";
    header("location: /login.php");
}
