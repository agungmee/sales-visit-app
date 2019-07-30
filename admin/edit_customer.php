<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Sales</title>
</head>

<?php include "../asset/modal/modal.php" ?>
<link rel="stylesheet" href="../asset/css/navbar.css">	
<?php include "../asset/modal/navbar_admin.php" ?>
<link rel="stylesheet" href="../asset/css/navbar.css">

<br>
<br>
<br>

<style type="text/css">
        #frmRegistration {
        margin: 20px auto;
        width: 600px;
        padding: 20px;
        border: 1px solid #ccc;
        background: lightblue;
    }
</style>

<body>
 
	<?php 
	include "../koneksi.php";
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM customer WHERE id_customer ='$id'");
	while($d = mysqli_fetch_array($data)){
	?>
        <div id="frmRegistration">
        <form class="form-horizontal" action="update_customer.php" method="POST">
        <a href="list_customer.php">Kembali</a>
        <br>
        <h3>Edit data</h3>
        <br>
        <div class="form-group">
        <div class="col-sm-10">
        <input type="text" name="idcust" placeholder="ID Customer" readonly="readonly" value="<?php echo $d['id_customer']; ?>">
        </div>
        </div>

        <div class="form-group">
        <div class="col-sm-10">
        <input type="text" name="nama" placeholder="Nama Customer" value="<?php echo $d['nama_customer']; ?>">
        </div>
        </div>

        <div class="form-group">
        <div class="col-sm-10">
        <input type="text" name="wilayah" placeholder="Wilayah" value="<?php echo $d['wilayah_customer']; ?>">
        </div>
        </div>

        <div class="form-group">
        <div class="col-sm-10">
        <select name="sales_id" class="form-control" id="sales_id">
        <option value="">- Pilih -</option>
          <?php 
            $id_sales = mysqli_query($koneksi, "SELECT * FROM karyawan") or die (mysqli_error($koneksi));
            while ($data_id = mysqli_fetch_array($id_sales)) {
              echo '<option value ="'.$data_id['nik'].'">'.$data_id['nama'].'</option>';
            }
          ?>
        </select>
        </div>
        </div>

        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="create" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
        </div>
    <?php } ?>

</body>
</html>