<?php

/**
 * using mysqli_connect for database connection
 */

$hostname = "HOSTNAME";
$database = "DATABASE NAME";
$username = "USERNAME";
$password = "PASSWORD DATABASE";

$mysqli = mysqli_connect($hostname, $username, $password, $database);

if (!$mysqli) {
    echo "Dont connect to database";
}
// else {
//     echo "Can connect to database";
// }
