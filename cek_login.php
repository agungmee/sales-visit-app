<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$nik = $_POST['nik'];
$password = $_POST['password'];
$nama = $_POST['nama'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE nik='$nik' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="Admin"){

		// buat session login dan username
		$_SESSION['nik'] = $nik;
		$_SESSION['level'] = "Admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/halaman_admin.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="Sales"){
		// buat session login dan username
		$_SESSION['nik'] = $koneksi;
		$_SESSION['level'] = "sales";
		// alihkan ke halaman dashboard pegawai
		header("location:sales/halaman_sales.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}



?>