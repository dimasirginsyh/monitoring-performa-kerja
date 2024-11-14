<?php
function titleByURI()
{
    if ($_SERVER['REQUEST_URI'] === "/") {
        echo "Dashboard";
    } elseif ($_SERVER['REQUEST_URI'] === "/employee.php") {
        echo "Karyawan";
    } elseif ($_SERVER['REQUEST_URI'] === "/task.php") {
        echo "Tugas";
    } elseif ($_SERVER['REQUEST_URI'] === "/user.php") {
        echo "User";
    }
}

function handlerShowAddButton()
{
    if ($_SERVER['REQUEST_URI'] === "/") {
        echo 'd-none';
    } elseif ($_SERVER['REQUEST_URI'] === "/employee.php") {
        echo '';
    } elseif ($_SERVER['REQUEST_URI'] === "/task.php") {
        echo '';
    }
}
