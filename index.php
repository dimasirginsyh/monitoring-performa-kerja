<?php
// Create database connection using config file
include_once("db/config.php");
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script>
        const ctx = document.getElementById('myChart')
        // eslint-disable-next-line no-unused-vars
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    'Sunday',
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday'
                ],
                datasets: [{
                    data: [
                        15339,
                        21345,
                        18483,
                        24003,
                        23489,
                        24092,
                        12034
                    ],
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        boxPadding: 3
                    }
                }
            }
        })
    </script>
</head>

<body>
    <div class="d-flex overflow-hidden" style="height: 100vh">
        <aside class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table" />
                        </svg>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid" />
                        </svg>
                        Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle" />
                        </svg>
                        Customers
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </aside>
        <main class="p-4 flex-fill">
            <a href="add.php">Add New User</a><br /><br />

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

            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
        </main>
    </div>

    <!-- import bootstap javascript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>