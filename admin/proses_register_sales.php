<?php
require_once('../koneksi.php');
$nikk = $name = $jabat = $wil = $pass = $lev = '';

$nikk 	= $_POST['niks'];
$name 	= $_POST['namas'];
$jabat 	= $_POST['jabatans'];
$wil 	= $_POST['wilayahs'];
$pass 	= $_POST['passwords'];
$lev 	= $_POST['levels'];

$sql = "INSERT INTO karyawan (nik, nama, jabatan, wilayah, password, level) VALUES ('$nikk','$name','$jabat','$wil','$pass','$lev')";
$result = mysqli_query($koneksi, $sql);
if($result)
{
	header("Location: list_sales.php");
}
else
{
	echo "Error :".$sql;
}
?>