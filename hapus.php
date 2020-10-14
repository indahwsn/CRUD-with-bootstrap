<form action="proses_hapus.php" method="POST">
    <?php
        include 'koneksi.php';
        $id = $_POST['id'];
        $query_edit = mysqli_query($conn, "SELECT `id`,`nim` FROM mahasiswa WHERE id='$id'");
        $row = mysqli_fetch_array($query_edit);
    ?>
    <div class="modal-header mx-auto">
        <h6 class="modal-title">Yakin ingin menghapus data ini?</h6>
    </div>

    <div class="modal-footer mx-auto">
        <input type="hidden" class="form-control" id="inputId name=" id" value="<?php echo $row['id']; ?>">
        <input type="hidden" class="form-control" id="inputNim" name="nim" value="<?php echo $row['nim']; ?>">
        <button type=" button" class="btn btn-danger" id="delete_link">Delete</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
    </div>
</form>