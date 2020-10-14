<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>DigitTalent - Data Mahasiswa</title>
</head>

<body>
    <div class="container">
        <div class="card mt-4">
            <h5 class="card-header  bg-primary text-white"><i class="fa fa-id-badge mr-3"></i>Input Mahasiswa</h5>
            <div class="card-body">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "true") {
                        echo "<div class='alert alert-success'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Selamat!</strong> Data berhasil ditambahkan. untuk melihat hasil silahkan klik <a href='index.php'>Data Mahasiswa</a>
                        </div>";
                    } else if ($_GET['pesan'] == "false") {
                        echo "<div class='alert alert-danger'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Maaf!</strong> Data gagal ditambahkan. silahkan input ulang / hubungin call center kami 002
                        </div>";
                    }
                }
                ?>

                <h5 class="card-title">Silahkan Input Data Mahasiswa Digital Talent 2020</h5>
                <form action="proses_input_mhs.php" method="POST">
                    <div class="form-group row">
                        <label for="inputNim" class="col-sm-2 col-form-label">Nim<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNim" name="nim" placeholder="Contoh : Digit12345678">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNama" class="col-sm-2 col-form-label">Nama<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputJk" class="col-sm-2 col-form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-laki" value="L">
                                <label class="form-check-label" for="exampleRadios1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="Perempuans" value="P">
                                <label class="form-check-label" for="exampleRadios2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputJurusan" class="col-sm-2 col-form-label">Jurusan<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jurusan">
                                <option>-- Pilih Jurusan --</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                                <option value="Management Informasi">Management Informasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm 10"><span class="text-danger">*</span> Wajib di Isi</div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm 2"></div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success"><i class="fa fa-send-ofa fa-send-o mr-2"></i>Simpan</button>
                            <button type="reset" class="btn btn-danger"><i class="fa fa-send-ofa fa-refresh mr-2"></i>Batal</button>
                        </div>
                    </div>
                    <a href="index.php">Kembali</a>
                </form>
            </div>
            <div class="card-footer text-center bg-primary text-white">
                Vocational School Graduate Academy (VSGA) - Politeknik Negeri Sriwijaya<br>Indah Widya Surya Ningrat &copy; 2020 Web Developer
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
