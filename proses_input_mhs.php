<?php
include 'koneksi.php';

//Menyimpan data kedalam variabel
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO `mahasiswa`(`nim`, `nama`, `jenis_kelamin`, `jurusan`, `alamat`) VALUES ('$nim', '$nama', '$jenis_kelamin', '$jurusan', '$alamat')";
$query = mysqli_query($conn, $sql);
if ($query) {
    // echo "<script> alert('Tambah data berhasil'); window.location='input_mahasiswa.php' </script>";
    header("location:input_mahasiswa.php?pesan=true");
} else {
    // echo "<script> alert('Tambah data gagal'); window.location='input_mahasiswa.php' </script>";
    header("location:input_mahasiswa.php?pesan=false");
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>