<?php
include_once("utils/sessions.php");
include_once("db/config.php");
$result = mysqli_query($mysqli, "SELECT users.id AS user_id, users.name AS name, users.username AS username, roles.rolename AS rolename FROM users JOIN roles ON users.role_id = roles.id ORDER BY user_id DESC");
?>


<?php include_once("layouts/top-html.php") ?>
<table class="table table-bordered w-100">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th>Name</th>
            <th>Username</th>
            <th>Role</th>
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
            echo "<td>" . $user_data['rolename'] . "</td>";
            echo '
                            <td class="d-flex gap-2">
                                <a href="edit.php?id=$user_data[user_id]">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                                <a href="delete.php?id=$user_data[user_id]">
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