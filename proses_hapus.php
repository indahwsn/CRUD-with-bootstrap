<?php
    include 'koneksi.php';

    //Menyimpan data kedalam variabel
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    // echo $id.'<br>';
    // echo $nim.'<br>';

    $sql = "DELETE FROM `mahasiswa` WHERE `nim`='$nim'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        // echo "<script> alert('Tambah data berhasil'); window.location='input_mahasiswa.php' </script>";
        header("location:index.php?pesan=true-hapus");
    } else {
        // echo "<script> alert('Tambah data gagal'); window.location='input_mahasiswa.php' </script>";
        header("location:index.php?pesan=false-hapus");
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>