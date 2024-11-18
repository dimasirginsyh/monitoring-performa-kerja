<?php
include_once("utils/sessions.php");
include_once("db/config.php");

$userId = intval($_SESSION['user_id']);
$query = "SELECT * FROM task WHERE user_id = $userId ORDER BY id DESC";
if ($_SESSION['role'] == "admin") $query = "SELECT * FROM task ORDER BY id DESC";
$result = mysqli_query($mysqli, $query);
?>


<?php include_once("layouts/top-html.php") ?>
<table class="table table-bordered w-100">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th>Kegiatan</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $index = 1;
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td class='text-center'>" . $index . "</td>";
            echo "<td>" . $user_data['activity'] . "</td>";
            echo "<td>" . $user_data['count'] . "</td>";
            echo "<td>" . $user_data['activity_date'] . "</td>";
            echo '
                <td class="d-flex gap-2">
                    <a href="edit.php?id=$user_data[id]">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>
                    <a href="delete.php?id=$user_data[id]">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                </td></tr>
            ';
            $index++;
        }
        ?>
    </tbody>
</table>
<?php include_once("layouts/bottom-html.php") ?>