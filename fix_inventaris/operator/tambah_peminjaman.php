<?php
include_once 'desain/kepala.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Peminjaman</h4>
            <p class="card-description">
              <a href="data_barang.php" class="btn btn-lg btn-inverse-danger">Kembali</a>
            </p>

            <?php
    				$no_inventaris = isset($_GET['no_inventaris'])? $_GET['no_inventaris']:'';
    				$query = "SELECT * FROM inventaris WHERE no_inventaris='$no_inventaris'";
    				$sql = mysqli_query($koneksi, $query);
    				$data = mysqli_fetch_array($sql);
    				?>

            <form class="forms-sample" method="post" action="proses_tambahpeminjaman.php">

              <div class="form-group">
                <label>Nama Barang</label>
                <input value="<?php echo $data['nama_barang']; ?>" type="text" class="form-control" readonly required>
              </div>

              <div class="form-group">
                <label>Nama Peminjam</label>
                <select name="nip" class="js-example-basic-single" style="width:100%;">
                  <?php
										$query2 = "SELECT * FROM peminjam";
										$exe2 = mysqli_query($koneksi, $query2);
										while ($peminjam=mysqli_fetch_array($exe2)){
											echo '<option value='.$peminjam["nip"].'>'.$peminjam["nama_peminjam"].'</option>';
										}
									?>
                </select>
              </div>

              <div class="form-group">
                <label>Jumlah</label>
                <input name="jml" type="number" class="form-control" placeholder="Misal: 24" required>
              </div>
								<input type="hidden" name="no_inventaris" value="<?php echo $no_inventaris; ?>">

              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required>
                  Setuju?
                </label>
              </div>

              <button name="input" type="submit" class="btn btn-primary mr-2">Submit</button>
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
