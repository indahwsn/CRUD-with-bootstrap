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

    <title>DigitTalent - Data Mahasiswa</title>
</head>

<body>
    <div class="container-md">
        <div class="card mt-4">
            <h5 class="card-header  bg-primary text-white"><i class="fa fa-vcard mr-3"></i>Tabel Mahasiswa</h5>
            <div class="card-body">
                <h5 class="card-title">Daftar Mahasiswa Digital Talent 2020</h5>
                <div class="table-responsive">
                    <table class="table table-sm table-hover">
                        <thead class=" text-light">
                            <tr class="bg-primary">
                                <th scope="col">No</th>
                                <th scope="col">Nim</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($conn, "SELECT `id`, `nim`, `nama`, `jk`, `jurusan`, `alamat` FROM `mahasiswa`");
                            $no = 1;
                            foreach ($sql as $data) {
                                $jk = $data['jk'] == 'P' ? 'Perempuan' : 'Laki-laki';
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data['nim']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $jk; ?></td>
                                    <td><?php echo $data['jurusan']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                </tr>
                            <?php } ?>
                    </table>
                </div>
            </div>
            <div class="card-footer text-center bg-primary text-white">
                Vocational School Graduate Academy (VSGA) - Politeknik Negeri Sriwijaya<br>Indah Widya Surya Ningrat &copy; 2020 Web Developer
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>
