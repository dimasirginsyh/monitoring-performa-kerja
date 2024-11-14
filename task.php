<?php
include_once("utils/sessions.php");
include_once("db/config.php");
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
?>


<?php include_once("layouts/top-html.php") ?>
<!-- <a href="add.php">Add New User</a><br /><br /> -->

<table class="table table-bordered w-100">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th>Name</th>
            <th>Username</th>
            <th>Create Time</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $index = 1;
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td class='text-center'>" . $index . "</td>";
            echo "<td>" . $user_data['name'] . "</td>";
            echo "<td>" . $user_data['username'] . "</td>";
            echo "<td>" . $user_data['create_time'] . "</td>";
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