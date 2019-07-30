<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['nik'];
$nama = $_POST['nama'];
$jabt = $_POST['jabatan'];
$wil = $_POST['wilayah'];
$lev = $_POST['level'];
$pass = $_POST['password'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE karyawan SET nik='$id', nama='$nama', jabatan='$jabt', wilayah='$wil', password ='$pass', level='$lev' WHERE nik ='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location: list_sales.php");
 
?>