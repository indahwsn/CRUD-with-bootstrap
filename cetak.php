<?php
    include 'koneksi.php';
    require_once __DIR__ . '/vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf();
    ob_start();
?>
<!doctype html>
<html lang="en">

<head>
</head>
    <style>
        img{
            width: 11%;
        }
        .polsri{
            width: 5%;
        }
        table{margin: auto;}
        td,th{
            padding: 5px;
            text-align: center;
        }
        h2{text-align: center}
        th{
            background-color: #007bff;
            padding: 10px;
            color: #fff
        }
        h5{
            text-align: center;
            margin-top: 25%;
        }
    </style>
<body>
    <table>
        <tr>
            <td><img src="vsga.png"></td>
            <td></td>
            <td></td>
            <td><h2>Daftar Mahasiswa Digital Talent 2020</h2></td>
            <td></td>
            <td></td>
            <td><img class="polsri" src="polsri.png"></td>
        </tr>
    </table>
    <hr><br>
    <table>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>
        <?php
            $sql = mysqli_query($conn, "SELECT `id`, `nim`, `nama`, `jk`, `jurusan`, `alamat` FROM `mahasiswa`");
            $no = 1;
            foreach ($sql as $data) {
                $jk = $data['jk'] == 'P' ? 'Perempuan' : 'Laki-laki';
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nim']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $jk; ?></td>
                <td><?php echo $data['jurusan']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <h5>Vocational School Graduate Academy (VSGA) - Politeknik Negeri Sriwijaya<br>Indah Widya Surya Ningrat &copy; 2020 Web Developer</h5>
</body>

</html>
<?php

    $html = ob_get_contents();
    ob_end_clean();
    $mpdf->WriteHTML(utf8_encode($html));
    $mpdf->Output();
?>
