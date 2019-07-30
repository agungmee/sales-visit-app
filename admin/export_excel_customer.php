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
	header("Content-Disposition: attachment; filename=Data Customer.xls");
	?>

	<table border="1">
		<tr>
            <th>NO</th>
			<th>Kode Customer</th>
			<th>Nama Customer</th>
			<th>Wilayah</th>
            <th>Sales ID</th>
		</tr>
		<?php 
		// koneksi database
		include "../koneksi.php";

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"SELECT * FROM customer");
		$no = 0001;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
                <td><?php echo $no++; ?></td>
				<td><?php echo $d['id_customer']; ?></td>
				<td><?php echo $d['nama_customer']; ?></td>
                <td><?php echo $d['wilayah_customer']; ?></td>
                <td><?php echo $d['sales_id']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>