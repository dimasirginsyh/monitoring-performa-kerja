<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['name'] = "Dimas Irgi";
$_SESSION['status'] = "employee";
$_SESSION['username'] = "dimasirgi";

header("location: /");
