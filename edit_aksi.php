<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di irim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($koneksi, "update siswa set nama='$nama', nis='$nis', alamat='$alamat' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>