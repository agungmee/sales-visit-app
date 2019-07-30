<?php 
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi,"DELETE from customer where id_customer ='$id'");

// mengalihkan halaman kembali ke index.php
header("location: list_customer.php");

?>