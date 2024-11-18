<?php

function checkPassword($connection, $username, $password)
{
    $result = mysqli_query($connection, "SELECT users.id AS user_id, users.name AS name, users.username AS username, users.password AS password, roles.rolename AS rolename FROM users JOIN roles ON users.role_id = roles.id WHERE username = '$username'");
    $data = mysqli_fetch_assoc($result);
    $verify = password_verify($password, $data['password']);

    return [
        'verify' => $verify,
        'data' => $data
    ];
}
