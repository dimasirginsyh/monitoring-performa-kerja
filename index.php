<?php
include_once("utils/sessions.php");
include_once("db/config.php");

$userId = intval($_SESSION['user_id']);
$result = mysqli_query($mysqli, "SELECT SUM(count) AS TaskCount FROM task WHERE user_id = $userId ORDER BY id DESC");
?>

<?php include_once("layouts/top-html.php") ?>
<div class="d-flex align-items-center mb-4">
    <?php echo mysqli_fetch_assoc($result)['TaskCount'] ?>
    <div style="width: 500px;"><canvas id="myChart1"></canvas></div>
    <div style="width: 300px;"><canvas id="myChart"></canvas></div>
</div>
<?php include_once("layouts/bottom-html.php") ?>