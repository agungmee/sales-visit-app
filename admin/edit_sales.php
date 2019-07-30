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
	$data = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE nik ='$id'");
	while($d = mysqli_fetch_array($data)){
	?>
        <div id="frmRegistration">
        <form class="form-horizontal" action="update_user.php" method="POST">
        <a href="list_sales.php">Kembali</a>
        <br>
        <h3>Edit data</h3>
        <br>
        <div class="form-group">
        <div class="col-sm-10">
        <input type="text" name="nik" placeholder="Nik" readonly="readonly" value="<?php echo $d['nik']; ?>">
        </div>
        </div>

        <div class="form-group">
        <div class="col-sm-10">
        <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $d['nama']; ?>">
        </div>
        </div>

        <div class="form-group">
        <div class="col-sm-10">
        <select type="text" name="jabatan" class="form-control" id="jabatan">
            <option value="Admin">Admin</option>
            <option value="Sales">Sales</option>
            <option value="Manager">Manager</option>
            <option value="Supervisor">Suprvisor</option>
        </select>
        </div>
        </div>

        <div class="form-group">
        <div class="col-sm-10">
        <select type="text" name="wilayah" class="form-control" id="wilayah">
            <option value="Jakarta Utara">Jakarta Utara</option>
            <option value="Jakarta Pusat">Jakarta Pusat</option>
            <option value="Jakarta Timur">Jakarta Timur</option>
            <option value="Jakarta Selatan">Jakarta Selatan</option>
        </select>
        </div>
        </div>

        <div class="form-group">
        <div class="col-sm-10">
        <input type="password" name="password" placeholder="Password" value="<?php echo $d['password']; ?>">
        </div>
        </div>

        <div class="form-group">
        <div class="col-sm-10">
        <select name="level" class="form-control" id="level">
            <option value="Admin">Admin</option>
            <option value="Sales">Sales</option>
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