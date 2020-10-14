<?php include 'koneksi.php'; ?>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>

    <title>DigitTalent - Data Mahasiswa</title>
</head>

<body>
    <div class="container-md">
        <div class="card mt-4">
            <h5 class="card-header  bg-dark text-white">Tabel Mahasiswa</h5>
            <div class="card-body">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "true") {
                        echo "<div class='alert alert-success' style='width: 30%'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Selamat!</strong> Data berhasil diubah.
                        </div>";
                    } else if ($_GET['pesan'] == "false") {
                        echo "<div class='alert alert-danger' style='width: 70%'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Maaf!</strong> Data gagal diubah. silhakan input ulang / hubungin call center kami 002
                        </div>";
                    } else if ($_GET['pesan'] == "true-hapus") {
                        echo "<div class='alert alert-success' style='width: 30%'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            Data berhasil dihapus.
                        </div>";
                    } else if ($_GET['pesan'] == "false-hapus") {
                        echo "<div class='alert alert-danger' style='width: 30%'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            Data gagal didihapus.
                        </div>";
                    }
                }
                ?>
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">Daftar Mahasiswa Digital Talent 2020</h5>
                    </div>
                    <div class="col col-sm-auto">
                        <a href="input_mahasiswa.php" class="btn btn-outline-dark btn-sm">Tambah <i class="fa fa-pencil fa-fw"></i></a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm table-hover">
                        <thead class=" text-light">
                            <tr class="bg-dark">
                                <th scope="col">No</th>
                                <th scope="col">Nim</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($conn, "SELECT `id_mhs`, `nim`, `nama`, `jenis_kelamin`, `jurusan`, `alamat` FROM `mahasiswa`");
                            $no = 1;
                            foreach ($sql as $data) {
                                $jenis_kelamin = $data['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-laki';
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data['nim']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $jenis_kelamin; ?></td>
                                    <td><?php echo $data['jurusan']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td>
                                        <a class="btn btn-dark btn-sm" data-id="<?php echo $data['id']; ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-dark btn-sm" data-id="<?php echo $data['id']; ?>" data-toggle="modal" data-target="#hapusModal"><i class="fa fa-trash-o"></i></a>
                                        <a href="cetak.php" class="btn btn-dark btn-sm" data-id="<?php echo $data['id']; ?>" data-toggle="modal" data-target="#hapusModal"><i class="fa fa-book fa-fw"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                    </table>


                </div>
            </div>
            <div class="card-footer text-center bg-dark text-white">
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="data modal-body" id="data">
                    <div class="fetch-data"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir edit modal -->

    <!-- Modal Popup untuk delete-->
    <div class="modal fade" id="hapusModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="fetch-hapus"></div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#myModal").on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('id');
                $.ajax({
                    type: 'post',
                    url: "detail.php",
                    data: 'id=' + id,
                    success: function(data) {
                        $('.fetch-data').html(data);
                    }
                });
            });
        });

        $(document).ready(function() {
            $("#hapusModal").on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('id');
                $.ajax({
                    type: 'post',
                    url: "hapus.php",
                    data: 'id=' + id,
                    success: function(data) {
                        $('.fetch-hapus').html(data);
                    }
                });
            });
        });
    </script>


</body>

</html>
