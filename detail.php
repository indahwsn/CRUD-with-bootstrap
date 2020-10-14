<form action="edit_mahasiswa.php" method="POST">
    <?php
    include 'koneksi.php';
    $id_mhs = $_POST['id_mhs'];
    $query_edit = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");
    $row = mysqli_fetch_array($query_edit);
    //membuat data jurusan menjadi dinamis dalam bentuk array
    $jurusan = array('Teknik Informatika','Sistem Informasi','Teknik Komputer','Management Informasi');
    //membuat function untuk set aktif radio buttom
    function active_radio_button($value, $input){
        //apabila value dari radio sama dengan yang di input
        $result = $value==$input?'checked':'';
        return $result;
    }
    ?>
    <div class="form-group row">
        <label for="inputNim" class="col-sm-2 col-form-label">Nim</label>
        <div class="col-sm-10">
            <input type="hidden" class="form-control" id="inputId name="id" value="<?php echo $row['id']; ?>">
            <input type="text" class="form-control" id="inputNim" name="nim" value="<?php echo $row['nim']; ?>" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNama" name="nama" value="<?php echo $row['nama']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputJk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jk" id="Laki-laki" value="L" <?php echo active_radio_button("L", $row['jk']) ?>>
                <label class="form-check-label" for="exampleRadios1">
                    Laki-laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jk" id="Perempuans" value="P" <?php echo active_radio_button("P", $row['jk']) ?>>
                <label class="form-check-label" for="exampleRadios2">
                    Perempuan
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputJurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <select class="form-control" name="jurusan">
                <?php  
                    foreach($jurusan as $j){
                ?>
                <option value="<?php echo $j ?>" <?php echo $row['jurusan']==$j?'selected="selected"':'' ?>><?php echo $j ?></option>
                    <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $row['alamat']; ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
    </div>
    <div class="form-group row">
        <div class="col-sm 2"></div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-success"><i class="fa fa-send-ofa fa-send-o mr-2"></i>Simpan</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-send-ofa fa-refresh mr-2"></i>Batal</button>
        </div>
    </div>
    
</form>