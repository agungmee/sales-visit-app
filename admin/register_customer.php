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
$query =mysqli_query($koneksi, "SELECT max(id_customer) as maxKode FROM customer");
$data = mysqli_fetch_array($query);
$noOrder = $data['maxKode'];
$noUrut = (int) substr($noOrder, 9, 3);
$noUrut++;
$char = "CUS";
$tahun=substr($date, 2, 2);
$bulan=substr($date, 5, 2);
$id_Order = $char .$tahun .$bulan . sprintf("%03s", $noUrut);
?>


<div id="frmRegistration">
<form class="form-horizontal" action="proses_register_customer.php" method="POST">
  <h1>Customer Registration</h1>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" name="id_customer" class="form-control" id="id_customer" readonly="readonly" value="<?php echo $id_Order ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" name="nama_customer" class="form-control" id="nama_customer" placeholder="Isikan Nama Customer">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <select type="text" name="wilayah_customer" class="form-control" id="wilayah_customer">
            <option value="Jakarta Utara">Jakarta Utara</option>
            <option value="Jakarta Pusat">Jakarta Pusat</option>
            <option value="Jakarta Timur">Jakarta Timur</option>
            <option value="Jakarta Selatan">Jakarta Selatan</option>
      </select>
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
      <button type="submit" name="create" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
</div>