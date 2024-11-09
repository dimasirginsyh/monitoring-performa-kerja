<?php
include_once("db/config.php");
include_once("utils/password.php");
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
?>


<?php include_once("layouts/top-html.php") ?>
<!-- <?php checkPassword($mysqli, "dimasirgi", "123123"); ?> -->
<div class="d-flex align-items-center mb-4">
    <div style="width: 500px;"><canvas id="myChart1"></canvas></div>
    <div style="width: 300px;"><canvas id="myChart"></canvas></div>
</div>
<?php include_once("layouts/bottom-html.php") ?>