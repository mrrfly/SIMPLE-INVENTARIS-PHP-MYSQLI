<?php
include_once 'desain/kepala.php';
$no_inventaris = isset($_GET['no_inventaris'])? $_GET['no_inventaris']:'';
$query3 = "SELECT * FROM inventaris WHERE no_inventaris='$no_inventaris'";
$sql3 = mysqli_query($koneksi, $query3);
$data3 = mysqli_fetch_array($sql3);
$id_jenis = $data3['id_jenis'];
$id_ruang = $data3['id_ruang'];
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Barang</h4>
            <p class="card-description">
              <a href="data_barang.php" class="btn btn-lg btn-inverse-danger">Kembali</a>
            </p>

            <form class="forms-sample" method="post" action="proses_editbarang.php">

              <input type="hidden" name="no_inventaris">

              <div class="form-group">
                <label>Nama</label>
                <input value="<?php echo $data3['nama_barang'];?>" name="nama_barang" type="text" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Jenis</label>
                <select name="id_jenis" class="js-example-basic-single" style="width:100%">
                  <?php
										$query5 = "SELECT * FROM jenis_inventaris WHERE id_jenis='$id_jenis'";
										$sql5 = mysqli_query($koneksi, $query5);
										$exe = mysqli_fetch_array($sql5);
										?>
										<option value="<?php echo $exe['id_jenis'];?>"><?php echo $exe['nama_jenis'];?></option>
										<?php
										$query4 = "SELECT * FROM jenis_inventaris";
										$exe4 = mysqli_query($koneksi, $query4);
										while ($jenis=mysqli_fetch_array($exe4)){
											echo '<option value='.$jenis["id_jenis"].'>'.$jenis["nama_jenis"].'</option>';
										}
										?>
                </select>
              </div>

              <div class="form-group">
                <label>Kondisi</label>
                <input value="<?php echo $data3['kondisi'];?>" name="kondisi" type="text" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Keterangan</label>
                <textarea name="ket_barang" class="form-control" required><?php echo $data3['ket_barang'];?></textarea>
              </div>

              <div class="form-group">
                <label>Ruang</label>
                <select name="id_ruang" class="js-example-basic-single" style="width:100%;">
                  <?php
										$query6 = "SELECT * FROM ruang WHERE id_ruang='$id_ruang'";
										$sql6 = mysqli_query($koneksi, $query6);
										$exe2 = mysqli_fetch_array($sql6);
										?>
										<option value="<?php echo $exe2['id_ruang'];?>"><?php echo $exe2['nama_ruang'];?></option>
										<?php
										$query2 = "SELECT * FROM ruang";
										$exe2 = mysqli_query($koneksi, $query2);
										while ($ruang=mysqli_fetch_array($exe2)){
											echo '<option value='.$ruang["id_ruang"].'>'.$ruang["nama_ruang"].'</option>';
										}
										?>
                </select>
              </div>

              <div class="form-group">
                <label>Stok</label>
                <input value="<?php echo $data3['stock'];?>" name="stock" type="number" class="form-control" required>
              </div>

              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required>
                  Setuju?
                </label>
              </div>

              <button name="edit" type="submit" class="btn btn-primary mr-2">Edit</button>
              <a href="data_barang.php" class="btn btn-inverse-danger">Kembali</a>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

<?php
include_once 'desain/kaki.php';
?>
