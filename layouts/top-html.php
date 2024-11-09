<?php include_once("utils/template.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Performa Karyawan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="d-flex overflow-hidden" style="height: 100vh">
        <?php include_once("sidebar.php") ?>
        <main class="p-4 flex-fill overflow-auto">
            <h1 class="mb-4">
                <?php titleByURI(); ?>
            </h1>
            <div class="d-flex justify-content-end mb-4 <?php handlerShowAddButton(); ?>">
                <button type="button" class="btn btn-success" style="min-width: 150px;">Tambah</button>
            </div>