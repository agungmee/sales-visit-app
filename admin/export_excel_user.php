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
	header("Content-Disposition: attachment; filename=Data User.xls");
	?>

	<table border="1">
		<tr>
            <th>NO</th>
			<th>NIK</th>
			<th>NAMA</th>
			<th>JABATAN</th>
			<th>WILAYAH</th>
			<th>PASSWORD</th>  
			<th>LEVEL</th>
		</tr>
		<?php 
		// koneksi database
		include "../koneksi.php";

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"SELECT * FROM karyawan");
		$no = 0001;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
                <td><?php echo $no++; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jabatan']; ?></td>
				<td><?php echo $d['wilayah']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['level']; ?></td>
				<td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>