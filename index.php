<!DOCTYPE html>
<html>
<head>
	<title>CekApp</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<?php include "asset/modal/modal.php"; ?>
</head>
<body>
 
	<h1></h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>NIK dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login" >Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="nik" class="form_login" placeholder="NIK .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		
	</div>
 
 
</body>
</html>