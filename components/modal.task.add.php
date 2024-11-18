<?php
include_once("./db/config.php");

$query = mysqli_query($mysqli, "SELECT users.id AS user_id, users.name AS name, roles.rolename AS rolename FROM users JOIN roles ON users.role_id = roles.id WHERE rolename <> 'admin'");
?>

<div class="modal fade" id="componentModal" tabindex="-1" aria-labelledby="componentModalLabel" aria-hidden="true">
    <form action="services/task.add.process.php" method="post">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="componentModalLabel">Tambah Kegiatan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php if ($_SESSION['role'] == "admin") { ?>
                        <div class="mb-3">
                            <label for="user" class="form-label">User</label>
                            <select class="form-select" id="user" name="user" aria-label="Default select example">
                                <?php
                                while ($dataRoles = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?php echo $dataRoles['user_id']; ?>"><?php echo $dataRoles['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    <?php } else { ?>
                        <input id="user" name="user" value="" hidden />
                    <?php } ?>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal</label>
                        <input type="date" id="date" name="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="activity" class="form-label">Kegiatan</label>
                        <textarea type="text" id="activity" name="activity" class="form-control" style="height: 100px; resize: none;" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="count" class="form-label">Jumlah</label>
                        <input type="number" id="count" name="count" class="form-control" required>
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