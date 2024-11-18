<?php

include_once("db/config.php");

// format datetime bisa diisi dengan YYYY-MM-DD hh:mm:ss

// table user
// $tableUsers = mysqli_query($mysqli, '
//     CREATE TABLE IF NOT EXISTS users(
//         id INT NOT NULL AUTO_INCREMENT,
//         username VARCHAR(20) UNIQUE NOT NULL,
//         password VARCHAR(100) NOT NULL,
//         name VARCHAR(50) NOT NULL,
//         role_id INT NOT NULL,
//         PRIMARY KEY (id),
//         FOREIGN KEY (role_id) REFERENCES roles(id)
//     );
// ');

// table role
// $tableRoles = mysqli_query($mysqli, '
//     CREATE TABLE IF NOT EXISTS roles(
//         id INT NOT NULL AUTO_INCREMENT,
//         rolename VARCHAR(20),
//         description TEXT,
//         PRIMARY KEY (id)
//     );
// ');

// table user-role
// $tableUserRole = mysqli_query($mysqli, '
//     CREATE TABLE IF NOT EXISTS userrole(
//         id INT NOT NULL AUTO_INCREMENT,
//         user_id INT,
//         role_id INT,
//         PRIMARY KEY (id),
//         FOREIGN KEY (user_id) REFERENCES users(id),
//         FOREIGN KEY (role_id) REFERENCES roles(id) 
//     );
// ');

$tableTask = mysqli_query($mysqli, '
    CREATE TABLE IF NOT EXISTS task(
        id INT NOT NULL AUTO_INCREMENT,
        activity TEXT NOT NULL,
        activity_date DATE NOT NULL DEFAULT (CURRENT_DATE),
        count INT NOT NULL,
        user_id INT NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (user_id) REFERENCES users(id)
    );
');

// if ($tableUsers) {
//     $passwordDefault = password_hash("123123", PASSWORD_DEFAULT, ['cost' => 10]);
//     mysqli_query($mysqli, "INSERT INTO users (username, password, name) VALUES ('test', '$passwordDefault', 'test')");
//     mysqli_query($mysqli, "INSERT INTO users (username, password, name) VALUES ('testing', '$passwordDefault', 'testing')");
// }

// if ($tableRoles) {
//     mysqli_query($mysqli, '
//         INSERT INTO roles (rolename, description)
//         VALUES ("employee", "pekerja"),
//         ("manager", "manager")
//     ');
// }

// if ($tableUserRole) {
//     mysqli_query($mysqli, '
//         INSERT INTO userrole (user_id, role_id)
//         VALUES (aaa, bbb),
//         (aaa, bbb)
//     ');
// }