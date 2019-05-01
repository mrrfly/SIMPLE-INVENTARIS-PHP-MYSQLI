<?php
include_once 'desain/kepala.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Jenis Barang</h4>
            <p class="card-description">
              <a href="data_barang.php" class="btn btn-lg btn-inverse-danger">Kembali</a>
            </p>

            <form class="forms-sample" method="post" action="proses_tambahjenis.php">

              <div class="form-group">
                <label>ID Jenis</label>
                <input name="id_jenis" type="text" class="form-control" placeholder="Masukkan: a_(nomor)" required>
              </div>

              <div class="form-group">
                <label>Nama Jenis</label>
                <input name="nama_jenis" type="text" class="form-control" placeholder="Misal: Material/Alat/DLL" required>
              </div>

              <div class="form-group">
                <label>Keterangan</label>
                <input name="ket_jenis" type="text" class="form-control" placeholder="Dipinjam/Diberikan/DLL" required>
              </div>

              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required>
                  Setuju?
                </label>
              </div>

              <button name="input" type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="data_jenis.php" class="btn btn-inverse-danger">Kembali</a>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php
  include_once 'desain/kaki.php';
  ?>
