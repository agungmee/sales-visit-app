<?php
require_once('../koneksi.php');
$kcustomer = $cname = $wilayah = $salesid = '';

$kcustomer 	= $_POST['id_customer'];
$cname 		= $_POST['nama_customer'];
$wilayah 	= $_POST['wilayah_customer'];
$salesid 	= $_POST['sales_id'];


$sql = "INSERT INTO customer (id_customer, nama_customer, wilayah_customer, nik) VALUES ('$kcustomer','$cname','$wilayah','$salesid')";
$result = mysqli_query($koneksi, $sql);
if($result)
{
	header("Location: list_customer.php");
}
else
{
	echo "Error :".$sql;
}
?>