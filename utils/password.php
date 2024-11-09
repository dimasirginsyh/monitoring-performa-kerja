<?php

function checkPassword($connection, $username, $password)
{
    $result = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username'");
    $objRes = mysqli_fetch_assoc($result);
    $hashPassword = password_hash($objRes['password'], PASSWORD_DEFAULT);
    echo $hashPassword . "\n";
    echo json_encode(password_verify($password, $hashPassword)) . "\n";
    echo json_encode(mysqli_fetch_assoc($result));
}
