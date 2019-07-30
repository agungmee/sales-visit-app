<title>Tambah User</title>
<?php require_once('../koneksi.php'); ?>

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
<?php 
//TIMEZONE
date_default_timezone_set("Asia/Jakarta");
$date= date("Y-m-d");

// NOMOR URUT USER
$query =mysqli_query($koneksi, "SELECT max(nik) as maxKode FROM karyawan");
$data = mysqli_fetch_array($query);
$noOrder = $data['maxKode'];
$noUrut = (int) substr($noOrder, 9, 3);
$noUrut++;
$char = "USR";
$tahun=substr($date, 2, 2);
$bulan=substr($date, 5, 2);
$id_Order = $char .$tahun .$bulan . sprintf("%03s", $noUrut);
?>


<div id="frmRegistration">
<form class="form-horizontal" action="proses_register_sales.php" method="POST">
      <div class="col-sm-10">
      <h3>User Registration</h3>
      <div class="form-group">
      <div class="col-sm-10">
          <input type="text" name="niks" class="form-control" id="nik" readonly="readonly" value="<?php echo $id_Order ?>">
        </div>
      </div>
      <div class="form-group">
      <div class="col-sm-10">
          <input type="text" name="namas" class="form-control" id="nama" placeholder="Nama Lengkap">
        </div>
      </div>
      <div class="form-group">
      <div class="col-sm-10">
          <select type="text" name="jabatans" class="form-control" id="jabatan">
            <option value="Admin">Admin</option>
            <option value="Sales">Sales</option>
            <option value="Manager">Manager</option>
            <option value="Supervisor">Suprvisor</option>
          </select>
        </div>
      </div>
      <div class="form-group">
      <div class="col-sm-10">
          <select type="text" name="wilayahs" class="form-control" id="wilayah">
            <option value="Jakarta Utara">Jakarta Utara</option>
            <option value="Jakarta Pusat">Jakarta Pusat</option>
            <option value="Jakarta Timur">Jakarta Timur</option>
            <option value="Jakarta Selatan">Jakarta Selatan</option>
          </select>
        </div>
      </div>
      <div class="form-group">
      <div class="col-sm-10">
          <input type="password" name="passwords" class="form-control" id="pwd" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
      <div class="col-sm-10">
          <select name="levels" class="form-control" id="level">
            <option value="Admin">Admin</option>
            <option value="Sales">Sales</option>
          </select>
      </div>
      </div>
      <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="create" class="btn btn-success">Submit</button>
        </div>
  </div>
  </div>
</form>
</div>