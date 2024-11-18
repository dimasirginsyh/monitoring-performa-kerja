<?php
include_once("../db/config.php");

session_start();

$userId = $_POST['user'];
$date = $_POST['date'];
$activity = $_POST['activity'];
$count = intval($_POST['count']);

$user = intval($userId ? $userId : $_SESSION['user_id']);

$query = mysqli_query($mysqli, "INSERT INTO task (activity, count, user_id, activity_date) VALUES ('$activity', $count, $user, '$date')");

if ($query) {
    header("location: /task.php");
}
