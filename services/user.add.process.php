<?php
include_once("../db/config.php");

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = intval($_POST['role']);

$hashPassword = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);

$query = mysqli_query($mysqli, "INSERT INTO users (name, username, password, role_id) VALUES ('$name', '$username', '$hashPassword', $role)");

if ($query) {
    header("location: /user.php");
}
