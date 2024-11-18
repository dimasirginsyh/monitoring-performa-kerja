<?php
include_once("../db/config.php");
include_once("../utils/password.php");

$username = $_POST['username'];
$password = $_POST['password'];

$checkPassword = checkPassword($mysqli, $username, $password);

if ($checkPassword['verify']) {
    session_start();

    $_SESSION['user_id'] = $checkPassword['data']['user_id'];
    $_SESSION['name'] = $checkPassword['data']['name'];
    $_SESSION['username'] = $checkPassword['data']['username'];
    $_SESSION['role'] = $checkPassword['data']['rolename'];

    header("location: /");
}
