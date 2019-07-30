<!DOCTYPE html>
<html>
<head>
	<title>Export to Excel</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Kunjungan.xls");
	?>

	<!-- <form action="list_report.php" method="post">
		<input type="date" name="tgl1">
		<input type="date" name="tgl2">
		<input type="submit" name="tampilkan" value="TAMPILKAN">
	</form>				 -->


	<table border="1">
		<tr>
            <th>NO</th>
			<th>ID Kunjungan</th>
			<th>ID Customer</th> 
			<th>ID Nama Customer</th>
			<th>Wilayah Customer</th>
			<th>Tanggal Kunjungan</th>
			<th>ID Sales</th>
			<th>Nama Sales</th>
			<th>Area Sales</th>
			<th>Jarak Kunjung</th>
			<th>Waktu Kunjung</th>
		</tr>
		<?php 
		// koneksi database
		include "../koneksi.php";

		// menampilkan data pegawai
		$data = mysqli_query($koneksi, "SELECT visit.no_visit, visit.tgl_visit, visit.time, visit.distance, visit.id_customer, visit.nik, customer.nama_customer, customer.wilayah_customer, karyawan.nama,karyawan.wilayah FROM visit INNER JOIN customer ON visit.id_customer=customer.id_customer INNER JOIN karyawan ON karyawan.nik=customer.nik");
		$no = 0001;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
				<td><?php echo (string) $no++; ?></td>
				<td><?php echo (string) $d['no_visit']; ?></td>
				<td><?php echo (string) $d['id_customer']; ?></td>
				<td><?php echo $d['nama_customer']; ?></td>
				<td><?php echo $d['wilayah_customer']; ?></td>
				<td><?php echo $d['tgl_visit']; ?></td>
				<td><?php echo (string) $d['nik']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['wilayah']; ?></td>
				<td><?php echo $d['distance']; ?></td>
				<td><?php echo $d['time']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>