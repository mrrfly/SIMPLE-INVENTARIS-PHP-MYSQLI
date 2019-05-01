<?php
include_once 'desain/kepala.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Ruang</h4>
            <p class="card-description">
              <a href="data_barang.php" class="btn btn-lg btn-inverse-danger">Kembali</a>
            </p>

            <form class="forms-sample" method="post" action="proses_tambahruang.php">

                <input name="id_ruang" type="hidden" class="form-control" required>

              <div class="form-group">
                <label>Nama Ruang</label>
                <input name="nama_ruang" type="text" class="form-control" placeholder="Misal: Raung Penyimpanan 5" required>
              </div>

              <div class="form-group">
                <label>Kode Ruang</label>
                <input name="kode_ruang" type="text" class="form-control" placeholder="Misal: A3" required>
              </div>

              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required>
                  Setuju?
                </label>
              </div>

              <button name="input" type="submit" class="btn btn-primary mr-2">Submit</button>
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
