<?php
include_once("db/config.php");
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$_GET[id]");
?>


<?php include_once("layouts/top-html.php") ?>
<?php
$user = mysqli_fetch_assoc($result);
echo json_encode($user);
?>
<?php include_once("layouts/bottom-html.php") ?>