<?php
    include 'koneksi.php';

    //Menyimpan data kedalam variabel
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    // echo $id.'<br>';
    // echo $nim.'<br>';
    // echo $nama.'<br>';
    // echo $jk.'<br>';
    // echo $jurusan.'<br>';
    // echo $alamat.'<br>';

    $sql = "UPDATE `mahasiswa` SET `nama`='$nama',`jk`='$jk',`jurusan`='$jurusan',`alamat`='$alamat' WHERE `nim`='$nim'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        // echo "<script> alert('Tambah data berhasil'); window.location='input_mahasiswa.php' </script>";
        header("location:index.php?pesan=true");
    } else {
        // echo "<script> alert('Tambah data gagal'); window.location='input_mahasiswa.php' </script>";
        header("location:index.php?pesan=false");
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>