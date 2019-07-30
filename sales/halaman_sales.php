<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama Sales</title>
	<?php include "../asset/modal/modal.php" ?>
	<link rel="stylesheet" href="../asset/css/navbar.css">	
</head>

	<?php include "../asset/modal/navbar_sales.php" ?>

<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<br>
	<br>
	<br>

	<div class="jumbotron">
		<p class="lead">Selamat Datang Di CekApp. Kamu Sudah Login Sebagai <?php echo $_SESSION ['level']; ?> </p>

		<div class="row">
		<div class="col-sm-6">
			<div class="card">
			<div class="card-body">
				<h5 class="card-title">Berita dan Informasi</h5>
				<p class="card-text">Isi Informasi ada disini <p> Ada Promo bulan Juni, tolong disampaikan ke customer!</p></p>
				<a href="#" class="btn btn-primary">Link Disini</a>
			</div>
			</div>
		</div>
		
		</p>
	</div>	

	<br/>
	<br/>

</body>
</html>