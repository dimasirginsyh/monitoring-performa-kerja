<?php
include_once("./db/config.php");

$query = mysqli_query($mysqli, "SELECT * FROM roles");
?>

<div class="modal fade" id="componentModal" tabindex="-1" aria-labelledby="componentModalLabel" aria-hidden="true">
    <form action="services/user.add.process.php" method="post">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="componentModalLabel">Tambah Pengguna</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" aria-label="Default select example">

                            <?php
                            while ($dataRoles = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?php echo $dataRoles['id']; ?>"><?php echo $dataRoles['description'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>