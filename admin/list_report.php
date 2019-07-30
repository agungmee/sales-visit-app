<!DOCTYPE html>
<html>
<head>
	<title>List Report</title>
	<?php include "../asset/modal/modal.php" ?>
	<link rel="stylesheet" href="../asset/css/navbar.css">	
	<?php include "../asset/modal/navbar_admin.php" ?>
	<link rel="stylesheet" href="../asset/css/navbar.css">
</head>
<body>
	<br/>
	
	<br/>
	<br/>
	<div class="container">
		<div class="row">
			<div class="col-sm-1.5">
				<a button type="button" class="btn btn-success btn-sm btn-block" href="export_kunjungan.php">Export</a>
			</div>
		</div>
		<br>
		<br>
    	<div class="row">
			<div class="col-lg">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Kunjungan</h3>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Report Kunjungan" readonly="readonly" />
					</div>
					<!-- <form action="list_report.php" method="post">
						<input type="date" name="tgl1">
						<input type="date" name="tgl2">
						<input type="submit" name="tampilkan" value="TAMPILKAN">
					</form> -->
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Kode Visit</th>
                                <th scope="col">ID Customer</th>
								<th scope="col">Nama Customer</th>
								<th scope="col">Wilayah Customer</th>
                                <th scope="col">Tanggal Kunjungan</th>
                                <th scope="col">ID Sales</th>
								<th scope="col">Nama Sales</th>
								<th scope="col">Jarak Kunjung</th>
								<th scope="col">Jam Kunjung</th>
                                <th scope="col">Opsi</th>
							</tr>
						</thead>
		
						<?php 
							include '../koneksi.php';
							// if(isset($_POST["tampilkan"])){
							// $dt1 = $_POST["tgl1"];
							// $dt2 = $_POST["tgl2"];

							$no = 1;
							$data = mysqli_query($koneksi, "SELECT visit.no_visit, visit.time, visit.tgl_visit, visit.distance, visit.id_customer, visit.nik, customer.nama_customer, customer.wilayah_customer, karyawan.nama,karyawan.wilayah FROM visit INNER JOIN customer ON visit.id_customer=customer.id_customer INNER JOIN karyawan ON karyawan.nik=customer.nik ");
							while($d = mysqli_fetch_array($data)){
								?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['no_visit']; ?></td>
				<td><?php echo $d['id_customer']; ?></td>
				<td><?php echo $d['nama_customer']; ?></td>
				<td><?php echo $d['wilayah_customer']; ?></td>
				<td><?php echo $d['tgl_visit']; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['distance'] . " meter"; ?></td>
				<td><?php echo $d['time']; ?></td>
				<td>
					<a style="color: rgb(0,255,0)" href="hapus_report.php?id=<?php echo $d['no_visit']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
	// }
		?>
	</table>
</body>
</html>