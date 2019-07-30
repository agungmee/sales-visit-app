<!DOCTYPE html>
<html>
<head>
	<title>List Customer</title>
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
				<a button type="button" class="btn btn-success btn-sm btn-block" href="register_customer.php">Tambah</a>
			</div>
		</div>
		<br>
		<br>
    	<div class="row">
			<div class="col-lg">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Customers</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Customer Terdaftar" />
					</div>
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Id Customer</th>
                                <th scope="col">Nama Customer</th>
                                <th scope="col">Wilayah</th>
                                <th scope="col">Sales Id</th>
								<th scope="col">Nama Sales</th>
								<th scope="col">Sales Area</th>
								<th scope="col">Opsi</th>
							</tr>
						</thead>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "SELECT customer.id_customer, customer.nama_customer, customer.wilayah_customer, customer.lat_customer, customer.lon_customer, customer.nik, karyawan.nama,karyawan.wilayah FROM customer INNER JOIN karyawan ON customer.nik=karyawan.nik");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_customer']; ?></td>
				<td><?php echo $d['nama_customer']; ?></td>
				<td><?php echo $d['wilayah_customer']; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['wilayah']; ?></td>
				<td>
					<a style="color: rgb(0,255,0)" href="edit_customer.php?id=<?php echo $d['id_customer']; ?>">EDIT</a> |
					<a style="color: rgb(0,255,0)" href="hapus_customer.php?id=<?php echo $d['id_customer']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>