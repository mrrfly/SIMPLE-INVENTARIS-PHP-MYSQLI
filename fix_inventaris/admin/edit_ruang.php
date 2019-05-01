<?php
include_once 'desain/kepala.php';
$id_ruang = isset($_GET['id_ruang'])? $_GET['id_ruang']:'';
$query9 = "SELECT * FROM ruang WHERE id_ruang='$id_ruang'";
$sql9 = mysqli_query($koneksi, $query9);
$data9 = mysqli_fetch_array($sql9);
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Barang</h4>
            <p class="card-description">
              <a href="data_ruang.php" class="btn btn-lg btn-inverse-danger">Kembali</a>
            </p>

            <form class="forms-sample" method="post" action="proses_editruang.php">

              <input type="hidden" name="id_ruang">

              <div class="form-group">
                <label>Nama Ruang</label>
                <input value="<?php echo $data9['nama_ruang'];?>" name="nama_ruang" type="text" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Kode Ruang</label>
                <input value="<?php echo $data9['kode_ruang'];?>" name="kode_ruang" type="text" class="form-control" required>
              </div>

              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required>
                  Setuju?
                </label>
              </div>

              <button name="edit" type="submit" class="btn btn-primary mr-2">Edit</button>
              <a href="data_ruang.php" class="btn btn-inverse-danger">Kembali</a>
            </form>
            
          </div>
        </div>

      </div>
    </div>
  </div>

<?php
include_once 'desain/kaki.php';
?>
