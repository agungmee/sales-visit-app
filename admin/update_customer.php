<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['idcust'];
$nama = $_POST['nama'];
$wil = $_POST['wilayah'];
$salid = $_POST['salesid'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE customer SET id_customer='$id', nama_customer='$nama', wilayah_customer='$wil', sales_id='$salid' WHERE id_customer ='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location: list_customer.php");
 
?>